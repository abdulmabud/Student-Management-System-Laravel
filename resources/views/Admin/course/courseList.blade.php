@extends('masteradmin')
@section('title')
    Course List
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><a href="" class="btn btn-primary mr-5">Course Statistics</a>
            <a href="{{ route('course.create') }}" class="btn btn-primary ml-5">Add New Course</a>
        </p>
        
    </div>
    
    <h3 class="text text-primary text-center mt-5">List of Course</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Course Id </th>
                          <th>Title </th>
                          <th>Status</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($courses as $course)
                         
                    
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->status }}</td>
                        <td>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-success">View Details</a>
                        </td>
             
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection