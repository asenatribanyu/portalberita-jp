@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/home-design.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/preloader-design.css') }}">
@endpush

@section('content')
    {{ $local = session('locale') ?? ($local = config('app.locale')) }}
    <div class="home-preloader">
        @include('preloader/preloader')
    </div>

    <div class="main">
        <div class="main-container">
            <!-- Carousel -->
            <div class="carousel">
                @foreach ($pinned as $pin)
                    <div class="carousel-slides">
                        @if ($pin->type_id == 1)
                            <img src="{{ asset('storage/' . $pin->thumbnail) }}" alt="" />
                            <div class="carousel-info">
                                <div class="tag-wrapper">
                                    @foreach ($pin->categories as $category)
                                        <a class="tag"
                                            href="/categories?category={{ $category->category_name }}">{{ $category->category_name }}</a>
                                    @endforeach
                                </div>
                                <a class="carousel-title"
                                    href="/{{ $pin->slug }}">{{ $pin->translation($local)->title }}</a>
                                <small>{{ $pin->created_at->format('j/F/Y') }}</small>
                            </div>
                        @else
                            <iframe src="{{ 'https://www.youtube.com/embed/' . $pin->video_link }}"
                                frameborder="0"></iframe>
                        @endif
                        <div class="carousel-button">
                            <i class="bx bx-chevron-left carousel-nav-left"></i>
                            <i class="bx bx-chevron-right carousel-nav-right"></i>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End of Carousel -->

            <!-- Featured Card -->
            <div class="card-wrapper">
                @if ($views->isEmpty())
                    <h1>Data Not Found</h1>
                @else
                    @foreach ($views as $view)
                        <div class="card">
                            <div class="detail-wrapper">
                                <div class="card-image">
                                    @if ($view->type_id == 1)
                                        <a href="/{{ $view->slug }}">
                                            <img src="{{ asset('storage/' . $view->thumbnail) }}" alt="" />
                                        </a>
                                        <div class="card-view"><small>&#128065; {{ $view->counts }}</small></div>
                                    @else
                                        <iframe src="{{ 'https://www.youtube.com/embed/' . $view->video_link }}"
                                            frameborder="0"></iframe>
                                        <div class="card-view"><small>&#128065; {{ $view->counts }}</small></div>
                                    @endif
                                </div>
                                <div class="card-info">
                                    <div class="tag-wrapper">
                                        @foreach ($view->categories as $category)
                                            <a class="tag"
                                                href="/categories?category={{ $category->category_name }}">{{ $category->category_name }}</a>
                                        @endforeach
                                    </div>
                                    <div class="card-title">
                                        <a href="/{{ $view->slug }}">{{ $view->translation($local)->title }}</a>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/{{ $view->slug }}">Read More &#8594;</a>
                                        <small>{{ $view->created_at->format('j/F/Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
            <!-- End of Featured Card -->

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header header-latest">
                <h1>LATEST ARTICLES</h1>
                <a href="/categories?date=Latest">View All Articles &#8594;</a>
            </div>

            <!-- Latest Articles Card -->
            <div class="card-wrapper">
                @if ($latest->isEmpty())
                    <h1>Data Not Found</h1>
                @else
                    @foreach ($latest as $late)
                        <div class="card">
                            <div class="detail-wrapper">
                                <div class="card-image">
                                    @if ($late->type_id == 1)
                                        <a href="/{{ $late->slug }}">
                                            <img src="{{ asset('storage/' . $late->thumbnail) }}" alt="" />
                                        </a>
                                        <div class="card-view"><small>&#128065; {{ $late->counts }}</small></div>
                                    @else
                                        <iframe src="{{ 'https://www.youtube.com/embed/' . $late->video_link }}"
                                            frameborder="0"></iframe>
                                        <div class="card-view"><small>&#128065; {{ $late->counts }}</small></div>
                                    @endif
                                </div>
                                <div class="card-info">
                                    <div class="tag-wrapper">
                                        @foreach ($late->categories as $category)
                                            <a
                                                href="/categories?category={{ $category->category_name }}">{{ $category->category_name }}</a>
                                        @endforeach
                                    </div>
                                    <div class="card-title">
                                        <a href="/{{ $late->slug }}">{{ $late->translation($local)->title }}</a>
                                    </div>
                                    <div class="card-desc">
                                        <p>{{ $late->translation($local)->excerpt }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/{{ $late->slug }}">Read More &#8594;</a>
                                        <small>{{ $late->created_at->format('j/F/Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

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
                <a href="/categories?type=1">View All Articles &#8594;</a>
            </div>

            <!-- Articles Card -->
            <div class="card-wrapper">
                @if ($articles->isEmpty())
                    <h1>Data Not Found</h1>
                @else
                    @foreach ($articles as $article)
                        <div class="card">
                            <div class="detail-wrapper">
                                <div class="card-image">
                                    <a href="/{{ $article->slug }}"> <img
                                            src={{ asset('storage/' . $article->thumbnail) }} alt="" /> </a>
                                    <div class="card-view"><small>&#128065; {{ $article->counts }}</small></div>
                                </div>
                                <div class="card-info">
                                    <div class="tag-wrapper">
                                        @foreach ($article->categories as $category)
                                            <a
                                                href="/categories?category={{ $category->category_name }}">{{ $category->category_name }}</a>
                                        @endforeach
                                    </div>
                                    <div class="card-title">
                                        <a href="/{{ $article->slug }}"
                                            class="card-home-title">{{ $article->translation($local)->title }}</a>
                                    </div>
                                    <div class="card-desc">
                                        <p>{{ $article->translation($local)->excerpt }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/{{ $article->slug }}">Read More &#8594;</a>
                                        <small>{{ $article->created_at->format('j/F/Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <!-- End of Articles Card -->

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header">
                <h1>VIDEOS</h1>
                <a href="/categories?type=2">View All Videos &#8594;</a>
            </div>

            <!-- Videos Card -->
            <div class="card-wrapper">
                @if ($videos->isEmpty())
                    <h1>Data Not Found</h1>
                @else
                    @foreach ($videos as $article)
                        <div class="card">
                            <div class="detail-wrapper">
                                <div class="card-image">
                                    <iframe src="{{ 'https://www.youtube.com/embed/' . $article->video_link }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                    <div class="card-view"><small>&#128065; {{ $article->counts }}</small></div>
                                </div>
                                <div class="card-info">
                                    <div class="tag-wrapper">
                                        @foreach ($article->categories as $category)
                                            <a
                                                href="/categories?category={{ $category->category_name }}">{{ $category->category_name }}</a>
                                        @endforeach
                                    </div>
                                    <div class="card-title">
                                        <a href="/{{ $article->slug }}">{{ $article->translation($local)->title }}
                                        </a>
                                    </div>
                                    <div class="card-desc">
                                        <p>{{ $article->translation($local)->excerpt }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/{{ $article->slug }}">Read More &#8594;</a>
                                        <small>{{ $article->created_at->format('j/F/Y') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

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
                @foreach ($random_articles as $random)
                    <div class="image-{{ $loop->iteration }}"><img src="{{ asset('storage/' . $random->thumbnail) }}"
                            alt="" /></div>
                @endforeach
            </div>
            <!-- End of Image Gallery -->
        </div>
    @endsection

    @push('script')
        <script src="{{ asset('js/home-script.js') }}"></script>
        <script src="{{ asset('js/preloader-script.js') }}"></script>
    @endpush
