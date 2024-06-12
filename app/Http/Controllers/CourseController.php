<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public function list()
    {
        $data = DB::table('courses')->orderBy('course_id', 'DESC')->get();
        return view('course.list')->with('data' , $data);
    }
    public function purchased_course()
    {
        $code = auth()->guard('web')->user()->member_code;

        $data = DB::table('pin_list')->where('user_code', $code)->select('course_code')->groupBy('course_code')->get();
        
        
        return view('course.purchased')->with('data', $data);
    }
    public function add_course()
    {
        $data = DB::table('courses')->get();
        return view('course.add-course')->with('data', $data);
    }
    public function save_course(Request $request)
    {
        $name = $request->course_name;
        $rate = $request->rate;
        $gst = $request->gst;
        $total = $gst+$rate;


        $unique_id = DB::table('courses')->orderBy('course_id', 'desc')->first();
            $number = str_replace($rate, '', $unique_id ? $unique_id->course_id  : 0);
        if ($number == 0) {
            $number = "CRS".'_'.'0000001';
        } else {
            $number = "CRS".'_'.sprintf("%06d", (int)$number + 1);
        }

        $result = DB::table('courses')->insert([
            'course_code'=>$number,
            'course_name'=>$name,
            'rate'=>$rate,
            'course_status'=>'A',
            'gst'=>$gst,
            'total'=>$total,

        ]);
        if($result){
            return back()->with('message', 'Course Added Successfully');
        }
        else {
            return back()->with('mesaage','Error');
        }
    }
    public function edit_course($id)
    {
        $id = $id;
       $data = DB::table('courses')->where('course_id', $id)->get();
       return view('course.edit-course')->with('data', $data);
    }
    public function update_course(Request $request)
    {

         $table_id = $request->table_id;
         $name = $request->name;
         $code = $request->code;
         $rate = $request->rate;
         $gst = $request->gst;
         $total = $gst + $rate;
         $status = $request->status;

         $total = DB::table('courses')->where('course_id', $table_id)->update([
            'course_name'=>$name, 
            'course_code'=>$code,
            'rate'=>$rate,
            'gst'=>$gst,
            'total'=>$total,
            'course_status'=>$status,
         ]);

         if($total){
            return redirect('capital/add/course')->with('message', 'Course Updated');
         }else {
            return redirect('capital/add/course')->with('message', 'eror');
         }
    }
    public function delete_course($id)
    {
        $id;
       $result = DB::table('courses')->where('course_id', $id)->delete();
        if($result){
            return redirect('capital/add/course')->with('message', 'Course Deleted');
         }else {
            return redirect('capital/add/course')->with('message', 'eror');
         }
    }
    public function course_booked()
    {
        $code = auth()->guard('web')->user()->member_code;
        $c = DB::table('pin_list')->where('user_code', $code)->get();

        $courseCode = $c[0]->course_code;
        
        $course = DB::table('pin_list')->select('course_code')->distinct('course_code')->where('course_code', $courseCode)->get();
        return view('course.purchased')->with('data', $course);
    }
    public function team_course_booked()
    {
        return view('maintenance');
    }
      public function left_course_booked()
    {
        return view('maintenance');
    }
      public function right_course_booked()
    {
        return view('maintenance');
    }
    public function view_course($id)
    {
        echo $id;
    }
}
