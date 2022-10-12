@extends('master')
@section('title')
Edit Blog   
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card my-3">
                <div class="card-header text-center">
                    Edit Blog
                </div>
                <div class="card-body">
                    <form action="{{ route('updateproduct',['id'=>$blog->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row my-2">
                            <label for="" class="col-md-3">Name: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" value="{{ $blog->name }}">
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="" class="col-md-3">Email: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" value="{{ $blog->email }}">
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="" class="col-md-3">Country: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="country" value="{{ $blog->country }}">
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="" class="col-md-3">Phone: </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" value="{{ $blog->phone }}">
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="" class="col-md-3">Description: </label>
                            <div class="col-md-9">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ $blog->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="" class="col-md-3">Image: </label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset($blog->img) }}" alt="" height="100px" width="100px" class="img-fluid my-2">
                            </div>
                        </div>
                        <div class="form-group row my-2">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Add Blog">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection