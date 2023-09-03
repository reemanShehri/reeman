<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('reeman', function () {
    return "hi";
});

Route::get('reeman{name}', function ($name=null) {
    return 'hi dear id '. $name;
});

Route:: put('put', function(){});
Route:: delete('del', function(){});

















// site 2

Route::prefix('site2')->controller('SiteController::class')->name('rere.')->group(function(){


    Route::get('/index', 'index')->name('index');

    Route::get('/about', 'about')->name('about');
    Route::get('/serve', 'serve')->name('serve');

    Route::get('/contact', 'contact')->name('contact');

});


    // Route::prefix('site2')->group(function(){


    //     Route::get('/about',[SiteController::class, 'site.about']);
    // })->name('/about');

    // Route::prefix('site2')->group(function(){


    //     Route::get('/serve',[SiteController::class, 'site.serve']);
    // })->name('/serve');



    // Route::prefix('site2')->group(function(){


    //     Route::get('/contact',[SiteController::class, 'site.contact']);
    // })->name('site.contact');

Route::get('home',function(){
    return ('site2.home');
});
