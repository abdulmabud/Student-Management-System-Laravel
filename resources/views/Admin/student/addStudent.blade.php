@extends('masteradmin')

@section('title')
    Admission Student
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-5 offset-md-3">
            <h3 class="text text-center text-primary">Admission New Student</h3>
            <form action="{{ route('admin.student.add') }}" method="POST" class="form-group">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="studentName" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="studentPhone" class="form-control"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input type="date" name="studentBirth" class="form-control"> 
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <label><input type="radio" name="studentGender" value="Male">Male</label>
                        <label><input type="radio" name="studentGender" value="Female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Class</td>
                    <td>
                        <select name="studentClass" id="" class="form-control">
                            @foreach ($class as $c)
                              <option value="{{ $c->className }}">{{ $c->className }}</option>
                            @endforeach
                            
                           
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="studentAddress" class="form-control"></td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td>
                      <input type="text" name="studentFatherName" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Father Phone</td>
                    <td><input type="text" name="studentFatherPhone" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="studentStatus" id="" class="form-control">
                            <option value="published">Published</option>
                            <option value="unpublished">Unpublished</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Admit Student" name="saveStudent" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
    
@endsection