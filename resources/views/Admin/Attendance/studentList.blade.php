@extends('masteradmin')

@section('title')
    Attendance
@endsection

@section('content')
    <div class="container">
        <form action="" method="get" class="form-group" id="attendanceFrom">
        <table class="table table-bordered">
            <tr>
                <th style="width: 20%">Student Roll</th>
                <th style="width: 40%">Name</th>
                <th style="width: 40%">Attendance</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                    <td id="ftd">{{ $student->id }}</td>
                    <td>{{ $student->studentName }}</td>
                    <td>
                        <button class="btn btn-success" id="attendYes{{ $student->id }}">Yes</button>
                        <button class="btn btn-danger" id="attendNo{{ $student->id }}">No</button>
                        <button class="btn btn-dark" style="display: none;">Undo</button>
                    </td>
                </tr>    
            @endforeach
            
            
        </table>
    </form>
    </div>
@endsection