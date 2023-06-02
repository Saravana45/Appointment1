<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudscontroller;
use App\Models\Category;
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

//Route::get('/insert', function () {
  // return view('create');
//});


//Route::get('/users', [crudsController::class,'index']);
//Route::post('users-store',[crudscontroller::class,'store']);






//Route::get('/show','\App\Http\Controllers\CrudsController@index');
//
Route::get('users-edit/{id}',[crudscontroller::class,'edit']);
//Route::post('users-update',[crudscontroller::class,'update']);
Route::post('users-update/{id}',[crudscontroller::class,'update']);

Route::get('users-delete/{id}',[crudscontroller::class,'delete']);



Route::get('users-pdf/{id}',[crudscontroller::class,'pdf']);



Route::get('/insert', function () {
    return view('create');
 });
 Route::post('users-store',[crudscontroller::class,'store']);

 Route::get('/show','\App\Http\Controllers\CrudsController@index');
 Route::get('/s','\App\Http\Controllers\CrudsController@relationship');


 Route::get('/id', function () {
    return view('search');
 });
 Route::GET('store',[crudscontroller::class,'showDetails']);































