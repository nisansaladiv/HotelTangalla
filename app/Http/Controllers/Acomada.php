<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acomada extends Controller
{
    public function acoma(){
        return view('accomodation');
    }
    public function contactu(){
        return view('contactus');
    }

    public function gallerys(){
        return view('gallery');
    }
    public function book(){
        return view('booking');
    }
    public function custmer(){
       
        return view('custmer');
    }
    public function home(){
        return view('homes');
    }
    public function accomodation(){
        return view('accomodation');
    }
    public function admin(){
        return view('login_admin');
    }
    public function adminp(){
        return view('admin_penal');
    }
    public function room(){
        return view('admin/roomAdd');
    } 
    public function acom(){
        return view('admin/accomadation');
    } 
    public function edit(){
        return view('admin/Edit');
    }
    public function resve(){
        return view('admin/reservation');
    }
      public function confo(){
        return view('admin/notify');
    }
}

