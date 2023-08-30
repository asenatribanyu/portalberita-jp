@extends('layouts.dashboard')

@section('content')
    <div class="main-form">
        <h1>Dashboard</h1>
        <a class="btn btn-success mb-3" href="/dashboard/article/create" role="button">Add Content</a>
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Type</th>
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
                        <td>{{ $article->type->type_name }}</td>
                        <td>{{ $article->created_at }}</td>

                        <td>
                            @foreach ($article->categories as $key => $category)
                                {{ $category->category_name }}
                                @if ($key !== count($article->categories) - 1)
                                    ,
                                @else
                                    .
                                @endif
                            @endforeach
                        </td>

                        <td>{{ $article->counts }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
