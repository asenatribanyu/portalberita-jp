<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- RichText Editor -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css" />
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard-design.css') }}" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>Heiwa {{ $title }}</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="sidebar">
            <div class="sidebar-logo">
                <i class="bx bx-menu menu-icon"></i>
                <a href="/">Heiwa.</a>
                {{-- <i class="bx bx-x side-close"></i> --}}
            </div>

            <div class="menu">
                <ul class="navlink">
                    <li>
                        <a href="/" class="nav-item nav-home">
                            <i class="bx bx-home-alt navlink-icon"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard" class="nav-item {{ $title === '| Dashboard' ? 'nav-active' : '' }}">
                            <i class="bx bxs-dashboard navlink-icon"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/article/tag"
                            class="nav-item {{ $title === '| Add Tag' ? 'nav-active' : '' }}">
                            <i class="bx bx-tag navlink-icon"></i>
                            <span>Tag</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/article/create"
                            class="nav-item {{ $title === '| Add Content' ? 'nav-active' : '' }}">
                            <i class="bx bx-plus-circle navlink-icon"></i>
                            <span>Add Content</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/article/photos"
                            class="nav-item {{ $title === '| Add Photos' ? 'nav-active' : '' }}">
                            <i class='bx bx-photo-album navlink-icon'></i>
                            <span>Add Photos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/article/show"
                            class="nav-item {{ $title === '| Edit Content' ? 'nav-active' : '' }}">
                            <i class="bx bxs-edit navlink-icon"></i>
                            <span>Edit Content</span>
                        </a>
                    </li>
                </ul>

                <ul class="navlink">
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="nav-logout">
                                <i class="bx bx-log-out navlink-icon"></i>
                                <span>Sign Out</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Form -->
    <div class="main-container">@yield('content')</div>
    <!-- End of Form -->

    @stack('script')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->

    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
        });
    </script>
    <!-- End of DataTables JS -->
</body>

</html>
