@extends('masteradmin')
@section('title')
    Class Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $class->className }} Details</h2>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table table-bordered">
                <tr>
                    <td>Class Id</td>
                    <td>{{ $class->id }}</td>
                </tr>
                <tr>
                    <td>Class Name</td>
                    <td>{{ $class->className }}</td>
                </tr>
                <tr>
                    <td>Available Seat</td>
                    <td>{{ $class->availableSeat }}</td>
                </tr>
                <tr>
                    <td>Total Seat</td>
                    <td>{{ $class->totalSeat }}</td>
                </tr>
                <tr>
                    <td>Class Status</td>
                    <td>{{ $class->classStatus }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.class.edit', $class->id) }}" class="btn btn-primary btn-block my-2">Edit Class</a>
            
            <form action="{{ route('admin.class.delete', $class->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Class" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
@endsection