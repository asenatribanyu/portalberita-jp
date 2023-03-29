@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/home-design.css') }}" />
@endpush

@section('content')
    <div class="main-container">
        <!-- Carousel -->
        <div class="carousel">
            @for ($i = 1; $i <= 3; $i++)
                <div class="carousel-slides">
                    <img src="img/slider-{{ $i }}.jpg" alt="" />
                    <div class="carousel-info">
                        <div class="tag-wrapper">
                            <a class="tag" href="/categories">Tag</a>
                        </div>

                        <a href="/preview">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</a>
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
            @endfor
        </div>
        <!-- End of Carousel -->

        <!-- Featured Card -->
        <div class="card-home-wrapper">
            @for ($i = 1; $i <= 3; $i++)
                <div class="card-home">
                    <a class="card-home-image" href="/preview">
                        <img src="img/thumbnail.jpg" alt="" />
                    </a>
                    <div class="card-home-info">
                        <div class="tag-wrapper">
                            <a class="tag" href="/categories">Tag</a>
                        </div>
                        <a href="/preview" class="card-home-title">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod.</a>

                        <div class="card-home-footer">
                            <a href="/" class="card-home-nav">Read More &#8594;</a>
                            <small>DD/MM/YYYY</small>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <!-- End of Featured Card -->

        <div class="break-point-horizontal">
            <hr />
        </div>

        <div class="header">
            <h1>LATEST ARTICLES</h1>
            <a href="/categories">View All Articles &#8594;</a>
        </div>

        <!-- Latest Articles Card -->
        <div class="card-home-wrapper">
            @foreach ($latest as $late)
                @if ($late->type_id === 1)
                    <div class="card-home">
                        <a class="card-home-image" href="/{{ $late->slug }}">
                            <img src={{ asset('storage/' . $late->thumbnail) }} alt="" />
                        </a>
                        <div class="card-home-info">
                            <div class="tag-wrapper">
                                @foreach ($late->categories as $category)
                                    <a class="tag" href="/categories">{{ $category->category_name }}</a>
                                @endforeach
                            </div>


                            <a href="/{{ $late->slug }}" class="card-home-title">{{ $late->title }}</a>
                            <div class="card-home-desc">
                                {{ $late->excerpt }}
                            </div>
                            <div class="card-home-footer">
                                <a href="/{{ $late->slug }}" class="card-home-nav">Read More &#8594;</a>
                                <small>{{ $late->created_at->format('j/F/Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- End of Latest Articles Card -->

        <div class="break-point-horizontal">
            <hr />
        </div>
    </div>

    <!-- Hero -->
    <div class="hero-image">
        <div class="hero-wrapper">
            <img src="img/hero.jpg" alt="" />
            <div class="hero-info">
                <div class="hero-desc">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Metus dictum at tempor commodo
                        ullamcorper a lacus vestibulum.
                    </p>
                    <a href="/about">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Hero -->

    <div class="main-container">
        <div class="break-point-horizontal">
            <hr />
        </div>

        <div class="header">
            <h1>ARTICLES</h1>
            <a href="/categories">View All Articles &#8594;</a>
        </div>

        <!-- Articles Card -->
        <div class="card-home-wrapper">

            @foreach ($articles as $article)
                @if ($article->type_id == 1)
                    <div class="card-home">
                        <a class="card-home-image" href="/{{ $article->slug }}">
                            <img src={{ asset('storage/' . $article->thumbnail) }} alt="" />
                        </a>
                        <div class="card-home-info">

                            <div class="tag-wrapper">
                                @foreach ($article->categories as $category)
                                    <a class="tag" href="/categories">{{ $category->category_name }}</a>
                                @endforeach
                            </div>
                            <a href="/{{ $article->slug }}" class="card-home-title">{{ $article->title }}</a>
                            <div class="card-home-desc">
                                {{ $article->excerpt }}
                            </div>
                            <div class="card-home-footer">
                                <a href="/{{ $article->slug }}" class="card-home-nav">Read More &#8594;</a>
                                <small>{{ $article->created_at->format('j/F/Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- End of Articles Card -->

        <div class="break-point-horizontal">
            <hr />
        </div>

        <div class="header">
            <h1>VIDEOS</h1>
            <a href="/categories">View All Videos &#8594;</a>
        </div>

        <!-- Videos Card -->
        <div class="card-home-wrapper">
            @foreach ($articles as $article)
                @if ($article->type_id == 2)
                    <div class="card-home">
                        <a class="card-home-image" href="/{{ $article->slug }}">
                            <iframe src="{{ $article->video_link }}" frameborder="0" height="175px"
                                width="311px"></iframe>
                        </a>
                        <div class="card-home-info">
                            <div class="tag-wrapper">
                                @foreach ($article->categories as $category)
                                    <a class="tag" href="/categories">{{ $category->category_name }}</a>
                                @endforeach
                            </div>
                            <a href="/{{ $article->slug }}" class="card-home-title">{{ $article->title }}</a>
                            <div class="card-home-desc">
                                {{ $article->excerpt }}
                            </div>
                            <div class="card-home-footer">
                                <a href="/{{ $article->slug }}" class="card-home-nav">Read More &#8594;</a>
                                <small>{{ $article->created_at->format('j-F-Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- End of Videos Card -->

        <div class="break-point-horizontal">
            <hr />
        </div>

        <div class="header">
            <h1>PHOTOS</h1>
            <a href="/categories">View All Photos &#8594;</a>
        </div>

        <!-- Image Gallery -->
        <div class="image-gallery-wrapper">
            @for ($i = 1; $i <= 9; $i++)
                <div class="image-{{ $i }}"><img src="" alt="" /></div>
            @endfor
        </div>
        <!-- End of Image Gallery -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/home-script.js') }}"></script>
@endpush
