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

                <small>{{ $articles->user->name }} {{ $articles->created_at->format('j/F/Y') }}</small>
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
                <a href="/">View All Articles &#8594;</a>
            </div>

            <div class="card-wrapper">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="card">
                        <a class="card-image" href="/preview">
                            <img src="img/thumbnail-preview.jpg" alt="" />
                        </a>
                        <div class="card-info">
                            <div class="tag-wrapper">
                                <a class="tag" href="/categories">Tag</a>
                            </div>
                            <a href="/preview" class="card-title">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod.</a>
                            <div class="card-desc">
                                Facilisis volutpat est velit egestas dui id
                                ornare. Scelerisque felis imperdiet proin
                                fermentum leo vel orci porta. In hac habitasse
                                platea dictumst quisque sagittis.
                            </div>
                            <div class="card-footer">
                                <a href="/" class="card-nav">Read More &#8594;</a>
                                <small>DD/MM/YYYY</small>
                            </div>
                        </div>
                    </div>
                @endfor
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
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="sidebar-card">
                            <a class="sidebar-card-img" href="/preview">
                                <img src="img/thumbnail-preview.jpg" alt="" />
                            </a>
                            <div class="tag-wrapper">
                                <a class="tag" href="/categories">Tag</a>
                            </div>
                            <a href="/preview" class="sidebar-card-title">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod.</a>
                        </div>
                    @endfor
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
