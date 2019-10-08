@extends('masteradmin')

@section('title')
    Add Class
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update New Class</h3>
            <form action="{{ route('admin.class.update', $class->id) }}" method="POST" class="form-group">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Class Name</td>
                    <td><input type="text" name="className" class="form-control" value="{{ $class->className }}"></td>
                </tr>
                <tr>
                    <td>Total no. Student

                    </td>
                    <td><input type="text" name="classQuantity" class="form-control" value="{{ $class->totalSeat }}"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="teacher" id="" class="form-control">
                            <option value="Published" {{ $class->teacherStatus == 'Published' ? 'selected' : '' }}>Published</option>
                            <option value="Unpublished" {{ $class->teacherStatus == 'Unpublished' ? 'selected' : '' }}>Unpublished</option>
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