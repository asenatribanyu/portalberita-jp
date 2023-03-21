<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

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

        <!-- RichText Editor -->
        <link
            rel="stylesheet"
            type="text/css"
            href="https://unpkg.com/trix@2.0.0/dist/trix.css"
        />
        <script
            type="text/javascript"
            src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"
        ></script>

        <!-- Link CSS -->
        <link rel="stylesheet" href="css/dashboard-design.css" />

        <title>Dashboard</title>
    </head>

    <body>
        <!-- Navigation Bar -->
        <nav>
            <div class="sidebar">
                <div class="sidebar-logo">
                    <!-- <i class="bx bx-menu menu-icon"></i> -->
                    <a href="/">Logo.</a>
                </div>

                <div class="menu">
                    <ul class="navlink">
                        <li>
                            <a href="/dashboard" class="nav-item">
                                <i class="bx bx-home-alt navlink-icon"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="/analytics" class="nav-item">
                                <i class="bx bx-line-chart navlink-icon"></i>
                                <span>Analytics</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="navlink">
                        <li>
                            <a href="/" class="nav-logout">
                                <i class="bx bx-log-out navlink-icon"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navigation Bar -->

        <!-- Form -->
        <div class="main-container">
            <div class="main-form">
                <select class="form-select w-25" aria-label="Type Select">
                    <option selected>Choose Content Type</option>
                    <option value="photos">Photos</option>
                    <option value="videos">Videos</option>
                </select>

                <div class="form-title w-75 mt-3">
                    <label for="title">Title:</label>
                    <input
                        class="form-control mt-1"
                        type="text"
                        placeholder="Content Title"
                        aria-label="Title Input"
                        id="title"
                    />
                </div>

                <div class="form-tag w-25 mt-3">
                    <label for="category">Category:</label>
                    <input
                        type="text"
                        aria-label="Tag"
                        placeholder="Content Category"
                        class="form-control mt-1"
                        id="category"
                    />
                </div>

                <div class="form-thumbnail-photo w-50 mt-3">
                    <label>Thumbnail Photo:</label>
                    <input class="form-control" type="file" id="formFile" />
                </div>

                <div class="form-thumbnail-video w-25 mt-3">
                    <label for="video-link">Video Link:</label>
                    <input
                        type="text"
                        aria-label="Tag"
                        placeholder="https://youtu.be/URL"
                        class="form-control mt-1"
                        id="video-link"
                    />
                </div>

                <div class="form-description mt-3">
                    <input id="x" type="hidden" name="content" />
                    <trix-editor input="x"></trix-editor>
                </div>
            </div>
        </div>
        <!-- End of Form -->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

        <script src="js/dashboard-script.js"></script>
    </body>
</html>
