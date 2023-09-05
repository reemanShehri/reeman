<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Site3Controller extends Controller{

    function index() {
        return view('site2.index');
   }

   function about()  {
   return view('site2.about') ;
   }

   function post_msg(Request $request)
{
    $name=$request->name;
    $ameil=$request->email;
    $msg=$request->msg;
    // return redirct()->route('view');

    return view('site2.req' ,compact('msg','email','name'));

}



function view(){
    return view('site2.req');
}


}

?>