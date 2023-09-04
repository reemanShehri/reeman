<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index()
    {
        $data = [1, 2, 3, 4];
         $age = 19 ;
      // return view('index')->with('data' , $data)->with('age' , $age);
      /* return view('index' , [
        'data' => $data ,
        'age' => $age
      ]);*/
      return view('site1.index' , compact('data' , 'age'));

    }

    function about()
    {
        return view('site1.about');
    }

    function services()
    {
        return view('site1.services') ;
    }

    function contact()
    {
        return view('site1.contact') ;
    }
}