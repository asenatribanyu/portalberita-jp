<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="stylesheet" href="css/categories-design.css" />

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
            <div class="header-categories">
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

            <div class="card-wrapper-categories">
                <div class="card-categories">
                    <div class="card-image-categories">
                        <img src="img/2b.jpg" alt="" />
                    </div>
                    <div class="card-info-categories">
                        <span>Tag</span>
                        <div class="card-title-categories">
                            <a href="/"
                                >Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</a
                            >
                        </div>
                        <div class="card-desc-categories">
                            Facilisis volutpat est velit egestas dui id ornare.
                            Scelerisque felis imperdiet proin fermentum leo vel
                            orci porta. In hac habitasse platea dictumst quisque
                            sagittis.
                        </div>
                        <div class="card-footer-categories">
                            <a href="/">Read More &#8594;</a>
                            <small>DD/MM/YY</small>
                        </div>
                    </div>
                </div>
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

        <script src="js/categories-script.js"></script>
    </body>
</html>
