@extends('masteradmin')
@section('title')
    Library
@endsection

@section('content')
    <div class="mt-5 text-center">
        <p><button class="btn btn-primary mr-5" id="libraryCalBtn">Books Statistics</button>
            <a href="{{ route('admin.library.add') }}" class="btn btn-primary ml-5">Add New Book</a>
        </p>
        
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="result">
                
            </div>
        </div>
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
                          <th>Category</th>
                          <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($libraryBooks as $book)
                    <tr>
                        <td class="text-center">{{ $book->id }}</td>
                        <td>{{ $book->bookName }}</td>
                        <td>{{ $book->bookAuthor }}</td>
                        <td>BDT {{ $book->bookPrice }}</td>
                        <td>{{ $book->bookCategory }}</td>
                        
                        <td>
                           <a href="{{ route('admin.library.edit', $book->id) }}"><button class="btn btn-success">Edit</button></a> 
                           <form action="{{ route('admin.library.delete', $book->id) }}" class="d-inline" method="POST">
                              @csrf
                              @method('DELETE')

                                <input type="submit" value="Delete" class="btn btn-danger">

                            </form> 
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('singlePageScript')
    <script>
        $('#libraryCalBtn').click(function(){
            $.ajax({
                url: '{{ route('admin.library.cal') }}',
                method: 'GET',
                cache: false,
                success: function(data){
                    $('#result').html(data);
                }
            });
        });
    </script>
@endsection