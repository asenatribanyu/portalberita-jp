@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/gallery-design.css') }}" />
@endpush

@section('content')
    <div class="main-container">
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach ($photos as $photo)
                <div class="grid-item">
                    <img class="img-list" src={{ asset('storage/' . $photo->thumbnail) }} />
                </div>
            @endforeach
        </div>
    </div>
    <div class="img-popup">
        <div class="popup-container">
            <div class="popup-wrapper">
                <div class="img-wrapper">
                    <img src={{ asset('storage/' . $photo->thumbnail) }} alt="">
                </div>
                <div class="action">
                    <div class="popup-caption">
                        <p>Ini Caption</p>
                    </div>
                    <div class="popup-action">
                        <button class="visit">Visit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('script')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('js/gallery-script.js') }}"></script>
@endpush
