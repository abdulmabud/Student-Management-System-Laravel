@extends('masteradmin')

@section('title')
    Edit Book
@endsection

@section('content')
<style>
    td{
        padding: 4px !important;
    }
    </style>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Add new book in Library</h3>
            <form action="{{ route('admin.library.update', $book->id) }}" method="POST" class="form-group">
                @csrf
            <table class="table table-borderless">
                
                    
               
                <tr>
                    <td>Book Name</td>
                    <td><input type="text" name="bookName" class="form-control" value="{{ $book->bookName }}"></td>
                </tr>
                <tr>
                    <td>Book Author</td>
                    <td><input type="text" name="bookAuthor" class="form-control" value="{{ $book->bookAuthor }}"></td>
                </tr>
                <tr>
                    <td>Book Price</td>
                    <td><input type="number" name="bookPrice" class="form-control" value="{{ $book->bookPrice }}"></td>
                </tr>
                <tr>
                    <td>Book Quantity</td>
                    <td><input type="number" name="bookQuantity" class="form-control" value="{{ $book->bookQuantity }}"></td>
                </tr>
                <tr>
                    <td>Book Category</td>
                    <td>
                        <select name="bookCategory" id="" class="form-control">
                            <option value="No Category Found" >Select Your Option</option>
                            <option value="Academic Book" {{ $book->bookCategory == 'Academic Book' ? 'selected' : '' }}>Academic Book</option>
                            <option value="Non Academic Book" {{ $book->bookCategory == 'Non Academic Book' ? 'selected' : '' }}>Non Academic Book</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="bookStatus" id="" class="form-control">
                            <option value="published">Published</option>
                            <option value="unpublished">Unpublished</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update Book Info" name="saveBook" class="btn btn-primary mt-2"></td>
                </tr>
                
            </table>
        </form>
        </div>
    </div>
@endsection