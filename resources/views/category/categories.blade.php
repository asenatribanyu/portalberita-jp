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
                            <li><a
                                    href="{{ route('categories.index', ['category' => $category->id, 'type' => request()->input('type'), 'date' => request()->input('date'), 'search' => request()->input('search')]) }}">{{ $category->category_name }}</a>
                            </li>
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
                            <li><a
                                    href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => $type->id, 'date' => request()->input('date'), 'search' => request()->input('search')]) }}">{{ $type->type_name }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="dropdown-categories">
                    <div class="select-categories">
                        <span class="selected-categories"> Date </span>
                        <div class="caret-categories"></div>
                    </div>
                    <ul class="menu-categories">
                        <li><a
                                href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => request()->input('type'), 'date' => 'latest', 'search' => request()->input('search')]) }}">Latest</a>
                        </li>
                        <li><a
                                href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => request()->input('type'), 'date' => 'oldest', 'search' => request()->input('search')]) }}">Oldest</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Categories Header -->

        <!-- Categories Card -->
        <div class="card-wrapper">
            @if ($error)
                <h1>Data not Found</h1>
            @else
                @foreach ($articles as $article)
                    <div class="card">
                        <a class="card-image" href="/{{ $article->slug }}">
                            @if ($article->type_id == 1)
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="" />
                            @else
                                <iframe src="{{ $article->video_link }}" frameborder="0" height="175px"
                                    width="311px"></iframe>
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
                                {{ $article->excerpt }}
                            </div>
                            <div class="card-footer">
                                <a href="/{{ $article->slug }}" class="card-nav">Read More &#8594;</a>
                                <small>{{ $article->created_at->format('j/F/Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <!-- End of Categories Card -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/categories-script.js') }}"></script>
@endpush
