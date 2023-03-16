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

        <div class="main-container">
            <div class="carousel">
                <div class="carousel-slides">
                    <img src="img/img-slider-1.jpg" alt="" />
                    <div class="carousel-info">
                        <span>Tag</span>
                        <h2>Lorem ipsum dolor sit amet. 1</h2>
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
                <div class="carousel-slides">
                    <img src="img/img-slider-2.jpg" alt="" />
                    <div class="carousel-info">
                        <span>Tag</span>
                        <h2>Lorem ipsum dolor sit amet. 2</h2>
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
                <div class="carousel-slides">
                    <img src="img/img-slider-3.jpg" alt="" />
                    <div class="carousel-info">
                        <span>Tag</span>
                        <h2>Lorem ipsum dolor sit amet. 3</h2>
                        <small>DD/MM/YYYY</small>
                    </div>
                    <div class="carousel-button">
                        <i class="bx bx-chevron-left carousel-nav-left"></i>
                        <i class="bx bx-chevron-right carousel-nav-right"></i>
                    </div>
                </div>
            </div>

            <div class="card-wrapper">
                <div class="card">
                    <div class="card-image">
                        <img src="img/2.jpg" alt="" />
                    </div>
                    <div class="card-info">
                        <span>Tag</span>
                        <div class="card-title">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</a
                            >
                        </div>
                        <div class="card-footer">
                            <a href="/">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header-articles">
                <h1>LATEST ARTICLES</h1>
                <a href="/">View All Articles &#8594;</a>
            </div>

            <div class="card-wrapper card-wrapper-latest">
                <div class="card">
                    <div class="card-image">
                        <img src="img/2b.jpg" alt="" />
                    </div>
                    <div class="card-info">
                        <span>Tag</span>
                        <div class="card-title">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</a
                            >
                        </div>
                        <div class="card-desc">
                            Facilisis volutpat est velit egestas dui id ornare.
                            Scelerisque felis imperdiet proin fermentum leo vel
                            orci porta. In hac habitasse platea dictumst quisque
                            sagittis.
                        </div>
                        <div class="card-footer">
                            <a href="/">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="break-point-horizontal">
                <hr />
            </div>
        </div>

        <div class="hero-image">
            <div class="hero-wrapper">
                <img src="img/img-slider-1.jpg" alt="" />
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

        <div class="main-container">
            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header-articles">
                <h1>ARTICLES</h1>
                <a href="/">View All Articles &#8594;</a>
            </div>

            <div class="card-wrapper card-wrapper-all-articles">
                <div class="card">
                    <div class="card-image">
                        <img src="img/1.jpg" alt="" />
                    </div>
                    <div class="card-info">
                        <span>Tag</span>
                        <div class="card-title">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</a
                            >
                        </div>
                        <div class="card-footer">
                            <a href="/">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header-articles">
                <h1>VIDEOS</h1>
                <a href="/">View All Videos &#8594;</a>
            </div>

            <div class="card-wrapper card-wrapper-videos">
                <div class="card">
                    <div class="card-image">
                        <img src="img/4.jpg" alt="" />
                    </div>
                    <div class="card-info">
                        <span>Tag</span>
                        <div class="card-title">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</a
                            >
                        </div>
                        <div class="card-footer">
                            <a href="/">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="header-articles">
                <h1>PHOTOS</h1>
                <a href="/">View All Photos &#8594;</a>
            </div>

            <div class="image-gallery-wrapper">
                <div class="image-1"><img src="" alt="" /></div>
                <div class="image-2"><img src="" alt="" /></div>
                <div class="image-3"><img src="" alt="" /></div>
                <div class="image-4"><img src="" alt="" /></div>
                <div class="image-5"><img src="" alt="" /></div>
                <div class="image-6"><img src="" alt="" /></div>
                <div class="image-7"><img src="" alt="" /></div>
                <div class="image-8"><img src="" alt="" /></div>
                <div class="image-9"><img src=""" alt="" /></div>
            </div>
        </div>
        <footer>
            <div class="footer-container">
                <div class="footer-info">
                    <small>2023 &#169; Name.</small>
                    <small>Crafted With <i class="bx bxs-heart"></i></small>
                </div>
            </div>
        </footer>

        <script src="js/home-script.js"></script>
    </body>
</html>
