@extends('masteradmin')

@section('title')
    Update Student
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update Student</h3>
            <form action="{{ route('admin.student.update', $student->id) }}" method="POST" class="form-group">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="Name" class="form-control" value="{{ $student->Name }}"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="Phone" class="form-control" value="{{ $student->Phone }}"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input type="date" name="Birth" class="form-control" value="{{ $student->Birth }}"> 
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <label><input type="radio" name="Gender" value="Male">Male</label>
                        <label><input type="radio" name="Gender" value="Female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td>
                        <select name="Class" id="" class="form-control">
                            @foreach ($classes as $class)
                              <option value="{{ $class->className }}">{{ $class->className }}</option>
                            @endforeach
                            
                           
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="Address" class="form-control" value="{{ $student->Address }}"></td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td>
                      <input type="text" name="FatherName" class="form-control" value="{{ $student->fatherName }}">
                    </td>
                </tr>
                <tr>
                    <td>Father Phone</td>
                    <td><input type="text" name="FatherPhone" class="form-control" value="{{ $student->fatherPhone }}"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="Status" id="" class="form-control">
                            <option value="Publish">Publish</option>
                            <option value="Unpublish">Unpublish</option>
                        </select>
                    </td>   
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update Student Info" name="updateStudent" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection