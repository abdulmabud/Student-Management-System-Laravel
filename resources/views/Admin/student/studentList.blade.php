@extends('masteradmin')
@section('title')
    Student List
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><a href="" class="btn btn-primary mr-5">Student Statistics</a>
            <a href="{{ route('admin.student.add') }}" class="btn btn-primary ml-5">Add New Student</a>
        </p>
        
    </div>
    
    <h3 class="text text-primary text-center mt-5">List of Book</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Student Id </th>
                          <th>Name </th>
                          <th>Phone</th>
                          <th>Class</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($students as $student)
                         
                    
                    <tr>
                        <td class="text-center">{{ $student->id }}</td>
                        <td>{{ $student->Name }}</td>
                        <td>{{ $student->Phone }}</td>
                        <td>{{ $student->Class }}</td>
                        <td>
                            <a href="{{ route('admin.student.details', $student->id) }}" class="btn btn-success">View Details</a>
                        </td>
               
                    </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>
@endsection