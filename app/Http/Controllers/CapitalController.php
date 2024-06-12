<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CapitalController extends Controller
{
    public function dashboard()
    {
        return view('capital.dashboard');
    }
    public function geneology()
    {
        return view('capital.geneology');
    }
    
    public function edit_bank_account($id)
    {
        $code  =$id;
       
        $data = DB::table('members')->where(['member_code'=> $code ])->get();
        $bank = DB::table('member_bank_account')->where(['member_code'=> $code ])->get();
        return view('capital.edit-bank-account')->with('data', $data)->with('bank', $bank);
        
    }
    public function update_bank_account(Request $request){
        
        $code =  $request->member_code;
        $bank_name = $request->bank_name;
        $account_no = $request->account_no;
        $branch_name = $request->branch_name;
        $ifsc = $request->ifsc;
        $pan = $request->pan_no;
        $transaction_password = $request->transaction_password;
        $result = DB::table('members')->where('member_code', $code)->update([
            'bank_name'=>$bank_name,
            'account_no'=>$account_no,
            'branch_name'=>$branch_name,
            'ifsc'=>$ifsc,
            'pan_no'=>$pan,
            'transaction_password'=>$transaction_password,
        ]);
        DB::table('member_bank_account')->where('member_code', $code)->update([
            'bank_name'=>$bank_name,
            'account_no'=>$account_no,
            'branch_name'=>$branch_name,
            'ifsc'=>$ifsc,
            'pan_no'=>$pan,
            'transaction_password'=>$transaction_password,
        ]);
        if($result){
            return back()->with('message', 'Profile Updated successfully');
        }
         else {
            return back()->with('message', 'error');
         }

    }

    public function upload_form()
    {
         
        return view('capital.upload-document');
    }
    public function upload_document(Request $request)
    {
          
        // Validate the request
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pancard' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload
        if ($request->hasFile('photo') || $request->hasFile('pancard') || $request->hasFile('signature')) {
            $file1 = $request->file('photo');
            $filename1 = time() . '.' . $file1->getClientOriginalExtension();
            $path1 = $file1->storeAs('photos', $filename1, 'public');

            // You can also store the file information in the database if needed 
        
            $file2 = $request->file('pancard');
            $filename2 = time() . '.' . $file2->getClientOriginalExtension();
            $path2 = $file2->storeAs('pancard', $filename2, 'public');

            // You can also store the file information in the database if needed 
         
            $file3 = $request->file('signature');
            $filename3 = time() . '.' . $file3->getClientOriginalExtension();
            $path3 = $file3->storeAs('signature', $filename3, 'public');

            // You can also store the file information in the database if needed

            
            
            DB::table('member_photos')->insert([
                'member_code'=>auth()->guard('web')->user()->member_code,
                'photo'=>$filename1,
                'pan'=>$filename2,
                'signature'=>$filename3,

            ]);

            return back()->with('message', 'Photo uploaded successfully')->with('path', $path1);
        }


        return back()->with('message', 'Photo upload failed');
    

    }
    public function change_password($id)
    {
        $data = DB::table('members')->where('member_code', $id)->get();
        return view('capital.change-login-password')->with('data', $data);

    }
    public function update_password(Request $request)
    {   
        $code = $request->code;
        $request->validate([
        'password' => ['required', 'string', 'min:3', 'confirmed'], 
        ]);

        $result = DB::table('members')->where('member_code', $code)->update([
            'password'=>bcrypt($request->password),
        ]);
        if($result){
            return back()->with('message', 'Login Password Changed successfully');
        }
        else {
            return back()->with('message', 'Error ');
        }
    }

    public function change_txn_password($id)
    {
        $data = DB::table('members')->where('member_code', $id)->get();
        return view('capital.change-txn-password')->with('data', $data);

    }
    public function update_txn_password(Request $request)
    {   
        $code = $request->code;
        $request->validate([
        'password' => ['required', 'string', 'min:3', 'confirmed'], 
        ]);

        $result = DB::table('members')->where('member_code', $code)->update([
            'transaction_password'=>bcrypt($request->password),
        ]);
          DB::table('member_bank_account')->where('member_code', $code)->update([
            'transaction_password'=>bcrypt($request->password),
        ]);
        if($result){
            return back()->with('message', 'Transaction Password Changed successfully');
        }
        else {
            return back()->with('message', 'Error ');
        }
    }
     public function new_business_details()
    {
        echo $code = auth()->guard('web')->user()->member_code;
        return view('capital.new-business-details');
    }
     public function welcome_letter()
    {

          $code = auth()->guard('web')->user()->member_code;
        $data = DB::table('members')->where('member_code', $code)->get();
        return view('capital.welcome-letter')->with('data', $data);
    }
    public function tree_structure()
    {
        $code = auth()->guard('web')->user()->member_code;
        return view('maintenance');
    }

    public function direct_members()
    {
        return view('maintenance');
    }
    public function list_join_pins()
    {
        return view('maintenance');
    }

    public function payout_summary()
    {
        return view('maintenance');
    }

    public function send_messages()
    {
        return view('maintenance');
    }
    public function view_messages()
    {
        return view('maintenance');
    }

    public function plot_booking()
    {
        return view('maintenance');
    }
    public function seminar_meeting()
    {
        return view('maintenance');
    }

    public function down_line()
    {
        return view('maintenance');
    }
   
    
}

