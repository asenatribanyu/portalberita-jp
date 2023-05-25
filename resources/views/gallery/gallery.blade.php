@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/gallery-design.css') }}" />
@endpush

@section('content')
    <div class="main-container">
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach ($photos as $photo)
                @php
                    $firstCategory = $photo->categories->first(); // Get the first category
                    $categoryName = $firstCategory ? $firstCategory->category_name : '';
                @endphp
                <div class="grid-item">
                    <img class="img-list" src={{ asset('storage/' . $photo->thumbnail) }} data-caption="{{ $photo->caption }}"
                        data-slug="?category={{ $categoryName }}" data-delete="{{ $photo->slug }}" />
                </div>
            @endforeach
        </div>
    </div>
    <div class="img-popup">
        <div class="popup-container">
            <div class="popup-wrapper">
                <div class="img-wrapper">
                    <img src=""alt="">
                </div>
                <div class="action">
                    <div class="popup-caption">
                        <p></p>
                    </div>
                    <div class="popup-action">
                        <a class="visit" href=""><button>{{ __('messages.Visit') }}</button></a>
                        <form id="myForm" action="" method="post" enctype="multipart/form-data"
                            class="delete-form">
                            @method('delete')
                            @csrf
                            @auth
                                <button type="submit" class="delete">Delete</button>
                            @endauth
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('js/gallery-script.js') }}"></script>
@endpush
