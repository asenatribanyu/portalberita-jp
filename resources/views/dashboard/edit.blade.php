@extends('dashboard')

@section('content')
    <div class="main-form">
        <h1>Edit Content</h1>
        <a class="btn btn-success mb-3" href="/dashboard/input" role="button">Add Content</a>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Views</th>
                    <th>Action</th>
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
                        <td class="d-flex justify-content-center"><a class="btn-sm btn-info text-decoration-none"
                                href="/dashboard/edit/content" role="button"><i class='bx bxs-edit'></i></a></td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
