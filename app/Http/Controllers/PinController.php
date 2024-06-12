<?php

namespace App\Http\Controllers;

use App\Models\Pin;
use Illuminate\Http\Request;
use DB;
class PinController extends Controller
{

    public function index()
    {
        return view('capital.view-pin');
    }


    public function display_pin(Request $request)
    {
        $pin = $request->pin;
        $data = DB::table('pin_list')->where('pin_status', 'A')->get();
        echo json_encode($data);
    }
 

    public function change_status(Request $request)
    {
        $id = $request->id;
        $status = $request->sts; 

        $data = DB::table('pin_list')->where('user_code', $id)->update([
            'req_status'=>$status,
        ]);
        if($data){
            return back()->with('message', 'Pin Status Changed');
        }
        else {
            return back()->with('message', 'error');
        }
    }

    public function pin_request()
    {
        $data = DB::table('pin_list')->select('user_code')->distinct() 
        ->orderBy('id','DESC')->get();
        
        return view('capital.view-pin-request')->with('data', $data);
    }

    public function buy_pin_form()
    {
        $data = DB::table('pin_list')
        ->join('courses', 'courses.course_code', '=', 'pin_list.course_code')
        ->where('user_code', auth()->guard('web')->user()->member_code)
        ->where('req_status', '!=', 'A')
        ->get();
        
        return view('pins.buy-pin')->with('data', $data);
    }

    public function buy_pin(Request $request)
    {
          foreach($request->no_of_pins as $key=>$value){
            for ($i=1; $i <= $value ; $i++) { 
                $result = DB::table('pin_list')->insert([
                    'user_code'=>auth()->guard('web')->user()->member_code ,
                    'course_code'=>$request->course_code[$key],
                    'no_of_pins'=>$request->no_of_pins[$key],  
                    'amount'=>$request->amount[$key],
                    'req_status'=>'P',
                    'purchased_pin'=>'FC'.rand(000000,999999),
                    'purchased_pin_cost'=>$request->amount[$key],
                    'pin_status'=>'N',
                    'date'=>date('d-m-Y'),
                    'paid_status'=>0,
                ]);

                DB::table('pin_request')->insert([
                    'user_code'=>auth()->guard('web')->user()->member_code ,
                    'course_id'=>$request->course_code[$key],
                    'no_of_pins'=>$request->no_of_pins[$key],
                    'amount'=>$request->amount[$key]*$request->no_of_pins[$key],
                    'req_status'=>'P',
                    'pin'=>'FC'.rand(000000,999999),
                    'date'=>date('d-m-Y'), 

                ]);
                 
            }
            
          } 

        
         if($result){
                  return redirect('qrcode')->with('message','Pin Request submitted');
            }
            else {
              return back()->with('message','Pin Request submitted');
            } 

    }

    public function transfer_pin_page()
    {

        $user_code = auth()->guard('web')->user()->member_code;
        $pin = DB::table('pin_list')->where('user_code', $user_code)->where(['pin_status'=>'N' ,'req_status'=>'A'])->where('pin_status','!=','T')->get();
        $user = DB::table('members')->get();
        $transfer = DB::table('pin_list')->where('user_code', $user_code)->where('pin_status', 'T')->orderBy('id', 'DESC')->get();
        return view('pins.transfer-pin')->with([
            'pin'=>$pin,
            'user'=>$user,
            'transfer'=>$transfer,
        ]);

    }

    public function transfer_pin(Request $request)
    {   

        $user_code = auth()->guard('web')->user()->member_code;
        $pin = $request->pin;
        $no_of_pins = $request->no_of_pins;
        $transfer_to = $request->transfer_to;

        $get = DB::table('pin_list')->where('user_code', $user_code)->where('purchased_pin', $pin)->get();
        $oldnum = $get[0]->no_of_pins;
        $newnum = $no_of_pins;

        print_r($request->pin);
        foreach($request->pin as $key=>$value)
        {
           
            
            DB::table('pin_list')->where('user_code', $user_code)->where('purchased_pin', $pin[$key])->update([
                 
                'transfer_by'=>$user_code, 
                'transfer_pin'=>$pin[$key],
                'transfer_to'=>$transfer_to,
                'transfer_pin_date'=>date('d-m-Y'),
                'pin_status'=>'T',
                'paid_status'=>'P',
            ]); 

            $result = DB::table('pin_transfer_history')->insert([
                    'user_code'=>$user_code, 
                    'transfer_by'=>$user_code, 
                    'transfer_pin'=>$pin[$key],
                    'transfer_to'=>$transfer_to,
                    'transfer_pin_date'=>date('d-m-Y'),
                    'pin_status'=>'T',
                    'paid_status'=>'P',
            ]);   
        } 
     

        if($result){
         return back()->with('message', 'Pin Transfered');
        }
        else {
         return back()->with('message', 'Error');
        }

    }

    public function view_used_pins()
    {
        $user_code = auth()->guard('web')->user()->member_code;
        $data = DB::table('pin_list')->where('user_code', $user_code)->where('pin_status','=', 'U')->where('req_status', 'A')->orderBy('id' , 'DESC')->get();
        return view('pins.view-used-pins')->with('data', $data);
    }

    public function view_unused_pins()
    {
        $user_code = auth()->guard('web')->user()->member_code;
        $data = DB::table('pin_list')->where('user_code', $user_code)->where('pin_status', 'N')->where('req_status', 'A')->orderBy('id' , 'DESC')->get();
        return view('pins.view-unused-pins')->with('data', $data);
    }

    public function view_all_pins()
    {
        $user_code = auth()->guard('web')->user()->member_code;
        $data = DB::table('pin_list')->where('user_code', $user_code)->where('pin_status','!=','T')->where('req_status', 'A')->orderBy('id' , 'DESC')->get();
        return view('pins.view-all-pins')->with('data', $data);
    }

    public function view_transfered_pins()
    {
        $user_code = auth()->guard('web')->user()->member_code;
        $data = DB::table('pin_list')->where('user_code', $user_code)->where('pin_status', 'T')->where('req_status', 'A')->orderBy('id' , 'DESC')->get();
        return view('pins.view-transfered-pins')->with('data', $data);
    }

    public function received_pins()
    {
        echo $code = auth()->guard('web')->user()->member_code;

        $data = DB::table('pin_list')->where('transfer_to', $code)->get();
        return view('pins.received-pins')->with('data', $data);
    }


}
