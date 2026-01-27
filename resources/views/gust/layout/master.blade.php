<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{ asset('gust/favicon.png') }}" rel="icon" />
    <title>@yield('title')</title>
    <meta name="description" content="Login">
    <meta name="author" content="harnishdesign.net">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gust/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('gust/css/style.css') }}" />
    <link href="{{ asset('gust/css/toastify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('gust/css/progress.css') }}" rel="stylesheet" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="{{ asset('gust/css/red.css') }}" />
</head>

<body>
    <!-- Preloader -->
    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <div id="main-wrapper" class="oxyy-login-register">
        <div class="hero-wrap min-vh-100">
            <div class="hero-mask opacity-4 bg-dark"></div>
            <!-- Login Background Image -->
            <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ asset('gust/img/login-bg.png') }}');">
            </div>
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('gust/Js/toastify-js.js') }}"></script>
    <script src="{{ asset('gust/Js/axios.min.js') }}"></script>
    <script src="{{ asset('gust/Js/config.js') }}"></script>
    <script src="{{ asset('gust/js/jquery.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
