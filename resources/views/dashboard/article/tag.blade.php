@extends('layouts.dashboard')

@section('content')
    <form action="/dashboard/article/controltag" method="post">
        @csrf
        @method('delete')
        <div x-data="{ checked: false }" class="main-form">
            <h1>Tag Manager</h1>
            @if (session()->has('error'))
                <div class="fs-6 text-white bg-danger mt-1 w-50">
                    <p class="ms-2">Tag are used</p>
                </div>
            @endif
            <div class="form-tag w-100 mt-3">
                <div class="d-flex w-75">
                    <div class="checkbox mt-1">
                        @foreach ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input cat" type="checkbox" id="inlineCheckbox1"
                                    name="category_id[]" value={{ $category->id }}
                                    x-on:change="checked = !!document.querySelectorAll('.cat:checked').length" />
                                <label class="form-check-label" for="inlineCheckbox1">{{ $category->category_name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tag-control mt-3 d-flex">
                    <input class="form-control w-25" type="text" placeholder="Input Tag" aria-label="Title Input"
                        id="title" name="tag" />
                    <input class="btn btn-success ms-1" type="submit" value="Submit" />

                    {{-- <button type="button" class="btn btn-success ms-1">
                        Submit
                    </button> --}}
                </div>
            </div>

            <button x-show="checked" type="button" class="btn mt-2 btn-danger" data-bs-toggle="modal"
                data-bs-target="#deleteTag">
                Delete
            </button>

            <div class="modal fade" id="deleteTag" tabindex="-1" aria-labelledby="deleteTagLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteTagLabel">
                                Deletion Confirmation
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure want to Delete the Tag?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
