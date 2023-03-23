<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!-- CSS Link -->
        <link rel="stylesheet" href="css/about-design.css" />

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

        <title>Heiwa | About</title>
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
            <!-- About 1 -->
            <div class="about">
                <div class="about-img-wrapper">
                    <div class="img-about pos-1">
                        <img src="img/thumbnail-about-1.jpg" alt="" />
                    </div>
                    <div class="img-about pos-2">
                        <img src="img/thumbnail-about-2.jpg" alt="" />
                    </div>
                </div>
                <div class="about-info-wrapper">
                    <div class="about-info">
                        <div class="title">ABOUT</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Commodo ullamcorper a lacus
                            vestibulum sed arcu non odio euismod. Interdum
                            posuere lorem ipsum dolor sit amet consectetur
                            adipiscing elit. Nunc sed id semper risus in
                            hendrerit gravida rutrum quisque. Urna neque viverra
                            justo nec ultrices dui sapien eget mi. Vel fringilla
                            est ullamcorper eget nulla facilisi etiam dignissim.
                            Quis viverra nibh cras pulvinar mattis nunc sed
                            blandit. Habitant morbi tristique senectus et netus
                            et malesuada. Facilisis mauris sit amet massa vitae
                            tortor condimentum lacinia. Pulvinar etiam non quam
                            lacus. Cursus vitae congue mauris rhoncus aenean vel
                            elit scelerisque.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End of About 1 -->

            <div class="break-point-horizontal">
                <hr />
            </div>

            <!-- About 2 -->
            <div class="about">
                <div class="about-info-wrapper">
                    <div class="about-info">
                        <div class="title">VISION</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Commodo ullamcorper a lacus
                            vestibulum sed arcu non odio euismod. Interdum
                            posuere lorem ipsum dolor sit amet consectetur
                            adipiscing elit. Nunc sed id semper risus in
                            hendrerit gravida rutrum quisque. Urna neque viverra
                            justo nec ultrices dui sapien eget mi. Vel fringilla
                            est ullamcorper eget nulla facilisi etiam dignissim.
                            Quis viverra nibh cras pulvinar mattis nunc sed
                            blandit. Habitant morbi tristique senectus et netus
                            et malesuada. Facilisis mauris sit amet massa vitae
                            tortor condimentum lacinia. Pulvinar etiam non quam
                            lacus. Cursus vitae congue mauris rhoncus aenean vel
                            elit scelerisque.
                        </p>
                    </div>
                </div>
                <div class="about-img-wrapper">
                    <div class="img-about pos-3">
                        <img src="img/thumbnail-about-1.jpg" alt="" />
                    </div>
                    <div class="img-about pos-4">
                        <img src="img/thumbnail-about-2.jpg" alt="" />
                    </div>
                </div>
            </div>
            <!-- End of About 2 -->

            <div class="break-point-horizontal">
                <hr />
            </div>

            <!-- Documentation -->
            <div class="header">
                <div class="header-title">DOCUMENTATION</div>
            </div>

            <div class="hero">
                <img src="img/hero-about.jpg" alt="" />
                <div class="hero-info">
                    <h1>See Our Videos</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod
                    </p>
                </div>
            </div>

            <div class="break-point-horizontal">
                <hr />
            </div>

            <div class="photos">
                <div class="photos-wrapper">
                    @for ($i = 1; $i <= 3; $i++)
                    <div class="photos-slider">
                        <img src="img/thumbnail-about-{{ $i }}.jpg" alt="" />
                        <div class="photos-button">
                            <i class="bx bx-chevron-left photos-nav-left"></i>
                            <i class="bx bx-chevron-right photos-nav-right"></i>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="photos-info-wrapper">
                    <div class="photos-info">
                        <div class="title">PHOTOS</div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Commodo ullamcorper a lacus
                            vestibulum sed arcu non odio euismod. Interdum
                            posuere lorem ipsum dolor sit amet consectetur
                            adipiscing elit. Nunc sed id semper risus in
                            hendrerit gravida rutrum quisque. Urna neque viverra
                            justo nec ultrices dui sapien eget mi. Vel fringilla
                            est ullamcorper eget nulla facilisi etiam dignissim.
                            Quis viverra nibh cras pulvinar mattis nunc sed
                            blandit. Habitant morbi tristique senectus et netus
                            et malesuada. Facilisis mauris sit amet massa vitae
                            tortor condimentum lacinia. Pulvinar etiam non quam
                            lacus. Cursus vitae congue mauris rhoncus aenean vel
                            elit scelerisque.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End of Documentation -->
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

        <script src="js/about-script.js"></script>
    </body>
</html>
