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

}
