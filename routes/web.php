<?php

use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\form1Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('', function () {
//     return ('welcome');
// });

/*

Route::get('users' , function(){
    return 'users' ;
});

Route::get('users/profile/{name}' , function($name){
    return 'users profile ' . $name ;
});

Route::get('users/profile' , function(){
    return 'users profile ' ;
});

Route::get('users/profile/{name?}' , function($name = null){
    if($name == null){
       return 'response null' ;
    }else{
     return 'users profile ' . $name ;
    }
});


Route::get('news/{id?}' , function($id = null){

    if($id != null ){
        return 'news ' . $id ;
    }

    return 'all news ... ' ;
});

Route::put('put' , function(){});
Route::delete('delete' , function(){});

Route::get('about' , function(){
    return 'about us' ;
});

Route::get('index' , function(){
    return view('index');
});*/




// site 1  .. site1/home



Route::get('/' , function () {
   return view('site2.index') ;
});

Route::get('home' , function(){
   return view('site1.home');
});

Route::prefix('site2')->controller(SiteController::class)
->name('site.')->group(function(){
    Route::get('/index' ,   'index')->name('index');
    Route::get('/about' ,  'about')->name('about');
    Route::get('/services' ,  'services')->name('services');
    Route::get('/contact' ,  'contact')->name('contact');
    Route::get('/home' ,  'home')->name('home');
});


// Route::prefix('site3')->controller(Site2Controller::class)->name('site.')->group(function(){
//     Route::get('/','index')->name('index');
//     Route::get('/post-msg','post-msg')->name('post-msg');
//     Route::get('/view','view')->name('view');
//     Route::get('/about','about')->name('about');
// });


Route::prefix('site3')->group(function(){
    Route::get('/' , [Site2Controller::class , 'index'] )->name('index');
    Route::get('about' , [Site2Controller::class , 'about'])->name('about');
    Route::post('post_msg' , [Site2Controller::class , 'post_msg'])->name('post_msg');
    Route::get('view' , [Site2Controller::class , 'view'] )->name('view');
});



Route::get('/form1',[form1Controller::class,'index'])->name('index');
Route::get('/form1Submit',[form1Controller::class,'form1Submit'])->name('form1Submit');
