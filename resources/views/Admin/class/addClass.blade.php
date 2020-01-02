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
            <h3 class="text text-center text-primary">Add New Class</h3>
            <form action="{{ route('admin.class.add') }}" method="POST" class="form-group">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Class Name</td>
                    <td><input type="text" name="className" class="form-control"></td>
                </tr>
                <tr>
                    <td>Total no. Student

                    </td>
                    <td><input type="text" name="classQuantity" class="form-control"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="classStatus" id="" class="form-control">
                            <option value="Publish">Publish</option>
                            <option value="Unpublish">Unpublish</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add Class" name="saveClass" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection