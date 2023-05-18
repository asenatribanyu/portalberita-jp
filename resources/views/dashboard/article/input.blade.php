@extends('layouts.dashboard')

@section('content')
    <form action="/dashboard/article" method="post" enctype="multipart/form-data">
        @csrf
        <div x-data="{ isOpen: false, selectedOption: 'default' }" class="main-form">
            <h1>Add Content</h1>
            <select x-model="selectedOption"
                x-on:change="selectedOption !== 'default' ? isOpen = true : isOpen = false;  if (selectedOption !== '1') { resetFileInput(); }; if (selectedOption !== '2') { resetFileInput(); }"
                class="form-select w-25 mt-3" aria-label="Type Select" name="type_id">
                <option value="default" selected>Choose Content Type</option>
                @foreach ($types as $type)
                    <option value={{ $type->id }}>{{ $type->type_name }}</option>
                @endforeach
            </select>

            <div x-show="isOpen">
                <div class="form-title w-75 mt-3">
                    <div class="form-check mb-3">
                        <input type="hidden" name="pin" value="0">
                        <input class="form-check-input" type="checkbox" value="1" id="checkPin" name="pin"
                            {{ old('pin') == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="checkPin">
                            Pin This Post
                        </label>
                    </div>
                    <label for="title">Title ID:</label>
                    @error('title')
                        <div class="fs-6 text-white bg-danger mt-1 w-50">
                            <p class="ms-2">Title has been used</p>
                        </div>
                    @enderror

                    <input class="form-control mt-1" type="text" placeholder="Content Title" aria-label="Title Input"
                        id="title" name="title" value="{{ old('title') }}" />

                    <label for="title">Title JP:</label>

                    @error('title-jp')
                        <div class="fs-6 text-white bg-danger mt-1 w-50">
                            <p class="ms-2">Title has been used</p>
                        </div>
                    @enderror

                    <input class="form-control mt-1" type="text" placeholder="Content Title" aria-label="Title Input"
                        id="title" name="title-jp" value="{{ old('title-jp') }}" />
                </div>

                <div x-data="{ isOpen2: false }" class="form-tag w-100 mt-3">
                    <label for="checkbox">Category:</label>
                    <div class="d-flex">
                        <div class="checkbox-limit mt-1">
                            @foreach ($categories as $category)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input cat" type="checkbox" id="checkTag" name="category_id[]"
                                        value="{{ $category->id }}"
                                        {{ is_array(old('category_id')) && in_array($category->id, old('category_id')) ? 'checked' : '' }} />
                                    <label class="form-check-label" for="checkTag">{{ $category->category_name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div>
                            <button x-on:click="isOpen2 = !isOpen2" type="button" class="btn btn-sm btn-success">
                                <i class="bx bx-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="tag-control mt-1 d-flex">
                        <input x-show="isOpen2" class="form-control w-25" type="text" placeholder="Input Tag"
                            aria-label="Title Input" id="title" name="tag" />

                        <input x-show="isOpen2" x-on:click="isOpen2 = false" class="btn btn-success ms-1" type="submit"
                            value="Submit" />
                    </div>
                </div>

                <div x-bind:class="{ 'active-thumbnail': selectedOption === '1' }" class="form-thumbnail-photo w-50 mt-3">
                    <label>Thumbnail Photo:</label>
                    <input x-bind:disabled="selectedOption === '2'" class="form-control file-photos" type="file"
                        id="formFile" name="thumbnail" />
                </div>

                <div x-bind:class="{ 'active-thumbnail': selectedOption === '2' }" class="form-thumbnail-video w-25 mt-3">
                    <label for="video-link">Video Link:</label>
                    <input x-bind:disabled="selectedOption === '1'" class="form-control mt-1" type="text"
                        placeholder="https://youtu.be/URL" id="video-link" name="video_link"
                        value="{{ old('video_link') }}" />
                </div>

                <div class="form-description mt-3">ID
                    <input id="desc" type="hidden" name="content" value="{{ old('content') }}" />
                    <trix-editor input="desc" class="trix-content"></trix-editor>
                </div>
                <div class="form-description mt-3">JP
                    <input id="descp" type="hidden" name="content-jp" value="{{ old('content-jp') }}" />
                    <trix-editor input="descp" class="trix-content"></trix-editor>
                </div>

                <div class="input-button">
                    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                        data-bs-target="#input-submit">
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
                                    <button type="submit" class="btn btn-primary">
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
    </form>
@endsection

@push('script')
    <script src="{{ asset('js/dashboard-script.js') }}"></script>
@endpush
