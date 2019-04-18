@extends('layouts.app')
@section('page-content')
<div class="col-12 col-md-12">
<h1 class="h3 mb-2 text-gray-800">Create Users</h1>
    <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
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
                <input type="text" class="form-control" name="name" required value="{{old('name')}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" required value="{{old('email')}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" required >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" required value="{{old('address')}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" required value="{{old('phone')}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control-file" name="image">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
            <legend class="col-sm-2 col-form-label pt-0">Role</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="role" value="{{\App\Http\Controllers\RoleConstant::ADMIN}}" checked>
                    <label class="form-check-label" for="exampleCheck1">Admin</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="role" value="{{\App\Http\Controllers\RoleConstant::MEMBER}}">
                    <label class="form-check-label" for="exampleCheck1">Member</label>
                </div>
            </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary mb-2">Create</button>
            </div>
        </div>
    </form>
</div>
    @endsection
