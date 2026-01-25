<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', env('app_name'))</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user-assets') }}/img/logo/favicon.png">
    <!-- CSS here -->
</head>

<body>
    <!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <!-- pre loader area start -->

    <!-- pre loader area end -->
    <main>
        @yield('content')
        {{-- @include('user-interface.header-footer.product-modal') --}}
    </main>
    <!-- footer area start -->
    {{-- @include('user-interface.header-footer.footer') --}}
    <!-- footer area end -->
    <!-- JS here -->
    @include('userInterface._partials.script')
</body>

</html>
