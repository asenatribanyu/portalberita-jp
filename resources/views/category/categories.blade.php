@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/categories-design.css') }}">
@endpush

@section('content')
    {{ $local = session('locale') ?? ($local = config('app.locale')) }}
    <div class="main-container">
        <!-- Categories Header -->
        <div class="header">
            <h1>{{ __('messages.Categories') }}</h1>
            <div class="categories-wrapper">
                <div class="categories-label">
                    {{ __('messages.Filter') }}
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
                                <a
                                    href="{{ route('categories.index', ['category' => $category->category_name, 'type' => request()->input('type'), 'date' => request()->input('date'), 'search' => request()->input('search')]) }}">
                                    <li>
                                        {{ $category->category_name }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dropdown-categories">
                        <div class="select-categories">
                            <span class="selected-categories"> {{ $select_type }} </span>
                            <div class="caret-categories"></div>
                        </div>
                        <ul class="menu-categories">
                            <a
                                href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => 1, 'date' => request()->input('date'), 'search' => request()->input('search')]) }}">
                                <li>{{ __('messages.Photos') }}</li>
                            </a>
                            <a
                                href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => 2, 'date' => request()->input('date'), 'search' => request()->input('search')]) }}">
                                <li>{{ __('messages.Videos') }}</li>
                            </a>
                            {{-- @foreach ($types as $type)
                                <a
                                    href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => $type->id, 'date' => request()->input('date'), 'search' => request()->input('search')]) }}">
                                    <li>
                                        {{ $type->type_name }}
                                    </li>
                                </a>
                            @endforeach --}}
                        </ul>
                    </div>
                    <div class="dropdown-categories">
                        <div class="select-categories">
                            <span class="selected-categories"> {{ $select_date }} </span>
                            <div class="caret-categories"></div>
                        </div>
                        <ul class="menu-categories">
                            <a
                                href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => request()->input('type'), 'date' => 'Latest', 'search' => request()->input('search')]) }}">
                                <li>{{ __('messages.Latest') }}</li>
                            </a>
                            <a
                                href="{{ route('categories.index', ['category' => request()->input('category'), 'type' => request()->input('type'), 'date' => 'Oldest', 'search' => request()->input('search')]) }}">
                                <li>{{ __('messages.Oldest') }}</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="categories-reset">
                    <a href="/categories"> {{ __('messages.Reset') }}</a>
                </div>
            </div>
        </div>
        <!-- End of Categories Header -->

        <!-- Categories Card -->
        <div class="card-wrapper">
            @if ($error)
                <div class="no-data">
                    {{ __('messages.Data Not Found') }}
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
                                    <a href="/{{ $article->slug }}">{{ __('messages.Read More') }} &#8594;</a>
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
