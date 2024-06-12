<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MembersController extends Controller
{

    public function index()
    {
        $data = DB::table('members')->where('associate_id','!=', 'NULL')->orderBy('date_of_join','DESC')->get();
        return view('members.list')->with('data', $data);
    }


    public function register(Request $request)
    {
         
        $request->validate([
            'member_code'=>['required','unique:members'],
          'email'=>['required', 'unique:members'],
          'contact'=>['required', 'unique:members']
        ]);

        $pin = $request->member_code;
        $name = $request->name;
        $packages = $request->packages;
        $sponser_id = $request->sponser_id;
        $sponser_name = $request->sponser_name;
        $position = $request->position;

        $dob = $request->dob;
        $gender = $request->gender;
        $marital_sts = $request->marital_status;
        $contact = $mobile_no = $request->contact;
        $email = $request->email;
        $send_sms = $request->send_sms;

        $id = DB::table('members')->where('member_code', $sponser_id)->get();
         
         $prevId = $id[0]->id;
          $links = $id[0]->member_array;
         
         
        $result = DB::table('members')->insert([
            'name'=>$name,
            'full_name'=>$name,
            'member_code'=>$pin,
            'packages'=>$packages,
            'associate_id'=>$sponser_id,
            'sponser_id'=>$sponser_id,
            'name'=>$name,
            'email'=>$email,
            'dob'=>$dob,
            'gender'=>$gender,
            'marital_status'=>$marital_sts,
            'contact'=>$mobile_no,
            'password'=>bcrypt(12345),
            'pass_word'=>'12345',
            'user_type'=>'U', 
            'section'=>$position,
            'member_array'=>$links.','.$prevId,

        ]);

       

        DB::table('pin_list')->where('purchased_pin', $pin)->update([
            'pin_status'=>'U',
        ]);

        if($result){
            return view('frontend.view-password')->with('message', 'Registration Completed')->with([
                'name'=>$name,
                'email'=>$email,
                'member_code'=>$pin,
                'contact'=>$contact,
                'password'=>'12345',
            ]);
        }else {
            return back()->with('message', 'error');
        }

    }


    public function edit_profile($id)
    {
         
        $data = DB::table('members')->where('member_code', $id)->get();
        return view('capital.edit-profile')->with('data', $data);
    }
    public function update_profile(Request $request)
    {   
          
       
        $table_id = $request->table_id;
        $name = $request->name;
        $dob = $request->dob;
        $fh = $request->father_husband_name;
        $gender = $request->gender;
        $marital_sts = $request->marital_status;
        $address =$request->address;
        $state = $request->state;
        $district = $request->district;
        $city = $request->city;
        $pincode = $request->pincode;
        $contact = $request->contact;
        $email = $request->email;
        $nominee_name = $request->nominee_name;
        $relation = $request->relation;
        $trans_password = $request->transaction_password;

        $result = DB::table('members')->where('id', $table_id)->update([
            'name'=>$name,
            'dob'=>$dob,
            'father_husband_name'=>$fh,
            'gender'=>$gender,
            'marital_status'=>$marital_sts,
            'address'=>$address,
            'city'=>$city,
            'state'=>$state,
            'district'=>$district,
            'pincode'=>$pincode,
            'contact'=>$contact,
            'email'=>$email,
            'nominee_name'=>$nominee_name,
            'relation'=>$relation,
            'transaction_password'=>$trans_password,
            'updated_at'=>date('d-m-Y').'/'.date('H:i:s'),
        ]);
        if($result){
            return back()->with('message', 'Profile Updated successfully');
        }
         else {
            return back()->with('message', 'error');
         }
    }

    public function upload_document(Request $request)
    {

          
        // Validate the request
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        // Handle the file upload
        if ($request->hasFile('photo') || $request->hasFile('pancard') || $request->hasFile('signature')) {
            $file1 = $request->file('photo');
            $filename1 = time() . '.' . $file1->getClientOriginalExtension();
            $path1 = $file1->storeAs('photos', $filename1, 'public');

            // You can also store the file information in the database if needed 
        
            // $file2 = $request->file('pancard');
            // $filename2 = time() . '.' . $file2->getClientOriginalExtension();
            // $path2 = $file2->storeAs('pancard', $filename2, 'public');

            // You can also store the file information in the database if needed 
         
            // $file3 = $request->file('signature');
            // $filename3 = time() . '.' . $file3->getClientOriginalExtension();
            // $path3 = $file3->storeAs('signature', $filename3, 'public');

            // You can also store the file information in the database if needed

            
            
            DB::table('member_photo')->insert([
                'member_code'=>auth()->guard('web')->user()->member_code,
                'photo'=>$filename1,
                

            ]);

            DB::table('members')->where('member_code', auth()->guard('web')->user()->member_code)->update([
                'member_code'=>auth()->guard('web')->user()->member_code,
                'image'=>$filename1,
            ]);

            return back()->with('message', 'Photo uploaded successfully')->with('path', $path1);
        }


        return back()->with('message', 'Photo upload failed');
    

    }


    public function qrcode()
    {
        return view('pins.qrcode');
    }

    public function store_qrcode(Request $request)
    {
        return view('maintenance');
    }

    public function direct_associates()
    {
        $code = auth()->guard('web')->user()->member_code;
        $data = DB::table('members')->where('sponser_id', $code)->get();
        return view('members.direct-associates')->with('data', $data);
    }

    public function down_line()
    {
        
        $member_code = auth()->guard('web')->user()->member_code;
        $ma = DB::table('members')->where('sponser_id', $member_code)->get();
        $like = $ma[0]->member_array;

        $data = DB::table('members')->where('member_array', 'like','%'.$like.'%')->get();
        return view('members.down-line')->with('data', $data);
    }

    public function bank_details()
    {
        $data = DB::table('bank_accounts')->where('account_holder_code', auth()->guard('web')->user()->member_code)->get();
        return view('members.bank-details')->with('data', $data);
    }

    public function add_account(Request $request)
    {
         

        $id = $request->id;
        $name = $request->bank_name;
        $branch = $request->branch_name;
        $account_name = $request->account_name;
        $account_no = $request->account_no;
        $ifsc = $request->ifsc_code;
        $pan = $request->pan_no;

        $result = DB::table('bank_accounts')->insert([
            'account_name'=>$account_name,
            'account_number'=>$account_no,
            'account_holder_code'=>$id,
            'bank_name'=>$name,
            'branch_name'=>$branch,
            'ifsc'=>$ifsc,
            'panno'=>$pan,

        ]);
        if($result){
            return back()->with('message', 'Account Added');
        }
    }
    public function destroy($id)
    {
        //
    }
}
