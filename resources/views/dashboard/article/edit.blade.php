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
                    <th>Type</th>
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
                        <td>{{ $article->type->type_name }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>
                            @foreach ($article->categories as $category)
                                {{ $category->category_name }}
                            @endforeach
                        </td>
                        <td>{{ $article->counts }}</td>
                        <td class="d-flex justify-content-center">
                            <a class="btn-sm btn-info text-decoration-none"
                                href="/dashboard/article/{{ $article->slug }}/edit" role="button">
                                <i class='bx bxs-edit'></i>
                            </a>

                            <button type="button" class="btn-sm ms-2 btn-danger text-decoration-none"
                                data-bs-toggle="modal" data-bs-target="#deleteContent">
                                <i class='bx bx-trash'></i>
                            </button>

                            <div class="modal fade" id="deleteContent" tabindex="-1" aria-labelledby="deleteContentLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteTagLabel">
                                                Deletion Confirmation
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure want to Delete the Content?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <form action="/dashboard/article/{{ $article->slug }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($article->pin)
                                <div class="btn-sm ms-1 text-decoration-none" style="background-color: transparent">
                                    <i class='bx bxs-pin text-danger'></i>
                                </div>
                            @endif
                        </td>
                @endforeach

                </tr>
            </tbody>
        </table>
    </div>
@endsection
