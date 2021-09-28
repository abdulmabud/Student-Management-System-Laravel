<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Library;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Classlist;
use App\Models\Attendance;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    public function index(){
        $data = [];
        $data['totalStudent'] = Student::all()->count();
        $data['totalTeacher'] = Teacher::all()->count();
        $data['totalClass'] = Classlist::all()->count();
        $data['totalBook'] = Library::all()->count();

        return view('admin.dashboard', $data);
    }
    public function classSchedule(){
        return view('admin.classSchedule');
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

    public function calLibrary(){
        $data = [];

        $allCategory = Library::select('bookCategory')->distinct('bookCategory')->get();
        foreach($allCategory as $category){
            $category = $category->bookCategory;
            // echo $category;
        
            $count = Library::where('bookCategory', $category)->count('bookCategory');
            $categories[$category] = $count;
        }
        $data['categories'] = $categories;
        $data['totalBook'] = Library::all()->count();
        return view('admin.library.calLibrary', $data);
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

    public function studentDetails($id){
        // $studentObj = Student::find($id);
        $data = [];
        $data['student'] = Student::find($id);
        $data['totalAttend'] = Attendance::where(['attendance' => 'attend', 'student_id' => $id] )->get()->count();
        $data['totalAbsend'] = Attendance::where(['attendance' => 'absend', 'student_id' => $id])->get()->count();
        $data['totalDays'] = Attendance::where(['student_id' => $id])->get()->count();

       return view('admin.student.studentDetails', $data);
    }

    public function studentEdit($id){
        $data['student'] = Student::where('id', $id)->first();
        $data['classes'] = Classlist::where('classStatus', 'Publish')->get();

        return view('admin.student.editStudent', $data);
    }

    public function studentUpdate(Request $request, $id){
        $studentObj = Student::find($id);

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
            return redirect()->back()->withErrors($validator);
        }

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
        return redirect()->route('admin.students')->with('success', 'Student Information Updated Successfully');

    }

    public function studentDelete($id){
        $studentObj = Student::find($id);
        $studentObj->delete();

        return redirect()->route('admin.students')->with('success', 'Student Delete Successfully');
    }

    public function studentCal(){
        $data = [];
        $data['classes'] = Classlist::all();
        $data['totalStudent'] = Student::all()->count();
        return view('admin.student.calStudent', $data);
    }


    // teacher area 

    public function teachers(){
        $data['teachers'] = Teacher::all();
        
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

        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('/upload/teachers');
            $image->move($path, $name);

        }

        $teacherObj = new Teacher();

        $teacherObj->Name = $request->Name;
        $teacherObj->Phone = $request->Phone;
        $teacherObj->Email = $request->Email;
        $teacherObj->photo = $name;
        $teacherObj->Status = $request->Status;

        $teacherObj->save();
        return redirect()->route('admin.teachers')->with('success', 'Teacher Added Successfully');
        
    }

    public function teacherDetails($id){
        $data['teacher'] = Teacher::find($id);
        return view('admin.teacher.teacherDetails', $data);
    }

    public function teacherEdit($id){
        $data['teacher'] = Teacher::where('id', $id)->first();

        return view('admin.teacher.editTeacher', $data);
    }

    public function teacherUpdate(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'Name' => 'required',
            'Phone' => 'required',
            'Email' => 'required',
            'Status' => 'required'
        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $teacherObj = Teacher::find($id);
        if($request->hasFile('photo')){
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('/upload/teachers');
            $image->move($path, $name);
            $teacherObj->photo = $name;
        }

        

        $teacherObj->Name = $request->Name;
        $teacherObj->Phone = $request->Phone;
        $teacherObj->Email = $request->Email;
        
        $teacherObj->Status = $request->Status;
        $teacherObj->save();

        return redirect()->route('admin.teachers')->with('success', "Teacher Info Updated Successfully");

    }

    public function teacherDelete($id){
        $teacherObj = Teacher::find($id);
        $teacherObj->delete();

        return redirect()->route('admin.teachers')->with('success', 'Teacher Delete Successfully');
    }

    public function calTeacher(){
        $data = [];
        $data['pubTeacher'] = Teacher::where('status', 'Publish')->count();
        $data['unpubTeacher'] = Teacher::where('status', 'Unpublish')->count();
        $data['totalTeacher'] = Teacher::all()->count();

        return view('admin.teacher.calTeacher', $data);
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
