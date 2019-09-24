<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library;

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

    // Library Area
    
    public function libraryAdd(){
        return view('admin.addBookLibrary');
    }
    public function libraryAdded(Request $request){
        
        // $request->validate([
        //     'bookName' => 'required',
        //     'bookAuthor' => 'required',
        //     'bookPrice' => 'required',
        //     'bookCategory' => 'required',
        //     'bookStatus' => 'required'
        // ]);
       
        // return 'sdfsdfasdf';
    
            
    
        $libraryObj = new Library();

        $libraryObj->bookName = $request->bookName;
        $libraryObj->bookAuthor = $request->bookAuthor;
        $libraryObj->bookPrice = $request->bookPrice;
        $libraryObj->bookCategory = $request->bookCategory;
        $libraryObj->bookStatus = $request->bookStatus;

        $libraryObj->save();
        return redirect()->route('admin.library', ['success' => 'Book added in Library']);

    }

}
