@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/categories-design.css') }}">
@endpush

@section('content')
    {{ $local = session('locale') ?? ($local = config('app.locale')) }}
    <div class="main-container">
        <!-- Categories Header -->
        <div class="header">
            <h1>CATEGORIES</h1>
            <div class="categories-wrapper">
                <div class="categories-label">
                    Filter:
                </div>
                <div class="dropdown-wrapper">
                    <div class="dropdown-categories">
                        <div class="select-categories">
                            <span class="selected-categories">
                                {{ $select_categories }}
                            </span>
                            <div class="caret-categories"></div>
                        </div>
                        <ul class="menu-categories">
                            @foreach ($categories as $category)
                                <li><a
                                        href="{{ route('categories.index', ['category' => $category->category_name, 'type' => request()->input('type'), 'date' => request()->input('date'), 'search' => request()->input('search')]) }}">{{ $category->category_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dropdown-categories">
                        <div class="select-categories">
                            <span class="selected-categories"> {{ $select_type }} </span>
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
                            <span class="selected-categories"> {{ $select_date }} </span>
                            <div class="caret-categories"></div>
                        </div>
                        <ul class="menu-categories">
                            <li><a
                                    href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => request()->input('type'), 'date' => 'Latest', 'search' => request()->input('search')]) }}">Latest</a>
                            </li>
                            <li><a
                                    href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => request()->input('type'), 'date' => 'Oldest', 'search' => request()->input('search')]) }}">Oldest</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Categories Header -->

        <!-- Categories Card -->
        <div class="card-wrapper">
            @if ($error)
                <div class="no-data">
                    Data not found
                </div>
            @else
                @foreach ($articles as $article)
                    <div class="card">
                        <div class="detail-wrapper">
                            <div class="card-image">
                                @if ($article->type_id == 1)
                                    <a href="/{{ $article->slug }}">
                                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="" />
                                    </a>
                                    <div class="card-view"><small>&#128065; {{ $article->counts }}</small></div>
                                @else
                                    <iframe src="{{ 'https://www.youtube.com/embed/' . $article->video_link }}"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                    <div class="card-view"><small>&#128065; {{ $article->counts }}</small></div>
                                @endif
                            </div>
                            <div class="card-info">
                                <div class="tag-wrapper">
                                    @foreach ($article->categories as $category)
                                        <a href="/categories">{{ $category->category_name }}</a>
                                    @endforeach
                                </div>
                                <div class="card-title">
                                    <a href="/{{ $article->slug }}">{{ $article->translation($local)->title }}</a>
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
        <!-- End of Categories Card -->
    </div>


@endsection

@push('script')
    <script src="{{ asset('js/categories-script.js') }}"></script>
@endpush
