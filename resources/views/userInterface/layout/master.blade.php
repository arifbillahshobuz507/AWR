<!DOCTYPE html>

<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from ochaka.vercel.app/home-electronic-market.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Feb 2026 07:28:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Ochaka - Multipurpose eCommerce HTML Template</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="Themesflat Ochaka - A modern and elegant Multipurpose eCommerce HTML Template, perfect for online stores selling rings, necklaces, watches, and other accessories. SEO-optimized, fast-loading, and fully customizable.">

    <!-- font -->
   <link rel="stylesheet" href="{{ asset('userInterface/fonts/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('userInterface/icon/icomoon/style.css') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('userInterface/sibforms.com/forms/end-form/build/sib-styles.css')}}">
<link rel="stylesheet" href="{{ asset('userInterface/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('userInterface/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('userInterface/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('userInterface/css/styles.css') }}">


    <!-- Favicon and Touch Icons  -->
   <link rel="shortcut icon" href="{{ asset('userInterface/images/logo/favicon.svg') }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset('userInterface/images/logo/favicon.svg') }}">


</head>

<body>

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-caret-up"></span>
    </button>

    <!-- preload -->
    <div class="preload preload-container" id="preload">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <!-- Top Bar-->
        <div class="tf-topbar bg-dark-blu type-space-2 line-bt-3">
            <div class="container-full-2">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="topbar-left justify-content-center justify-content-sm-start">
                            <ul class="topbar-option-list">
                                <li class="h6 d-none d-sm-flex">
                                    <a href="tel:18001234567" class="text-white link track"><i class="icon icon-phone"></i> Call us for free: +1(800)
                                        123
                                        4567</a>
                                </li>
                                <li class="br-line d-none d-sm-flex"></li>
                                <li class="h6">
                                    <a href="track-order.html" class="text-white link">Free Shipping for orders over $150</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 d-none d-lg-block">
                        <ul class="topbar-right topbar-option-list">
                            <li class="h6">
                                <a href="faq.html" class="text-white link">Help & FAQs</a>
                            </li>
                            <li class="br-line"></li>
                            <li class="h6">
                                <a href="track-order.html" class="text-white link track"><i class="icon icon-document-search"></i> Track Order</a>
                            </li>
                            <li class="br-line d-none d-xl-inline-flex"></li>
                            <li class="tf-languages d-none d-xl-block">
                                <select class="tf-dropdown-select style-default color-white type-languages">
                                    <option>English</option>
                                    <option>العربية</option>
                                    <option>简体中文</option>
                                    <option>اردو</option>
                                </select>
                            </li>
                            <li class="br-line d-none d-xl-inline-flex"></li>
                            <li class="tf-currencies d-none d-xl-block">
                                <select class="tf-dropdown-select style-default color-white type-currencies">
                                    <option selected data-thumbnail="{{ asset('userInterface/') }}/images/country/us.png">USD</option>
                                    <option data-thumbnail="{{ asset('userInterface/') }}/images/country/vie.png">VND</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
        <!-- Header -->
        <header class="tf-header style-5">
            <div class="header-top ">
                <div class="container-full-2">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-3 d-xl-none">
                            <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-mobile-menu style-white">
                                <span></span>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6 text-center text-xl-start">
                            <a href="index.html" class="logo-site justify-content-center justify-content-xl-start">
                                <img src="{{ asset('userInterface/') }}/images/logo/logo-white-2.svg" alt="">
                            </a>
                        </div>
                        <div class="col-xl-10 col-md-4 col-3">
                            <div class="header-right">
                                <form class="form_search-product style-search-2 d-none d-xl-flex">
                                    <div class="select-category">
                                        <select name="product_cat" id="product_cat" class="dropdown_product_cat">
                                            <option value="" selected="selected">All categories</option>
                                            <option class="level-0" value="apple-products">Apple products</option>
                                            <option class="level-0" value="audio-equipments">Audio Equipments</option>
                                            <option class="level-0" value="camera-video">Camera & Video</option>
                                            <option class="level-0" value="game-room-furniture">Game & Room Furniture
                                            </option>
                                            <option class="level-0" value="gaming-accessories">Gaming Accessories
                                            </option>
                                            <option class="level-0" value="headphone">Headphone</option>
                                            <option class="level-0" value="laptop-tablet">Laptop & Tablet</option>
                                            <option class="level-0" value="server-workstation">Server & Workstation
                                            </option>
                                            <option class="level-0" value="smartphone">Smartphone</option>
                                            <option class="level-0" value="smartwatch">Smartwatch</option>
                                            <option class="level-0" value="storage-digital-devices">Storage & Digital
                                                Devices</option>
                                        </select>
                                        <ul class="select-options">
                                            <li class="link" rel=""><span>All categories</span></li>
                                            <li class="link" rel="apple-products"><span>Apple products</span> </li>
                                            <li class="link" rel="audio-equipments"><span>Audio Equipments</span></li>
                                            <li class="link" rel="camera-video"><span>Camera & Video</span></li>
                                            <li class="link" rel="game-room-furniture"><span>Game & Room
                                                    Furniture</span></li>
                                            <li class="link" rel="gaming-accessories"><span>Gaming Accessories</span>
                                            </li>
                                            <li class="link" rel="headphone"><span>Headphone</span></li>
                                            <li class="link" rel="laptop-tablet"><span>Laptop & Tablet</span></li>
                                            <li class="link" rel="server-workstation"><span>Server & Workstation</span>
                                            </li>
                                            <li class="link" rel="smartphone"><span>Smartphone</span></li>
                                            <li class="link" rel="smartwatch"><span>Smartwatch</span></li>
                                            <li class="link" rel="storage-digital-devices"><span>Storage & Digital
                                                    Devices</span></li>
                                        </ul>
                                    </div>
                                    <span class="br-line type-vertical"></span>
                                    <input class="style-def" type="text" placeholder="Search for products..." required>
                                    <button type="submit" class="btn-submit">
                                        <i class="icon icon-magnifying-glass"></i>
                                        <span class="h6 fw-bold">Search</span>
                                    </button>
                                </form>
                                <ul class="nav-icon-list text-nowrap">
                                    <li class="d-none d-lg-flex">
                                        <a class="nav-icon-item-2 text-white link" href="login.html">
                                            <i class="icon icon-user"></i>
                                            <div class="nav-icon-item_sub">
                                                <span class="text-sub text-small-2">Hello, sign in</span>
                                                <span class="h6">Your account</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-flex">
                                        <a class="nav-icon-item-2 text-white link" href="wishlist.html">
                                            <i class="icon icon-heart"></i>
                                            <span class="count">24</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-icon-item-2 text-white link" href="#shoppingCart" data-bs-toggle="offcanvas">
                                            <div class="position-relative d-flex">
                                                <i class="icon icon-shopping-cart-simple"></i>
                                                <span class="count">24</span>
                                            </div>
                                            <div class="nav-icon-item_sub d-none d-sm-grid">
                                                <span class="text-sub text-small-2">Your cart</span>
                                                <span class="h6">$0.00</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-inner d-none d-xl-block bg-white">
                <div class="container-full-2">
                    <div class="header-inner_wrap">
                        <div class="col-left">
                            <div class="nav-category-wrap main-action-active">
                                <div class="btn-nav-drop btn-active">
                                    <span class="btn-mobile-menu type-small"><span></span></span>
                                    <h6 class="name-category fw-semibold">All Departments</h6>
                                    <i class="icon icon-caret-down"></i>
                                </div>
                                <ul class="box-nav-category active-item">
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-tv"></i>Electronics</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-arm-chair"></i>Furniture</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-shirt"></i>Fashion & Style</a>
                                    </li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-book"></i>Book</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-headset"></i>Music</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-drop"></i>Cosmetic & Beauty</a>
                                    </li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-mobile"></i>Smartphone</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-volley-ball"></i>Sports</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-sneaker"></i>Shoes</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-camera"></i>Camera -
                                            Camcorder</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-clock-cd"></i>Clock</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-diamond"></i>Jewelry</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-barbell"></i>Gym</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-bag"></i>Bag</a></li>
                                </ul>
                            </div>
                            <span class="br-line type-vertical h-24"></span>
                            <nav class="box-navigation">
                                <ul class="box-nav-menu">
                                    <li class="menu-item">
                                        <a href="javascript:void(0)" class="item-link">HOME<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu mega-menu mega-home">
                                            <div class="container">
                                                <div class="row-demo">
                                                    <div class="demo-item">
                                                        <a href="index.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-1.jpg" alt="Demo">
                                                        </a>
                                                        <a href="index.html" class="demo-name">Home Fashion 1</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-fashion-2.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-2.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-fashion-2.html" class="demo-name">Home Fashion 2</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-fashion-3.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-3.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-fashion-3.html" class="demo-name">Home Fashion 3</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-fashion-4.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-4.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-fashion-4.html" class="demo-name">Home Fashion 4</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-cosmetic.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-cosmetic.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-cosmetic.html" class="demo-name">Home Cosmetic</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-skin-care.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-skin-care.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-skin-care.html" class="demo-name">Home Skincare</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-decor.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-decor.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-decor.html" class="demo-name">Home Decor</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-jewelry.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-jewelry.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-jewelry.html" class="demo-name">Home Jewelry</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-electronic-market.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-electronic-market.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-electronic-market.html" class="demo-name">Home
                                                            Electric Market</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-pet-store.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-pet-store.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-pet-store.html" class="demo-name">Home Pet Store</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-sneaker.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-sneaker.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-sneaker.html" class="demo-name">Home Sneaker</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-book.html" class="demo-img">
                                                            <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-book.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-book.jpg"
                                                                alt="Demo">
                                                            <div class="demo-label">
                                                                <span>New</span>
                                                            </div>
                                                        </a>
                                                        <a href="home-sneaker.html" class="demo-name">Home Book</a>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#modalDemo" data-bs-toggle="modal" class="tf-btn animate-btn">
                                                        View all demos (20)
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0)" class="item-link">SHOP<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Shop Layout</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="shop-default.html" class="sub-menu_link">Default Grid</a></li>
                                                                <li><a href="shop-default-list.html" class="sub-menu_link">Default List</a></li>
                                                                <li><a href="shop-2-columns.html" class="sub-menu_link">Shop
                                                                        2 Columns</a></li>
                                                                <li><a href="shop-3-columns.html" class="sub-menu_link">Shop
                                                                        3 Columns</a></li>
                                                                <li><a href="shop-4-columns.html" class="sub-menu_link">Shop
                                                                        4 Columns</a></li>
                                                                <li><a href="shop-5-columns.html" class="sub-menu_link">Shop
                                                                        5 Columns</a></li>
                                                                <li><a href="shop-6-columns.html" class="sub-menu_link">Shop
                                                                        6 Columns</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Shop Features</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="shop-full-width-list.html" class="sub-menu_link">Full Width List</a></li>
                                                                <li><a href="shop-full-width-grid.html" class="sub-menu_link">Full Width Grid</a></li>
                                                                <li><a href="shop-left-sidebar.html" class="sub-menu_link">Left Sidebar</a></li>
                                                                <li><a href="shop-right-sidebar.html" class="sub-menu_link">Right Sidebar</a></li>
                                                                <li><a href="shop-filter-dropdown.html" class="sub-menu_link">Filter Dropdown</a></li>
                                                                <li><a href="shop-filter-drawer.html" class="sub-menu_link">Filter Drawer</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Shop Hover</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="shop-hover-01.html" class="sub-menu_link">Hover
                                                                        Style 01</a></li>
                                                                <li><a href="shop-hover-02.html" class="sub-menu_link">Hover
                                                                        Style 02</a></li>
                                                                <li><a href="shop-hover-03.html" class="sub-menu_link">Hover
                                                                        Style 03</a></li>
                                                                <li><a href="shop-hover-04.html" class="sub-menu_link">Hover
                                                                        Style 04</a></li>
                                                                <li><a href="shop-hover-05.html" class="sub-menu_link">Hover
                                                                        Style 05</a></li>
                                                                <li><a href="shop-hover-06.html" class="sub-menu_link">Hover
                                                                        Style 06</a></li>
                                                                <li><a href="shop-hover-07.html" class="sub-menu_link">Hover
                                                                        Style 07</a></li>
                                                                <li><a href="shop-hover-08.html" class="sub-menu_link">Hover
                                                                        Style 08</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="list-hor">
                                                            <li class="wg-cls hover-img">
                                                                <a href="shop-default.html" class="image img-style">
                                                                    <img src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg" alt="Collection"
                                                                        class="lazyload">
                                                                </a>
                                                                <div class="cls-content">
                                                                    <h4 class="tag_cls">Headphone</h4>
                                                                    <span class="br-line type-vertical"></span>
                                                                    <a href="shop-default.html" class="tf-btn-line">
                                                                        Shop now
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="wg-cls hover-img">
                                                                <a href="shop-default.html" class="image img-style">
                                                                    <img src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg"
                                                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg" alt="Collection"
                                                                        class="lazyload">
                                                                </a>
                                                                <div class="cls-content">
                                                                    <h4 class="tag_cls">Controller</h4>
                                                                    <span class="br-line type-vertical"></span>
                                                                    <a href="shop-default.html" class="tf-btn-line">
                                                                        Shop now
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0)" class="item-link">PRODUCT<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Layout</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-detail.html" class="sub-menu_link">Product Detail</a></li>
                                                                <li><a href="product-left-thumbnail.html" class="sub-menu_link">Product Left
                                                                        Thumbnail</a>
                                                                </li>
                                                                <li><a href="product-right-thumbnail.html" class="sub-menu_link">Product Right
                                                                        Thumbnail</a></li>
                                                                <li><a href="product-bottom-thumbnail.html" class="sub-menu_link">Product Bottom
                                                                        Thumbnail</a></li>
                                                                <li><a href="product-grid.html" class="sub-menu_link">Product Grid</a></li>
                                                                <li><a href="product-grid-2.html" class="sub-menu_link">Product Grid 2</a></li>
                                                                <li><a href="product-stacked.html" class="sub-menu_link">Product Stacked</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Details</h4>
                                                            <!-- prettier-ignore -->
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-information.html" class="sub-menu_link">Product Information</a>
                                                                </li>
                                                                <li><a href="product-group.html" class="sub-menu_link">Product Group</a>
                                                                </li>
                                                                <li><a href="product-options-customizer.html" class="sub-menu_link">Product Option
                                                                        Customize</a></li>
                                                                <li><a href="product-available.html" class="sub-menu_link">Product Avaialable</a></li>
                                                                <li><a href="product-video.html" class="sub-menu_link">Product Video</a></li>
                                                                <li><a href="product-buyX-getY.html" class="sub-menu_link">Product Buy X Get Y</a>
                                                                </li>
                                                                <li><a href="product-buy-the-look.html" class="sub-menu_link">Product Buy The Look</a>
                                                                </li>
                                                                <li><a href="product-out-of-stock.html" class="sub-menu_link">Product Out Of Stock</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Feature</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-frequently-bought-together.html" class="sub-menu_link">Buy
                                                                        Together</a></li>
                                                                <li><a href="product-often-purchased-together.html" class="sub-menu_link">Often
                                                                        Purchased
                                                                        Together</a></li>
                                                                <li><a href="product-countdown-timer.html" class="sub-menu_link">Countdown Timer</a>
                                                                </li>
                                                                <li><a href="product-volume-discount.html" class="sub-menu_link">Volume Discount</a>
                                                                </li>
                                                                <li><a href="product-volume-discount-thumbnail.html" class="sub-menu_link">Volume
                                                                        Discount
                                                                        Thumbnail</a></li>
                                                                <li><a href="product-swatch-dropdown.html" class="sub-menu_link">Swatch Dropdown</a>
                                                                </li>
                                                                <li><a href="product-swatch-dropdown-color.html" class="sub-menu_link">Swatch Dropdown
                                                                        Color</a></li>
                                                                <li><a href="product-swatch-image.html" class="sub-menu_link">Swatch Image</a></li>
                                                                <li><a href="product-swatch-image-square.html" class="sub-menu_link">Swatch Image
                                                                        Retangle</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Description</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-description-accordion.html" class="sub-menu_link">Product
                                                                        Description
                                                                        Accordion</a></li>
                                                                <li><a href="product-description-list.html" class="sub-menu_link">Product Description
                                                                        List</a></li>
                                                                <li><a href="product-description-vertical.html" class="sub-menu_link">Product
                                                                        Description
                                                                        Vertical</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mega-menu-item mn-none">
                                                            <h4 class="menu-heading">Recent Products</h4>
                                                            <ul class="list-ver">
                                                                <li class="prd-recent hover-img">
                                                                    <a href="product-detail.html" class="image img-style">
                                                                        <img src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg"
                                                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg" alt=""
                                                                            class="lazyload">
                                                                    </a>
                                                                    <div class="content">
                                                                        <span class="badge-tag">Laptop</span>
                                                                        <a href="product-detail.html" class="name-prd h6 fw-medium link">
                                                                            UltraSlim Laptop with Retina Display and High-Performance Processor
                                                                        </a>
                                                                        <span class="price-wrap h6 fw-semibold text-black">
                                                                            $69,99
                                                                        </span>
                                                                    </div>
                                                                </li>
                                                                <li class="br-line"></li>
                                                                <li class="prd-recent hover-img">
                                                                    <a href="product-detail.html" class="image img-style">
                                                                        <img src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg"
                                                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg" alt=""
                                                                            class="lazyload">
                                                                    </a>
                                                                    <div class="content">
                                                                        <span class="badge-tag">Camera</span>
                                                                        <a href="product-detail.html" class="name-prd h6 fw-medium link">
                                                                            Convertible 2-in-1 Laptop with Touchscreen and Detachable Keyboard
                                                                        </a>
                                                                        <span class="price-wrap h6 fw-semibold text-black">
                                                                            $69,99
                                                                        </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item position-relative">
                                        <a href="javascript:void(0)" class="item-link">PAGE<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu">
                                            <ul class="sub-menu_list">
                                                <li><a href="contact-us.html" class="sub-menu_link">Contact us</a></li>
                                                <li><a href="contact-us-2.html" class="sub-menu_link">Contact us 2</a></li>
                                                <li><a href="about-us.html" class="sub-menu_link">About us</a></li>
                                                <li><a href="store-list.html" class="sub-menu_link">Store List</a></li>
                                                <li><a href="404.html" class="sub-menu_link">404</a></li>
                                                <li><a href="faq.html" class="sub-menu_link">FAQs</a></li>
                                                <li><a href="track-order.html" class="sub-menu_link">Order Tracking</a></li>
                                                <li><a href="invoice.html" class="sub-menu_link">Invoice</a></li>
                                                <li><a href="account-page.html" class="sub-menu_link">My account</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item position-relative">
                                        <a href="javascript:void(0)" class="item-link">BLOG<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu">
                                            <ul class="sub-menu_list">
                                                <li><a href="blog-grid.html" class="sub-menu_link">Blog Grid</a></li>
                                                <li><a href="blog-list-1.html" class="sub-menu_link">Blog List 1</a></li>
                                                <li><a href="blog-list-2.html" class="sub-menu_link">Blog List 2</a></li>
                                                <li><a href="blog-detail.html" class="sub-menu_link">Blog Single</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-right">
                            <i class="icon icon-truck"></i>
                            <p class="h6 text-black">
                                Free Shipping for orders over <span class="fw-bold text-primary">$150</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="tf-header header-fixed style-5 bg-dark-blu">
            <div class="header-top d-xl-none">
                <div class="container-full-2">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-3 d-xl-none">
                            <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-mobile-menu style-white">
                                <span></span>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6 text-center text-xl-start">
                            <a href="index.html" class="logo-site justify-content-center justify-content-xl-start">
                                <img src="{{ asset('userInterface/') }}/images/logo/logo-white-2.svg" alt="">
                            </a>
                        </div>
                        <div class="col-xl-10 col-md-4 col-3">
                            <div class="header-right">
                                <form class="form_search-product style-search-2 d-none d-xl-flex">
                                    <div class="select-category">
                                        <select name="product_cat" id="product_cat" class="dropdown_product_cat">
                                            <option value="" selected="selected">All categories</option>
                                            <option class="level-0" value="apple-products">Apple products</option>
                                            <option class="level-0" value="audio-equipments">Audio Equipments</option>
                                            <option class="level-0" value="camera-video">Camera & Video</option>
                                            <option class="level-0" value="game-room-furniture">Game & Room Furniture
                                            </option>
                                            <option class="level-0" value="gaming-accessories">Gaming Accessories
                                            </option>
                                            <option class="level-0" value="headphone">Headphone</option>
                                            <option class="level-0" value="laptop-tablet">Laptop & Tablet</option>
                                            <option class="level-0" value="server-workstation">Server & Workstation
                                            </option>
                                            <option class="level-0" value="smartphone">Smartphone</option>
                                            <option class="level-0" value="smartwatch">Smartwatch</option>
                                            <option class="level-0" value="storage-digital-devices">Storage & Digital
                                                Devices</option>
                                        </select>
                                        <ul class="select-options">
                                            <li class="link" rel=""><span>All categories</span></li>
                                            <li class="link" rel="apple-products"><span>Apple products</span> </li>
                                            <li class="link" rel="audio-equipments"><span>Audio Equipments</span></li>
                                            <li class="link" rel="camera-video"><span>Camera & Video</span></li>
                                            <li class="link" rel="game-room-furniture"><span>Game & Room
                                                    Furniture</span></li>
                                            <li class="link" rel="gaming-accessories"><span>Gaming Accessories</span>
                                            </li>
                                            <li class="link" rel="headphone"><span>Headphone</span></li>
                                            <li class="link" rel="laptop-tablet"><span>Laptop & Tablet</span></li>
                                            <li class="link" rel="server-workstation"><span>Server & Workstation</span>
                                            </li>
                                            <li class="link" rel="smartphone"><span>Smartphone</span></li>
                                            <li class="link" rel="smartwatch"><span>Smartwatch</span></li>
                                            <li class="link" rel="storage-digital-devices"><span>Storage & Digital
                                                    Devices</span></li>
                                        </ul>
                                    </div>
                                    <span class="br-line type-vertical"></span>
                                    <input class="style-def" type="text" placeholder="Search for products..." required>
                                    <button type="submit" class="btn-submit">
                                        <i class="icon icon-magnifying-glass"></i>
                                        <span class="h6 fw-bold">Search</span>
                                    </button>
                                </form>
                                <ul class="nav-icon-list text-nowrap">
                                    <li class="d-none d-lg-flex">
                                        <a class="nav-icon-item-2 text-white link" href="login.html">
                                            <i class="icon icon-user"></i>
                                            <div class="nav-icon-item_sub">
                                                <span class="text-sub text-small-2">Hello, sign in</span>
                                                <span class="h6">Your account</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-flex">
                                        <a class="nav-icon-item-2 text-white link" href="wishlist.html">
                                            <i class="icon icon-heart"></i>
                                            <span class="count">24</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-icon-item-2 text-white link" href="#shoppingCart" data-bs-toggle="offcanvas">
                                            <div class="position-relative d-flex">
                                                <i class="icon icon-shopping-cart-simple"></i>
                                                <span class="count">24</span>
                                            </div>
                                            <div class="nav-icon-item_sub d-none d-sm-grid">
                                                <span class="text-sub text-small-2">Your cart</span>
                                                <span class="h6">$0.00</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-inner d-none d-xl-block bg-white">
                <div class="container-full-2">
                    <div class="header-inner_wrap">
                        <div class="col-left">
                            <div class="nav-category-wrap main-action-active">
                                <div class="btn-nav-drop btn-active">
                                    <span class="btn-mobile-menu type-small"><span></span></span>
                                    <h6 class="name-category fw-semibold">All Departments</h6>
                                    <i class="icon icon-caret-down"></i>
                                </div>
                                <ul class="box-nav-category active-item">
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-tv"></i>Electronics</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-arm-chair"></i>Furniture</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-shirt"></i>Fashion & Style</a>
                                    </li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-book"></i>Book</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-headset"></i>Music</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-drop"></i>Cosmetic & Beauty</a>
                                    </li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-mobile"></i>Smartphone</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-volley-ball"></i>Sports</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-sneaker"></i>Shoes</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-camera"></i>Camera -
                                            Camcorder</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-clock-cd"></i>Clock</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-diamond"></i>Jewelry</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-barbell"></i>Gym</a></li>
                                    <li><a href="shop-default.html" class="nav-category_link h5"><i class="icon icon-bag"></i>Bag</a></li>
                                </ul>
                            </div>
                            <span class="br-line type-vertical h-24"></span>
                            <nav class="box-navigation">
                                <ul class="box-nav-menu">
                                    <li class="menu-item mn-none">
                                        <a href="javascript:void(0)" class="item-link">HOME<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu mega-menu mega-home">
                                            <div class="container">
                                                <div class="row-demo">
                                                    <div class="demo-item">
                                                        <a href="index.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-1.jpg" alt="Demo">
                                                        </a>
                                                        <a href="index.html" class="demo-name">Home Fashion 1</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-fashion-2.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-2.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-fashion-2.html" class="demo-name">Home Fashion 2</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-fashion-3.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-3.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-fashion-3.html" class="demo-name">Home Fashion 3</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-fashion-4.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-4.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-fashion-4.html" class="demo-name">Home Fashion 4</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-cosmetic.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-cosmetic.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-cosmetic.html" class="demo-name">Home Cosmetic</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-skin-care.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-skin-care.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-skin-care.html" class="demo-name">Home Skincare</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-decor.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-decor.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-decor.html" class="demo-name">Home Decor</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-jewelry.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-jewelry.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-jewelry.html" class="demo-name">Home Jewelry</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-electronic-market.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-electronic-market.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-electronic-market.html" class="demo-name">Home
                                                            Electric Market</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-pet-store.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-pet-store.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-pet-store.html" class="demo-name">Home Pet Store</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-sneaker.html" class="demo-img">
                                                            <img src="{{ asset('userInterface/') }}/images/demo/home-sneaker.jpg" alt="Demo">
                                                        </a>
                                                        <a href="home-sneaker.html" class="demo-name">Home Sneaker</a>
                                                    </div>
                                                    <div class="demo-item">
                                                        <a href="home-book.html" class="demo-img">
                                                            <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-book.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-book.jpg"
                                                                alt="Demo">
                                                            <div class="demo-label">
                                                                <span>New</span>
                                                            </div>
                                                        </a>
                                                        <a href="home-sneaker.html" class="demo-name">Home Book</a>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#modalDemo" data-bs-toggle="modal" class="tf-btn animate-btn">
                                                        View all demos (20)
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item mn-none">
                                        <a href="javascript:void(0)" class="item-link">SHOP<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Shop Layout</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="shop-default.html" class="sub-menu_link">Default Grid</a></li>
                                                                <li><a href="shop-default-list.html" class="sub-menu_link">Default List</a></li>
                                                                <li><a href="shop-2-columns.html" class="sub-menu_link">Shop
                                                                        2 Columns</a></li>
                                                                <li><a href="shop-3-columns.html" class="sub-menu_link">Shop
                                                                        3 Columns</a></li>
                                                                <li><a href="shop-4-columns.html" class="sub-menu_link">Shop
                                                                        4 Columns</a></li>
                                                                <li><a href="shop-5-columns.html" class="sub-menu_link">Shop
                                                                        5 Columns</a></li>
                                                                <li><a href="shop-6-columns.html" class="sub-menu_link">Shop
                                                                        6 Columns</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Shop Features</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="shop-full-width-list.html" class="sub-menu_link">Full Width List</a></li>
                                                                <li><a href="shop-full-width-grid.html" class="sub-menu_link">Full Width Grid</a></li>
                                                                <li><a href="shop-left-sidebar.html" class="sub-menu_link">Left Sidebar</a></li>
                                                                <li><a href="shop-right-sidebar.html" class="sub-menu_link">Right Sidebar</a></li>
                                                                <li><a href="shop-filter-dropdown.html" class="sub-menu_link">Filter Dropdown</a></li>
                                                                <li><a href="shop-filter-drawer.html" class="sub-menu_link">Filter Drawer</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Shop Hover</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="shop-hover-01.html" class="sub-menu_link">Hover
                                                                        Style 01</a></li>
                                                                <li><a href="shop-hover-02.html" class="sub-menu_link">Hover
                                                                        Style 02</a></li>
                                                                <li><a href="shop-hover-03.html" class="sub-menu_link">Hover
                                                                        Style 03</a></li>
                                                                <li><a href="shop-hover-04.html" class="sub-menu_link">Hover
                                                                        Style 04</a></li>
                                                                <li><a href="shop-hover-05.html" class="sub-menu_link">Hover
                                                                        Style 05</a></li>
                                                                <li><a href="shop-hover-06.html" class="sub-menu_link">Hover
                                                                        Style 06</a></li>
                                                                <li><a href="shop-hover-07.html" class="sub-menu_link">Hover
                                                                        Style 07</a></li>
                                                                <li><a href="shop-hover-08.html" class="sub-menu_link">Hover
                                                                        Style 08</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="list-hor">
                                                            <li class="wg-cls hover-img">
                                                                <a href="shop-default.html" class="image img-style">
                                                                    <img src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg" alt="Collection"
                                                                        class="lazyload">
                                                                </a>
                                                                <div class="cls-content">
                                                                    <h4 class="tag_cls">Headphone</h4>
                                                                    <span class="br-line type-vertical"></span>
                                                                    <a href="shop-default.html" class="tf-btn-line">
                                                                        Shop now
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="wg-cls hover-img">
                                                                <a href="shop-default.html" class="image img-style">
                                                                    <img src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg"
                                                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg" alt="Collection"
                                                                        class="lazyload">
                                                                </a>
                                                                <div class="cls-content">
                                                                    <h4 class="tag_cls">Controller</h4>
                                                                    <span class="br-line type-vertical"></span>
                                                                    <a href="shop-default.html" class="tf-btn-line">
                                                                        Shop now
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item mn-none">
                                        <a href="javascript:void(0)" class="item-link">PRODUCT<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Layout</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-detail.html" class="sub-menu_link">Product Detail</a></li>
                                                                <li><a href="product-left-thumbnail.html" class="sub-menu_link">Product Left
                                                                        Thumbnail</a>
                                                                </li>
                                                                <li><a href="product-right-thumbnail.html" class="sub-menu_link">Product Right
                                                                        Thumbnail</a></li>
                                                                <li><a href="product-bottom-thumbnail.html" class="sub-menu_link">Product Bottom
                                                                        Thumbnail</a></li>
                                                                <li><a href="product-grid.html" class="sub-menu_link">Product Grid</a></li>
                                                                <li><a href="product-grid-2.html" class="sub-menu_link">Product Grid 2</a></li>
                                                                <li><a href="product-stacked.html" class="sub-menu_link">Product Stacked</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Details</h4>
                                                            <!-- prettier-ignore -->
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-information.html" class="sub-menu_link">Product Information</a>
                                                                </li>
                                                                <li><a href="product-group.html" class="sub-menu_link">Product Group</a>
                                                                </li>
                                                                <li><a href="product-options-customizer.html" class="sub-menu_link">Product Option
                                                                        Customize</a></li>
                                                                <li><a href="product-available.html" class="sub-menu_link">Product Avaialable</a></li>
                                                                <li><a href="product-video.html" class="sub-menu_link">Product Video</a></li>
                                                                <li><a href="product-buyX-getY.html" class="sub-menu_link">Product Buy X Get Y</a>
                                                                </li>
                                                                <li><a href="product-buy-the-look.html" class="sub-menu_link">Product Buy The Look</a>
                                                                </li>
                                                                <li><a href="product-out-of-stock.html" class="sub-menu_link">Product Out Of Stock</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Feature</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-frequently-bought-together.html" class="sub-menu_link">Buy
                                                                        Together</a></li>
                                                                <li><a href="product-often-purchased-together.html" class="sub-menu_link">Often
                                                                        Purchased
                                                                        Together</a></li>
                                                                <li><a href="product-countdown-timer.html" class="sub-menu_link">Countdown Timer</a>
                                                                </li>
                                                                <li><a href="product-volume-discount.html" class="sub-menu_link">Volume Discount</a>
                                                                </li>
                                                                <li><a href="product-volume-discount-thumbnail.html" class="sub-menu_link">Volume
                                                                        Discount
                                                                        Thumbnail</a></li>
                                                                <li><a href="product-swatch-dropdown.html" class="sub-menu_link">Swatch Dropdown</a>
                                                                </li>
                                                                <li><a href="product-swatch-dropdown-color.html" class="sub-menu_link">Swatch Dropdown
                                                                        Color</a></li>
                                                                <li><a href="product-swatch-image.html" class="sub-menu_link">Swatch Image</a></li>
                                                                <li><a href="product-swatch-image-square.html" class="sub-menu_link">Swatch Image
                                                                        Retangle</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="mega-menu-item">
                                                            <h4 class="menu-heading">Product Description</h4>
                                                            <ul class="sub-menu_list">
                                                                <li><a href="product-description-accordion.html" class="sub-menu_link">Product
                                                                        Description
                                                                        Accordion</a></li>
                                                                <li><a href="product-description-list.html" class="sub-menu_link">Product Description
                                                                        List</a></li>
                                                                <li><a href="product-description-vertical.html" class="sub-menu_link">Product
                                                                        Description
                                                                        Vertical</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="mega-menu-item mn-none">
                                                            <h4 class="menu-heading">Recent Products</h4>
                                                            <ul class="list-ver">
                                                                <li class="prd-recent hover-img">
                                                                    <a href="product-detail.html" class="image img-style">
                                                                        <img src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg"
                                                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg" alt=""
                                                                            class="lazyload">
                                                                    </a>
                                                                    <div class="content">
                                                                        <span class="badge-tag">Laptop</span>
                                                                        <a href="product-detail.html" class="name-prd h6 fw-medium link">
                                                                            UltraSlim Laptop with Retina Display and High-Performance Processor
                                                                        </a>
                                                                        <span class="price-wrap h6 fw-semibold text-black">
                                                                            $69,99
                                                                        </span>
                                                                    </div>
                                                                </li>
                                                                <li class="br-line"></li>
                                                                <li class="prd-recent hover-img">
                                                                    <a href="product-detail.html" class="image img-style">
                                                                        <img src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg"
                                                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg" alt=""
                                                                            class="lazyload">
                                                                    </a>
                                                                    <div class="content">
                                                                        <span class="badge-tag">Camera</span>
                                                                        <a href="product-detail.html" class="name-prd h6 fw-medium link">
                                                                            Convertible 2-in-1 Laptop with Touchscreen and Detachable Keyboard
                                                                        </a>
                                                                        <span class="price-wrap h6 fw-semibold text-black">
                                                                            $69,99
                                                                        </span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item mn-none position-relative">
                                        <a href="javascript:void(0)" class="item-link">PAGE<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu">
                                            <ul class="sub-menu_list">
                                                <li><a href="contact-us.html" class="sub-menu_link">Contact us</a></li>
                                                <li><a href="contact-us-2.html" class="sub-menu_link">Contact us 2</a></li>
                                                <li><a href="about-us.html" class="sub-menu_link">About us</a></li>
                                                <li><a href="store-list.html" class="sub-menu_link">Store List</a></li>
                                                <li><a href="404.html" class="sub-menu_link">404</a></li>
                                                <li><a href="faq.html" class="sub-menu_link">FAQs</a></li>
                                                <li><a href="track-order.html" class="sub-menu_link">Order Tracking</a></li>
                                                <li><a href="invoice.html" class="sub-menu_link">Invoice</a></li>
                                                <li><a href="account-page.html" class="sub-menu_link">My account</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item mn-none position-relative">
                                        <a href="javascript:void(0)" class="item-link">BLOG<i class="icon icon-caret-down"></i></a>
                                        <div class="sub-menu">
                                            <ul class="sub-menu_list">
                                                <li><a href="blog-grid.html" class="sub-menu_link">Blog Grid</a></li>
                                                <li><a href="blog-list-1.html" class="sub-menu_link">Blog List 1</a></li>
                                                <li><a href="blog-list-2.html" class="sub-menu_link">Blog List 2</a></li>
                                                <li><a href="blog-detail.html" class="sub-menu_link">Blog Single</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-right">
                            <i class="icon icon-truck"></i>
                            <p class="h6 text-black">
                                Free Shipping for orders over <span class="fw-bold text-primary">$150</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
        <!-- Banner Slider -->
        <div class="tf-slideshow tf-btn-swiper-main">
            <div dir="ltr" class="swiper tf-swiper sw-slide-show slider_effect_fade" data-auto="true" data-loop="true" data-effect="fade"
                data-delay="3000">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-2">
                            <div class="sld_image">
                                <img src="{{ asset('userInterface/') }}/images/slider/slider-25.jpg" data-src="{{ asset('userInterface/') }}/images/slider/slider-25.jpg" alt="Slider"
                                    class="lazyload scale-item">
                            </div>
                            <div class="sld_content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-11">
                                            <div class="content-sld_wrap">
                                                <h4 class="sub-title_sld has-icon text-primary fade-item fade-item-1">
                                                    <span class="icon d-flex">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.001 11.949C9 6 11 2 15 0C15.5 6 21 8 21 15C21 17.3869 20.0518 19.6761 18.364 21.364C16.6761 23.0518 14.3869 24 12 24C9.61305 24 7.32387 23.0518 5.63604 21.364C3.94821 19.6761 3 17.3869 3 15C3 11.5 4 10 6 8C6 11 9.001 11.949 9.001 11.949Z"
                                                                fill="url(#paint0_linear_1733_16972)" />
                                                            <path
                                                                d="M9.001 11.949C9 6 11 2 15 0C15.5 6 21 8 21 15C21 17.3869 20.0518 19.6761 18.364 21.364C16.6761 23.0518 14.3869 24 12 24C9.61305 24 7.32387 23.0518 5.63604 21.364C3.94821 19.6761 3 17.3869 3 15C3 11.5 4 10 6 8C6 11 9.001 11.949 9.001 11.949Z"
                                                                fill="#EB423F" />
                                                            <path
                                                                d="M11.9998 23.75C7.97382 23.75 4.56482 21.134 3.36182 17.512C4.44982 21.259 7.90182 24 11.9998 24C16.0978 24 19.5498 21.259 20.6378 17.512C19.4348 21.134 16.0258 23.75 11.9998 23.75Z"
                                                                fill="#010101" fill-opacity="0.0627451" />
                                                            <path
                                                                d="M16.5 17.5C16.5 18.6935 16.0259 19.8381 15.182 20.682C14.3381 21.5259 13.1935 22 12 22C10.8065 22 9.66193 21.5259 8.81802 20.682C7.97411 19.8381 7.5 18.6935 7.5 17.5C7.5 15.823 8 14.958 9 14C9 16 10.5 16.5 10.5 16.5C10.5 13.65 11.5 11.958 13.5 11C13.75 13.875 16.5 14.813 16.5 17.5Z"
                                                                fill="#FFD33A" />
                                                            <path opacity="0.2"
                                                                d="M10.5 16.75C10.5 13.9 11.5 12.208 13.5 11.25C13.745 14.068 16.386 15.029 16.49 17.597C16.491 17.564 16.5 17.533 16.5 17.5C16.5 14.812 13.75 13.875 13.5 11C11.5 11.958 10.5 13.65 10.5 16.5C10.5 16.5 9 16 9 14C8 14.958 7.5 15.823 7.5 17.5C7.5 17.524 7.507 17.546 7.507 17.57C7.544 16.015 8.037 15.172 9 14.25C9 16.25 10.5 16.75 10.5 16.75Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                    Don't miss the opportunity
                                                </h4>
                                                <h1 class="title_sld text-display fade-item fade-item-2">
                                                    <a href="product-detail.html" class="link fw-normal ">
                                                        Wireless Bluetooth <br class="d-none d-sm-block">
                                                        Over-Ear Headphones
                                                    </a>
                                                </h1>
                                                <div class="price-wrap price_sld fade-item fade-item-3">
                                                    <span class="h1 fw-medium price-new text-primary">$89.99</span>
                                                    <span class=" price-old h3">$120.00</span>
                                                </div>
                                                <div class="fade-item fade-item-4">
                                                    <a href="shop-default.html" class="tf-btn animate-btn fw-semibold">
                                                        Shop now
                                                        <i class="icon icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-2">
                            <div class="sld_image">
                                <img src="{{ asset('userInterface/') }}/images/slider/slider-26.jpg" data-src="{{ asset('userInterface/') }}/images/slider/slider-26.jpg" alt="Slider"
                                    class="lazyload scale-item">
                            </div>
                            <div class="sld_content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-11">
                                            <div class="content-sld_wrap">
                                                <h4 class="sub-title_sld has-icon text-primary fade-item fade-item-1">
                                                    <span class="icon d-flex">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.001 11.949C9 6 11 2 15 0C15.5 6 21 8 21 15C21 17.3869 20.0518 19.6761 18.364 21.364C16.6761 23.0518 14.3869 24 12 24C9.61305 24 7.32387 23.0518 5.63604 21.364C3.94821 19.6761 3 17.3869 3 15C3 11.5 4 10 6 8C6 11 9.001 11.949 9.001 11.949Z"
                                                                fill="url(#paint0_linear_1733_16972)" />
                                                            <path
                                                                d="M9.001 11.949C9 6 11 2 15 0C15.5 6 21 8 21 15C21 17.3869 20.0518 19.6761 18.364 21.364C16.6761 23.0518 14.3869 24 12 24C9.61305 24 7.32387 23.0518 5.63604 21.364C3.94821 19.6761 3 17.3869 3 15C3 11.5 4 10 6 8C6 11 9.001 11.949 9.001 11.949Z"
                                                                fill="#EB423F" />
                                                            <path
                                                                d="M11.9998 23.75C7.97382 23.75 4.56482 21.134 3.36182 17.512C4.44982 21.259 7.90182 24 11.9998 24C16.0978 24 19.5498 21.259 20.6378 17.512C19.4348 21.134 16.0258 23.75 11.9998 23.75Z"
                                                                fill="#010101" fill-opacity="0.0627451" />
                                                            <path
                                                                d="M16.5 17.5C16.5 18.6935 16.0259 19.8381 15.182 20.682C14.3381 21.5259 13.1935 22 12 22C10.8065 22 9.66193 21.5259 8.81802 20.682C7.97411 19.8381 7.5 18.6935 7.5 17.5C7.5 15.823 8 14.958 9 14C9 16 10.5 16.5 10.5 16.5C10.5 13.65 11.5 11.958 13.5 11C13.75 13.875 16.5 14.813 16.5 17.5Z"
                                                                fill="#FFD33A" />
                                                            <path opacity="0.2"
                                                                d="M10.5 16.75C10.5 13.9 11.5 12.208 13.5 11.25C13.745 14.068 16.386 15.029 16.49 17.597C16.491 17.564 16.5 17.533 16.5 17.5C16.5 14.812 13.75 13.875 13.5 11C11.5 11.958 10.5 13.65 10.5 16.5C10.5 16.5 9 16 9 14C8 14.958 7.5 15.823 7.5 17.5C7.5 17.524 7.507 17.546 7.507 17.57C7.544 16.015 8.037 15.172 9 14.25C9 16.25 10.5 16.75 10.5 16.75Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                    Don't miss the opportunity
                                                </h4>
                                                <h1 class="title_sld text-display fade-item fade-item-2">
                                                    <a href="product-detail.html" class="link fw-normal ">
                                                        A14 Pro Max 5G <br class="d-none d-sm-block">
                                                        Unlocked Smartphone
                                                    </a>
                                                </h1>
                                                <div class="price-wrap price_sld fade-item fade-item-3">
                                                    <span class="h1 fw-medium price-new text-primary">$77.99</span>
                                                    <span class=" price-old h3">$109.00</span>
                                                </div>
                                                <div class="fade-item fade-item-4">
                                                    <a href="shop-default.html" class="tf-btn animate-btn fw-semibold">
                                                        Shop now
                                                        <i class="icon icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="slider-wrap style-2">
                            <div class="sld_image">
                                <img src="{{ asset('userInterface/') }}/images/slider/slider-27.jpg" data-src="{{ asset('userInterface/') }}/images/slider/slider-27.jpg" alt="Slider"
                                    class="lazyload scale-item">
                            </div>
                            <div class="sld_content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-11">
                                            <div class="content-sld_wrap">
                                                <h4 class="sub-title_sld has-icon text-primary fade-item fade-item-1">
                                                    <span class="icon d-flex">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.001 11.949C9 6 11 2 15 0C15.5 6 21 8 21 15C21 17.3869 20.0518 19.6761 18.364 21.364C16.6761 23.0518 14.3869 24 12 24C9.61305 24 7.32387 23.0518 5.63604 21.364C3.94821 19.6761 3 17.3869 3 15C3 11.5 4 10 6 8C6 11 9.001 11.949 9.001 11.949Z"
                                                                fill="url(#paint0_linear_1733_16972)" />
                                                            <path
                                                                d="M9.001 11.949C9 6 11 2 15 0C15.5 6 21 8 21 15C21 17.3869 20.0518 19.6761 18.364 21.364C16.6761 23.0518 14.3869 24 12 24C9.61305 24 7.32387 23.0518 5.63604 21.364C3.94821 19.6761 3 17.3869 3 15C3 11.5 4 10 6 8C6 11 9.001 11.949 9.001 11.949Z"
                                                                fill="#EB423F" />
                                                            <path
                                                                d="M11.9998 23.75C7.97382 23.75 4.56482 21.134 3.36182 17.512C4.44982 21.259 7.90182 24 11.9998 24C16.0978 24 19.5498 21.259 20.6378 17.512C19.4348 21.134 16.0258 23.75 11.9998 23.75Z"
                                                                fill="#010101" fill-opacity="0.0627451" />
                                                            <path
                                                                d="M16.5 17.5C16.5 18.6935 16.0259 19.8381 15.182 20.682C14.3381 21.5259 13.1935 22 12 22C10.8065 22 9.66193 21.5259 8.81802 20.682C7.97411 19.8381 7.5 18.6935 7.5 17.5C7.5 15.823 8 14.958 9 14C9 16 10.5 16.5 10.5 16.5C10.5 13.65 11.5 11.958 13.5 11C13.75 13.875 16.5 14.813 16.5 17.5Z"
                                                                fill="#FFD33A" />
                                                            <path opacity="0.2"
                                                                d="M10.5 16.75C10.5 13.9 11.5 12.208 13.5 11.25C13.745 14.068 16.386 15.029 16.49 17.597C16.491 17.564 16.5 17.533 16.5 17.5C16.5 14.812 13.75 13.875 13.5 11C11.5 11.958 10.5 13.65 10.5 16.5C10.5 16.5 9 16 9 14C8 14.958 7.5 15.823 7.5 17.5C7.5 17.524 7.507 17.546 7.507 17.57C7.544 16.015 8.037 15.172 9 14.25C9 16.25 10.5 16.75 10.5 16.75Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                    Don't miss the opportunity
                                                </h4>
                                                <h1 class="title_sld text-display fade-item fade-item-2">
                                                    <a href="product-detail.html" class="link fw-normal ">
                                                        TP-Link Tapo 1080P <br class="d-none d-sm-block">
                                                        Indoor Security
                                                    </a>
                                                </h1>
                                                <div class="price-wrap price_sld fade-item fade-item-3">
                                                    <span class="h1 fw-medium price-new text-primary">$109.99</span>
                                                    <span class=" price-old h3">$143.00</span>
                                                </div>
                                                <div class="fade-item fade-item-4">
                                                    <a href="shop-default.html" class="tf-btn animate-btn fw-semibold">
                                                        Shop now
                                                        <i class="icon icon-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dot-default tf-sw-pagination"></div>
            </div>
        </div>
        <!-- /Banner Slider -->
        <!-- Category -->
        <section class="flat-spacing">
            <div class="container">
                <h1 class="sect-title text-center title wow fadeInUp">Product Category</h1>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="6" data-tablet="4" data-mobile-sm="3" data-mobile="2"
                    data-space-lg="48" data-space-md="32" data-space="12" data-pagination="2" data-pagination-sm="3" data-pagination-md="4"
                    data-pagination-lg="6">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/category/cate-29.jpg" data-src="{{ asset('userInterface/') }}/images/category/cate-29.jpg" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Furniture <span class="count text-main-2">(24)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/category/cate-30.jpg" data-src="{{ asset('userInterface/') }}/images/category/cate-30.jpg" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Accessories <span class="count text-main-2">(30)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/category/cate-31.jpg" data-src="{{ asset('userInterface/') }}/images/category/cate-31.jpg" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Fashion <span class="count text-main-2">(18)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/category/cate-32.jpg" data-src="{{ asset('userInterface/') }}/images/category/cate-32.jpg" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    New Home <span class="count text-main-2">(47)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/category/cate-33.jpg" data-src="{{ asset('userInterface/') }}/images/category/cate-33.jpg" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Kitchen <span class="count text-main-2">(90)</span>
                                </p>
                            </a>
                        </div>
                        <!-- item 6 -->
                        <div class="swiper-slide">
                            <a href="shop-default.html" class="widget-collection style-circle hover-img">
                                <div class="collection_image img-style">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/category/cate-34.jpg" data-src="{{ asset('userInterface/') }}/images/category/cate-34.jpg" alt="">
                                </div>
                                <p class="collection_name h4 link">
                                    Essentials <span class="count text-main-2">(86)</span>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Category -->
        <!-- Box Image -->
        <div class="flat-spacing pt-0">
            <div class="container">
                <div dir="ltr" class="swiper tf-swiper" data-preview="3" data-tablet="2" data-mobile-sm="1" data-mobile="1" data-space-lg="48"
                    data-space-md="32" data-space="12" data-pagination="1" data-pagination-sm="1" data-pagination-md="2" data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="box-image_V05 type-space-2 hover-img wow fadeInLeft">
                                <a href="shop-default.html" class="box-image_image img-style">
                                    <img src="{{ asset('userInterface/') }}/images/section/box-image-10.jpg" data-src="{{ asset('userInterface/') }}/images/section/box-image-10.jpg" alt="" class="lazyload">
                                </a>
                                <div class="box-image_content">
                                    <p class="sub-title text-primary h6 fw-semibold">SALE upto 50%</p>
                                    <h4 class="title">
                                        <a href="shop-default.html" class="link">
                                            Apple Watch SE 2022
                                        </a>
                                    </h4>
                                    <a href="shop-default.html" class="tf-btn-line fw-bold letter-space-0">
                                        Shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="box-image_V05 type-space-2 hover-img wow fadeInLeft" data-wow-delay="0.1s">
                                <a href="shop-default.html" class="box-image_image img-style">
                                    <img src="{{ asset('userInterface/') }}/images/section/box-image-11.jpg" data-src="{{ asset('userInterface/') }}/images/section/box-image-11.jpg" alt="" class="lazyload">
                                </a>
                                <div class="box-image_content">
                                    <p class="sub-title text-primary h6 fw-semibold">SALE upto 50%</p>
                                    <h4 class="title">
                                        <a href="shop-default.html" class="link">
                                            Retro Speaker Wireless
                                        </a>
                                    </h4>
                                    <a href="shop-default.html" class="tf-btn-line fw-bold letter-space-0">
                                        Shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="box-image_V05 type-space-2 hover-img wow fadeInLeft" data-wow-delay="0.2s">
                                <a href="shop-default.html" class="box-image_image img-style">
                                    <img src="{{ asset('userInterface/') }}/images/section/box-image-12.jpg" data-src="{{ asset('userInterface/') }}/images/section/box-image-12.jpg" alt="" class="lazyload">
                                </a>
                                <div class="box-image_content">
                                    <p class="sub-title text-primary h6 fw-semibold">SALE upto 50%</p>
                                    <h4 class="title">
                                        <a href="shop-default.html" class="link">
                                            Apple Watch SE 2022
                                        </a>
                                    </h4>
                                    <a href="shop-default.html" class="tf-btn-line fw-bold letter-space-0">
                                        Shop now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Box Image -->
        <!-- Banner Countdown -->
        <div class="themesFlat">
            <div class="container">
                <div class="banner-cd_v02 wow fadeInUp">
                    <div class="banner_title">
                        <span class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.5196 23.625C15.477 23.639 16.4261 23.4472 17.3029 23.0625C18.2988 22.6469 19.1475 21.9426 19.7396 21.0403C20.3317 20.138 20.6401 19.0791 20.625 18C20.625 14.625 19.875 13.875 18.75 11.625C17.625 9.375 18.75 7.125 18.75 7.125C17.8505 7.35299 17.0564 7.88241 16.5 8.625C16.5 0.75 11.25 0.375 11.25 0.375C11.5633 1.24478 11.6588 2.17809 11.5281 3.09329C11.3973 4.0085 11.0443 4.87774 10.5 5.625C8.625 8.25 6.75 9.75 6 12.75C6 12.75 4.5 12 4.875 10.5C4.875 10.5 3.375 13.125 3.375 17.25C3.375 21.7733 6.99825 23.1 8.78175 23.4788C9.25609 23.5777 9.73947 23.6267 10.224 23.625H14.5196Z"
                                    fill="#FEBD55" />
                                <path
                                    d="M9.31625 23.625C9.31625 23.625 5.44775 22.1745 5.44775 17.8223C5.44775 12.987 8.80325 11.25 8.80325 11.25C8.80325 11.25 7.86575 12.987 8.83288 13.4704C8.83288 13.4704 10.451 8.2005 14.8033 6.75C14.8033 6.75 13.2834 8.34862 14.2505 11.25C15.2176 14.1514 18.494 14.8027 18.5533 18V18.375C18.5913 19.4609 18.304 20.5334 17.7283 21.4549C16.9828 22.6163 16.1221 23.625 14.1519 23.625H9.31625Z"
                                    fill="#FC9E20" />
                                <path
                                    d="M9.75 23.625C8.86229 23.2538 8.10398 22.6287 7.57026 21.8282C7.03654 21.0276 6.75118 20.0872 6.75 19.125C6.75 15.375 8.625 13.875 8.625 13.875C8.625 13.875 8.625 15.375 9.375 15.75C9.375 15.75 10.125 10.5 13.5 9.375C13.5 9.375 12.375 10.125 13.125 12.375C13.875 14.625 17.25 15.375 17.25 19.125V19.4516C17.2633 20.3302 17.025 21.1943 16.5634 21.942C16.2467 22.4679 15.7965 22.9007 15.2585 23.1963C14.7204 23.4919 14.1137 23.6398 13.5 23.625H9.75Z"
                                    fill="#E03E3E" />
                                <path
                                    d="M9.74992 21.75C9.67576 21.75 9.60328 21.728 9.54162 21.6868C9.47997 21.6456 9.43192 21.587 9.40354 21.5185C9.37516 21.45 9.36774 21.3746 9.3822 21.3019C9.39666 21.2291 9.43237 21.1623 9.48479 21.1099L13.9848 16.6099C14.0555 16.5416 14.1502 16.5038 14.2486 16.5046C14.3469 16.5055 14.4409 16.5449 14.5105 16.6144C14.58 16.684 14.6194 16.778 14.6203 16.8763C14.6212 16.9747 14.5834 17.0694 14.515 17.1401L10.015 21.6401C9.94474 21.7105 9.84937 21.75 9.74992 21.75ZM13.1249 22.125C12.9024 22.125 12.6849 22.059 12.4999 21.9354C12.3149 21.8118 12.1707 21.6361 12.0856 21.4305C12.0004 21.225 11.9781 20.9988 12.0215 20.7805C12.0649 20.5623 12.1721 20.3618 12.3294 20.2045C12.4868 20.0472 12.6872 19.94 12.9054 19.8966C13.1237 19.8532 13.3499 19.8755 13.5554 19.9606C13.761 20.0458 13.9367 20.19 14.0603 20.375C14.1839 20.56 14.2499 20.7775 14.2499 21C14.2499 21.2984 14.1314 21.5845 13.9204 21.7955C13.7094 22.0065 13.4233 22.125 13.1249 22.125ZM13.1249 20.625C13.0508 20.625 12.9783 20.647 12.9166 20.6882C12.8549 20.7294 12.8068 20.788 12.7785 20.8565C12.7501 20.925 12.7427 21.0004 12.7571 21.0732C12.7716 21.1459 12.8073 21.2127 12.8598 21.2652C12.9122 21.3176 12.979 21.3533 13.0518 21.3678C13.1245 21.3823 13.1999 21.3748 13.2684 21.3465C13.3369 21.3181 13.3955 21.27 13.4367 21.2083C13.4779 21.1467 13.4999 21.0742 13.4999 21C13.4999 20.9005 13.4604 20.8052 13.3901 20.7348C13.3198 20.6645 13.2244 20.625 13.1249 20.625ZM10.8749 18.375C10.6524 18.375 10.4349 18.309 10.2499 18.1854C10.0649 18.0618 9.9207 17.8861 9.83556 17.6805C9.75041 17.475 9.72813 17.2488 9.77154 17.0305C9.81494 16.8123 9.92209 16.6118 10.0794 16.4545C10.2368 16.2972 10.4372 16.19 10.6554 16.1466C10.8737 16.1032 11.0999 16.1255 11.3054 16.2106C11.511 16.2958 11.6867 16.44 11.8103 16.625C11.9339 16.81 11.9999 17.0275 11.9999 17.25C11.9999 17.5484 11.8814 17.8345 11.6704 18.0455C11.4594 18.2565 11.1733 18.375 10.8749 18.375ZM10.8749 16.875C10.8008 16.875 10.7282 16.897 10.6666 16.9382C10.6049 16.9794 10.5568 17.038 10.5285 17.1065C10.5001 17.175 10.4927 17.2504 10.5071 17.3232C10.5216 17.3959 10.5573 17.4627 10.6098 17.5152C10.6622 17.5676 10.729 17.6033 10.8018 17.6178C10.8745 17.6323 10.9499 17.6248 11.0184 17.5965C11.0869 17.5681 11.1455 17.52 11.1867 17.4583C11.2279 17.3967 11.2499 17.3242 11.2499 17.25C11.2499 17.1505 11.2104 17.0552 11.1401 16.9848C11.0698 16.9145 10.9744 16.875 10.8749 16.875Z"
                                    fill="#FBFBFB" />
                            </svg>

                        </span>
                        <h4 class="text-primary">
                            Hurry up offer ends in:
                        </h4>
                    </div>

                    <div class="count-down_v02">
                        <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="Days,Hours,Mins,Secs"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Banner Countdown -->
        <!-- Feature Product -->
        <section class="flat-spacing flat-animate-tab">
            <div class="container">
                <div class="sect-title type-3 type-2 flex-wrap wow fadeInUp">
                    <h2 class="s-title text-nowrap">Deal of the day</h2>
                    <ul class="tab-product_list-2" role="tablist">
                        <li class="nav-tab-item" role="presentation">
                            <a href="#all-product" data-bs-toggle="tab" class="tf-btn-tab-2 h6 active">
                                All Product
                            </a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#headphone" data-bs-toggle="tab" class="tf-btn-tab-2 h6">
                                Headphone
                            </a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#laptop" data-bs-toggle="tab" class="tf-btn-tab-2 h6">
                                Laptop
                            </a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#speaker" data-bs-toggle="tab" class="tf-btn-tab-2 h6">
                                Loudspeaker
                            </a>
                        </li>
                    </ul>
                    <a href="shop-default.html" class="tf-btn-icon h6 fw-medium text-nowrap">
                        View All Product
                        <i class="icon icon-caret-circle-right"></i>
                    </a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="all-product" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                            data-space-lg="48" data-space-md="24" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                            data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-2.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-2.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-29 %</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Smart phone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Samsung Galaxy S10+, 128GB, Ceramic Black - Unlocked</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$599.00</h4>
                                                <span class="price-old h6">$699.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-4.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-4.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-19 %</li>
                                                <li class="product-badge_item h6 hot">Hot</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">LC30Pro Hybrid Active Noise Cancelling Headphones Over
                                                    Ear</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$399.00</h4>
                                                <span class="price-old h6">$479.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-25 %</li>
                                                <li class="product-badge_item h6 limit">Limited</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Camera</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Digital Camera, FHD 1080P Camera, Compact Small Camera</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$999.00</h4>
                                                <span class="price-old h6">$1,299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-7.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-7.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-35 %</li>
                                                <li class="product-badge_item flash-sale d-none d-sm-flex"><i class="icon icon-thunder"></i> Flash
                                                    sale</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Game Controller</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">AceGamer Aurora Generation 2.4G Wireless Bluetooth
                                                    Controller</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$299.00</h4>
                                                <span class="price-old h6">$350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="headphone" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="48"
                            data-space-md="24" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                            data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-16.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-16.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-29 %</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Smart watch</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Fitbit Versa 4 Fitness Smartwatch with Daily Readiness,
                                                    GPS, 24/7 Heart Rate</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$599.00</h4>
                                                <span class="price-old h6">$699.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-18.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-18.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-19 %</li>
                                                <li class="product-badge_item h6 trend">Trendy</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Apple iPhone 13, 128GB, Green - Unlocked</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$399.00</h4>
                                                <span class="price-old h6">$479.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-20.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-20.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-25 %</li>
                                                <li class="product-badge_item flash-sale d-none d-sm-flex"><i class="icon icon-thunder"></i> Flash
                                                    sale</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">JBL Tune 510BT - Bluetooth headphones with up to 40 hours
                                                    battery</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$999.00</h4>
                                                <span class="price-old h6">$1,299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-22.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-22.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-35 %</li>
                                                <li class="product-badge_item h6 new">New arrival</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Ipad</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">New Apple iPad 11-inch: A16 chip, 11-inch Model, Liquid
                                                    Retina Display</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$299.00</h4>
                                                <span class="price-old h6">$350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="laptop" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="48"
                            data-space-md="24" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                            data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-25 %</li>
                                                <li class="product-badge_item h6 limit">Limited</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Camera</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Digital Camera, FHD 1080P Camera, Compact Small Camera</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$999.00</h4>
                                                <span class="price-old h6">$1,299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-7.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-7.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-35 %</li>
                                                <li class="product-badge_item flash-sale d-none d-sm-flex"><i class="icon icon-thunder"></i> Flash
                                                    sale</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Game Controller</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">AceGamer Aurora Generation 2.4G Wireless Bluetooth
                                                    Controller</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$299.00</h4>
                                                <span class="price-old h6">$350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-2.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-2.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-29 %</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Smart phone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Samsung Galaxy S10+, 128GB, Ceramic Black - Unlocked</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$599.00</h4>
                                                <span class="price-old h6">$699.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-4.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-4.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-19 %</li>
                                                <li class="product-badge_item h6 hot">Hot</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">LC30Pro Hybrid Active Noise Cancelling Headphones Over
                                                    Ear</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$399.00</h4>
                                                <span class="price-old h6">$479.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="speaker" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="48"
                            data-space-md="24" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                            data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-20.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-20.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-25 %</li>
                                                <li class="product-badge_item flash-sale d-none d-sm-flex"><i class="icon icon-thunder"></i> Flash
                                                    sale</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">JBL Tune 510BT - Bluetooth headphones with up to 40 hours
                                                    battery</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$999.00</h4>
                                                <span class="price-old h6">$1,299.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-22.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-22.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-35 %</li>
                                                <li class="product-badge_item h6 new">New arrival</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Ipad</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">New Apple iPad 11-inch: A16 chip, 11-inch Model, Liquid
                                                    Retina Display</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$299.00</h4>
                                                <span class="price-old h6">$350.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-16.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-16.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-29 %</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Smart watch</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Fitbit Versa 4 Fitness Smartwatch with Daily Readiness,
                                                    GPS, 24/7 Heart Rate</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$599.00</h4>
                                                <span class="price-old h6">$699.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-18.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-18.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">-19 %</li>
                                                <li class="product-badge_item h6 trend">Trendy</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472" data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Apple iPhone 13, 128GB, Green - Unlocked</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap mb-0">
                                                <h4 class="price-new">$399.00</h4>
                                                <span class="price-old h6">$479.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Feature Product -->
        <!-- Product On Sale -->
        <section class="flat-spacing bg-white-smoke">
            <div class="container">
                <div class="sect-title type-3 type-2 pb-0 border-0 wow fadeInUp">
                    <h2 class="s-title type-semibold text-nowrap">Product On-sale</h2>
                    <a href="shop-default.html" class="tf-btn-icon h6 fw-medium text-nowrap">
                        View All Product
                        <i class="icon icon-caret-circle-right"></i>
                    </a>
                </div>
                <div class="tf-pag-swiper">
                    <div class=" tf-btn-swiper-main pst-4">
                        <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="3" data-tablet="2.5" data-mobile-sm="2" data-mobile="1"
                            data-space-lg="48" data-space-md="24" data-space="12" data-pagination="1" data-pagination-sm="2" data-pagination-md="2"
                            data-pagination-lg="1">
                            <div class="swiper-wrapper">
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5 style-padding">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-9.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-9.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Laptop</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Apple 2025 MacBook Air 13-inch Laptop with M4 chip: Built
                                                    for
                                                    Apple
                                                    Intelligence</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <h4 class="price-new">$599.00</h4>
                                                <span class="price-old h6">$699.00</span>
                                            </div>
                                            <div class="product-progress_sold">
                                                <div class="progress-sold progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 80%"></div>
                                                </div>
                                                <div class="box-quantity">
                                                    <p class="text-avaiable">
                                                        Available: <span class="fw-bold text-black">57</span>
                                                    </p>
                                                    <p class="text-avaiable">
                                                        Sold: <span class="fw-bold text-black">72</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5 style-padding">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-12.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-12.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Sony WH-1000XM4 Wireless Premium Noise Canceling Overhead
                                                    Headphones</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <h4 class="price-new">$300.00</h4>
                                                <span class="price-old h6">$499.00</span>
                                            </div>
                                            <div class="product-progress_sold">
                                                <div class="progress-sold progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 30%"></div>
                                                </div>
                                                <div class="box-quantity">
                                                    <p class="text-avaiable">
                                                        Available: <span class="fw-bold text-black">40</span>
                                                    </p>
                                                    <p class="text-avaiable">
                                                        Sold: <span class="fw-bold text-black">120</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5 style-padding">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-13.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-13.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-14.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-14.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Wireless Earbuds, 2025 Ear Buds with Big Bass Stereo Sound,
                                                    Bluetooth</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <h4 class="price-new">$199.00</h4>
                                                <span class="price-old h6">$299.00</span>
                                            </div>
                                            <div class="product-progress_sold">
                                                <div class="progress-sold progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 50%"></div>
                                                </div>
                                                <div class="box-quantity">
                                                    <p class="text-avaiable">
                                                        Available: <span class="fw-bold text-black">29</span>
                                                    </p>
                                                    <p class="text-avaiable">
                                                        Sold: <span class="fw-bold text-black">112</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5 style-padding">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-9.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-9.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Laptop</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Apple 2025 MacBook Air 13-inch Laptop with M4 chip: Built
                                                    for
                                                    Apple
                                                    Intelligence</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <h4 class="price-new">$599.00</h4>
                                                <span class="price-old h6">$699.00</span>
                                            </div>
                                            <div class="product-progress_sold">
                                                <div class="progress-sold progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 80%"></div>
                                                </div>
                                                <div class="box-quantity">
                                                    <p class="text-avaiable">
                                                        Available: <span class="fw-bold text-black">57</span>
                                                    </p>
                                                    <p class="text-avaiable">
                                                        Sold: <span class="fw-bold text-black">72</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product style-5 style-padding">
                                        <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-12.jpg"
                                                    data-src="{{ asset('userInterface/') }}/images/products/electronic/product-12.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info d-grid">
                                            <p class="tag-product text-small">Headphone</p>
                                            <h6 class="name-product">
                                                <a href="product-detail.html" class="link">Sony WH-1000XM4 Wireless Premium Noise Canceling Overhead
                                                    Headphones</a>
                                            </h6>
                                            <div class="rate_wrap w-100">
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                                <i class="icon-star text-star"></i>
                                            </div>
                                            <div class="price-wrap">
                                                <h4 class="price-new">$300.00</h4>
                                                <span class="price-old h6">$499.00</span>
                                            </div>
                                            <div class="product-progress_sold">
                                                <div class="progress-sold progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 30%"></div>
                                                </div>
                                                <div class="box-quantity">
                                                    <p class="text-avaiable">
                                                        Available: <span class="fw-bold text-black">40</span>
                                                    </p>
                                                    <p class="text-avaiable">
                                                        Sold: <span class="fw-bold text-black">120</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tf-sw-nav type-small-2 nav-prev-swiper d-xl-flex">
                            <i class="icon icon-arrow-left"></i>
                        </div>
                        <div class="tf-sw-nav type-small-2 nav-next-swiper d-xl-flex">
                            <i class="icon icon-arrow-right"></i>
                        </div>
                    </div>
                    <div class="sw-dot-default-2 tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Product On Sale -->
        <!-- Best Seller -->
        <section class="flat-spacing">
            <div class="container">
                <div class="sect-title type-3 type-2 wow fadeInUp">
                    <h2 class="s-title type-semibold text-nowrap">Product Best Sellers</h2>
                    <a href="shop-default.html" class="tf-btn-icon h6 fw-medium text-nowrap">
                        View All Product
                        <i class="icon icon-caret-circle-right"></i>
                    </a>
                </div>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                    data-space-lg="48" data-space-md="24" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                    data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- Product 1 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-16.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-16.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item h6 sale">-29 %</li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Smart watch</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">Fitbit Versa 4 Fitness Smartwatch with Daily Readiness,
                                            GPS, 24/7 Heart Rate</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$599.00</h4>
                                        <span class="price-old h6">$699.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-18.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-18.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Headphone</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">Apple iPhone 13, 128GB, Green - Unlocked</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$399.00</h4>
                                        <span class="price-old h6">$479.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-20.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-20.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item h6 sale">-25 %</li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Headphone</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">JBL Tune 510BT - Bluetooth headphones with up to 40 hours
                                            battery</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$999.00</h4>
                                        <span class="price-old h6">$1,299.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-22.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-22.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item h6 sale">-35 %</li>
                                        <li class="product-badge_item h6 new">New arrival</li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Ipad</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">New Apple iPad 11-inch: A16 chip, 11-inch Model, Liquid
                                            Retina Display</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$299.00</h4>
                                        <span class="price-old h6">$350.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                </div>
            </div>
        </section>
        <!-- /Best Seller -->
        <!-- Voucher -->
        <section>
            <div class="container">
                <div class="banner-V02 hover-img wow fadeInUp">
                    <div class="banner_img img-style">
                        <img src="{{ asset('userInterface/') }}/images/banner/bannerV02.jpg" data-src="{{ asset('userInterface/') }}/images/banner/bannerV02.jpg" alt="Banner" class="lazyload">
                    </div>
                    <div class="banner_content">
                        <div class="box-text">
                            <h2 class="title type-semibold">
                                <a href="product-detail.html" class="text-primary">Voucher Today</a>
                            </h2>
                            <h4 class="sub-title fw-bold">Get a voucher for any order over <span class="text-primary">$150</span></h4>
                        </div>
                        <div class="group-btn">
                            <a href="shop-default.html" class="tf-btn animate-btn type-small-3">
                                Get a voucher
                                <i class="icon icon-arrow-right"></i>
                            </a>
                            <a href="shop-default.html" class="tf-btn btn-white animate-btn animate-dark type-small-3">
                                Discover more
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Voucher -->
        <!-- Feature -->
        <section class="flat-spacing">
            <div class="container">
                <div class="sect-title type-3 type-2 wow fadeInUp">
                    <h2 class="s-title type-semibold">Featured Products</h2>
                    <a href="shop-default.html" class="tf-btn-icon h6 fw-medium">
                        View All Product
                        <i class="icon icon-caret-circle-right"></i>
                    </a>
                </div>
                <div dir="ltr" class="swiper tf-swiper wrap-sw-over wow fadeInUp" data-preview="3" data-tablet="2" data-mobile-sm="1" data-mobile="1"
                    data-space-lg="48" data-space-md="24" data-space="12" data-pagination="1" data-pagination-sm="1" data-pagination-md="2"
                    data-pagination-lg="3" data-grid="2">
                    <div class="swiper-wrapper">
                        <!-- Product 1 -->
                        <div class="swiper-slide">
                            <div class="card-product product-style_list-mini type-2 hover-img">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img img-style">
                                        <img class="img-product lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-23.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-23.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="card-product_info">
                                    <p class="tag-product text-small">Smart watch</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="text-line-clamp-2 link">Smartwatch for Men Women, Alexa Built-in, 1.8"
                                            Fitness
                                            Tracker</a>
                                    </h6>
                                    <div class="group-action">
                                        <div class="price-wrap mb-0">
                                            <h4 class="price-new">$299.00</h4>
                                            <span class="price-old h6">$349.00</span>
                                        </div>
                                        <ul class="product-action_list style-row">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                                    <span class="icon icon-shopping-cart-simple"></span>
                                                    <span class="tooltip">Add to cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip box-icon">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="swiper-slide">
                            <div class="card-product product-style_list-mini type-2 hover-img">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img img-style">
                                        <img class="img-product lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-24.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-24.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="card-product_info">
                                    <p class="tag-product text-small">Wireless</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="text-line-clamp-2 link">Kids Headphones - noot K11 foldable, anti-tangle
                                            product</a>
                                    </h6>
                                    <div class="group-action">
                                        <div class="price-wrap mb-0">
                                            <h4 class="price-new">$599.00</h4>
                                            <span class="price-old h6">$499.00</span>
                                        </div>
                                        <ul class="product-action_list style-row">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                                    <span class="icon icon-shopping-cart-simple"></span>
                                                    <span class="tooltip">Add to cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip box-icon">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="swiper-slide">
                            <div class="card-product product-style_list-mini type-2 hover-img">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img img-style">
                                        <img class="img-product lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-25.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-25.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="card-product_info">
                                    <p class="tag-product text-small">Wireless</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="text-line-clamp-2 link">JBL Tune 520BT - Wireless On-Ear Headphones, Up
                                            to 57H Battery</a>
                                    </h6>
                                    <div class="group-action">
                                        <div class="price-wrap mb-0">
                                            <h4 class="price-new">$189.00</h4>
                                            <span class="price-old h6">$249.00</span>
                                        </div>
                                        <ul class="product-action_list style-row">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                                    <span class="icon icon-shopping-cart-simple"></span>
                                                    <span class="tooltip">Add to cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip box-icon">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="swiper-slide">
                            <div class="card-product product-style_list-mini type-2 hover-img">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img img-style">
                                        <img class="img-product lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-26.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-26.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="card-product_info">
                                    <p class="tag-product text-small">Essential Utensils</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="text-line-clamp-2 link">Upgraded 15L large capacity folding washing
                                            machine</a>
                                    </h6>
                                    <div class="group-action">
                                        <div class="price-wrap mb-0">
                                            <h4 class="price-new">$379.00</h4>
                                            <span class="price-old h6">$429.00</span>
                                        </div>
                                        <ul class="product-action_list style-row">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                                    <span class="icon icon-shopping-cart-simple"></span>
                                                    <span class="tooltip">Add to cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip box-icon">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 5 -->
                        <div class="swiper-slide">
                            <div class="card-product product-style_list-mini type-2 hover-img">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img img-style">
                                        <img class="img-product lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-27.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-27.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="card-product_info">
                                    <p class="tag-product text-small">Fan</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="text-line-clamp-2 link">Double tub capacity 26lbs wash, 18lbs 8lbs w/
                                            spinner</a>
                                    </h6>
                                    <div class="group-action">
                                        <div class="price-wrap mb-0">
                                            <h4 class="price-new">$539.00</h4>
                                            <span class="price-old h6">$599.00</span>
                                        </div>
                                        <ul class="product-action_list style-row">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                                    <span class="icon icon-shopping-cart-simple"></span>
                                                    <span class="tooltip">Add to cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip box-icon">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 6 -->
                        <div class="swiper-slide">
                            <div class="card-product product-style_list-mini type-2 hover-img">
                                <div class="card-product_wrapper">
                                    <a href="product-detail.html" class="product-img img-style">
                                        <img class="img-product lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-28.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-28.jpg" alt="Product">
                                    </a>
                                </div>
                                <div class="card-product_info">
                                    <p class="tag-product text-small">Smartwatch</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="text-line-clamp-2 link">Samsung Galaxy S10+, 128GB, Ceramic Black -
                                            Unlocked</a>
                                    </h6>
                                    <div class="group-action">
                                        <div class="price-wrap mb-0">
                                            <h4 class="price-new">$629.00</h4>
                                            <span class="price-old h6">$699.00</span>
                                        </div>
                                        <ul class="product-action_list style-row">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip box-icon">
                                                    <span class="icon icon-shopping-cart-simple"></span>
                                                    <span class="tooltip">Add to cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="hover-tooltip box-icon">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip box-icon ">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip box-icon">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick view</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- Feature -->
        <!-- Best Seller -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div class="sect-title type-3 type-2 wow fadeInUp">
                    <h2 class="s-title type-semibold text-nowrap">Voucher & Promotional</h2>
                    <a href="shop-default.html" class="tf-btn-icon h6 fw-medium text-nowrap">
                        View All Product
                        <i class="icon icon-caret-circle-right"></i>
                    </a>
                </div>
                <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2"
                    data-space-lg="48" data-space-md="24" data-space="12" data-pagination="2" data-pagination-sm="2" data-pagination-md="3"
                    data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- Product 1 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-29.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-29.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-30.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-30.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item h6 sale">-29 %</li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Ipad</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">8BitDo SN30 Pro Bluetooth Controller, Hall Effect Joystick
                                            Update</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$599.00</h4>
                                        <span class="price-old h6">$699.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-31.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-31.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-32.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-32.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Smartwatch</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">Smart Watch for Men Women, Alexa Built-in Fitness Tracker</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$399.00</h4>
                                        <span class="price-old h6">$479.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-33.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-33.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-34.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-34.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item h6 sale">-25 %</li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Game Controller</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">Wireless Switch Controller for Nintendo Switch/Lite/OLED</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$999.00</h4>
                                        <span class="price-old h6">$1,299.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product 4 -->
                        <div class="swiper-slide">
                            <div class="card-product style-5">
                                <div class="card-product_wrapper aspect-ratio-0 d-flex">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="{{ asset('userInterface/') }}/images/products/electronic/product-35.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-35.jpg" alt="Product">
                                        <img class="lazyload img-hover" src="{{ asset('userInterface/') }}/images/products/electronic/product-36.jpg"
                                            data-src="{{ asset('userInterface/') }}/images/products/electronic/product-36.jpg" alt="Product">
                                    </a>
                                    <ul class="product-action_list">
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shopping-cart-simple"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon ">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick view</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="product-badge_list">
                                        <li class="product-badge_item h6 sale">-35 %</li>
                                        <li class="product-badge_item h6 new">New arrival</li>
                                    </ul>
                                </div>
                                <div class="card-product_info d-grid">
                                    <p class="tag-product text-small">Smartphone</p>
                                    <h6 class="name-product">
                                        <a href="product-detail.html" class="link">Samsung Galaxy S10+, 128GB, Ceramic Black - Unlocked</a>
                                    </h6>
                                    <div class="rate_wrap w-100">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                    <div class="price-wrap mb-0">
                                        <h4 class="price-new">$299.00</h4>
                                        <span class="price-old h6">$350.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                </div>
            </div>
        </section>
        <!-- /Best Seller -->
        <!-- Blog -->
        <section>
            <div class="container">
                <div class="sect-title type-3 type-2 wow fadeInUp">
                    <h2 class="s-title type-semibold text-nowrap">Our Blog</h2>
                    <a href="blog-grid.html" class="tf-btn-icon h6 fw-medium text-nowrap">
                        View All Blog
                        <i class="icon icon-caret-circle-right"></i>
                    </a>
                </div>
                <div dir="ltr" class="swiper tf-swiper" data-preview="3" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="48"
                    data-space-md="32" data-space="12" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft">
                                <a href="blog-detail.html" class="entry_image img-style4">
                                    <img src="{{ asset('userInterface/') }}/images/blog/blog-14.jpg" data-src="{{ asset('userInterface/') }}/images/blog/blog-14.jpg" alt="Blog" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.html" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="blog-detail.html" class="entry_name link h4">
                                        The Latest Sound Technology Is Applied
                                    </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna faucibus. Pellentesque eget finibus
                                        nunc.
                                    </p>
                                    <a href="blog-detail.html" class="tf-btn-line">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.1s">
                                <a href="blog-detail.html" class="entry_image img-style4">
                                    <img src="{{ asset('userInterface/') }}/images/blog/blog-15.jpg" data-src="{{ asset('userInterface/') }}/images/blog/blog-15.jpg" alt="Blog" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.html" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="blog-detail.html" class="entry_name link h4">
                                        Motion controlled smart tv device
                                    </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna faucibus. Pellentesque eget finibus
                                        nunc.
                                    </p>
                                    <a href="blog-detail.html" class="tf-btn-line">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.2s">
                                <a href="blog-detail.html" class="entry_image img-style4">
                                    <img src="{{ asset('userInterface/') }}/images/blog/blog-16.jpg" data-src="{{ asset('userInterface/') }}/images/blog/blog-16.jpg" alt="Blog" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.html" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="blog-detail.html" class="entry_name link h4">
                                        Increase Productivity With Mobile Screens
                                    </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna faucibus. Pellentesque eget finibus
                                        nunc.
                                    </p>
                                    <a href="blog-detail.html" class="tf-btn-line">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Blog -->
        <!-- Box Icon -->
        <div class="flat-spacing">
            <div class="container">
                <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="97"
                    data-space-md="33" data-space="13" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="box-icon_V01 wow fadeInLeft">
                                <span class="icon">
                                    <i class="icon-package"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">30 days return</h4>
                                    <p class="text">30 day money back guarantee</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">

                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.1s">
                                <span class="icon">
                                    <i class="icon-calender"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">3 year warranty</h4>
                                    <p class="text">Manufacturer's defect</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">

                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.2s">
                                <span class="icon">
                                    <i class="icon-boat"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">Free shipping</h4>
                                    <p class="text">Free Shipping for orders over $150</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="box-icon_V01 wow fadeInLeft" data-wow-delay="0.3s">
                                <span class="icon">
                                    <i class="icon-headset"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title fw-normal">Online support</h4>
                                    <p class="text">24 hours a day, 7 days a week</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Box Icon -->
        <!-- Footer -->
        <footer class="tf-footer">
            <div class="container d-flex">
                <span class="br-line"></span>
            </div>
            <div class="footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb_30 mb-xl-0">
                            <div class="footer-col-block">
                                <p class="footer-heading footer-heading-mobile">Contact us</p>
                                <div class="tf-collapse-content">
                                    <ul class="footer-contact">
                                        <li>
                                            <i class="icon icon-map-pin"></i>
                                            <span class="br-line"></span>
                                            <a href="https://www.google.com/maps?q=8500+Lorem+Street+Chicago,+IL+55030+Dolor+sit+amet" target="_blank"
                                                class="h6 link">
                                                8500 Lorem Street Chicago, IL 55030 <br class="d-none d-lg-block"> Dolor sit amet
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon icon-phone"></i>
                                            <span class="br-line"></span>
                                            <a href="tel:+88001234567" class="h6 link">+8(800) 123 4567</a>
                                        </li>
                                        <li>
                                            <i class="icon icon-envelope-simple"></i>
                                            <span class="br-line"></span>
                                            <a href="mailto:themesflat@support.com" class="h6 link">themesflat@support.com</a>
                                        </li>
                                    </ul>
                                    <div class="social-wrap">
                                        <ul class="tf-social-icon">
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank" class="social-facebook">
                                                    <span class="icon"><i class="icon-fb"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank" class="social-instagram">
                                                    <span class="icon"><i class="icon-instagram-logo"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://x.com/" target="_blank" class="social-x">
                                                    <span class="icon"><i class="icon-x"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.tiktok.com/" target="_blank" class="social-tiktok">
                                                    <span class="icon"><i class="icon-tiktok"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb_30 mb-xl-0">
                            <div class="footer-col-block footer-wrap-1 ms-xl-auto">
                                <p class="footer-heading footer-heading-mobile">Shopping</p>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li><a href="faq.html" class="link h6">Shipping</a></li>
                                        <li><a href="shop-default.html" class="link h6">Shop by Brand</a></li>
                                        <li><a href="track-order.html" class="link h6">Track order</a></li>
                                        <li><a href="faq.html" class="link h6">Terms & Conditions</a></li>
                                        <li><a href="#size-guide" data-bs-toggle="modal" class="link h6">Size Guide</a></li>
                                        <li><a href="wishlist.html" class="link h6">My Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb_30 mb-sm-0">
                            <div class="footer-col-block footer-wrap-2 mx-xl-auto">
                                <p class="footer-heading footer-heading-mobile">Information</p>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li><a href="about-us.html" class="link h6">About Us</a></li>
                                        <li><a href="faq.html" class="link h6">Term & Policy</a></li>
                                        <li><a href="faq.html" class="link h6">Help Center</a></li>
                                        <li><a href="blog-grid.html" class="link h6">News & Blog</a></li>
                                        <li><a href="faq.html" class="link h6">Refunds</a></li>
                                        <li><a href="faq.html" class="link h6">Careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="footer-col-block">
                                <p class="footer-heading footer-heading-mobile">Let’s keep in touch</p>
                                <div class="tf-collapse-content">
                                    <div class="footer-newsletter">
                                        <p class="h6 caption">
                                            Enter your email below to be the first to know about new collections and product launches.
                                        </p>
                                        <div class="sib-form sib-form_footer">
                                            <div id="sib-form-container" class="sib-form-container">
                                                <div id="error-message" class="sib-form-message-panel">
                                                    <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                                        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                                            <path
                                                                d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
                                                        </svg>
                                                        <span class="sib-form-message-panel__inner-text">Your subscription could not be saved. Please
                                                            try again.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="success-message" class="sib-form-message-panel">
                                                    <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                                        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                                            <path
                                                                d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
                                                        </svg>
                                                        <span class="sib-form-message-panel__inner-text">Your subscription has been successful.
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="sib-container" class="sib-container--large sib-container--vertical ">
                                                    <form id="sib-form" method="POST"
                                                        action="https://3c02c1a1.sibforms.com/serve/MUIFAFPRWVlRk-kE9iHdv65Y3rsuzYBfqoHBiXUsxCq5iy1P50mAUPMZ2OmfFABASDBPu6E1XohUSGXfD1t2Yt26U0dKm6QZOZZHtdQdVwYPU0ho_4_v86gRaeSEiKTYre80--XhZYCeo13DP6aZboCZ-f0MxfoIv8ph2pGSdcIYZtSh6bAMsJZA0QSlWkLxoErZqGHpYO3naKhz"
                                                        data-type="subscription">
                                                        <div>
                                                            <div class="sib-form-block">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="sib-form-block">
                                                                <div class="sib-text-form-block">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-content_fieldset form-get_email">
                                                            <div class="fieldset-input_email">
                                                                <div class="sib-input sib-form-block">
                                                                    <div class="form__entry entry_block">
                                                                        <div class="form__label-row ">
                                                                            <label class="entry__label d-none" for="EMAIL"></label>
                                                                            <div class="entry__field ip">
                                                                                <input class="input " type="email" id="EMAIL" name="EMAIL"
                                                                                    autocomplete="off" placeholder="Enter your email"
                                                                                    data-required="true" required>
                                                                            </div>
                                                                        </div>
                                                                        <label class="entry__error entry__error--primary"></label>
                                                                        <label class="entry__specification"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fiedset-button_submit">
                                                                <div class="sib-form-block">
                                                                    <button
                                                                        class="sib-form-block__button sib-form-block__button-with-loader tf-btn animate-btn type-small-2"
                                                                        form="sib-form" type="submit">
                                                                        <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon"
                                                                            viewBox="0 0 512 512">
                                                                            <path
                                                                                d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z">
                                                                            </path>
                                                                        </svg>
                                                                        Subscribe
                                                                        <i class="icon icon-arrow-right"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="sib-optin sib-form-block">
                                                                <div class="form__entry entry_mcq">
                                                                    <div class="form__label-row ">
                                                                        <div class="entry__choice checkbox-wrap">
                                                                            <input type="checkbox" class="input_replaced tf-check style-3" value="1"
                                                                                id="OPT_IN" name="OPT_IN">
                                                                            <label for="OPT_IN" class="h6 font-main text-main">
                                                                                By clicking subcribe, you agree to the
                                                                                <a href="faq.html"
                                                                                    class="text-decoration-underline link text-black">Terms
                                                                                    of Service</a> and <a href="faq.html"
                                                                                    class="text-decoration-underline link text-black">
                                                                                    Privacy Policy</a>.
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <label class="entry__error entry__error--primary"></label>
                                                                    <label class="entry__specification"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="email_address_check" value="" class="input--hidden">
                                                        <input type="hidden" name="locale" value="en">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="inner-bottom">
                        <ul class="list-hor">
                            <li>
                                <a href="#" class="h6 link">Help & FAQs</a>
                            </li>
                            <li class="br-line type-vertical"></li>
                            <li>
                                <a href="#" class="h6 link">Factory</a>
                            </li>
                        </ul>
                        <div class="list-hor flex-wrap">
                            <span class="h6">Payment:</span>
                            <ul class="payment-method-list">
                                <li><img src="{{ asset('userInterface/') }}/images/payment/visa.png" alt="Payment"></li>
                                <li><img src="{{ asset('userInterface/') }}/images/payment/master-card.png" alt="Payment"></li>
                                <li><img src="{{ asset('userInterface/') }}/images/payment/amex.png" alt="Payment"></li>
                                <li><img src="{{ asset('userInterface/') }}/images/payment/discover.png" alt="Payment"></li>
                                <li><img src="{{ asset('userInterface/') }}/images/payment/paypal.png" alt="Payment"></li>
                            </ul>
                        </div>
                        <div class="list-hor">
                            <div class="tf-currencies">
                                <select class="tf-dropdown-select style-default type-currencies">
                                    <option selected data-thumbnail="{{ asset('userInterface/') }}/images/country/us.png">USD</option>
                                    <option data-thumbnail="{{ asset('userInterface/') }}/images/country/vie.png">VND</option>
                                </select>
                            </div>
                            <span class="br-line type-vertical"></span>
                            <div class="tf-languages">
                                <select class="tf-dropdown-select style-default type-languages">
                                    <option>English</option>
                                    <option>العربية</option>
                                    <option>简体中文</option>
                                    <option>اردو</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </div>

    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close-popup" data-bs-dismiss="offcanvas">
            <i class="icon-close"></i>
        </span>
        <div class="canvas-header">
            <p class="text-logo-mb">Ochaka.</p>
            <a href="login.html" class="tf-btn type-small style-2">
                Login
                <i class="icon icon-user"></i>
            </a>
            <span class="br-line"></span>
        </div>
        <div class="canvas-body">
            <div class="mb-content-top">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation"></ul>
            </div>
            <div class="group-btn">
                <a href="wishlist.html" class="tf-btn type-small style-2">
                    Wishlist
                    <i class="icon icon-heart"></i>
                </a>
                <div data-bs-dismiss="offcanvas">
                    <a href="#search" data-bs-toggle="modal" class="tf-btn type-small style-2">
                        Search
                        <i class="icon icon-magnifying-glass"></i>
                    </a>
                </div>
            </div>
            <div class="flow-us-wrap">
                <h5 class="title">Follow us on</h5>
                <ul class="tf-social-icon">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" class="social-facebook">
                            <span class="icon"><i class="icon-fb"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" class="social-instagram">
                            <span class="icon"><i class="icon-instagram-logo"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/" target="_blank" class="social-x">
                            <span class="icon"><i class="icon-x"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/" target="_blank" class="social-tiktok">
                            <span class="icon"><i class="icon-tiktok"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="payment-wrap">
                <h5 class="title">Payment:</h5>
                <ul class="payment-method-list">
                    <li><img src="{{ asset('userInterface/') }}/images/payment/visa.png" alt="Payment"></li>
                    <li><img src="{{ asset('userInterface/') }}/images/payment/master-card.png" alt="Payment"></li>
                    <li><img src="{{ asset('userInterface/') }}/images/payment/amex.png" alt="Payment"></li>
                    <li><img src="{{ asset('userInterface/') }}/images/payment/discover.png" alt="Payment"></li>
                    <li><img src="{{ asset('userInterface/') }}/images/payment/paypal.png" alt="Payment"></li>
                </ul>
            </div>
        </div>
        <div class="canvas-footer">
            <div class="tf-currencies">
                <select class="tf-dropdown-select style-default type-currencies">
                    <option selected data-thumbnail="{{ asset('userInterface/') }}/images/country/us.png">USD</option>
                    <option data-thumbnail="{{ asset('userInterface/') }}/images/country/vie.png">VND</option>
                </select>
            </div>
            <span class="br-line"></span>
            <div class="tf-languages">
                <select class="tf-dropdown-select style-default type-languages">
                    <option>English</option>
                    <option>العربية</option>
                    <option>简体中文</option>
                    <option>اردو</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /Mobile Menu -->

    <!-- Toolbar -->
    <div class="tf-toolbar-bottom">
        <div class="toolbar-item">
            <a href="shop-default.html">
                <span class="toolbar-icon">
                    <i class="icon icon-storefront"></i>
                </span>
                <span class="toolbar-label">Shop</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#search" data-bs-toggle="modal">
                <span class="toolbar-icon">
                    <i class="icon icon-magnifying-glass"></i>
                </span>
                <span class="toolbar-label">Search</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="account-page.html">
                <span class="toolbar-icon">
                    <i class="icon icon-user"></i>
                </span>
                <span class="toolbar-label">Account</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.html">
                <span class="toolbar-icon">
                    <i class="icon icon-heart"></i>
                    <span class="toolbar-count">7</span>
                </span>
                <span class="toolbar-label">Wishlist</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="view-cart.html">
                <span class="toolbar-icon">
                    <i class="icon icon-shopping-cart-simple"></i>
                    <span class="toolbar-count">24</span>
                </span>
                <span class="toolbar-label">Cart</span>
            </a>
        </div>
    </div>
    <!-- /Toolbar -->

    <!-- Size Guide -->
    <div class="modal modalCentered fade modal-size-guide" id="size-guide">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content widget-tabs style-2">
                <div class="header">
                    <ul class="widget-menu-tab">
                        <li class="item-title active">
                            <span class="inner h3">Size </span>
                        </li>
                        <li class="item-title">
                            <span class="inner h3">Size Guide</span>
                        </li>
                    </ul>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <div class="tab-size">
                                <div>
                                    <div class="widget-size mb-24">
                                        <div class="box-title-size">
                                            <div class="title-size h6 text-black">Height</div>
                                            <div class="number-size text-small">
                                                <span class="max-size">100</span>
                                                <span class="">Cm</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%;"></div>
                                            </div>
                                            <input type="range" min="0" max="200" value="100" class="range-max">
                                        </div>
                                    </div>
                                    <div class="widget-size">
                                        <div class="box-title-size">
                                            <div class="title-size h6 text-black">Weight</div>
                                            <div class="number-size text-small">
                                                <span class="max-size">50</span>
                                                <span class="">Kg</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%;"></div>
                                            </div>
                                            <input type="range" min="0" max="100" value="50" class="range-max">
                                        </div>
                                    </div>
                                </div>
                                <div class="size-button-wrap choose-option-list">
                                    <div class="size-button-item choose-option-item">
                                        <h6 class="text">Thin</h6>
                                    </div>
                                    <div class="size-button-item choose-option-item select-option">
                                        <h6 class="text">Normal</h6>
                                    </div>
                                    <div class="size-button-item choose-option-item">
                                        <h6 class="text">Plump</h6>
                                    </div>
                                </div>
                                <div class="suggests">
                                    <h4 class="">Suggests for you:</h4>
                                    <div class="suggests-list">
                                        <a href="#" class="suggests-item link h6">L - shirt</a>
                                        <a href="#" class="suggests-item link h6">XL - Pant</a>
                                        <a href="#" class="suggests-item link h6">31 - Jeans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner overflow-auto text-nowrap">
                            <table class="tab-sizeguide-table">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>US</th>
                                        <th>Bust</th>
                                        <th>Waist</th>
                                        <th>Low Hip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>XS</td>
                                        <td>2</td>
                                        <td>32</td>
                                        <td>24 - 25</td>
                                        <td>33 - 34</td>
                                    </tr>
                                    <tr>
                                        <td>S</td>
                                        <td>4</td>
                                        <td>26 - 27</td>
                                        <td>34 - 35</td>
                                        <td>35 - 26</td>
                                    </tr>
                                    <tr>
                                        <td>M</td>
                                        <td>6</td>
                                        <td>28 - 29</td>
                                        <td>36 - 37</td>
                                        <td>38 - 40</td>
                                    </tr>
                                    <tr>
                                        <td>L</td>
                                        <td>8</td>
                                        <td>30 - 31</td>
                                        <td>38 - 29</td>
                                        <td>42 - 44</td>
                                    </tr>
                                    <tr>
                                        <td>XL</td>
                                        <td>10</td>
                                        <td>32 - 33</td>
                                        <td>40 - 41</td>
                                        <td>45 - 47</td>
                                    </tr>
                                    <tr>
                                        <td>XXL</td>
                                        <td>12</td>
                                        <td>34 - 35</td>
                                        <td>42 - 43</td>
                                        <td>48 - 50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Size Guide -->
    <!-- Compare -->
    <div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
        <div class="canvas-wrapper">
            <div class="canvas-body">
                <div class="container">
                    <div class="tf-compare-list main-list-clear wrap-empty_text">
                        <div class="tf-compare-head">
                            <h4 class="title">Compare products</h4>
                        </div>
                        <div class="tf-compare-offcanvas list-empty">
                            <p class="box-text_empty h6 text-main">Your Compare is curently empty</p>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg"
                                        src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                        src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg"
                                        src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="tf-compare-buttons">
                            <a href="compare.html" class="tf-btn animate-btn d-inline-flex bg-dark-2 justify-content-center">
                                Compare
                            </a>
                            <div class="tf-btn btn-white animate-btn animate-dark line clear-list-empty tf-compare-button-clear-all">
                                Clear All
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Compare -->
    <!-- Quick View -->
    <div class="modal modalCentered fade modal-quick-view" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <i class="icon icon-close icon-close-popup" data-bs-dismiss="modal"></i>
                <div class="tf-product-media-wrap tf-btn-swiper-item">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-size="XS" data-color="beige">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg"
                                        src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="L" data-color="pink">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-12.jpg"
                                        src="{{ asset('userInterface/') }}/images/products/electronic/product-12.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="M" data-color="green">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-13.jpg"
                                        src="{{ asset('userInterface/') }}/images/products/electronic/product-13.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="S" data-color="blue">
                                <div class="item">
                                    <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-14.jpg"
                                        src="{{ asset('userInterface/') }}/images/products/electronic/product-14.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-product-info-wrap">
                    <div class="tf-product-info-inner tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <a href="product-detail.html" class="link product-info-name fw-medium h1">
                                Casual Round Neck T-Shirt
                            </a>
                            <div class="product-info-meta">
                                <div class="rating">
                                    <div class="d-flex gap-4">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                    </div>
                                    <div class="reviews text-main">(3.671 review)</div>
                                </div>
                                <div class="people-add text-primary">
                                    <i class="icon icon-shopping-cart-simple"></i>
                                    <span class="h6">9 people just added this product to their cart</span>
                                </div>
                            </div>
                            <div class="product-info-price">
                                <div class="price-wrap">
                                    <span class="price-new price-on-sale h2">$ 14.99</span>
                                    <span class="price-old compare-at-price h6">$ 24.99</span>
                                    <p class="badges-on-sale h6 fw-semibold">
                                        <span class="number-sale" data-person-sale="29">
                                            -29 %
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <p class="product-infor-sub text-main h6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo dolor, consectetur vel metus vitae,
                                tincidunt finibus dui fusce tellus enim.
                            </p>
                        </div>
                        <div class="tf-product-variant w-100">
                            <div class="variant-picker-item variant-size d-none">
                                <div class="variant-picker-label">
                                    <div class="h4 fw-semibold">
                                        Size
                                        <span class="variant-picker-label-value value-currentSize">medium</span>
                                    </div>
                                    <a href="#size-guide" data-bs-toggle="modal" class="size-guide link h6 fw-medium">
                                        <i class="icon icon-ruler"></i>
                                        Size Guide
                                    </a>
                                </div>
                                <div class="variant-picker-values">
                                    <span class="size-btn active" data-size="XS">XS</span>
                                    <span class="size-btn" data-size="S">S</span>
                                    <span class="size-btn" data-size="M">M</span>
                                    <span class="size-btn" data-size="L">L</span>
                                </div>
                            </div>
                            <div class="variant-picker-item variant-color">
                                <div class="variant-picker-label">
                                    <div class="h4 fw-semibold">
                                        Colors
                                        <span class="variant-picker-label-value value-currentColor">orange</span>
                                    </div>
                                </div>
                                <div class="variant-picker-values">
                                    <div class="hover-tooltip tooltip-bot color-btn active" data-color="beige">
                                        <span class="check-color bg-light-beige"></span>
                                        <span class="tooltip">Beige</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="pink">
                                        <span class="check-color bg-hot-pink"></span>
                                        <span class="tooltip">Pink</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="green">
                                        <span class="check-color bg-sage-green"></span>
                                        <span class="tooltip">Green</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="blue">
                                        <span class="check-color bg-baby-blue"></span>
                                        <span class="tooltip">Blue</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="black">
                                        <span class="check-color bg-dark-charcoal"></span>
                                        <span class="tooltip">Dark</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-total-quantity w-100">
                            <div class="group-btn">
                                <div class="wg-quantity">
                                    <button class="btn-quantity btn-decrease">
                                        <i class="icon icon-minus"></i>
                                    </button>
                                    <input class="quantity-product" type="text" name="number" value="1">
                                    <button class="btn-quantity btn-increase">
                                        <i class="icon icon-plus"></i>
                                    </button>
                                </div>
                                <p class="h6 d-none d-sm-block">
                                    15 products available
                                </p>
                                <button type="button" class="d-sm-none hover-tooltip box-icon btn-add-wishlist flex-sm-shrink-0">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </button>
                                <a href="#compare" data-bs-toggle="offcanvas" class="d-sm-none hover-tooltip tooltip-top box-icon flex-sm-shrink-0">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </div>
                            <div class="group-btn flex-sm-nowrap">
                                <a href="#shoppingCart" data-bs-toggle="offcanvas" class="tf-btn animate-btn btn-add-to-cart">
                                    ADD TO CART
                                    <i class="icon icon-shopping-cart-simple"></i>
                                </a>
                                <button type="button" class="d-none d-sm-flex hover-tooltip box-icon btn-add-wishlist flex-sm-shrink-0">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </button>
                                <a href="#compare" data-bs-toggle="offcanvas"
                                    class="d-none d-sm-flex hover-tooltip tooltip-top box-icon flex-sm-shrink-0">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </div>
                            <div class="group-btn">
                                <a href="checkout.html" class="tf-btn btn-yellow w-100 animate-btn animate-dark">
                                    Pay with
                                    <span class="icon">
                                        <svg width="68" height="18" viewBox="0 0 68 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M45.7745 0H40.609C40.3052 0 40.0013 0.30254 39.8494 0.605081L37.7224 13.9169C37.7224 14.2194 37.8743 14.3707 38.1782 14.3707H40.9129C41.2167 14.3707 41.3687 14.2194 41.3687 13.9169L41.9764 10.1351C41.9764 9.83258 42.2802 9.53004 42.736 9.53004H44.4072C47.9015 9.53004 49.8766 7.86606 50.3323 4.53811C50.6362 3.17668 50.3323 1.96652 49.7246 1.21017C48.8131 0.453813 47.4457 0 45.7745 0ZM46.3822 4.99193C46.0784 6.80717 44.711 6.80717 43.3437 6.80717H42.4321L43.0399 3.32795C43.0399 3.17668 43.1918 3.02541 43.4956 3.02541H43.7995C44.7111 3.02541 45.6226 3.02541 46.0784 3.63049C46.3822 3.78176 46.3822 4.23558 46.3822 4.99193Z"
                                                fill="#139AD6" />
                                            <path
                                                d="M8.55188 0H3.38637C3.08251 0 2.77866 0.30254 2.62673 0.605081L0.499756 13.9169C0.499756 14.2194 0.651685 14.3707 0.955538 14.3707H3.38637C3.69022 14.3707 3.99407 14.0682 4.146 13.7656L4.75371 10.1351C4.75371 9.83258 5.05757 9.53004 5.51335 9.53004H7.18454C10.6789 9.53004 12.6539 7.86607 13.1097 4.53811C13.4135 3.17668 13.1097 1.96652 12.502 1.21017C11.5904 0.453813 10.375 0 8.55188 0ZM9.15959 4.99193C8.85574 6.80717 7.4884 6.80717 6.12105 6.80717H5.36142L5.96913 3.32795C5.96913 3.17668 6.12105 3.02541 6.42491 3.02541H6.72876C7.64032 3.02541 8.55188 3.02541 9.00766 3.63049C9.15959 3.78176 9.31152 4.23558 9.15959 4.99193ZM24.2004 4.84066H21.7695C21.6176 4.84066 21.3137 4.99193 21.3137 5.1432L21.1618 5.89955L21.0099 5.59701C20.4022 4.84066 19.3387 4.53811 18.1233 4.53811C15.3886 4.53811 12.9578 6.6559 12.502 9.53004C12.1981 11.0427 12.6539 12.4042 13.4135 13.3118C14.1732 14.2194 15.2367 14.522 16.604 14.522C18.8829 14.522 20.0983 13.1605 20.0983 13.1605L19.9464 13.9169C19.9464 14.2194 20.0983 14.3707 20.4022 14.3707H22.6811C22.9849 14.3707 23.2888 14.0682 23.4407 13.7656L24.8081 5.29447C24.6561 5.1432 24.3523 4.84066 24.2004 4.84066ZM20.706 9.68131C20.4022 11.0427 19.3387 12.1016 17.8194 12.1016C17.0598 12.1016 16.4521 11.7991 16.1482 11.4966C15.8444 11.0427 15.6924 10.4377 15.6924 9.68131C15.8444 8.31988 17.0598 7.26098 18.4271 7.26098C19.1868 7.26098 19.6425 7.56352 20.0983 7.86606C20.5541 8.31987 20.706 9.07623 20.706 9.68131Z"
                                                fill="#263B80" />
                                            <path
                                                d="M61.2699 4.8416H58.839C58.6871 4.8416 58.3833 4.99287 58.3833 5.14414L58.2313 5.9005L58.0794 5.59796C57.4717 4.8416 56.4082 4.53906 55.1928 4.53906C52.4581 4.53906 50.0273 6.65685 49.5715 9.53099C49.2676 11.0437 49.7234 12.4051 50.4831 13.3128C51.2427 14.2204 52.3062 14.5229 53.6735 14.5229C55.9524 14.5229 57.1678 13.1615 57.1678 13.1615L57.0159 13.9178C57.0159 14.2204 57.1678 14.3716 57.4717 14.3716H59.7506C60.0545 14.3716 60.3583 14.0691 60.5102 13.7666L61.8776 5.29541C61.7256 5.14414 61.5737 4.8416 61.2699 4.8416ZM57.7755 9.68226C57.4717 11.0437 56.4082 12.1026 54.8889 12.1026C54.1293 12.1026 53.5216 11.8 53.2177 11.4975C52.9139 11.0437 52.762 10.4386 52.762 9.68226C52.9139 8.32082 54.1293 7.26193 55.4966 7.26193C56.2563 7.26193 56.7121 7.56447 57.1678 7.86701C57.7755 8.32082 57.9275 9.07718 57.7755 9.68226Z"
                                                fill="#139AD6" />
                                            <path
                                                d="M37.4179 4.83984H34.8351C34.5312 4.83984 34.3793 4.99111 34.2274 5.14238L30.885 10.2856L29.3657 5.44493C29.2138 5.14238 29.0619 4.99111 28.6061 4.99111H26.1753C25.8714 4.99111 25.7195 5.29366 25.7195 5.5962L28.4542 13.6135L25.8714 17.244C25.7195 17.5466 25.8714 18.0004 26.1753 18.0004H28.6061C28.9099 18.0004 29.0619 17.8491 29.2138 17.6978L37.5698 5.74747C38.0256 5.29366 37.7217 4.83984 37.4179 4.83984Z"
                                                fill="#263B80" />
                                            <path
                                                d="M64.158 0.455636L62.031 14.07C62.031 14.3725 62.1829 14.5238 62.4868 14.5238H64.6138C64.9176 14.5238 65.2215 14.2212 65.3734 13.9187L67.5004 0.606904C67.5004 0.304363 67.3484 0.153094 67.0446 0.153094H64.6138C64.4618 0.00182346 64.3099 0.153095 64.158 0.455636Z"
                                                fill="#139AD6" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="group-btn justify-content-center">
                                <a href="#" class="tf-btn-line text-normal letter-space-0 fw-normal">
                                    More payment options
                                </a>
                            </div>
                        </div>
                        <a href="product-detail.html" class="tf-btn-line text-normal letter-space-0 fw-normal">
                            <span class="h5">View full details</span>
                            <i class="icon icon-arrow-top-right fs-24"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Quick View -->
    <!-- Search -->
    <div class="modal modalCentered fade modal-search" id="search">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                <div>
                    <form class="form-search style-2">
                        <fieldset>
                            <input type="text" placeholder="Search item" class="style-stroke" name="text" tabindex="0" value="" aria-required="true"
                                required="">
                        </fieldset>
                        <button type="submit" class="link"><i class="icon icon-magnifying-glass"></i></button>
                    </form>
                    <ul class="quick-link-list">
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Graphic tees</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Plain t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Vintage t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Band tees</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Custom t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Oversized t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Crew neck t-shirts</a></li>
                    </ul>
                </div>
                <div class="view-history-wrap">
                    <h4 class="title">History</h4>
                    <div class="view-history-list">
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>High Visibility T Shirt Short Sleeve Reflective</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Short sleeve round neck t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Fashionable oversized hoodie for women</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Queen fashion long sleeve shirt, basic t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Lee Women's Wrinkle Free Relaxed Fit Straight Leg Pant</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Women's Summer Oversized T-Shirt Casual Office Fashion</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                    </div>
                </div>
                <div class="trend-product-wrap">
                    <div class="heading">
                        <h4 class="title flex-grow-1">Trending product</h4>
                        <a href="#" class="tf-btn-line has-icon none-line fw-medium fs-18 text-normal">
                            View All Product
                            <i class="icon icon-caret-circle-right"></i>
                        </a>
                    </div>
                    <div class="trend-product-inner">
                        <div class="trend-product-list">
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg"
                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-1.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">T-shirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Queen fashion long sleeve shirt, basic t-shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Hoodie</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Champion Reverse Weave Pullover</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$149.99</span>
                                        <span class="price-new h6">$109.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-product-list">
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg"
                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-5.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Shorts</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Columbia PFG Fishing Shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$109.99</span>
                                        <span class="price-new h6">$74.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="{{ asset('userInterface/') }}/images/products/electronic/product-7.jpg"
                                        data-src="{{ asset('userInterface/') }}/images/products/electronic/product-7.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Sweatshirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Puma Essentials Graphic Tee</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$69.99</span>
                                        <span class="price-new h6">$49.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Search -->
    <!-- Shopping Cart -->
    <div class="offcanvas offcanvas-end popup-shopping-cart" id="shoppingCart">
        <div class="tf-minicart-recommendations">
            <h4 class="title">You may also like</h4>
            <div class="wrap-recommendations">
                <div class="list-cart">
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-9.jpg" src="{{ asset('userInterface/') }}/images/products/electronic/product-9.jpg"
                                alt="">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Nike Sportswear Tee Shirts</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$99,99</span>
                                    <span class="price-new h6">$69,99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg" src="{{ asset('userInterface/') }}/images/products/electronic/product-11.jpg"
                                alt="">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Puma Essentials Graphic Tee</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$89,99</span>
                                    <span class="price-new h6">$59,99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-13.jpg" src="{{ asset('userInterface/') }}/images/products/electronic/product-13.jpg"
                                alt="">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Reebok Classic Crew Sweatshirt</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$149.99</span>
                                    <span class="price-new h6">$109.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg" src="{{ asset('userInterface/') }}/images/products/electronic/product-15.jpg"
                                alt="">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Columbia PFG Fishing Shirt</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$59.99</span>
                                    <span class="price-new h6">$39.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-wrapper">
            <div class="popup-header">
                <span class="title fw-semibold h4">Shopping cart</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-wrap list-file-delete wrap-empty_text">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items list-empty">
                                <div class="box-text_empty type-shop_cart">
                                    <div class="shop-empty_top">
                                        <span class="icon">
                                            <i class="icon-shopping-cart-simple"></i>
                                        </span>
                                        <h3 class="text-emp fw-normal">Your cart is empty</h3>
                                        <p class="h6 text-main">
                                            Your cart is currently empty. Let us assist you in finding the right product
                                        </p>
                                    </div>
                                    <div class="shop-empty_bot">
                                        <a href="shop-default.html" class="tf-btn animate-btn">
                                            Shopping
                                        </a>
                                        <a href="index.html" class="tf-btn style-line">
                                            Back to home
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg"
                                            src="{{ asset('userInterface/') }}/images/products/electronic/product-17.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">T-shirt</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">Queen fashion long sleeve shirt, basic
                                                t-shirt</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: XS</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-caramel"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$20.00</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg"
                                            src="{{ asset('userInterface/') }}/images/products/electronic/product-19.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">T-shirt</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">Champion Reverse Weave Pullover</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: L</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-sage-green"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$24.99</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg"
                                            src="{{ asset('userInterface/') }}/images/products/electronic/product-21.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">Sweatshirt</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">ASICS Core Running Tights</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: XS</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-light-beige"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$18.99</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="{{ asset('userInterface/') }}/images/products/electronic/product-23.jpg"
                                            src="{{ asset('userInterface/') }}/images/products/electronic/product-23.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">Shorts</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">New Balance Athletics Shorts</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: XS</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-baby-blue"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$22.50</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom box-empty_clear">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <div class="h6">Note</div>
                                <i class="icon icon-note-pencil"></i>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <div class="h6">Shipping</div>
                                <i class="icon icon-truck"></i>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <div class="h6">Gift</div>
                                <i class="icon icon-gift"></i>
                            </div>
                        </div>
                        <div class="tf-mini-cart-threshold">
                            <div class="text">
                                <h6 class="subtotal">Subtotal (<span class="prd-count">3</span> item)</h6>
                                <h4 class="text-primary total-price tf-totals-total-value">$60.00</h4>
                            </div>
                            <div class="tf-progress-bar tf-progress-ship">
                                <div class="value" style="width: 0%;" data-progress="25"></div>
                            </div>
                            <div class="desc text-main">Add <span class="text-primary fw-bold">$15.40</span> to cart and get free shipping!</div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-mini-cart-view-checkout">
                                <a href="view-cart.html" class="tf-btn btn-white animate-btn animate-dark line">View cart</a>
                                <a href="checkout.html" class="tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center"><span>Check
                                        out</span></a>
                            </div>
                            <div class="free-shipping">
                                <i class="icon icon-truck"></i>
                                Free shipping on all orders over $150
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <label for="Cart-note" class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-note-pencil"></i>
                                Note
                            </label>
                            <textarea name="note" id="Cart-note" placeholder="Note about your order"></textarea>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100" type="submit">Save</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form id="shipping-form" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-truck"></i>
                                Shipping
                            </div>
                            <div class="field">
                                <div class="tf-select">
                                    <select class="w-100" id="shipping-country-form" name="address[country]" data-default="">
                                        <option value="Australia"
                                            data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                            Australia</option>
                                        <option value="Austria" data-provinces='[]'>Austria</option>
                                        <option value="Belgium" data-provinces='[]'>Belgium</option>
                                        <option value="Canada" data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>Canada
                                        </option>
                                        <option value="Czech Republic" data-provinces='[]'>Czechia</option>
                                        <option value="Denmark" data-provinces='[]'>Denmark</option>
                                        <option value="Finland" data-provinces='[]'>Finland</option>
                                        <option value="France" data-provinces='[]'>France</option>
                                        <option value="Germany" data-provinces='[]'>Germany</option>
                                        <option selected value="United States"
                                            data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                            United States</option>
                                        <option value="United Kingdom"
                                            data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                            United Kingdom</option>
                                        <option value="India" data-provinces='[]'>India</option>
                                        <option value="Japan" data-provinces='[]'>Japan</option>
                                        <option value="Mexico" data-provinces='[]'>Mexico</option>
                                        <option value="South Korea" data-provinces='[]'>South Korea</option>
                                        <option value="Spain" data-provinces='[]'>Spain</option>
                                        <option value="Italy" data-provinces='[]'>Italy</option>
                                        <option value="Vietnam"
                                            data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                            Vietnam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="tf-select">
                                    <select id="shipping-province-form" name="address[province]" data-default=""></select>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Postal code" data-opend-focus id="zipcode" name="address[zip]" value="">
                            </div>
                            <div id="zipcode-message" class="error" style="display: none;">
                                We found one shipping rate available for undefined.
                            </div>
                            <div id="zipcode-success" class="success" style="display: none;">
                                <p>We found one shipping rate available for your address:</p>
                                <p class="standard">Standard at <span>$0.00</span> USD</p>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100" type="submit">Save</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-gift"></i>
                                Gift
                            </div>
                            <div class="wrap">
                                <i class="icon icon-gift-2"></i>
                                <h3>Only <span class="text-primary">$2</span> for a gift box</h3>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100" type="submit">Add a
                                    gift</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">Cancel</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Shopping Cart -->

    <!-- Demo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h3 class="demo-title">Ultimate HTML Theme</h3>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-fashion-1.jpg" alt="Demo"></a>
                            <a href="index.html" class="demo-name">Home Fashion 1</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-2.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-fashion-2.jpg" alt="Demo"></a>
                            <a href="home-fashion-2.html" class="demo-name">Home Fashion 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-3.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-fashion-3.jpg" alt="Demo"></a>
                            <a href="home-fashion-3.html" class="demo-name">Home Fashion 3</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-4.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-fashion-4.jpg" alt="Demo"></a>
                            <a href="home-fashion-4.html" class="demo-name">Home Fashion 4</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-cosmetic.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-cosmetic.jpg" alt="Demo"></a>
                            <a href="home-cosmetic.html" class="demo-name">Home Cosmetic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skin-care.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-skin-care.jpg" alt="Demo"></a>
                            <a href="home-skin-care.html" class="demo-name">Home Skincare</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-decor.jpg" alt="Demo"></a>
                            <a href="home-decor.html" class="demo-name">Home Decor</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-jewelry.jpg" alt="Demo"></a>
                            <a href="home-jewelry.html" class="demo-name">Home Jewelry</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic-market.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-electronic-market.jpg" alt="Demo"></a>
                            <a href="home-electronic-market.html" class="demo-name">Home
                                Electric Market</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-store.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-pet-store.jpg" alt="Demo"></a>
                            <a href="home-pet-store.html" class="demo-name">Home Pet Store</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sneaker.html" class="demo-img"><img src="{{ asset('userInterface/') }}/images/demo/home-sneaker.jpg" alt="Demo"></a>
                            <a href="home-sneaker.html" class="demo-name">Home Sneaker</a>
                        </div>
                        <!-- New -->
                        <div class="demo-item">
                            <a href="home-book.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-book.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-book.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-book.html" class="demo-name link">Home Book</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-organic.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-organic.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-organic.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-organic.html" class="demo-name link">Home Organic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-medical.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-medical.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-medical.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-medical.html" class="demo-name link">Home Medical</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-gym.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-gym.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-gym.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-gym.html" class="demo-name link">Home Gym</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-art.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-art.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-art.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-art.html" class="demo-name link">Home Art</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-accessories.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-accessories.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-accessories.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-accessories.html" class="demo-name link">Home Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-car-auto.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-car-auto.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-car-auto.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-car-auto.html" class="demo-name link">Home Car Auto</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-travel.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-travel.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-travel.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-travel.html" class="demo-name link">Home Travel</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-watch.html" class="demo-img">
                                <img class="lazyload" src="{{ asset('userInterface/') }}/images/demo/home-watch.jpg" data-src="{{ asset('userInterface/') }}/images/demo/home-watch.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-watch.html" class="demo-name link">Home Watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Demo -->

    <!-- Javascript -->
<script src="{{ asset('userInterface/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('userInterface/js/jquery.min.js') }}"></script>
<script src="{{ asset('userInterface/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('userInterface/js/carousel.js') }}"></script>
<script src="{{ asset('userInterface/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('userInterface/js/lazysize.min.js') }}"></script>
<script src="{{ asset('userInterface/js/wow.min.js') }}"></script>
<script src="{{ asset('userInterface/js/parallaxie.js') }}"></script>
<script src="{{ asset('userInterface/js/count-down.js') }}"></script>
<script src="{{ asset('userInterface/js/main.js') }}"></script>

<script src="{{ asset('userInterface/js/sibforms.js') }}" defer></script>

    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
</body>


<!-- Mirrored from ochaka.vercel.app/home-electronic-market.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Feb 2026 07:30:18 GMT -->
</html>