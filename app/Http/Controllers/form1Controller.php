<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class form1Controller extends Controller{

    function index(){
        return view('form1.index');
    }

  

   function form1Submit(Request $request)
{
   // dd($request);
//    dd used to فحص

    //add conditions of inputs (valiidate request)
   $request->validate([
    'name' =>'required |string|min:3|max:20', //add conditions |
    'email' =>'required|email ',
    'age' =>'required |integer digits_between 10,70',
    'city' =>'required',



   ]);

//DB::statement('insert into (columns...) values (...));
// DB::insert('course12',[


// ]);


User::create([
    'name'=>$request->name,
    'age'=>$request->age,
    'email'=>$request->email,
    'password' =>Hash::make($request->password)
,]);



return redirect()->back();


}


function form2(){
    return view('form2.index');
}

function form2Submit(Request $request){
    dd($request->all());
    //$name=time().rand().$request->file('image')->getClientOriginalName(); 
  
  
  
  
  
    // $ex='form1_'.time().'_'.rand().'.'.$request->file('image')->getClientOriginalExtension(); 

   
    // $request->file('image')->move(public_path('uploads'),$ex);//  و مسكت الصورة هيك باسمها و انقلها لمجلد جديد 





    foreach($request->file('image') as $i){

        $ex='form1_'.time().'_'.rand().'.'.$i->getClientOriginalExtension(); 
       $i->move(public_path('uploads'),$ex);//  و مسكت الصورة هيك باسمها و انقلها لمجلد جديد 
    
    
    }

}




function form3submit(){
Category::create([
    'name' => 'reeman',
]);

}

}


?> 