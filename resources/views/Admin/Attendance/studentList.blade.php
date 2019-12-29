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
            <input type="text" name="attend" id="attend">
            <input type="text" name="absend" id="absend">
        </table>

        <input type="submit" value="Submit" class="btn btn-primary" id="submitAttend">

    </form>
</div>
@endsection


@section('singlePageScript')
<script>
    var attend = [];
    var absend = [];
    $('td:first-child').each(function () {
        var studentId = $(this).attr('id');



        // attend student 
        $('#attend' + studentId).css('display', 'none');
        $('#attendance1' + studentId).click(function () {
            $('#attend' + studentId).css('display', 'block');
            $('#attendance1' + studentId).css('display', 'none');
            $('#absend' + studentId).css('display', 'none');
            $('#attendance2' + studentId).css('display', 'block');
            attend.push(studentId);
            absend.pop(studentId);

        })

        $('#attend' + studentId).click(function () {
            $('#attend' + studentId).css('display', 'none');
            $('#attendance1' + studentId).css('display', 'block');
            attend.pop(studentId);
        })


        // absend student 
        $('#absend' + studentId).css('display', 'none');
        $('#attendance2' + studentId).click(function () {
            $('#absend' + studentId).css('display', 'block');
            $('#attendance2' + studentId).css('display', 'none');

            $('#attend' + studentId).css('display', 'none');
            $('#attendance1' + studentId).css('display', 'block');
            attend.pop(studentId);
            absend.push(studentId);
        })

        $('#absend' + studentId).click(function () {
            $('#absend' + studentId).css('display', 'none');
            $('#attendance2' + studentId).css('display', 'block');
            absend.pop(studentId);
        })

        setInterval(() => {
            
            console.log(attend);
            $('#attend').val(JSON.stringify(attend));

        }, 3000);

    });



</script>
@endsection
