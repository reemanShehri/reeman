<?php

namespace App\Http\Controllers;

use Illuminate\Http\A;

class SiteController extends Controller
{
    //
  function index(){
    $data=[6,8,9,6];
    $age=19;
   


   return view('site1.index',compact('data','age')); // easier than with
    // return view('index')->with('data',$data); // name of view is index
   } 
  function serve(){
   
    return view('serve'); // name of view is index
  }



//   function about(){
//     return view('about');
//   }


function contact(){
    return ('contact');
}

function about(){
    // return view('site1.about');
    return 'here';
}


function services(){
    return ('services');
}
}