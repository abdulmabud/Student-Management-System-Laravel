@extends('masteradmin')

@section('title')
    Attendance Student
@endsection

@section('content')
    <div class="container text-center">
        <h3 class="text-primary">Attendace Page</h3>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                    <table class="table">
                            <form action="{{ route('admin.attendance') }}" method="POST" class="form-control">
                               @csrf
                                <tr>
                                    <td>Select Date</td>
                                    <td><input type="date" name="classDate" class="form-control" id="date"></td>
                                </tr>
                                <tr>
                                    <td>Select Class</td>
                                    <td>
                                        <select name="className" id="" class="form-control">
                                            @foreach ($classes as $class)
                                                <option value="{{ $class->className }}">{{ $class->className }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Select" class="btn btn-primary btn-block"></td>
                                </tr>
                            </form>
                        </table>
            </div>
        </div>
    </div>
@endsection

@section('singlePageScript')
    <script>
         $(document).ready( function() {
            var now = new Date();
            var month = (now.getMonth() + 1);               
            var day = now.getDate();
            if (month < 10) 
                month = "0" + month;
            if (day < 10) 
                day = "0" + day;
            var today = now.getFullYear() + '-' + month + '-' + day;
            $('#date').val(today);
        });
    </script>
@endsection