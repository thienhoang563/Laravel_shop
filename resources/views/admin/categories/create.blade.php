@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1 class="h3 mb-2 text-gray-800">Create Users</h1>
        <hr>
        <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Desc</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="desc">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mb-2">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
