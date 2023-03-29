@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/categories-design.css') }}">
@endpush

@section('content')
    <div class="main-container">
        <!-- Categories Header -->
        <div class="header">
            <h1>CATEGORIES</h1>
            <div class="categories-wrapper">
                <small>Sort by:</small>
                <div class="dropdown-categories">
                    <div class="select-categories">
                        <span class="selected-categories">
                            Categories
                        </span>
                        <div class="caret-categories"></div>
                    </div>
                    <ul class="menu-categories">
                        @foreach ($categories as $category)
                            <li>{{ $category->category_name }}</li>
                        @endforeach

                    </ul>
                </div>
                <div class="dropdown-categories">
                    <div class="select-categories">
                        <span class="selected-categories"> Type </span>
                        <div class="caret-categories"></div>
                    </div>
                    <ul class="menu-categories">
                        @foreach ($types as $type)
                            <li>{{ $type->type_name }}</li>
                        @endforeach

                    </ul>
                </div>
                <div class="dropdown-categories">
                    <div class="select-categories">
                        <span class="selected-categories"> Date </span>
                        <div class="caret-categories"></div>
                    </div>
                    <ul class="menu-categories">
                        <li>Latest</li>
                        <li>Oldest</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Categories Header -->

        <!-- Categories Card -->
        <div class="card-wrapper">
            @foreach ($articles as $article)
                <div class="card">
                    <a class="card-image" href="/{{ $article->slug }}">
                        @if ($article->type_id == 1)
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="" />
                        @else
                            <iframe src="{{ $article->video_link }}" frameborder="0" height="175px" width="311px"></iframe>
                        @endif


                    </a>
                    <div class="card-info">
                        <div class="tag-wrapper">
                            @foreach ($article->categories as $category)
                                <a class="tag" href="/categories">{{ $category->category_name }}</a>
                            @endforeach
                        </div>
                        <a href="/{{ $article->slug }}" class="card-title">{{ $article->title }}</a>
                        <div class="card-desc">
                            {{ $article->content }}
                        </div>
                        <div class="card-footer">
                            <a href="/{{ $article->slug }}" class="card-nav">Read More &#8594;</a>
                            <small>{{ $article->created_at->format('j/F/Y') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End of Categories Card -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/categories-script.js') }}"></script>
@endpush
