@extends('layouts.dashboard')

@section('content')
    <div class="main-form">
        <h1>Edit Content</h1>
        <a class="btn btn-success mb-3" href="/dashboard/article/create" role="button">Add Content</a>
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
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>
                            @foreach ($article->categories as $category)
                                {{ $category->category_name }}
                            @endforeach
                        </td>
                        <td>{{ $article->counts }}</td>
                        <td class="d-flex justify-content-center"><a class="btn-sm btn-info text-decoration-none"
                                href="/dashboard/article/{{ $article->slug }}/edit" role="button"><i
                                    class='bx bxs-edit'></i></a>
                        </td>
                @endforeach

                </tr>
            </tbody>
        </table>
    </div>
@endsection
