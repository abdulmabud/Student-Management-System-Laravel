<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Noticeboard;

class frontEndController extends Controller
{
    public function index(){
        $data['teachers'] = Teacher::all()->take(4);
        $data['coures'] = Course::all()->take(4);
        $data['notices'] = Noticeboard::all()->take(10);
        return view('frontEnd.home', $data);
    }

    public function viewnotice($id){

        $data = [];
        $data['notice'] = Noticeboard::find($id);
        
        return view('frontEnd.noticeboard', $data);
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
