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

Route::get('/test', function () {
    //return view('welcome_create');
return "test1";
})->name("a");

Route::get("test2",function (){
   return "test2";
})->name('b');

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/t', function () {
    return view('welcome_create');
});
