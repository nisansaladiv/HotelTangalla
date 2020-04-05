<?php

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



Route::get ('/', function () {
    return view('welcome');});
Route::get('accomodation',['uses'=>'Acomada@acoma']);
Route::get('contactus',['uses'=>'Acomada@contactu']);
Route::get('gallery',['uses'=>'Acomada@gallerys']);
Route::get('booking',['uses'=>'Acomada@book']);
Route::get('custmer',['uses'=>'Acomada@custmer']);
Route::post('register',['uses'=>'UserControllers@RegisterUsers','as'  =>'singup']);
Route::get('homes',['uses'=>'Acomada@home'])->middleware('auth');
Route::post('homes',['uses'=>'UserControllers@LogingUsers','as'  =>'homes']);
Route::get('singouts',['uses'=>'UserControllers@logouts','as'  =>'singouts']);
Route::post('reg',['uses'=>'UserControllers@RegUsers','as'  =>'sing']);
Route::get ('booking', function () {
    $data=App\T_Room::all();
    return view('booking')->with('booking',$data);});
//Route::post('register',['uses' =>'UserController@RegisterUser','as'=>'signup']);