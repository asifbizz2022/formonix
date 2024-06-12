<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class FrontEndController extends Controller
{
    
    public function index()
    {
        return view('frontend.index');
    }

     
    public function register_form()
    {
        return view('frontend.register');
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
            'member_array'=>$prevId.','.$links,

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
 
    public function login()
    {
        return view('frontend.login');
    }

    
    public function login_check(Request $request)
     {
        $email = $request->email;
        $contact = $request->contact;
        $password = $request->password; 
        
        if(Auth::guard('web')->attempt(['contact'=>$contact, 'password'=>$password]))
        {    
            auth()->guard('web')->user()->user_code; 
            return redirect('capital/dashboard');
        }
        else {
            return back()->with('message', 'Invalid Credentials');
        } 
     }
      public function logout()
     {
       
         Auth::guard('web')->logout();
        return redirect('/'); 

     }
  
 
        
            
}
