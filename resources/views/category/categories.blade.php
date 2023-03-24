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
                        <li>Categories 1</li>
                        <li>Categories 2</li>
                        <li>Categories 3</li>
                        <li>Categories 4</li>
                    </ul>
                </div>
                <div class="dropdown-categories">
                    <div class="select-categories">
                        <span class="selected-categories"> Type </span>
                        <div class="caret-categories"></div>
                    </div>
                    <ul class="menu-categories">
                        <li>Photo</li>
                        <li>Video</li>
                    </ul>
                </div>
                <div class="dropdown-categories">
                    <div class="select-categories">
                        <span class="selected-categories"> Date </span>
                        <div class="caret-categories"></div>
                    </div>
                    <ul class="menu-categories">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End of Categories Header -->

        <!-- Categories Card -->
        <div class="card-wrapper">
            @for ($i = 1; $i <= 15; $i++)
                <div class="card">
                    <a class="card-image" href="/preview">
                        <img src="img/thumbnail-categories.jpg" alt="" />
                    </a>
                    <div class="card-info">
                        <div class="tag-wrapper">
                            <a class="tag" href="/categories">Tag</a>
                        </div>
                        <a href="/" class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod.</a>
                        <div class="card-desc">
                            Facilisis volutpat est velit egestas dui id ornare.
                            Scelerisque felis imperdiet proin fermentum leo vel
                            orci porta. In hac habitasse platea dictumst quisque
                            sagittis.
                        </div>
                        <div class="card-footer">
                            <a href="/" class="card-nav">Read More &#8594;</a>
                            <small>DD/MM/YYYY</small>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <!-- End of Categories Card -->
    </div>
@endsection

@push('script')
    <script src="{{ asset('js/categories-script.js') }}"></script>
@endpush
