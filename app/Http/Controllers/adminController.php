<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function classSchedule(){
        return view('admin.classSchedule');
    }

    public function library(){
        return view('admin.library');
    }

    public function teachers(){
        return view('admin.teachers');
    }
    public function students(){
        return view('admin.students');
    }
    public function parents(){
        return view('admin.parents');
    }

    public function assignment(){
        return view('admin.assignment');
    }

    public function examlist(){
        return view('admin.examlist');
    }

    public function noticeboard(){
        return view('admin.noticeboard');
    }

}
