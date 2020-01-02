@extends('masteradmin')
@section('title')
    Teacher Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $teacher->teacherName }} Details</h2>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table table-bordered">
                <tr>
                    <td>Teacher Id</td>
                    <td>{{ $teacher->id }}</td>
                </tr>
                <tr>
                    <td>Teacher Name</td>
                    <td>{{ $teacher->Name }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $teacher->Phone }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $teacher->Email }}</td>
                </tr>
                <tr>
                    <img src="{{ asset('upload/teachers/'.$teacher->photo) }}" alt="No Image" width="100%">
                </tr>
                <tr>
                    <td>Teacher Status</td>
                    <td>{{ $teacher->Status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-primary btn-block my-2">Edit Teacher</a>
            
            <form action="{{ route('admin.teacher.delete', $teacher->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Teacher" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
@endsection