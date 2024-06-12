<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class SupportController extends Controller
{
    public function index()
    {
      return view('support');
    }
    public function leave_query(Request $request){
     
      $query = $request->query;
      $name = $request->name;
      $email = $request->email;
      $contact = $request->contact;
      $result = DB::table('query')->insert([
        'name'=>$name,
        'email'=>$email,
        'contact'=>$contact,
        'query'=>$query,
        'date'=>date('d-m-Y'),
      ]);
      if($result){
        return back()->with('message', 'Thank you for your intrest we will contact You soon');
      }
    }
}
