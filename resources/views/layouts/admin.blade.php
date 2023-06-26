<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') -- Admin</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('/admin/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/custom/css/app-custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('/admin/assets/img/book.png') }}" />
    @stack('style_one')
    @stack('style')
</head>

<body>
{{--<div class="loader"></div>--}}
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar sticky">
            <div class="form-inline me-auto">
                <ul class="navbar-nav mr-3">
                    <li>
                        <a href="#" data-bs-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <span class="d-sm-none d-lg-inline-block text-dark mx-2">    @if(auth()->check()) {{ucfirst(auth()->user()->name)}}@endif</span>
                        <img alt="image" src="{{ auth()->user()->photo?:asset('/admin/assets/img/user_logo.png') }}"
                              class="user-img-radious-style"> </a>
                    <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">@if(auth()->check()) {{auth()->user()->name}}@endif</div>
{{--                        <a href="profile.html" class="dropdown-item has-icon">--}}
{{--                            <i class="far fa-user"></i> Profile--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>--}}
{{--                            Settings--}}
{{--                        </a>--}}
                        <div class="dropdown-divider"></div>
                        <div >
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt mt-2"></i>
                                    Logout
                                </button>
                            </form>
                        </div>

                    </div>
                </li>
            </ul>
        </nav>
        @include('admin.sidebar')
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                @yield('content')
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="email:ai1996yil@gmail.com">Azizbek Ismoilov</a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{ asset('/admin/assets/js/app.min.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('/admin/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('/admin/assets/js/page/index.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('/admin/assets/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('/admin/assets/js/custom.js') }}"></script>
@stack('script_one')
@stack('script_two')
@stack('script')
</body>


</html>
