@extends('masteradmin')

@section('title')
    Add Notice
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Add New Notice</h3>
            <form action="{{ route('notice.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
            <table class="table table-borderless">
                <tr>
                    <td>Notice Subject</td>
                    <td><input type="text" name="subject" class="form-control"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" rows="4" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td>Dept</td>
                    <td><input type="text" name="dept" class="form-control"></td>
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
                    <td><input type="submit" value="Add Notice" name="saveNotice" class="btn btn-block btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
@endsection