<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['courses'] = Course::all();
        return view('admin.course.courseList', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required', 
            'description' => 'required',
            'status' => 'required'
        ]);

        if($validator->fails()){
           return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $path = public_path('upload/courses');
            $photo->move($path, $name);
            $photo = $name;
        }else{
            $photo = 'NoImage.JPG';
        }

        $courseObj =  new Course;
        $courseObj->title = $request->title;
        $courseObj->description = $request->description;
        $courseObj->photo = $photo;
        $courseObj->status = $request->status;
        $courseObj->save();
        
        return redirect()->route('course.index')->with('success', 'Course added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
        $data['course'] = Course::find($id);
        return view('admin.course.courseDetails', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['course'] = Course::find($id);
        return view('admin.course.editCourse', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required', 
            'description' => 'required',
            'status' => 'required'
        ]);

        if($validator->fails()){
           return redirect()->back()->withErrors($validator)->withInput();
        }

        $courseObj =  Course::find($id);
        
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $path = public_path('upload/courses');
            $photo->move($path, $name);
            $photo = $name;
            $courseObj->photo = $photo;
        }

      
        $courseObj->title = $request->title;
        $courseObj->description = $request->description;
        $courseObj->status = $request->status;
        $courseObj->save();
        
        return redirect()->route('course.index')->with('success', 'Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courseObj = Course::find($id);
        $courseObj->delete();
        return redirect()->route('course.index')->with('success', 'Course Deleted Successfully');
    }
}
