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
                <th style="width: 20%" class="text-center">Attend</th>
                <th style="width: 20%" class="text-center">Absend</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                    <td id="{{ $student->id }}">{{ $student->id }}</td>
                    <td>{{ $student->studentName }}</td>
                    <td class="text-center">
                        <span id="attend{{ $student->id }}"><img src="{{ asset('customAdmin/image/attend.png') }}" alt="" width="30px"></span>
                        <span id="attendance1{{ $student->id }}"><img src="{{ asset('customAdmin/image/attendance.png') }}" alt="" width="30px"></span>
                    </td>
                    <td class="text-center">
                        <span id="absend{{ $student->id }}"><img src="{{ asset('customAdmin/image/absend.png') }}" alt="" width="30px"></span>
                        <span id="attendance2{{ $student->id }}"><img src="{{ asset('customAdmin/image/attendance.png') }}" alt="" width="30px"></span>
                    </td>
                </tr>    
            @endforeach
      
        </table>

        <input type="submit" value="Submit" class="btn btn-primary" id="submitAttend">

    </form>
    </div>
@endsection