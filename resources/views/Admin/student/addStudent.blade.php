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
                    <td><input type="text" name="Name" class="form-control" value="{{ old('Name') }}"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="Phone" class="form-control" value="{{ old('Phone') }}"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <input type="date" name="Birth" class="form-control" value="{{ old('Birth') }}"> 
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
                            @foreach ($class as $c)
                              <option value="{{ $c->className }}">{{ $c->className }}</option>
                            @endforeach
                            
                           
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="Address" class="form-control" value="{{ old('Address') }}"></td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td>
                      <input type="text" name="FatherName" class="form-control" value="{{ old('FatherName') }}">
                    </td>
                </tr>
                <tr>
                    <td>Father Phone</td>
                    <td><input type="text" name="FatherPhone" class="form-control" value="{{ old('FatherPhone') }}"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="Status" id="" class="form-control">
                            <option value="publish">Published</option>
                            <option value="unpublish">Unpublished</option>
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