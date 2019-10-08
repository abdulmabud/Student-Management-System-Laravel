@extends('masteradmin')
@section('title')
    Teacher List
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><a href="" class="btn btn-primary mr-5">Teacher Statistics</a>
            <a href="{{ route('admin.teacher.add') }}" class="btn btn-primary ml-5">Add New Teacher</a>
        </p>
        
    </div>
    
    <h3 class="text text-primary text-center mt-5">List of Teacher</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Teacher Id </th>
                          <th>Name </th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($teachers as $teacher)
                         
                    
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->teacherName }}</td>
                        <td>{{ $teacher->teacherPhone }}</td>
                        <td>{{ $teacher->teacherEmail }}</td>
                        <td>
                            <a href="{{ route('admin.teacher.details', $teacher->id) }}" class="btn btn-success">View Details</a>
                        </td>
             
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection