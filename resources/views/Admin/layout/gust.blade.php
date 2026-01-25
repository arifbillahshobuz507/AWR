<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{ asset('gust/favicon.png') }}" rel="icon" />
    <title>@yield('title')</title>
    <meta name="description" content="Login and Register Form Html Template">
    <meta name="author" content="harnishdesign.net">
    <!-- Web Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('gust/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('gust/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('gust/style.css') }}" />
    <link href="{{asset('Admin/Css/toastify.min.css')}}" rel="stylesheet" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="{{ asset('gust/red.css') }}" />
</head>
<body>

<!-- Preloader -->
<div id="loader" class="LoadingOverlay d-none">
    <div class="Line-Progress">
        <div class="indeterminate"></div>
    </div>
</div>

{{--<div class="preloader preloader-dark">--}}
{{--    <div class="lds-ellipsis">--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--        <div></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register">
    <div class="hero-wrap min-vh-100">
        <div class="hero-mask opacity-4 bg-dark"></div>
        <!-- Login Background Image -->
        <div class="hero-bg hero-bg-scroll" style="background-image:url('{{ asset('admin/img/login-bg.png') }}');"></div>
        @yield('content')
    </div>
</div>
<!-- Scripts -->
<script src="{{asset('Admin/Js/toastify-js.js')}}"></script>
<script src="{{asset('Admin/Js/axios.min.js')}}"></script>
<script src="{{asset('Admin/Js/config.js')}}"></script>
<script src="{{ asset('gust/jquery.min.js') }}"></script>
<script src="{{ asset('gust/bootstrap.bundle.min.ts') }}"></script>
<script src="{{ asset('gust/switcher.min.js') }}"></script>
<script src="{{ asset('gust/theme.js') }}"></script>
@yield('script')
</body>
</html>
