@extends('masteradmin')
@section('title')
    Student Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $student->Name }} Details</h2>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table table-bordered">
                <tr>
                    <td class="w-25">Student Id</td>
                    <td>{{ $student->id }}</td>
                </tr>
                <tr>
                    <td>Student Name</td>
                    <td>{{ $student->Name }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $student->Phone }}</td>
                </tr>
                <tr>
                    <td>Birth</td>
                    <td>{{ $student->Birth }}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{ $student->Gender }}</td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td>{{ $student->Class }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ $student->Address }}</td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td>{{ $student->fatherName }}</td>
                </tr>
                <tr>
                    <td>Father Phone</td>
                    <td>{{ $student->fatherPhone }}</td>
                </tr>
                <tr>
                    <td>Attend Days</td>
                    <td>{{ $totalAttend }} out of {{ $totalDays }} Days ({{ ($totalAttend/$totalDays)*100 }}%)</td>
                </tr>
                <tr>
                    <td>Absend Days</td>
                    <td>{{ $totalAbsend }} out of {{ $totalDays }} Days ({{ ($totalAbsend/$totalDays)*100 }}%)</td>
                </tr>
                <tr>
                    <td>Student Status</td>
                    <td>{{ $student->Status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-primary btn-block my-2">Edit Student</a>
            
            <form action="{{ route('admin.student.delete', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Student" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
@endsection