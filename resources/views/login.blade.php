<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/login-design.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

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

    <!-- Login -->
    <div class="main-container">
        <div class="login">
            <div class="login-form-wrapper">
                <div class="login-form">
                    <h1>WELCOME</h1>
                    <small>Please Sign In to your Account</small>

                    <form action="/login" method="post">
                        @csrf
                        <label class="label" for="username">Username</label>
                        <input class="box" type="username" id="username" name="username"
                            placeholder="Enter your username" required />

                        <label class="label" for="password">Password</label>
                        <input class="box" type="password" id="password" name="password"
                            placeholder="Enter your password" required />

                        <button class="login-button" type="submit">
                            SIGN IN
                        </button>
                    </form>
                </div>
            </div>
            <div class="login-image">
                <img src="img/login-image.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- End of Login -->

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

    <script src="js/login-script.js"></script>
</body>

</html>
