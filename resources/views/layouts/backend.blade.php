<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/logo/site_logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>East Star Plastic</title>
</head>

<body style="background-color: #dedada">
    <section class="wrapper">
        <section class="sidebar d-lg-block d-none">
            <div class="d-block shadow mb-5 p-3">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo/logo.png')}}" alt="logo" class="brand_img">
                </a>
            </div>

            <ul class="admin-menu">
                <li class="nav-item">
                    <a href=" {{ url('menuitems')}} " class="nav-link">Menu Items</a>
                </li>
                <li class="nav-item">
                    <a href=" {{ url('category')}} " class="nav-link">Categories</a>
                </li>
                <li class="nav-item">
                    <a href=" {{ url('address')}} " class="nav-link">Contact Address</a>
                </li>
                <li class="nav-item">
                    <a href=" {{ url('products')}} " class="nav-link">Product</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Workshop</a>
                </li>
            </ul>
        </section>
        <section class="main-panel">
            <nav class="navbar sitcky-top">
                <div class="container-fluid">
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand ms-auto" href="#">East Star Plstic Factory</a>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">East Star Plastic</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="main-panel-content">
                @yield('content')
            </div>
        </section>
    </section>



    <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('js/jquery.min.js') }} "></script>
    <script src="{{ asset('js/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('js/app.js') }} "></script>
</body>

</html>
