@extends('layouts.app')
@section('content')
    <div class="main_content_iner ">
        <div class="row m-1">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-info" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h2 class="text text-center text-info">{{ $book_update ? 'Update' : 'Add' }} Book</h2>
                            </div>
                        </div>
                        @php $route = ($book_update) ? 'book/'.$book_update->id : 'book' @endphp
                        @php $method = ($book_update) ? 'PUT' : 'POST' @endphp
                        <form action="{{ url($route) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method($method)
                            <div class="mb-3">
                                <label>Title:</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title"
                                    name="title" value="{{ $book_update ? $book_update->title : '' }}">
                            </div>
                            <div class="mb-3">
                                <label>Author:</label>
                                <input type="text" class="form-control" id="author" placeholder="Enter author name"
                                    name="author" value="{{ $book_update ? $book_update->author : '' }}">
                            </div>
                            <div class="mb-3">
                                <label>Upload PDF:</label>
                                <input type="file" class="form-control" id="files" name="files"
                                 value="{{ $book_update ? $book_update->files : '' }}">
                            </div>
                            <button type="submit" class="btn btn-info">{{ $book_update ? 'Update' : 'Submit' }}</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h2 class="text text-center text-info">All Books</h2>
                            </div>
                        </div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>PDF</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($books) > 0)
                                        @foreach ($books as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->author }}</td>
                                                <td>{{ $item->files }}</td>
                                                <td><a href="{{ url('book/' . $item->id) }}" class="btn btn-warning">Edit</a></td>
                                                <td>
                                                    <form action="{{ url('book/' . $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>
@endsection
