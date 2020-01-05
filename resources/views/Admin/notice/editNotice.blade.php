@extends('masteradmin')

@section('title')
    Update Notice
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update Notice</h3>
            <form action="{{ route('notice.update', $notice->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
              @method('PUT')
            <table class="table table-borderless">
                
                <tr>
                    <td>Notice Subject</td>
                    <td><input type="text" name="subject" class="form-control" value="{{ $notice->subject }}"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" rows="4" class="form-control">{{ $notice->description }}</textarea></td>
                </tr>
                <tr>
                    <td>Dept</td>
                    <td><input type="text" name="dept" class="form-control" value="{{ $notice->dept }}"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status" id="" class="form-control">
                            <option value="1" {{ $notice->status == '1' ? 'selected' : '' }}>Publish</option>
                            <option value="0" {{ $notice->status == '0' ? 'selected' : '' }}>Unpublish</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update Notice" name="updateNotice" class="btn btn-primary btn-block mt-2"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection