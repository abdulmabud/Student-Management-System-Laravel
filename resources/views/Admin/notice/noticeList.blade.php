@extends('masteradmin')
@section('title')
    Noticeboard
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
</style>
    <div class="mt-5 text-center">
        <p><a href="" class="btn btn-primary mr-5">Notice Statistics</a>
            <a href="{{ route('notice.create') }}" class="btn btn-primary ml-5">Add New Notice</a>
        </p>
        
    </div>
    
    <h3 class="text text-primary text-center mt-5">List of Notice</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Notice Id </th>
                          <th>Subject </th>
                          <th>Status</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($notices as $notice)
                         
                    
                    <tr>
                        <td>{{ $notice->id }}</td>
                        <td>{{ $notice->subject }}</td>
                        <td>{{ $notice->status }}</td>
                        <td>
                            <a href="{{ route('notice.show', $notice->id) }}" class="btn btn-success">View Details</a>
                        </td>
             
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection