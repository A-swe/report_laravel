@extends("layouts.app")

@section("content")
    <div class="container">
        <h1 class="card-title">Job List</h1>
        <div class=" mt-3">
            <a href="{{ url('/job-opening/add') }}" type="button" class="btn btn-primary float-end m-3"><i class="fa fa-plus">Add New</i></a>
        </div>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>No</th>
                <th>Hospital</th>
                <th>Engineer</th>
                <th>Error Name</th>
                <th>Error Status</th>
                <th>Location</th>
                <th>Date</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach ($jobopenings as $jobopening)
            <tr>
                <td>{{ $jobopening['id'] }}</td>
                <td>{{ $jobopening['hospital'] }}</td>
                <td>{{ $jobopening['engineer'] }}</td>
                <td>{{ $jobopening['error_name'] }}</td>
                <td>{{ $jobopening['error_status'] }}</td>
                <td>{{ $jobopening['location'] }}</td>
                <td>{{ $jobopening['updated_at'] }}</td>
                <td><a href="{{ url("/job-opening/edit") }}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ url("/job-opening/delete/$jobopening->id") }}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </table>
        {{ $jobopenings->links() }}

        
    </div>
@endsection