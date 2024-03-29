<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main-design.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    @stack('style')

    <title>Heiwa {{ $title }}</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbars">
        <div class="navbar">
            <i class="bx bx-menu side-open"></i>
            <span class="logo navLogo">
                <a href="/">{{ __('messages.Heiwa') }}</a>
            </span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo">
                        <a href="/">{{ __('messages.Heiwa') }}</a>
                    </span>
                    <i class="bx bx-x side-close"></i>
                </div>
                <ul class="navlink">
                    <li><a class="{{ $title === '' ? 'nav-active' : '' }}" href="/">{{ __('messages.Home') }}</a>
                    </li>
                    <li><a class="{{ $title === '| About' ? 'nav-active' : '' }}"
                            href="/about">{{ __('messages.About Us') }}</a></li>
                    <li><a class="{{ $title === '| Categories' ? 'nav-active' : '' }}"
                            href="/categories">{{ __('messages.Categories') }}</a>
                    </li>
                    <li class="menu-lang">
                        <a style="cursor: default">{{ __('messages.Languages') }}</a>
                        <ul class="{{ $local = session('locale') ?? ($local = config('app.locale')) }}"
                            {{ $local = session('locale') ?? ($local = config('app.locale')) }}>
                            <li><a class=" {{ $local === 'id' ? 'lang-active' : '' }}" href="/switch/id">Indonesia</a>
                            </li>
                            <li><a class="{{ $local === 'jp' ? 'lang-active' : '' }}" href="/switch/jp">日本語</a></li>
                        </ul>
                    </li>
                    <li><a class="{{ $title === '| Gallery' ? 'nav-active' : '' }}"
                            href="/gallery">{{ __('messages.Gallery') }}</a>
                    </li>
                    @auth
                        <li><a href="/dashboard">{{ __('messages.Dashboard') }}</a></li>
                    @endauth
                </ul>
            </div>
            <form method="GET" action="{{ route('categories.index') }}">
                <div class="searchBox">
                    <div class="searchToggle">
                        <i class="bx bx-x cancel"></i>
                        <i class="bx bx-search search"></i>
                    </div>
                    <div class="searchField">
                        <input type="text" name="search" value="{{ request()->input('search') }}"
                            placeholder="{{ __('messages.Search') }}...">
                        {{-- <input type="text" placeholder="Search..." /> --}}
                        <i class="bx bx-search search"></i>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <!-- End of Navigation Bar -->

    <div class="main">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-wrapper">
                <div class="footer-desc">
                    <a href="/">
                        <h1>{{ __('messages.Heiwa') }}</h1>
                    </a>
                    <p>{{__('messages.Footer')}}
                    </p>
                </div>
                <div class="footer-contact">
                    <h1>{{ __('messages.Contact') }}</h1>
                    <p>Gedung B Lt.2, Universitas Widyatama Jl.Cikutra no 204 A Bandung Jawa Barat, Indonesia 40124.
                    </p>
                    <p>Phone : +62-22-7275855 ext 228</p>
                    <p>Fax : +62-22-720299</p>
                </div>
                <div class="footer-links">
                    <h1>{{ __('messages.Quick Links') }}</h1>
                    <div class="links-group">
                        <div class="group-ig">
                            <div><a class="wrap" href="https://www.instagram.com/jepangs1_widyatama"
                                    target="_blank"><i class='bx bxl-instagram'></i>S1 Bahasa Jepang</a>
                            </div>
                            <div><a class="wrap" href="https://www.instagram.com/bahasajepangd3_utama/"
                                    target="_blank"><i class='bx bxl-instagram'></i>D3 Bahasa Jepang</a>
                            </div>
                            <div><a class="wrap" href="https://www.instagram.com/himatifutama/" target="_blank"><i
                                        class='bx bxl-instagram'></i>Teknik Informatika</a></div>
                        </div>
                        <div class="group-yt">
                            <div><a class="wrap" href="https://www.youtube.com/@s1bahasajepanguniversitasw895"
                                    target="_blank"><i class='bx bxl-youtube'></i></i>S1 Bahasa Jepang</a>
                            </div>
                            <div><a class="wrap" href="https://www.youtube.com/@prodijepangd3" target="_blank"><i
                                        class='bx bxl-youtube'></i></i>D3 Bahasa Jepang</a>
                            </div>
                            {{-- <div><a class="wrap" href="/"><i class='bx bxl-youtube'></i></i>Teknik
                                    Informatika</a></div> --}}
                        </div>
                        <div class="group-url">
                            <div><a class="wrap" href="https://bahasajepangs1.widyatama.ac.id/" target="_blank"><i
                                        class='bx bx-link'></i></i>S1 Bahasa Jepang</a>
                            </div>
                            <div><a class="wrap" href="https://bahasajepang.widyatama.ac.id/" target="_blank"><i
                                        class='bx bx-link'></i></i>D3 Bahasa Jepang</a>
                            </div>
                            <div><a class="wrap" href="https://if.widyatama.ac.id/" target="_blank"><i
                                        class='bx bx-link'></i></i>Teknik
                                    Informatika</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <small>Copyright &#169; 2023 Bahasa Jepang Universitas Widyatama | Designed by Teknik
                    Informatika</small>
                <small>Crafted With <i class="bx bxs-heart"></i></small>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    @stack('script')
    <script src="{{ asset('js/navbar-script.js') }}"></script>
</body>

</html>
