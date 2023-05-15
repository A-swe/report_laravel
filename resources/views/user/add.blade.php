@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-warning">
                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif
        <form action="" method="post">
            @csrf
            <div class="mb-3 col-4">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3 col-4">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3 col-4">
                <label for="">Phone</label>
                <input type="text" class="form-control" name="phone_no">
            </div>
            <div class="mb-3 col-4">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 col-4">
                <label for="">Role</label>
                <select name="role" class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">Engineer</option>
                </select>
            </div>
            <input type="submit" value="Add User" class="btn btn-primary">
        </form>
    </div>
@endsection
