<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class form1Controller extends Controller{

    function index(){
        return view('form1.index');
    }

  

   function form1Submit(Request $request)
{
   // dd($request);

    //add conditions of inputs (valiidate request)
   $request->validate([
    'name' =>'required |string|min:3|max:20', //add conditions |
    'email' =>'required|email ',
    'age' =>'required |integer',
    'city' =>'required',



   ]);

}

}


?> 