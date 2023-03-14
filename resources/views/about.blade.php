    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <link rel="stylesheet" href="css/about-design.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />
        <title>Heiwa | About</title>
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

        <div class="about">
            <div class="row1">
                {{-- <div class="img1wraper"> --}}
                    <div class="about-img">
                        <img src="img/1.jpg" alt="sakura"class="foto1">
                        <img src="img/1a.jpg" alt="sakura"class="foto1a">
                    </div>
                {{-- </div> --}}
                
                <div class="content">
                    <h3> ABOUT</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsa dolorum eius, odit tenetur vitae cumque doloremque 
                        ipsam voluptas est. Qui, accusamus fuga. Error, officia 
                        adipisci eaque eos reprehenderit ratione modi ex quasi est 
                        dolores non temporibus expedita itaque libero ipsa ipsam 
                        deleniti possimus, perferendis nemo quaerat officiis. Eveniet, 
                        eum atque.
                    </p>
                </div>
            </div>
            <hr>
            <div class="row2">
                <div class="about-img1">
                    <img src="img/2.jpg" alt="sakura"class="foto2">
                    <img src="img/2b.jpg" alt="sakura"class="foto2b">
                </div>
                <div class="content">
                    <h3> VISION</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsa dolorum eius, odit tenetur vitae cumque doloremque 
                        ipsam voluptas est. Qui, accusamus fuga. Error, officia 
                        adipisci eaque eos reprehenderit ratione modi ex quasi est 
                        dolores non temporibus expedita itaque libero ipsa ipsam 
                        deleniti possimus, perferendis nemo quaerat officiis. Eveniet, 
                        eum atque.
                    </p>
                    
                </div>
            </div>
            <hr>
            <div class="row3">
                <div class="content">
                    <h3> DOCUMENTATION</h3>
                </div>
                <div class="about-img3">
                    <img src="img/video.jpg" alt="sakura"class="video">
                </div>
            </div>
            <hr>
            <div class="row4">
                <div class="about-img4">
                    <img src="img/4.jpg" alt="sakura"class="foto4">
                </div>
                <div class="content">
                    <h3> PHOTOS</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Ipsa dolorum eius, odit tenetur vitae cumque doloremque 
                        ipsam voluptas est. Qui, accusamus fuga. Error, officia 
                        adipisci eaque eos reprehenderit ratione modi ex quasi est 
                        dolores non temporibus expedita itaque libero ipsa ipsam 
                        deleniti possimus, perferendis nemo quaerat officiis. Eveniet, 
                        eum atque.
                    </p>
                </div>
            </div>
            <hr>
        </div>
        <script src="js/home-script.js"></script>
    </body>
</html>