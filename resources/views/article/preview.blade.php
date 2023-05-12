@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/preview-design.css') }}">
@endpush

@section('content')
    {{ $local = session('locale') ?? ($local = config('app.locale')) }}
    <div class="main-container">
        <!-- Content -->
        <div class="content">
            <div class="content-title">
                <h1>
                    {{ $articles->translation($local)->title }}
                </h1>
                <div class="tag-wrapper">
                    @foreach ($articles->categories as $category)
                        <a class="tag" href="/categories">{{ $category->category_name }}</a>
                    @endforeach
                </div>

                <div class="author">
                    <small>By {{ $articles->user->name }} - {{ $articles->created_at->format('j/F/Y') }}
                    </small>
                    <small>&#128065; {{ $articles->counts }}</small>
                </div>
            </div>

            <div class="content-thumbnail">
                @if ($articles->thumbnail)
                    <div class="image-thumbnail">
                        <img src="{{ asset('storage/' . $articles->thumbnail) }}" alt="" />
                    </div>
                @else
                    <iframe src="{{ 'https://www.youtube.com/embed/' . $articles->video_link }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                @endif



            </div>

            <div class="content-body">
                {!! $articles->translation($local)->content !!}
            </div>

            <div class="break-point-horizontal">
                <hr />
            </div>

            <!-- Other Articles & Card -->
            <div class="header header-other">
                <h1>{{ __('messages.Other Articles') }}</h1>
                <a href="/categories">{{ __('messages.View All Articles') }} &#8594;</a>
            </div>

            <div class="card-wrapper">
                @foreach ($random_articles as $random)
                    <div class="card">
                        <div class="detail-wrapper">
                            <div class="card-image">
                                @if ($random->type_id == 1)
                                    <a href="/{{ $random->slug }}">
                                        <img src="{{ asset('storage/' . $random->thumbnail) }}" alt="" />
                                    </a>
                                    <div class="card-view"><small>&#128065; {{ $random->counts }}</small></div>
                                @else
                                    <iframe src="{{ 'https://www.youtube.com/embed/' . $random->video_link }}"
                                        frameborder="0" height="175px" width="311px"></iframe>
                                    <div class="card-view"><small>&#128065; {{ $random->counts }}</small></div>
                                @endif
                            </div>
                            <div class="card-info">
                                <div class="tag-wrapper">
                                    @foreach ($random->categories as $category)
                                        <a class="tag" href="/categories">{{ $category->category_name }}</a>
                                    @endforeach
                                </div>
                                <div class="card-title">
                                    <a href="/{{ $random->slug }}">{{ $random->translation($local)->title }}</a>
                                </div>
                                <div class="card-desc">
                                    <p>{{ $random->translation($local)->excerpt }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="/{{ $random->slug }}">{{ __('messages.Read More') }} &#8594;</a>
                                    <small>{{ $articles->created_at->format('j/F/Y') }}</small>
                                </div>
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
                <div class="sidebar-title">{{ __('messages.Read Also') }}</div>
                <!-- Sidebar Card -->
                <div class="sidebar-card-wrapper">
                    @foreach ($related_articles as $related)
                        <div class="sidebar-card">
                            <div class="sidebar-detail-wrapper">
                                <div class="sidebar-card-image">
                                    @if ($related->type_id == 1)
                                        <a href="/{{ $related->slug }}">
                                            <img src="{{ asset('storage/' . $related->thumbnail) }}" alt="" />
                                        </a>
                                        <div class="sidebar-card-view"><small>&#128065; {{ $related->counts }}</small>
                                        </div>
                                    @else
                                        <iframe src="{{ 'https://www.youtube.com/embed/' . $related->video_link }}"
                                            frameborder="0"></iframe>
                                        <div class="sidebar-card-view"><small>&#128065; {{ $related->counts }}</small>
                                        </div>
                                    @endif
                                </div>
                                <div class="sidebar-card-info">
                                    <div class="sidebar-tag-wrapper">
                                        @foreach ($related->categories as $category)
                                            <a class="tag" href="/categories">{{ $category->category_name }}</a>
                                        @endforeach
                                    </div>
                                    <div class="sidebar-card-title">
                                        <a href="/{{ $related->slug }}">{{ $related->translation($local)->title }}</a>
                                    </div>
                                    <div class="sidebar-card-footer">
                                        <a href="/{{ $related->slug }}">{{ __('messages.Read More') }} &#8594;</a>
                                        <small>{{ $related->created_at->format('j/F/Y') }}</small>
                                    </div>
                                </div>
                            </div>
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
