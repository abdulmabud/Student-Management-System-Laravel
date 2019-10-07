<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library;
use App\Student;
use App\Classlist;

class adminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function classSchedule(){
        return view('admin.classSchedule');
    }

    
    public function teachers(){
        return view('admin.teachers');
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
    
    public function library(){
        $data['libraryBooks'] = Library::all();
        return view('admin.library.library', $data);
    }


    public function libraryAdd(){
        return view('admin.library.addBook');
    }
    public function libraryAdded(Request $request){
        
        $request->validate([
            'bookName' => 'required',
            'bookAuthor' => 'required',
            'bookPrice' => 'required',
            'bookCategory' => 'required',
            'bookStatus' => 'required'
        ]);
       
       
    
            
    
        $libraryObj = new Library();

        $libraryObj->bookName = $request->bookName;
        $libraryObj->bookAuthor = $request->bookAuthor;
        $libraryObj->bookPrice = $request->bookPrice;
        $libraryObj->bookCategory = $request->bookCategory;
        $libraryObj->bookStatus = $request->bookStatus;

        $libraryObj->save();
        return redirect()->route('admin.library')->with('success', 'Book added in Library');

    }
    
    public function libraryEdit($id){
        $data['book'] = Library::where('id', $id)->first();
        

        return view('admin.library.editBook', $data);
    }
    public function libraryUpdate($id, Request $request){
        $libraryObj = Library::find($id);

        $request->validate([
            'bookName' => 'required',
            'bookAuthor' => 'required',
            'bookPrice' => 'required',
            'bookCategory' => 'required',
            'bookStatus' => 'required',
          ]);

          $libraryObj->bookName = $request->bookName;
          $libraryObj->bookAuthor = $request->bookAuthor;
          $libraryObj->bookPrice = $request->bookPrice;
          $libraryObj->bookCategory = $request->bookCategory;
          $libraryObj->bookStatus = $request->bookStatus;
  
          $libraryObj->save();
          return redirect()->route('admin.library')->with('success', 'Book Updated Successfully');
    }
    public function libraryDelete($id){
        $libraryObj = Library::find($id);
        $libraryObj->delete();
        return redirect()->route('admin.library')->with('success', 'Book Deleted Successfully');
    }

    // student area 
    public function students(){
        $data['students'] = Student::get(['id', 'studentName', 'studentPhone', 'studentClass']);
        return view('admin.student.studentList', $data);
    }
    public function studentAdd(){
        return view('admin.student.addStudent');
    }
    public function studentAdded(Request $request){
        $request->validate([
            'studentName' => 'required',
            'studentPhone' => 'required',
            'studentBirth' => 'required',
            'studentGender' => 'required',
            'studentClass' => 'required',
            'studentAddress' => 'required',
            'studentFatherName' => 'required',
            'studentFatherPhone' => 'required',
            'studentStatus' => 'required'
        ]);

        $studentObj = new Student();

        $studentObj->studentName = $request->studentName;
        $studentObj->studentPhone = $request->studentPhone;
        $studentObj->studentBirth = $request->studentBirth;
        $studentObj->studentGender = $request->studentGender;
        $studentObj->studentClass = $request->studentClass;
        $studentObj->studentAddress = $request->studentAddress;
        $studentObj->fatherName = $request->studentFatherName;
        $studentObj->fatherPhone = $request->studentFatherPhone;
        $studentObj->studentStatus = $request->studentStatus;
        
        $studentObj->save();
        return redirect()->route('admin.students')->with('success', 'Student Information Save Successfully');
    }


    // classlist area 

    public function classList(){
        $data['classList'] = Classlist::all(); 
        return view('admin.class.classList', $data);
    }
    public function classDetails($id){
        $data['class'] = classList::find($id)->first();
        return view('admin.class.classDetails', $data);
    }
    public function classAdd(){
        return view('admin.class.addClass');
    }
    public function classAdded(Request $request){
        $request->validate([
            'className' => 'required',
            'classQuantity' => 'required',
            'classStatus' => 'required'
        ]);

        $classObj = new Classlist();

        $classObj->className = $request->className;
        $classObj->availableSeat = $request->classQuantity;
        $classObj->totalSeat = $request->classQuantity;
        $classObj->classStatus = $request->classStatus;

        $classObj->save();

        return redirect()->route('admin.class')->with('success', 'Class Added Successfully');


    }

    

}
