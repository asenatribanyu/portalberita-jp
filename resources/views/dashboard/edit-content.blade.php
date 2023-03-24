@extends('layouts.dashboard')

@section('content')
    <div class="main-form">
        <h1>Edit Content</h1>
        <div class="form-title w-75 mt-3">
            <label for="title">Title:</label>
            <input class="form-control mt-1" type="text" placeholder="Content Title" aria-label="Title Input"
                id="title" />
        </div>

        <div class="form-tag w-25 mt-3">
            <label for="category">Category:</label>
            <input class="form-control mt-1" type="text" aria-label="Tag" placeholder="Content Category"
                id="category" />
        </div>

        <div class="form-thumbnail-photo w-50 mt-3">
            <label>Thumbnail Photo:</label>
            <input class="form-control file-photos" type="file" id="formFile" />
        </div>

        <div class="form-thumbnail-video w-25 mt-3">
            <label for="video-link">Video Link:</label>
            <input class="form-control mt-1" type="text" placeholder="https://youtu.be/URL" id="video-link" />
        </div>

        <div class="form-description mt-3">
            <input id="desc" type="hidden" name="content" />
            <trix-editor input="desc"></trix-editor>
        </div>

        <div class="edit-button d-flex justify-content-between">
            <div class="submit-cancel">
                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#submit-edit">
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

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
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to Delete this content?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
