<?php

namespace App\Http\Controllers;

use App\RgUsers;
use App\T_acomma;
use App\T_Room;
use App\UReg;
use App\UserRegi;
use App\users;
use App\usersReg;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Unique;

class UserControllers extends Controller
{
    public function RegisterUsers(Request $request){
       $this->validate($request,[
        'sdate'=>'required|Unique:t_acommas',
        'edate'=>'required|Unique:t_acommas'
        ]);
        $table=new  T_acomma();
       
        $table->sdate    = $request->input('sdate');
        $table->edate    = $request->input('edate');
        $table->numnight = $request->input('num_night');
        $table->adults   = $request->input('adults');
        $table->children = $request->input('childr');
    
        $table->save();
        //return redirect()->action('booking');
        return redirect()->action('Acomada@book');
        //$data=T_acomma::all();
        //return view('booking')->with('bookings',$data);
    }
    public function Booking(){
      $data=T_Room::all()->toArray();
      return view('booking',compact('room'));
      return redirect()->action('custmer');
    }
    public function RegUsers(Request $request){
    $this->validate($request,[
        'username'=>'required|max:20',
        'cuntry'=>'required|max:20',
        'email'=>'required|unique:users',
        'password'=>'required|min:6'
    ]);
       $table=new Users();
       $table->name = $request->input('username');
       $table->cuntry  = $request->input('cuntry');
       $table->city  = $request->input('city');
       $table->address = $request->input('address');
       $table->phonenumber = $request->input('ponenumber');
       $table->email = $request->input('email');
       $table->birthday = $request->input('birth');
       $table->password =bcrypt($request->input('password'));
      
   
       $table->save();
       return redirect()->back()->with('message','Register Sucssed!');
       //return redirect()->action('booking');
       ///return redirect()->action('Acomada@custmer');
       //$data=T_acomma::all();
       //return view('booking')->with('bookings',$data);
    }
     public function LogingUsers (Request $request){
       $data=$request->only('password','email');
      if(Auth::attempt($data)){
        return redirect()->route('homes');

      }
      return redirect()->back();
     }
     public function getHome(){
       return view('homes');
     }
     public function logouts(){
      Auth::logout();
      Session::flush();
      return redirect('/')->with('message','Logouted');

     }
  }
