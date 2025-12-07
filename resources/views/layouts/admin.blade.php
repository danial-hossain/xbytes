<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="surfside media" />
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @stack("styles")
</head>
<body class="body">
    <div id="wrapper">
        <div id="page">
            <div class="layout-wrap">

                <!-- Sidebar -->
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="{{ route('admin.index') }}" id="site-logo-inner">
                            <img id="logo_header" alt="" src="images/logo/logo.png"
                                 data-light="images/logo/logo.png" data-dark="images/logo/logo.png">
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>
                    </div>
                    <div class="center">
                        <div class="center-item">
                            <div class="center-heading">Main Home</div>
                            <ul class="menu-list">
                                <li class="menu-item">
                                    <a href="{{ route('admin.index') }}">
                                        <div class="icon"><i class="icon-grid"></i></div>
                                        <div class="text">Dashboard</div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="center-item">
                            <ul class="menu-list">

                                <!-- Products -->
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-shopping-cart"></i></div>
                                        <div class="text">Products</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="add-product.html">
                                                <div class="text">Add Product</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="products.html">
                                                <div class="text">Products</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Brand -->
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Brand</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="add-brand.html">
                                                <div class="text">New Brand</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="brands.html">
                                                <div class="text">Brands</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Category -->
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-layers"></i></div>
                                        <div class="text">Category</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.categories.create') }}">
                                                <div class="text">New Category</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="{{ route('admin.categories.index') }}">
                                                <div class="text">Categories</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Orders -->
                                <li class="menu-item has-children">
                                    <a href="javascript:void(0);" class="menu-item-button">
                                        <div class="icon"><i class="icon-file-plus"></i></div>
                                        <div class="text">Order</div>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-menu-item">
                                            <a href="orders.html">
                                                <div class="text">Orders</div>
                                            </a>
                                        </li>
                                        <li class="sub-menu-item">
                                            <a href="order-tracking.html">
                                                <div class="text">Order Tracking</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Other Menu Items -->
                                <li class="menu-item"><a href="slider.html"><div class="icon"><i class="icon-image"></i></div><div class="text">Slider</div></a></li>
                                <li class="menu-item"><a href="coupons.html"><div class="icon"><i class="icon-grid"></i></div><div class="text">Coupons</div></a></li>
                                <li class="menu-item"><a href="users.html"><div class="icon"><i class="icon-user"></i></div><div class="text">User</div></a></li>
                                <li class="menu-item"><a href="settings.html"><div class="icon"><i class="icon-settings"></i></div><div class="text">Settings</div></a></li>

                                <!-- Logout -->
                                <li class="menu-item">
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <div class="icon"><i class="icon-settings"></i></div>
                                            <div class="text">Logout</div>
                                        </a>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="section-content-right">

                    <div class="header-dashboard">
                        <!-- Header / Search / Notifications / User Menu -->
                        <!-- Keep your existing header HTML here -->
                    </div>

                    <div class="main-content">
                        <!-- This is where the page content will appear -->
                        @yield('content')

                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 SurfsideMedia</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>   
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>    
    <script src="{{ asset('js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @stack("scripts")
</body>
</html>
