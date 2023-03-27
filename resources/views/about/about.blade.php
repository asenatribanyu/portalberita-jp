@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/about-design.css') }}">
@endpush

@section('content')
    <div class="main-container">
        <!-- About 1 -->
        <div class="about">
            <div class="about-img-wrapper">
                <div class="img-about pos-1">
                    <img src="img/thumbnail-about-1.jpg" alt="" />
                </div>
                <div class="img-about pos-2">
                    <img src="img/thumbnail-about-2.jpg" alt="" />
                </div>
            </div>
            <div class="about-info-wrapper">
                <div class="about-info">
                    <div class="title title-1">ABOUT</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Commodo ullamcorper a lacus
                        vestibulum sed arcu non odio euismod. Interdum
                        posuere lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Nunc sed id semper risus in
                        hendrerit gravida rutrum quisque. Urna neque viverra
                        justo nec ultrices dui sapien eget mi. Vel fringilla
                        est ullamcorper eget nulla facilisi etiam dignissim.
                        Quis viverra nibh cras pulvinar mattis nunc sed
                        blandit. Habitant morbi tristique senectus et netus
                        et malesuada. Facilisis mauris sit amet massa vitae
                        tortor condimentum lacinia. Pulvinar etiam non quam
                        lacus. Cursus vitae congue mauris rhoncus aenean vel
                        elit scelerisque.
                    </p>
                </div>
            </div>
        </div>
        <!-- End of About 1 -->

        <div class="break-point-horizontal">
            <hr />
        </div>

        <!-- About 2 -->
        <div class="about about-2">
            <div class="about-info-wrapper">
                <div class="about-info">
                    <div class="title title-2">VISION</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Commodo ullamcorper a lacus
                        vestibulum sed arcu non odio euismod. Interdum
                        posuere lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Nunc sed id semper risus in
                        hendrerit gravida rutrum quisque. Urna neque viverra
                        justo nec ultrices dui sapien eget mi. Vel fringilla
                        est ullamcorper eget nulla facilisi etiam dignissim.
                        Quis viverra nibh cras pulvinar mattis nunc sed
                        blandit. Habitant morbi tristique senectus et netus
                        et malesuada. Facilisis mauris sit amet massa vitae
                        tortor condimentum lacinia. Pulvinar etiam non quam
                        lacus. Cursus vitae congue mauris rhoncus aenean vel
                        elit scelerisque.
                    </p>
                </div>
            </div>
            <div class="about-img-wrapper">
                <div class="img-about pos-3">
                    <img src="img/thumbnail-about-1.jpg" alt="" />
                </div>
                <div class="img-about pos-4">
                    <img src="img/thumbnail-about-2.jpg" alt="" />
                </div>
            </div>
        </div>
        <!-- End of About 2 -->

        <div class="break-point-horizontal">
            <hr />
        </div>

        <!-- Documentation -->
        <div class="header">
            <div class="header-title">DOCUMENTATION</div>
        </div>

        <div class="hero">
            <iframe src="https://www.youtube.com/embed/4MoRLTAJY_0?autoplay=0" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <div class="break-point-horizontal">
            <hr />
        </div>

        <div class="photos">
            <div class="photos-wrapper">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="photos-slider">
                        <img src="img/slider-{{ $i }}.jpg" alt="" />
                        <div class="photos-button">
                            <i class="bx bx-chevron-left photos-nav-left"></i>
                            <i class="bx bx-chevron-right photos-nav-right"></i>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="photos-info-wrapper">
                <div class="photos-info">
                    <div class="title">PHOTOS</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Commodo ullamcorper a lacus
                        vestibulum sed arcu non odio euismod. Interdum
                        posuere lorem ipsum dolor sit amet consectetur
                        adipiscing elit. Nunc sed id semper risus in
                        hendrerit gravida rutrum quisque. Urna neque viverra
                        justo nec ultrices dui sapien eget mi. Vel fringilla
                        est ullamcorper eget nulla facilisi etiam dignissim.
                        Quis viverra nibh cras pulvinar mattis nunc sed
                        blandit. Habitant morbi tristique senectus et netus
                        et malesuada. Facilisis mauris sit amet massa vitae
                        tortor condimentum lacinia. Pulvinar etiam non quam
                        lacus. Cursus vitae congue mauris rhoncus aenean vel
                        elit scelerisque.
                    </p>
                </div>
            </div>
        </div>
        <!-- End of Documentation -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/about-script.js') }}"></script>
@endpush
