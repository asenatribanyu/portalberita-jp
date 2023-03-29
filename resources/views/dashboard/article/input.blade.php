@extends('layouts.dashboard')

@section('content')
    <form action="/dashboard/article" method="post" enctype="multipart/form-data">
        @csrf
        <div x-data="{ isOpen: false, selectedOption: 'default' }" class="main-form">
            <h1>Add Content</h1>
            <select x-model="selectedOption" x-on:change="selectedOption !== 'default' ? isOpen = true : isOpen = false"
                class="form-select w-25 mt-3" aria-label="Type Select" name="type_id">
                <option value="default" selected>Choose Content Type</option>
                @foreach ($types as $type)
                    <option value={{ $type->id }}>{{ $type->type_name }}</option>
                @endforeach
            </select>

            <div x-show="isOpen">
                <div class="form-title w-75 mt-3">
                    <label for="title">Title:</label>
                    <input class="form-control mt-1" type="text" placeholder="Content Title" aria-label="Title Input"
                        id="title" name="title" />
                </div>

                <div x-data="{ isOpen2: false }" class="form-tag w-100 mt-3">
                    <label for="checkbox">Category:</label>
                    <div class="d-flex">
                        <div class="checkbox-limit mt-1" data-max-checks="3">
                            @foreach ($categories as $category)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        name="category_id[]" value={{ $category->id }} />
                                    <label class="form-check-label"
                                        for="inlineCheckbox1">{{ $category->category_name }}</label>
                                </div>
                            @endforeach
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
                        {{-- <form action="/newcategory" method="post" id="form2">
                            @csrf --}}
                        <input x-show="isOpen2" class="form-control w-25" type="text" placeholder="Input Tag"
                            aria-label="Title Input" id="title" name="tag" />

                        <input x-show="isOpen2" x-on:click="isOpen2 = false" class="btn btn-success ms-1" type="submit"
                            value="Submit" />
                        {{-- </form> --}}
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
                        placeholder="https://youtu.be/URL" id="video-link" name="video_link" />
                </div>
                <div class="form-description mt-3">
                    <input id="desc" type="hidden" name="content" />
                    <trix-editor input="desc" class="trix-content"></trix-editor>
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
    <script>
        (function() {
            var HOST = "/dashboard/article/uploadtrix"; //pass the route

            addEventListener("trix-attachment-add", function(event) {
                if (event.attachment.file) {
                    uploadFileAttachment(event.attachment)
                }
            })

            function uploadFileAttachment(attachment) {
                uploadFile(attachment.file, setProgress, setAttributes)

                function setProgress(progress) {
                    attachment.setUploadProgress(progress)
                }

                function setAttributes(attributes) {
                    attachment.setAttributes(attributes)
                }
            }

            function uploadFile(file, progressCallback, successCallback) {
                var formData = createFormData(file);
                var xhr = new XMLHttpRequest();

                xhr.open("POST", HOST, true);
                xhr.setRequestHeader('X-CSRF-TOKEN', getMeta('csrf-token'));

                xhr.upload.addEventListener("progress", function(event) {
                    var progress = event.loaded / event.total * 100
                    progressCallback(progress)
                })

                xhr.addEventListener("load", function(event) {
                    var attributes = {
                        url: xhr.responseText,
                        href: xhr.responseText + "?content-disposition=attachment"
                    }
                    successCallback(attributes)
                })

                xhr.send(formData)
            }

            function createFormData(file) {
                var data = new FormData()
                data.append("Content-Type", file.type)
                data.append("file", file)
                return data
            }

            function getMeta(metaName) {
                const metas = document.getElementsByTagName('meta');

                for (let i = 0; i < metas.length; i++) {
                    if (metas[i].getAttribute('name') === metaName) {
                        return metas[i].getAttribute('content');
                    }
                }

                return '';
            }
        })();
    </script>
@endsection
