<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Library;
use App\Student;
use App\Teacher;
use App\Classlist;
use App\Attendance;
use Validator;

class adminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function classSchedule(){
        return view('admin.classSchedule');
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

    // Attendace Area

    public function attend(){
        $data['classes'] = ClassList::select('className')->get();
        return view('admin.attendance.index', $data);
    }

    public function attendList(Request $request){
        $request->validate([
            'classDate' => 'required',
            'className' => 'required'
        ]);
        $className = $request->className;

        $data['students'] = Student::where('Class', $className)->get();
        $data['date'] = $request->classDate;
        return view('admin.attendance.studentList', $data);

    }

    public function saveAttendance(Request $request){
        $validator = Validator::make($request->all(),[
            'attendance' => 'required',
            'date' => 'required'
        ]);
        $date = $request->date;
        $attendance = json_decode($request->attendance, true);
       
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        foreach($attendance as $key=>$value){
        Attendance::create([
            'student_id' => $key,
            'attendance' => $value,
            'date' => $date 
        ]);
        }

        return redirect()->route('admin.attendance')->with('success', 'Attendance Save Successfully');
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
            'bookQuantity' => 'required',
            'bookCategory' => 'required',
            'bookStatus' => 'required'
        ]);
       
       
    
            
    
        $libraryObj = new Library();

        $libraryObj->bookName = $request->bookName;
        $libraryObj->bookAuthor = $request->bookAuthor;
        $libraryObj->bookPrice = $request->bookPrice;
        $libraryObj->bookQuantity = $request->bookQuantity;
        $libraryObj->bookQuantityAvailable = $request->bookQuantity;
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
            'bookQuantity' => 'required',
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
        $data['students'] = Student::get(['id', 'Name', 'Phone', 'Class']);
        return view('admin.student.studentList', $data);
    }
    public function studentAdd(){
        $data['class'] = ClassList::select('className')->get();
        return view('admin.student.addStudent', $data);
    }
    public function studentAdded(Request $request){
        
        $validator = Validator::make($request->all(), [
            'Name' => 'required',
            'Phone' => 'required',
            'Birth' => 'required',
            'Gender' => 'required',
            'Class' => 'required',
            'Address' => 'required',
            'FatherName' => 'required',
            'FatherPhone' => 'required',
            'Status' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $studentObj = new Student();

        $studentObj->Name = $request->Name;
        $studentObj->Phone = $request->Phone;
        $studentObj->Birth = $request->Birth;
        $studentObj->Gender = $request->Gender;
        $studentObj->Class = $request->Class;
        $studentObj->Address = $request->Address;
        $studentObj->fatherName = $request->FatherName;
        $studentObj->fatherPhone = $request->FatherPhone;
        $studentObj->Status = $request->Status;
        
        $studentObj->save();
        return redirect()->route('admin.students')->with('success', 'Student Information Save Successfully');
    }


    // teacher area 

    public function teachers(){
        $data['teachers'] = Teacher::where('Status', 'Publish')->get();
        
        return view('admin.teacher.teacherList', $data);
    }
    public function teacherAdd(){
        return view('admin.teacher.addTeacher');
    }
    
    public function teacherAdded(Request $request){
        $request->validate([
            'Name' => 'required',
            'Phone' => 'required',
            'Email' => 'required',
            'Status' => 'required'
        ]);

        $teacherObj = new Teacher();

        $teacherObj->Name = $request->Name;
        $teacherObj->Phone = $request->Phone;
        $teacherObj->Email = $request->Email;
        $teacherObj->Status = $request->Status;

        $teacherObj->save();
        return redirect()->route('admin.teachers')->with('success', 'Teacher Added Successfully');
        
    }

    public function teacherDetails($id){
        $data['teacher'] = Teacher::find($id);
        return view('admin.teacher.teacherDetails', $data);
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

    public function classEdit($id){
        $data['class'] = classList::find($id)->first();
        return view('admin.class.editClass', $data);
    }

    public function classUpdate($id, Request $request){
        $request->validate([
            'className' => 'required',
            'classQuantity' => 'required',
            'classStatus' => 'required'
        ]);
        $classObj = classList::find($id);

        $classObj->className = $request->className;
        $classObj->totalSeat = $request->classQuantity;
        $classObj->classStatus = $request->classStatus;

        $classObj->save();

        return redirect()->route('admin.class')->with('success', 'Class Edit Successfully');
    }

    public function classDelete($id){
        $classObj = classList::find($id);
        $classObj->delete();

        return redirect()->route('admin.class')->with('success', 'Class Delete Successfully');
    }

    

}
