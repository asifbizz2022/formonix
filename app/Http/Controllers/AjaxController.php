<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AjaxController extends Controller
{

    public function view_pin()
    {
         $data = DB::table('user_pin')->join('courses', 'courses.course_code', '=', 'user_pin.course_code')->get();
         echo json_encode($data);
    }

    public function get_course_details(Request $request)
    {
        $id = $request->id;
        $data = DB::table('courses')->where('course_code', $id)->get();
        echo json_encode($data);
    }

    public function requested_pin()
    {
        $data = DB::table('user_pin')->get();
        echo json_encode($data);
    }

    public function get_package(Request $request)
    {
        $id = $request->id; 
        $data = DB::table('pin_list') 
        ->where('purchased_pin', $id) 
        ->get(); 

        $member_code = $data[0]->user_code;
        $course_code = $data[0]->course_code;
        
        // print "<pre>";
        // print_r($data); 
        // exit();
         
        $name = DB::table('members')->where('member_code', $member_code)->get();
        $course = DB::table('courses')->where('course_code', $course_code)->get();

        if($data){
          echo json_encode(['data'=>$data , 'member'=>$name ,'course'=>$course]);
        }else {
          echo 'Invalid pin';
        }  
    } 

    public function sponser(Request $request)
    {
        $id =$request->id;
        $data = DB::table('members')->where('member_code', $id)->get();
        echo json_encode(['data'=>$data]);
    }


     

    public function get_member(Request $request)
    {
        $id = $request->id;

        if($id == null){
             $data = DB::table('members')->where('member_code', auth()->guard('web')->user()->member_code)->get();
        } else {
             $data = DB::table('members')->where('member_code',$id)->get();
        }
       
        echo json_encode([
            'member'=>$data,
        ]);
    }
    public function get_sponser(Request $request)
    {
          $id = $request->id;

        $data = DB::table('members')->where('sponser_id', $id)->get();
        echo json_encode([
            'sponser'=>$data,
        ]);
    }

}
