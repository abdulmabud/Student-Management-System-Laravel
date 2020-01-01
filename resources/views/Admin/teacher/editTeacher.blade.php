@extends('masteradmin')

@section('title')
    Update Teacher
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update Teacher</h3>
            <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" class="form-group">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Teacher Name</td>
                    <td><input type="text" name="Name" class="form-control" value="{{ $teacher->Name }}"></td>
                </tr>
                <tr>
                    <td>Teacher Phone</td>
                    <td><input type="text" name="Phone" class="form-control" value="{{ $teacher->Phone }}"></td>
                </tr>
                <tr>
                    <td>Teacher Email</td>
                    <td><input type="email" name="Email" class="form-control" value="{{ $teacher->Email }}"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="Status" id="" class="form-control">
                            <option value="Publish" {{ $teacher->teacherStatus == 'Publish' ? 'selected' : '' }}>Publish</option>
                            <option value="Unpublish" {{ $teacher->teacherStatus == 'Unpublish' ? 'selected' : '' }}>Unpublish</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update Class" name="updateClass" class="btn btn-primary btn-block mt-2"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection