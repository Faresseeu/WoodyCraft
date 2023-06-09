<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('dashboard/assets/')}}"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>@yield('page_title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('dashboard/assets/')}}img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('dashboard/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('dashboard/assets/js/config.js')}}"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="{{route(('addcategory'))}}" class="app-brand-link">
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">WoodyCraft</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->

                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Category</span>
                </li>

                <li class="menu-item ">
                    <a href="{{ route('addcategory') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Add category</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('allcategory') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">All category</div>
                    </a>
                </li>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Sub Category</span>
                </li>

                <li class="menu-item ">
                    <a href="{{ route('addsubcategory') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Add Sub category</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('allsubcategory') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">All sub category</div>
                    </a>
                </li>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Product</span>
                </li>


                <li class="menu-item ">
                    <a href="{{ route('addproduct') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Add product</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('allproducts') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">All product</div>
                    </a>
                </li>

                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Orders</span>
                </li>

                <li class="menu-item ">
                    <a href="{{ route('pendingorder') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Pending Orders</div>
                    </a>
                </li>

            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown" style="position: relative; left:1500px; list-style: none;">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{asset('dashboard/assets/')}}img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{asset('dashboard/assets/')}}img/avatars/user.png" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">User Admin</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="auth-login-basic.html">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->

            <!-- Content wrapper -->
            <div class ="content-wrapper">
                @yield('content')
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('dashboard/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('dashboard/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('dashboard/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('dashboard/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('dashboard/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('dashboard/assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('dashboard/assets/js/dashboards-analytics.js')}}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
