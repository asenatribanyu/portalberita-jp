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
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->created_at }}</td>
                        @foreach ($article->categories as $category)
                            <td>{{ $category->category_name }}</td>
                        @endforeach
                        <td>{{ $article->counts }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
