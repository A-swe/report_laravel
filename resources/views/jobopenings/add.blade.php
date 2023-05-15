@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone_no">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="">Role</label>
                    <select name="role" class="form-control">
                        <option value="1">Admin</option>
                        <option value="2">Engineer</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="Add User" class="btn btn-primary">
        </form>
    </div>
@endsection