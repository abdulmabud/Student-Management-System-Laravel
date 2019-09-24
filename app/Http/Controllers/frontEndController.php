<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function index(){
        return view('frontEnd.home');
    }

    // public function notice(){
    //     return view('frontEnd.notice');
    // }

    public function teachers(){
        return view('frontEnd.teachers');
    }

    public function contact(){
        return view('frontEnd.contact');
    }

    public function about(){
        return view('frontEnd.about');
    }
    
}
