@extends("layouts.app")

@section("content")
    <div class="container">
        <h1 class="card-title">User List</h1>
        <div class=" mt-3">
            <a href="" type="button" class="btn btn-primary float-end m-3"><i class="fa fa-plus">Add New</i></a>
        </div>
        <table class="table table-responsive table-bordered">
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Role</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['phone_no'] }}</td>
                <td>{{ $user['role'] }}</td>
                <td><a href="{{ url("/user/edit") }}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ url("/user/delete/$user->id") }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
@endsection