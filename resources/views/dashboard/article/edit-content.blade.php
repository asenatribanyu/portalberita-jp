@extends('layouts.dashboard')

@section('content')
    <form action="/dashboard/article/{{ $articles->slug }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="main-form">
            <h1>Edit Content</h1>
            <div class="form-title w-75 mt-3">
                <div class="form-check mb-3">
                    <input type="hidden" name="pin" value="0">
                    <input class="form-check-input" type="checkbox" name="pin" value="1"
                        id="flexCheckDefault"{{ $articles->pin ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                        Pin This Post
                    </label>
                </div>
                <label for="title">Title:</label>
                <input class="form-control mt-1" type="text" placeholder="Content Title" aria-label="Title Input"
                    id="title" name="title" value="{{ old('title', $articles->title) }}" />
                <label for="title">Title:</label>
                <input class="form-control mt-1" type="text" placeholder="Content Title" aria-label="Title Input"
                    id="title" name="title-jp" value="{{ old('title', $articles->translation('jp')->title) }}" />
            </div>

            <div x-data="{ isOpen: false }" class="form-tag w-100 mt-3">
                <label for="checkbox">Category:</label>
                <div x-data="{ checkedCount: 0 }" class="d-flex">
                    <div class="checkbox-limit mt-1">
                        @foreach ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="category_id[]"
                                    value="{{ $category->id }}"{{ in_array($category->id, old('category_id', $articles->categories->pluck('id')->toArray())) ? 'checked' : '' }}
                                    x-on:click="checkedCount = $event.target.checked ? checkedCount + 1 : checkedCount - 1"
                                    x-bind:disabled="checkedCount >= 3 && !$event.target.checked" />
                                <label class="form-check-label" for="inlineCheckbox1">{{ $category->category_name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <button x-on:click="isOpen = !isOpen" type="button" class="btn btn-sm btn-success">
                            <i class="bx bx-plus"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteTag">
                            <i class="bx bx-x"></i>
                        </button>

                        <div class="modal fade" id="deleteTag" tabindex="-1" aria-labelledby="deleteTagLabel"
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
                                        Are you sure want to Delete the Tag?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tag-control mt-1 d-flex">
                    <input x-show="isOpen" class="form-control w-25" type="text" placeholder="Input Tag"
                        aria-label="Title Input" id="title" name="tag" />
                    <input x-show="isOpen" x-on:click="isOpen = false" class="btn btn-success ms-1" type="submit"
                        value="Submit" />
                </div>
            </div>
            @if ($articles->type_id == '1')
                <div class="form-thumbnail-photo w-50 mt-3">
                    <label>Thumbnail Photo:</label>
                    @if ($articles->thumbnail)
                        <img src="{{ asset('storage/' . $articles->thumbnail) }}"
                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif

                    <input class="form-control file-photos" type="file" id="formFile" name="thumbnail"
                        onchange="PreviewImage()" />
                </div>
            @else
                <div class="form-thumbnail-video w-25 mt-3">

                    <label for="video-link">Video Link:</label>
                    <iframe src="{{ 'https://www.youtube.com/embed/' . $articles->video_link }}" frameborder="0"
                        class="mt-3"></iframe>
                    <input class="form-control mt-1" type="text" placeholder="https://youtu.be/URL" id="video-link"
                        name="video_link" value="{{ old('video_link', $articles->video_link) }}" />
                </div>
            @endif





            <div class="form-description mt-3">
                <input id="desc" type="hidden" name="content" value="{{ old('content', $articles->content) }}" />
                <trix-editor input="desc"></trix-editor>
            </div>
            <div class="form-description mt-3">
                <input id="descp" type="hidden" name="content-jp"
                    value="{{ old('content', $articles->translation('jp')->content) }}" />
                <trix-editor input="descp"></trix-editor>
            </div>

            <div class="edit-button d-flex justify-content-between">
                <div class="submit-cancel">
                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                        data-bs-target="#submit-edit">
                        Submit
                    </button>

                    <div class="modal fade" id="submit-edit" tabindex="-1" aria-labelledby="submit-editLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="submit-editLabel">Edit Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to save the Changes?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </form>

    <a class="btn btn-secondary mt-3" href="/dashboard" role="button">Cancel</a>
    </div>
    <div class="delete">
        <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#delete-alert">
            Delete
        </button>

        <div class="modal fade" id="delete-alert" tabindex="-1" aria-labelledby="delete-alertLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delete-alertLabel">Delete Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to Delete this content?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action="/dashboard/article/{{ $articles->slug }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
@push('script')
    <script src="{{ asset('js/dashboard-script.js') }}"></script>
@endpush
