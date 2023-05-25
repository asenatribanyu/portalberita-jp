@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/gallery-design.css') }}" />
@endpush

@section('content')
    <div class="main-container">
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
            </div>
            <div class="grid-item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('js/gallery-script.js') }}"></script>
@endpush
