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
                    <td>{{ $teacher->teacherName }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $teacher->teacherPhone }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $teacher->teacherEmail }}</td>
                </tr>
                <tr>
                    <td>Teacher Status</td>
                    <td>{{ $teacher->teacherStatus }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.class.edit', $teacher->id) }}" class="btn btn-primary btn-block my-2">Edit Class</a>
            
            <form action="{{ route('admin.class.delete', $teacher->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Class" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
@endsection