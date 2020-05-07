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
Route::post('bookingconform',['uses'=>'UserControllers@RegUsers','as'  =>'sing']);
Route::get('login_admin',['uses'=>'Acomada@admin']);
Route::post('custmer',['uses'=>'UserControllers@Custmer','as'  =>'custmer']);
Route::get('bookingconform',['uses'=>'UserControllers@RegUsers']);
Route::get('accomodation',['uses'=>'UserControllers@create']);
Route::get('booking',['uses'=>'UserControllers@Booking']);
Route::get('booking', 'UserControllers@index');
Route::get('bookingconform',['uses'=>'Acomada@Form']);
Route::get('sinup',['uses'=>'UserControllers@Logout','as'  =>'sinup']);
Route::post('login_admin',['uses'=>'UserControllers@RegisterAdmin','as'  =>'sin']);
Route::post('booking',['uses'=>'UserControllers@B_Res','as'  =>'bookr']);
/*Route::get ('booking', function () {
    $data=App\T_Room::all();
    return view('booking')->with('booking',$data);});*/

    Route::get ('accomodation', function () {
    $categories=App\T_Room::all();
        return view('accomodation')->with('accomodation',$categories);});
//Route::post('register',['uses' =>'UserController@RegisterUser','as'=>'signup']);*/
//Route::get('bookingconform', 'UserControllers@cree');

//Route::post('bookingconform', 'UserControllers@cree');
Route::get('bookingconform',['uses'=>'UserControllers@RegUsers']);
//===============================admin_route================================================//
Route::post('login',['uses'=>'UserControllers@LogingAdmin','as'  =>'lo']);
Route::get('admin_penal', 'Acomada@adminp')->middleware('auth');
Route::get('roomAdd',['uses'=>'Acomada@room','as'  =>'new_room']);
Route::get('admin/accomadation',['uses'=>'UserControllers@AdminAco','as'  =>'acco']);
Route::post('roomAdd',['uses'=>'UserControllers@Rooms','as'  =>'add']);
Route::get('accomadation', 'UserControllers@AdminAco');
Route::resource('t__rooms', 'UserControllers');
//Route::get('Edit','Acomada@edit');
Route::get('admin/Edit/{id}','UserControllers@edit');
Route::get('update/{id}','UserControllers@update');
Route::get('admin/show/{id}','UserControllers@show');
Route::get('admin/Delete/{id}','UserControllers@Delete');
Route::post('accomadation',['uses'=>'UserControllers@AdminAco','as'  =>'accomadation']);
Route::post('admin/Edit',['uses'=>'UserControllers@Update','as'  =>'upa']);
Route::post('admin/Delete',['uses'=>'UserControllers@Del','as'  =>'dele']);
Route::get('admin/reservation',['uses'=>'UserControllers@AdminBoook','as'  =>'rev']);
//Route::post('','UserControllers@Update');
Route::get('admin/conforme/{id}','UserControllers@bookinedit');
Route::get('admin/cancel/{id}','UserControllers@cancel');
Route::post('admin/error/{id}',['uses'=>'UserControllers@bookinupdate','as'=>'error']);
//Route::get('admin/error',['uses'=>'UserControllers@error','as'=>'error']);
Route::post('admin/error/{id}',['uses'=>'UserControllers@bookincacel','as'=>'errors']);