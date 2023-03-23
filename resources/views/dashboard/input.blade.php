@extends('dashboard')

@section('content')
    <div x-data="{ open: false, selectedOption: 'default' }" class="main-form">
        <h1>Add Content</h1>
        <select x-model="selectedOption" x-on:change="selectedOption !== 'default' ? open = true : open = false"
            class="form-select w-25 mt-3" aria-label="Type Select">
            <option value="default" selected>
                Choose Content Type
            </option>
            <option value="photos">Photos</option>
            <option value="videos">Videos</option>
        </select>

        <div x-show="open">
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

            <div x-bind:class="{ 'active-thumbnail': selectedOption === 'photos' }" class="form-thumbnail-photo w-50 mt-3">
                <label>Thumbnail Photo:</label>
                <input x-bind:disabled="selectedOption === 'videos'" class="form-control file-photos" type="file"
                    id="formFile" />
            </div>

            <div x-bind:class="{ 'active-thumbnail': selectedOption === 'videos' }" class="form-thumbnail-video w-25 mt-3">
                <label for="video-link">Video Link:</label>
                <input x-bind:disabled="selectedOption === 'photos'" class="form-control mt-1" type="text"
                    placeholder="https://youtu.be/URL" id="video-link" />
            </div>

            <div class="form-description mt-3">
                <input id="desc" type="hidden" name="content" />
                <trix-editor input="desc"></trix-editor>
            </div>

            <div class="input-button">
                <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#input-submit">
                    Submit
                </button>

                <div class="modal fade" id="input-submit" tabindex="-1" aria-labelledby="input-submitLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="input-submitLabel">Submit Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to Submit this Content?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>


                <a class="btn btn-secondary mt-3" href="/dashboard" role="button">Cancel</a>
            </div>
        </div>

    </div>
@endsection
