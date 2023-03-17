<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heiwa | Login</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/login-design.css">

    <!-- Box Icons -->
    <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

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

    <!-- Login Page -->
    <div class="container">
        <div class="wraper">
            <div class="login">
                <form action="">
                    <h1>Welcome</h1>
                    <hr>
                    <p>Please Sign-In to your Account</p>
                    <label for="">Username</label>
                    <input type="text" placeholder="username123">
                    <label for="">Password</label>
                    <input type="password" placeholder="password123">
                    <button>Sign-In</button>
                </form>
            </div>
            <div class="right">
                <img src="img/login.jpg" alt="">
            </div>
        </div>
    </div>
    
    <!-- End of Login Page -->

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