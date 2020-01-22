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
        <p><button class="btn btn-primary mr-5" id="teacherCalBtn">Teacher Statistics</button>
            <a href="{{ route('admin.teacher.add') }}" class="btn btn-primary ml-5">Add New Teacher</a>
        </p>
        
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="result">
                
            </div>
        </div>
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
                        <td>{{ $teacher->Name }}</td>
                        <td>{{ $teacher->Phone }}</td>
                        <td>{{ $teacher->Email }}</td>
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

@section('singlePageScript')
    <script>
        $('#teacherCalBtn').click(function(){
            $.ajax({
                url: '{{ route('admin.tecacher.cal') }}',
                method: 'GET',
                cache: false,
                success: function(data){
                    $('#result').html(data);
                }
            });
        });
    </script>
@endsection