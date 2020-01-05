@extends('masteradmin')

@section('title')
    Update Course
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Update Course</h3>
            <form action="{{ route('course.update', $course->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
              @method('PUT')
            <table class="table table-borderless">
                <div>
                    <img src="{{ asset('upload/courses/'.$course->photo) }}" alt="No Image" width="100%">
                </div>
                <tr>
                    <td>Course Title</td>
                    <td><input type="text" name="title" class="form-control" value="{{ $course->title }}"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" rows="4" class="form-control">{{ $course->description }}</textarea></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status" id="" class="form-control">
                            <option value="1" {{ $course->status == '1' ? 'selected' : '' }}>Publish</option>
                            <option value="0" {{ $course->status == '0' ? 'selected' : '' }}>Unpublish</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update Course" name="updateCourse" class="btn btn-primary btn-block mt-2"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection