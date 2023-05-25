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
                        <td class="d-flex justify-content-center">
                            <a class="btn-sm btn-info text-decoration-none"
                                href="/dashboard/article/{{ $article->slug }}/edit" role="button">
                                <i class='bx bxs-edit'></i>
                            </a>

                            <button type="button" class="btn-sm ms-1 btn-danger text-decoration-none"
                                data-bs-toggle="modal" data-bs-target="#deleteContent-{{ $article->slug }}"
                                style="border: none">
                                <i class='bx bx-trash'></i>
                            </button>

                            <div class="modal fade" id="deleteContent-{{ $article->slug }}" tabindex="-1"
                                aria-labelledby="deleteContentLabel" aria-hidden="true">
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
                                            Are you sure want to Delete this Content?
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
                                <button type="button" class="btn-sm ms-1 btn-secondary text-decoration-none"
                                    style="background-color: transparent; border-style: none" data-bs-toggle="modal"
                                    data-bs-target="#unpinPost-{{ $article->slug }}">
                                    <i class='bx bxs-pin text-danger'></i>
                                </button>

                                <div class="modal fade" id="unpinPost-{{ $article->slug }}" tabindex="-1"
                                    aria-labelledby="unpinPostLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteTagLabel">
                                                    Unpin Confirmation
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure want to Unpin this Content?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="/dashboard/article/{{ $article->slug }}/pinned"
                                                    method="post">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" name="pin" value="0">
                                                    <button class="btn btn-danger">
                                                        Unpin
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <button type="button" class="btn-sm ms-1 btn-success text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#pinPost-{{ $article->slug }}"
                                    style="border: none">
                                    <i class='bx bx-pin'></i>
                                </button>

                                <div class="modal fade" id="pinPost-{{ $article->slug }}" tabindex="-1"
                                    aria-labelledby="unpinPostLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteTagLabel">
                                                    Pin Confirmation
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure want to Pin this Content?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="/dashboard/article/{{ $article->slug }}/pinned"
                                                    method="post">
                                                    @method('put')
                                                    @csrf
                                                    <input type="hidden" name="pin" value="1">
                                                    <button class="btn btn-primary">
                                                        Pin
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                @endforeach

                </tr>
            </tbody>
        </table>
    </div>
@endsection
