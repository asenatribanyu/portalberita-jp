<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main-design.css">
    @stack('style')

    <title>Heiwa | {{ $title }}</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="navbar">
            <i class="bx bx-menu side-open"></i>
            <span class="logo navLogo">
                <a href="/">Logo.</a>
            </span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo">
                        <a href="/">Logo.</a>
                    </span>
                    <i class="bx bx-x side-close"></i>
                </div>

                <ul class="navlink">
                    <li><a class="{{ $title === 'Home' ? 'nav-active' : '' }}" href="/">Home</a></li>
                    <li><a class="{{ $title === 'About' ? 'nav-active' : '' }}" href="/about">About</a></li>
                    <li><a class="{{ $title === 'Categories' ? 'nav-active' : '' }}" href="/categories">Categories</a>
                    </li>
                    <li><a href="/">Language</a></li>
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a class="{{ $title === 'Sign In' ? 'nav-active' : '' }}" href="/login">Sign in</a></li>
                </ul>
            </div>

            <div class="searchBox">
                <div class="searchToggle">
                    <i class="bx bx-x cancel"></i>
                    <i class="bx bx-search search"></i>
                </div>

                <div class="searchField">
                    <input type="text" placeholder="Search..." />
                    <i class="bx bx-search search"></i>
                </div>
            </div>
        </div>
    </nav>
    <!-- End of Navigation Bar -->

    <div class="main">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <small>2023 &#169; Name.</small>
                <small>Crafted With <i class="bx bxs-heart"></i></small>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    @stack('script')
</body>

</html>