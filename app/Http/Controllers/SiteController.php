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
    // inner views  name of folder in sourve / name of file 
    // when we want the output controller just transfer to views , so we write name of file that exists in route web as (site2/index )

    function services()
    {
        return view('site1.services') ;
    }

    function contact()
    {
        return view('site1.contact') ;
    }

    function home()
    {
        return view('site2.home') ;
    }
}