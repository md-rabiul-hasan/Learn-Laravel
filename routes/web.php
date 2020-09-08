<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
    return "welcome home";
});

Route::match(['get','post'],'/get',function(){
    return "welcome get request";
});

Route::any('/any',function(){
    return "welcome to any request";
});


// Route Parameter
Route::get('/home/{name}',function($name){
    return "Hi {$name}";
});

Route::get('/name/{name?}',function($name = null){
    if(!empty($name)){
        echo "Hey Mr. {$name}";
    }else{
        echo "Please Enter Your Name";
    }
});

// url validation with regex
Route::get('book/{id}',function($id){
    return "Detial of book id => {$id}";
})->where('id','[0-9]+');