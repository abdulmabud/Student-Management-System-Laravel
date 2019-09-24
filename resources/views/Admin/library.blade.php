@extends('masteradmin')
@section('title')
    Library
@endsection

@section('content')
    <div class="mt-5 text-center">
        <p><a href="" class="btn btn-primary">Books Statistics</a></p>
        <p><a href="{{ route('admin.library.add') }}" class="btn btn-primary">Add New Book</a></p>
    </div>

    <h3 class="text text-primary text-center mt-5">List of Book</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Book Id </th>
                          <th>Book Name </th>
                          <th>Author</th>
                          <th>Price</th>
                          <th>Status</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>About my Dream</td>
                        <td>Abdul Mabud</td>
                        <td>BDT 300</td>
                        <td>Published</td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection