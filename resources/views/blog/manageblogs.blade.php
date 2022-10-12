@extends('master')
@section('title')
Manage Blog
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-3">
                <div class="card-header text-center">
                    Manage Blogs
                    <h4 class="text-center text-success">{{ Session::get('updatemsg') }}</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No:</th>
                            <th>Blog Id:</th>
                            <th>Name:</th>
                            <th>Email:</th>
                            <th>Country:</th>
                            <th>Phone:</th>
                            <th>Description:</th>
                            <th>Image:</th>
                            <th>Action:</th>
                        </tr>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->name }}</td>
                            <td>{{ $blog->email }}</td>
                            <td>{{ $blog->country }}</td>
                            <td>{{ $blog->phone }}</td>
                            <td>{{ $blog->description }}</td>
                            <td>
                                <img src="{{ asset($blog->img) }}" class="img-fluid" alt="" height="100px" width="100px">
                            </td>
                            <td>
                                <a href="{{ route('editproduct',[$blog->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection