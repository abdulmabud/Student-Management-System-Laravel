@extends('masteradmin')
@section('title')
    Class List
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><a href="" class="btn btn-primary mr-5">Class Statistics</a>
            <a href="{{ route('admin.class.add') }}" class="btn btn-primary ml-5">Add New Class</a>
        </p>
        
    </div>
    
    <h3 class="text text-primary text-center mt-5">List of Class</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Class Id </th>
                          <th>Name </th>
                          <th>Avaiable Seat</th>
                          <th>Total Seat</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($classList as $class)
                         
                    
                    <tr>
                        <td>{{ $class->id }}</td>
                        <td>{{ $class->className }}</td>
                        <td>{{ $class->availableSeat }}</td>
                        <td>{{ $class->totalSeat }}</td>
                        <td>
                            <a href="{{ route('admin.class.details', $class->id) }}" class="btn btn-success">View Details</a>
                        </td>
             
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection