@extends('masteradmin')

@section('title')
    Add Course
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Add New Course</h3>
            <form action="{{ route('course.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Course Title</td>
                    <td><input type="text" name="title" class="form-control"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" rows="4" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status" id="" class="form-control">
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add Course" name="saveCourse" class="btn btn-block btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection