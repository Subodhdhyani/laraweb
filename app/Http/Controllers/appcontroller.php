<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appcontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function about(){
        return view('about'); 
    }

    public function contact(){
        return view('contact');
    }
}
