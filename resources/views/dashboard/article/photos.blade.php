@extends('layouts.dashboard')

@section('content')
    <div class="main-form">
        <h1>Add Photos</h1>

        <div class="form-photos w-50 mt-3">
            <label>Choose Photo:</label>
            <input x-bind:disabled="selectedOption === '2'" class="form-control file-photos" type="file" id="formFile"
                name="thumbnail" />
        </div>

        <div class="form-tag w-100 mt-3">
            <label>Choose Tag:</label>
            <div class="d-flex w-75">
                <div class="checkbox mt-1">
                    @foreach ($categories as $category)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input cat" type="checkbox" id="inlineCheckbox1" name="category_id[]"
                                value={{ $category->id }}
                                x-on:change="checked = !!document.querySelectorAll('.cat:checked').length" />
                            <label class="form-check-label" for="inlineCheckbox1">{{ $category->category_name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="form-caption w-50 mt-2">
            <label for="caption" class="form-label">Caption:</label>
            <textarea class="form-control" id="caption" rows="3"></textarea>
        </div>

        <div class="input-button">
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#input-submit">
                Submit
            </button>

            <div class="modal fade" id="input-submit" tabindex="-1" aria-labelledby="input-submitLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="input-submitLabel">
                                Submit Confirmation
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure want to Submit this Photos?
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
    @endsection
