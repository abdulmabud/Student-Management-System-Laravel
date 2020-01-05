@extends('masteradmin')
@section('title')
    Course Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $course->title }} Details</h2>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table table-bordered">
                <tr>
                    <td>Course Id</td>
                    <td>{{ $course->id }}</td>
                </tr>
                <tr>
                    <td>Course Title</td>
                    <td>{{ $course->title }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $course->description }}</td>
                </tr>
                <tr>
                    <img src="{{ asset('upload/courses/'.$course->photo) }}" alt="No Image" width="100%">
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{ $course->status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary btn-block my-2">Edit Course</a>
            
            <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Course" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
@endsection