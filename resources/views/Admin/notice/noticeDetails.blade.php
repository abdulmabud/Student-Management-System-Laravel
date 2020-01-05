@extends('masteradmin')
@section('title')
    Notice Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $notice->Subject }} Details</h2>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table table-bordered">
                <tr>
                    <td>Course Id</td>
                    <td>{{ $notice->id }}</td>
                </tr>
                <tr>
                    <td>Notice Subject</td>
                    <td>{{ $notice->subject }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $notice->description }}</td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>{{ $notice->dept }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{ $notice->status }}</td>
                </tr>
                
            </table>
            <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-primary btn-block my-2">Edit Notice</a>
            
            <form action="{{ route('notice.destroy', $notice->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Notice" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
@endsection