<?php

use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\SiteController;
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

Route::prefix('site1')->controller(SiteController::class)
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


Route::prefix('site2')->group(function(){
    Route::get('/' , [Site3Controller::class , 'index'] )->name('index');
    Route::get('about' , [Site3Controller::class , 'about'])->name('about');
    Route::post('post_msg' , [Site3Controller::class , 'post_msg'])->name('post_msg');
    Route::get('view' , [Site3Controller::class , 'view'] )->name('view');
});



// Route::get('n22' , function () {
//     return view('site2.index') ;
//  });
