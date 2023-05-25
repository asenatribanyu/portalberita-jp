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
                    <img src={{ asset('storage/' . $photo->thumbnail) }} />
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('script')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('js/gallery-script.js') }}"></script>
@endpush
