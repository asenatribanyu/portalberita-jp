@extends('layouts.dashboard')

@section('content')
    <div x-data="{ isOpen: false, selectedOption: 'default' }" class="main-form">
        <h1>Add Content</h1>
        <select x-model="selectedOption" x-on:change="selectedOption !== 'default' ? isOpen = true : isOpen = false"
            class="form-select w-25 mt-3" aria-label="Type Select">
            <option value="default" selected>Choose Content Type</option>
            <option value="photos">Photos</option>
            <option value="videos">Videos</option>
        </select>

        <div x-show="isOpen">
            <div class="form-title w-75 mt-3">
                <label for="title">Title:</label>
                <input class="form-control mt-1" type="text" placeholder="Content Title" aria-label="Title Input"
                    id="title" />
            </div>

            <div x-data="{ isOpen2: false }" class="form-tag w-100 mt-3">
                <label for="checkbox">Category:</label>
                <div x-data="{ checkedCount: 0 }" class="d-flex">
                    <div class="checkbox-limit mt-1">
                        @for ($i = 1; $i <= 10; $i++)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox{{ $i }}"
                                    value="option{{ $i }}"
                                    x-on:click="checkedCount = $event.target.checked ? checkedCount + 1 : checkedCount - 1"
                                    x-bind:disabled="checkedCount >= 3 && !$event.target.checked" />
                                <label class="form-check-label" for="inlineCheckbox1">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>
                    <div>
                        <button x-on:click="isOpen2 = !isOpen2" type="button" class="btn btn-sm btn-success">
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
                    <input x-show="isOpen2" class="form-control w-25" type="text" placeholder="Input Tag"
                        aria-label="Title Input" id="title" />
                    <input x-show="isOpen2" x-on:click="isOpen2 = false" class="btn btn-success ms-1" type="submit"
                        value="Submit" />
                </div>
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
                                <h5 class="modal-title" id="input-submitLabel">
                                    Submit Confirmation
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to Submit this Content?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="btn btn-secondary mt-3" href="/dashboard" role="button">Cancel</a>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/dashboard-script.js') }}"></script>
@endpush
