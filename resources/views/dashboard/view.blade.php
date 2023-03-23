@extends('dashboard')

@section('content')
    <div class="main-form">
        <h1>Dashboard</h1>
        <a class="btn btn-success mb-3" href="/dashboard/input" role="button">Add Content</a>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Views</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 100; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>Title goes here</td>
                        <td>Date goes here</td>
                        <td>Category goes here</td>
                        <td>Views goes here</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
