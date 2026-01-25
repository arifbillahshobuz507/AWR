<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title',Helper::get_option('app_name'))</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('user-assets')}}/img/logo/favicon.png">
  <!-- CSS here -->
  @include('user-interface._partials.style')
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- pre loader area start -->
<div id="loading">
  <div id="loading-center">
    <div id="loading-center-absolute">
      <!-- loading content here -->
      <div class="tp-preloader-content">
        <div class="tp-preloader-logo">
          <div class="tp-preloader-circle">
            <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
              <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
            </svg>
          </div>
          <img src="{{asset('assets/pre_loader.png')}}" alt="">
        </div>
        <h3 class="tp-preloader-title">{{Helper::get_option('app_name')}}</h3>
        <p class="tp-preloader-subtitle">Loading</p>
      </div>
    </div>
  </div>
</div>
<!-- pre loader area end -->
<!-- back to top start -->
@include('user-interface.header-footer.back-to-top')
<!-- back to top end -->
<!-- offcanvas area start -->
@include('user-interface.header-footer.offcanvas')
<!-- offcanvas area end -->
<!-- mobile menu area start -->
@include('user-interface.header-footer.mobaile-menu')
<!-- mobile menu area end -->
<!-- search area start -->
@include('user-interface.header-footer.search')
<!-- search area end -->
<!-- cart mini area start -->
@include('user-interface.header-footer.cart-mini')
<!-- cart mini area end -->
<!-- header area start -->
@include('user-interface.header-footer.header')
<!-- header area end -->
<main>
  @yield('user-content')
  @include('user-interface.header-footer.product-modal')
</main>
<!-- footer area start -->
@include('user-interface.header-footer.footer')
<!-- footer area end -->
<!-- JS here -->
@include('user-interface._partials.script')
</body>
</html>


