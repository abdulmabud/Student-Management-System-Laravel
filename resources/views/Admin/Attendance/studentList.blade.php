@extends('masteradmin')

@section('title')
Attendance
@endsection

@section('content')
<div class="container">
    <form action="{{ route('admin.save.attendance') }}" method="POST" class="form-group" id="attendanceFrom">
       @csrf
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
                <td>{{ $student->Name }}</td>
                <td class="text-center">
                    <span id="attend{{ $student->id }}"><img src="{{ asset('customAdmin/image/attend.png') }}" alt=""
                            width="30px"></span>
                    <span id="attendance1{{ $student->id }}"><img src="{{ asset('customAdmin/image/attendance.png') }}"
                            alt="" width="30px"></span>
                            
                </td>
                <td class="text-center">
                    <span id="absend{{ $student->id }}"><img src="{{ asset('customAdmin/image/absend.png') }}" alt=""
                            width="30px"></span>
                    <span id="attendance2{{ $student->id }}"><img src="{{ asset('customAdmin/image/attendance.png') }}"
                            alt="" width="30px"></span>
                           
                </td>
                
            </tr>
            @endforeach
            <input type="hidden" name="attendance" id="attendance">
            <input type="hidden" name="date" value="{{ $date }}">
            
        </table>

        <input type="submit" value="Submit" class="btn btn-primary" id="submitAttend">

    </form>
</div>
@endsection


@section('singlePageScript')
<script>
    var attendance = {};
  

    $('td:first-child').each(function () {
        var studentId = $(this).attr('id');
       

        // attend student 
        $('#attend' + studentId).css('display', 'none');
        $('#attendance1' + studentId).click(function () {
            $('#attend' + studentId).css('display', 'block');
            $('#attendance1' + studentId).css('display', 'none');
            $('#absend' + studentId).css('display', 'none');
            $('#attendance2' + studentId).css('display', 'block');
           
            attendance[studentId] = 'attend';
            console.log(attendance);
            updateAttendance();
        })

        $('#attend' + studentId).click(function () {
            $('#attend' + studentId).css('display', 'none');
            $('#attendance1' + studentId).css('display', 'block');

            delete attendance[studentId];
            console.log(attendance);
            updateAttendance();
        })


        // absend student 
        $('#absend' + studentId).css('display', 'none');
        $('#attendance2' + studentId).click(function () {
            $('#absend' + studentId).css('display', 'block');
            $('#attendance2' + studentId).css('display', 'none');

            $('#attend' + studentId).css('display', 'none');
            $('#attendance1' + studentId).css('display', 'block');

            attendance[studentId] = 'absend';
            console.log(attendance);
            updateAttendance();
        })

        $('#absend' + studentId).click(function () {
            $('#absend' + studentId).css('display', 'none');
            $('#attendance2' + studentId).css('display', 'block');

            delete attendance[studentId];
            console.log(attendance);
            updateAttendance();
        })

        function updateAttendance(){
            $('#attendance').val(JSON.stringify(attendance));
        }
            

        

    });



</script>
@endsection
