<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function careers(){
        return view('careers');
    }

    public function enroll(){
        return view('enroll');
    }

    public function absence(){
        return view('absence');
    }

    public function calendars(){
        return view('calendars');
    }
}
