<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="stylesheet" href="css/home-design.css" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- Box Icons -->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <title>Heiwa</title>
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
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/categories">Categories</a></li>
                        <li><a href="/">Language</a></li>
                        <li><a href="/login">Sign in</a></li>
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

        <div class="main-container">
            <!-- Carousel -->
            <div class="carousel">
                @for($i = 1; $i <= 3; $i++)
                <div class="carousel-slides">
                    <img src="img/slider-{{ $i }}.jpg" alt="" />
                    <div class="carousel-info">
                        <span>Tag</span>
                        <a href="/"
                            >Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit.</a
                        >
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
                @endfor
            </div>
            <!-- End of Carousel -->

            <!-- Featured Card -->
            <div class="card-home-wrapper">
                @for($i = 1; $i <= 3; $i++)
                <div class="card-home">
                    <div class="card-home-image">
                        <img src="img/thumbnail.jpg" alt="" />
                    </div>
                    <div class="card-home-info">
                        <span>Tag</span>
                        <a href="/" class="card-home-title"
                            >Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod.</a
                        >

                        <div class="card-home-footer">
                            <a href="/" class="card-home-nav"
                                >Read More &#8594;</a
                            >
                            <small>DD/MM/YYYY</small>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <!-- End of Featured Card -->

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header">
                <h1>LATEST ARTICLES</h1>
                <a href="/">View All Articles &#8594;</a>
            </div>

            <!-- Latest Articles Card -->
            <div class="card-home-wrapper">
                @for($i = 1; $i <= 3; $i++)
                <div class="card-home">
                    <div class="card-home-image">
                        <img src="img/thumbnail.jpg" alt="" />
                    </div>
                    <div class="card-home-info">
                        <span>Tag</span>
                        <a href="/" class="card-home-title"
                            >Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod.</a
                        >
                        <div class="card-home-desc">
                            Facilisis volutpat est velit egestas dui id ornare.
                            Scelerisque felis imperdiet proin fermentum leo vel
                            orci porta. In hac habitasse platea dictumst quisque
                            sagittis.
                        </div>
                        <div class="card-home-footer">
                            <a href="/" class="card-home-nav"
                                >Read More &#8594;</a
                            >
                            <small>DD/MM/YYYY</small>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <!-- End of Latest Articles Card -->

            <div class="break-point-horizontal">
                <hr />
            </div>
        </div>

        <!-- Hero -->
        <div class="hero-image">
            <div class="hero-wrapper">
                <img src="img/hero.jpg" alt="" />
                <div class="hero-info">
                    <div class="hero-desc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Metus dictum at tempor commodo
                            ullamcorper a lacus vestibulum.
                        </p>
                        <a href="/">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Hero -->

        <div class="main-container">
            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header">
                <h1>ARTICLES</h1>
                <a href="/">View All Articles &#8594;</a>
            </div>

            <!-- Articles Card -->
            <div class="card-home-wrapper">
                @for($i = 1; $i <= 9; $i++)
                <div class="card-home">
                    <div class="card-home-image">
                        <img src="img/thumbnail.jpg" alt="" />
                    </div>
                    <div class="card-home-info">
                        <span>Tag</span>
                        <a href="/" class="card-home-title"
                            >Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod.</a
                        >
                        <div class="card-home-desc">
                            Facilisis volutpat est velit egestas dui id ornare.
                            Scelerisque felis imperdiet proin fermentum leo vel
                            orci porta. In hac habitasse platea dictumst quisque
                            sagittis.
                        </div>
                        <div class="card-home-footer">
                            <a href="/" class="card-home-nav"
                                >Read More &#8594;</a
                            >
                            <small>DD/MM/YYYY</small>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <!-- End of Articles Card -->

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header">
                <h1>VIDEOS</h1>
                <a href="/">View All Videos &#8594;</a>
            </div>

            <!-- Videos Card -->
            <div class="card-home-wrapper">
                @for($i = 1; $i <= 3; $i++)
                <div class="card-home">
                    <div class="card-home-image">
                        <img src="img/thumbnail.jpg" alt="" />
                    </div>
                    <div class="card-home-info">
                        <span>Tag</span>
                        <a href="/" class="card-home-title"
                            >Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod.</a
                        >
                        <div class="card-home-desc">
                            Facilisis volutpat est velit egestas dui id ornare.
                            Scelerisque felis imperdiet proin fermentum leo vel
                            orci porta. In hac habitasse platea dictumst quisque
                            sagittis.
                        </div>
                        <div class="card-home-footer">
                            <a href="/" class="card-home-nav"
                                >Read More &#8594;</a
                            >
                            <small>DD/MM/YYYY</small>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <!-- End of Videos Card -->

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header">
                <h1>PHOTOS</h1>
                <a href="/">View All Photos &#8594;</a>
            </div>

            <!-- Image Gallery -->
            <div class="image-gallery-wrapper">
                @for($i = 1; $i <= 9; $i++)
                <div class="image-{{ $i }}"><img src="" alt="" /></div>
                @endfor
            </div>
            <!-- End of Image Gallery -->
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

        <script src="js/home-script.js"></script>
    </body>
</html>