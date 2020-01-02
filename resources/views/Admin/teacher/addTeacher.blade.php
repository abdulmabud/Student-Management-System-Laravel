@extends('masteradmin')

@section('title')
    Add Teacher
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Add New Teacher</h3>
            <form action="{{ route('admin.teacher.add') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Teacher Name</td>
                    <td><input type="text" name="Name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="Phone" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="Email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="Status" id="" class="form-control">
                            <option value="Publish">Publish</option>
                            <option value="Unpublish">Unpublish</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add Teacher" name="saveTeacher" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection