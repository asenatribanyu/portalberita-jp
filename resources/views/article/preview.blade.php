@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/preview-design.css') }}">
@endpush

@section('content')
    <div class="main-container">
        <!-- Content -->
        <div class="content">
            <div class="content-title">
                <h1>
                    {{ $articles->title }}
                </h1>
                <div class="tag-wrapper">
                    @foreach ($articles->categories as $category)
                        <a class="tag" href="/categories">{{ $category->category_name }}</a>
                    @endforeach
                </div>

                <small>{{ $articles->user->name }} {{ $articles->created_at->format('j/F/Y') }} Views
                    {{ $articles->counts }}</small>
            </div>

            <div class="content-thumbnail">
                @if ($articles->thumbnail)
                    <div class="image-thumbnail">
                        <img src="{{ asset('storage/' . $articles->thumbnail) }}" alt="" />
                    </div>
                @else
                    <iframe width="840" height="425" src="{{ $articles->video_link }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                @endif



            </div>

            <div class="content-body">
                {!! $articles->content !!}
            </div>

            <div class="break-point-horizontal">
                <hr />
            </div>

            <!-- Other Articles & Card -->
            <div class="header">
                <h1>OTHER ARTICLES</h1>
                <a href="/categories">View All Articles &#8594;</a>
            </div>

            <div class="card-wrapper">
                @foreach ($random_articles as $random)
                    <div class="card">
                        @if ($random->type_id == 1)
                            <a class="sidebar-card-img" href="/{{ $random->slug }}">
                                <img src="{{ asset('storage/' . $random->thumbnail) }}" alt="" />
                            </a>
                        @else
                            <iframe src="{{ $random->video_link }}" frameborder="0" height="175px" width="311px"></iframe>
                        @endif
                        <div class="card-info">
                            <div class="tag-wrapper">
                                @foreach ($random->categories as $category)
                                    <a class="tag" href="/categories">{{ $category->category_name }}</a>
                                @endforeach
                            </div>
                            <a href="/{{ $random->slug }}" class="card-title">{{ $random->title }}</a>
                            <div class="card-desc">
                                {{ $random->excerpt }}
                            </div>
                            <div class="card-footer">
                                <a href="/{{ $random->slug }}" class="card-nav">Read More &#8594;</a>
                                <small>{{ $articles->created_at->format('j/F/Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End of Other Articles & Card -->
        </div>
        <!-- End of Content -->

        <!-- Sidebar -->
        <div class="sidebar-wrapper">
            <div class="sidebar">
                <div class="sidebar-title">Read Also:</div>

                <!-- Sidebar Card -->
                <div class="sidebar-card-wrapper">
                    @foreach ($related_articles as $related)
                        <div class="sidebar-card">
                            @if ($related->type_id == 1)
                                <a class="sidebar-card-img" href="/{{ $related->slug }}">
                                    <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="" />
                                </a>
                            @else
                                <iframe src="{{ $related->video_link }}" frameborder="0" height="175px"
                                    width="311px"></iframe>
                            @endif
                            <div class="tag-wrapper">
                                @foreach ($related->categories as $category)
                                    <a class="tag" href="/categories">{{ $category->category_name }}</a>
                                @endforeach

                            </div>
                            <a href="/{{ $related->slug }}" class="sidebar-card-title">{{ $related->title }}</a>
                        </div>
                    @endforeach
                </div>
                <!-- End of Sidebar Card -->
            </div>
        </div>
        <!-- End of Sidebar -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/preview-script.js') }}"></script>
@endpush
