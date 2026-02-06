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
                                     <a class="nav-icon-item-2 text-white link" href="{{ route('login') }}">
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
                                     <a class="nav-icon-item-2 text-white link" href="#shoppingCart"
                                         data-bs-toggle="offcanvas">
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
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-tv"></i>Electronics</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-arm-chair"></i>Furniture</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-shirt"></i>Fashion & Style</a>
                                 </li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-book"></i>Book</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-headset"></i>Music</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-drop"></i>Cosmetic & Beauty</a>
                                 </li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-mobile"></i>Smartphone</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-volley-ball"></i>Sports</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-sneaker"></i>Shoes</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-camera"></i>Camera -
                                         Camcorder</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-clock-cd"></i>Clock</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-diamond"></i>Jewelry</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-barbell"></i>Gym</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-bag"></i>Bag</a></li>
                             </ul>
                         </div>
                         <span class="br-line type-vertical h-24"></span>
                         <nav class="box-navigation">
                             <ul class="box-nav-menu">
                                 <li class="menu-item">
                                     <a href="javascript:void(0)" class="item-link">HOME<i
                                             class="icon icon-caret-down"></i></a>
                                     <div class="sub-menu mega-menu mega-home">
                                         <div class="container">
                                             <div class="row-demo">
                                                 <div class="demo-item">
                                                     <a href="index.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-1.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="index.html" class="demo-name">Home Fashion 1</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-fashion-2.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-2.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-fashion-2.html" class="demo-name">Home Fashion
                                                         2</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-fashion-3.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-3.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-fashion-3.html" class="demo-name">Home Fashion
                                                         3</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-fashion-4.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-4.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-fashion-4.html" class="demo-name">Home Fashion
                                                         4</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-cosmetic.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-cosmetic.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-cosmetic.html" class="demo-name">Home Cosmetic</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-skin-care.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-skin-care.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-skin-care.html" class="demo-name">Home Skincare</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-decor.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-decor.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-decor.html" class="demo-name">Home Decor</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-jewelry.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-jewelry.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-jewelry.html" class="demo-name">Home Jewelry</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-electronic-market.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-electronic-market.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-electronic-market.html" class="demo-name">Home
                                                         Electric Market</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-pet-store.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-pet-store.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-pet-store.html" class="demo-name">Home Pet
                                                         Store</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-sneaker.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-sneaker.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-sneaker.html" class="demo-name">Home Sneaker</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-book.html" class="demo-img">
                                                         <img class="lazyload"
                                                             src="{{ asset('userInterface/') }}/images/demo/home-book.jpg"
                                                             data-src="{{ asset('userInterface/') }}/images/demo/home-book.jpg"
                                                             alt="Demo">
                                                         <div class="demo-label">
                                                             <span>New</span>
                                                         </div>
                                                     </a>
                                                     <a href="home-sneaker.html" class="demo-name">Home Book</a>
                                                 </div>
                                             </div>
                                             <div class="text-center">
                                                 <a href="#modalDemo" data-bs-toggle="modal"
                                                     class="tf-btn animate-btn">
                                                     View all demos (20)
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li class="menu-item">
                                     <a href="javascript:void(0)" class="item-link">SHOP<i
                                             class="icon icon-caret-down"></i></a>
                                     <div class="sub-menu mega-menu">
                                         <div class="container">
                                             <div class="row">
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Shop Layout</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="shop-default.html"
                                                                     class="sub-menu_link">Default Grid</a></li>
                                                             <li><a href="shop-default-list.html"
                                                                     class="sub-menu_link">Default List</a></li>
                                                             <li><a href="shop-2-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     2 Columns</a></li>
                                                             <li><a href="shop-3-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     3 Columns</a></li>
                                                             <li><a href="shop-4-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     4 Columns</a></li>
                                                             <li><a href="shop-5-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     5 Columns</a></li>
                                                             <li><a href="shop-6-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     6 Columns</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Shop Features</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="shop-full-width-list.html"
                                                                     class="sub-menu_link">Full Width List</a></li>
                                                             <li><a href="shop-full-width-grid.html"
                                                                     class="sub-menu_link">Full Width Grid</a></li>
                                                             <li><a href="shop-left-sidebar.html"
                                                                     class="sub-menu_link">Left Sidebar</a></li>
                                                             <li><a href="shop-right-sidebar.html"
                                                                     class="sub-menu_link">Right Sidebar</a></li>
                                                             <li><a href="shop-filter-dropdown.html"
                                                                     class="sub-menu_link">Filter Dropdown</a></li>
                                                             <li><a href="shop-filter-drawer.html"
                                                                     class="sub-menu_link">Filter Drawer</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Shop Hover</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="shop-hover-01.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 01</a></li>
                                                             <li><a href="shop-hover-02.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 02</a></li>
                                                             <li><a href="shop-hover-03.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 03</a></li>
                                                             <li><a href="shop-hover-04.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 04</a></li>
                                                             <li><a href="shop-hover-05.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 05</a></li>
                                                             <li><a href="shop-hover-06.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 06</a></li>
                                                             <li><a href="shop-hover-07.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 07</a></li>
                                                             <li><a href="shop-hover-08.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 08</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="col-6">
                                                     <ul class="list-hor">
                                                         <li class="wg-cls hover-img">
                                                             <a href="shop-default.html" class="image img-style">
                                                                 <img src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                                     data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                                     alt="Collection" class="lazyload">
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
                                                                     data-src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg"
                                                                     alt="Collection" class="lazyload">
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
                                     <a href="javascript:void(0)" class="item-link">PRODUCT<i
                                             class="icon icon-caret-down"></i></a>
                                     <div class="sub-menu mega-menu">
                                         <div class="container">
                                             <div class="row">
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Product Layout</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="product-detail.html"
                                                                     class="sub-menu_link">Product Detail</a></li>
                                                             <li><a href="product-left-thumbnail.html"
                                                                     class="sub-menu_link">Product Left
                                                                     Thumbnail</a>
                                                             </li>
                                                             <li><a href="product-right-thumbnail.html"
                                                                     class="sub-menu_link">Product Right
                                                                     Thumbnail</a></li>
                                                             <li><a href="product-bottom-thumbnail.html"
                                                                     class="sub-menu_link">Product Bottom
                                                                     Thumbnail</a></li>
                                                             <li><a href="product-grid.html"
                                                                     class="sub-menu_link">Product Grid</a></li>
                                                             <li><a href="product-grid-2.html"
                                                                     class="sub-menu_link">Product Grid 2</a></li>
                                                             <li><a href="product-stacked.html"
                                                                     class="sub-menu_link">Product Stacked</a></li>
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
                                 <li><a href="product-available.html" class="sub-menu_link">Product Avaialable</a>
                                 </li>
                                 <li><a href="product-video.html" class="sub-menu_link">Product Video</a></li>
                                 <li><a href="product-buyX-getY.html" class="sub-menu_link">Product Buy X Get Y</a>
                                 </li>
                                 <li><a href="product-buy-the-look.html" class="sub-menu_link">Product Buy The
                                         Look</a>
                                 </li>
                                 <li><a href="product-out-of-stock.html" class="sub-menu_link">Product Out Of
                                         Stock</a>
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
                                         data-src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg"
                                         alt="" class="lazyload">
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
                                         data-src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg"
                                         alt="" class="lazyload">
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
                                 <input class="style-def" type="text" placeholder="Search for products..."
                                     required>
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
                                     <a class="nav-icon-item-2 text-white link" href="#shoppingCart"
                                         data-bs-toggle="offcanvas">
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
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-tv"></i>Electronics</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-arm-chair"></i>Furniture</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-shirt"></i>Fashion & Style</a>
                                 </li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-book"></i>Book</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-headset"></i>Music</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-drop"></i>Cosmetic & Beauty</a>
                                 </li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-mobile"></i>Smartphone</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-volley-ball"></i>Sports</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-sneaker"></i>Shoes</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-camera"></i>Camera -
                                         Camcorder</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-clock-cd"></i>Clock</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-diamond"></i>Jewelry</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-barbell"></i>Gym</a></li>
                                 <li><a href="shop-default.html" class="nav-category_link h5"><i
                                             class="icon icon-bag"></i>Bag</a></li>
                             </ul>
                         </div>
                         <span class="br-line type-vertical h-24"></span>
                         <nav class="box-navigation">
                             <ul class="box-nav-menu">
                                 <li class="menu-item mn-none">
                                     <a href="javascript:void(0)" class="item-link">HOME<i
                                             class="icon icon-caret-down"></i></a>
                                     <div class="sub-menu mega-menu mega-home">
                                         <div class="container">
                                             <div class="row-demo">
                                                 <div class="demo-item">
                                                     <a href="index.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-1.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="index.html" class="demo-name">Home Fashion 1</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-fashion-2.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-2.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-fashion-2.html" class="demo-name">Home Fashion
                                                         2</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-fashion-3.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-3.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-fashion-3.html" class="demo-name">Home Fashion
                                                         3</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-fashion-4.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-fashion-4.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-fashion-4.html" class="demo-name">Home Fashion
                                                         4</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-cosmetic.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-cosmetic.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-cosmetic.html" class="demo-name">Home Cosmetic</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-skin-care.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-skin-care.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-skin-care.html" class="demo-name">Home Skincare</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-decor.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-decor.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-decor.html" class="demo-name">Home Decor</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-jewelry.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-jewelry.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-jewelry.html" class="demo-name">Home Jewelry</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-electronic-market.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-electronic-market.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-electronic-market.html" class="demo-name">Home
                                                         Electric Market</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-pet-store.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-pet-store.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-pet-store.html" class="demo-name">Home Pet
                                                         Store</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-sneaker.html" class="demo-img">
                                                         <img src="{{ asset('userInterface/') }}/images/demo/home-sneaker.jpg"
                                                             alt="Demo">
                                                     </a>
                                                     <a href="home-sneaker.html" class="demo-name">Home Sneaker</a>
                                                 </div>
                                                 <div class="demo-item">
                                                     <a href="home-book.html" class="demo-img">
                                                         <img class="lazyload"
                                                             src="{{ asset('userInterface/') }}/images/demo/home-book.jpg"
                                                             data-src="{{ asset('userInterface/') }}/images/demo/home-book.jpg"
                                                             alt="Demo">
                                                         <div class="demo-label">
                                                             <span>New</span>
                                                         </div>
                                                     </a>
                                                     <a href="home-sneaker.html" class="demo-name">Home Book</a>
                                                 </div>
                                             </div>
                                             <div class="text-center">
                                                 <a href="#modalDemo" data-bs-toggle="modal"
                                                     class="tf-btn animate-btn">
                                                     View all demos (20)
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                                 <li class="menu-item mn-none">
                                     <a href="javascript:void(0)" class="item-link">SHOP<i
                                             class="icon icon-caret-down"></i></a>
                                     <div class="sub-menu mega-menu">
                                         <div class="container">
                                             <div class="row">
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Shop Layout</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="shop-default.html"
                                                                     class="sub-menu_link">Default Grid</a></li>
                                                             <li><a href="shop-default-list.html"
                                                                     class="sub-menu_link">Default List</a></li>
                                                             <li><a href="shop-2-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     2 Columns</a></li>
                                                             <li><a href="shop-3-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     3 Columns</a></li>
                                                             <li><a href="shop-4-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     4 Columns</a></li>
                                                             <li><a href="shop-5-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     5 Columns</a></li>
                                                             <li><a href="shop-6-columns.html"
                                                                     class="sub-menu_link">Shop
                                                                     6 Columns</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Shop Features</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="shop-full-width-list.html"
                                                                     class="sub-menu_link">Full Width List</a></li>
                                                             <li><a href="shop-full-width-grid.html"
                                                                     class="sub-menu_link">Full Width Grid</a></li>
                                                             <li><a href="shop-left-sidebar.html"
                                                                     class="sub-menu_link">Left Sidebar</a></li>
                                                             <li><a href="shop-right-sidebar.html"
                                                                     class="sub-menu_link">Right Sidebar</a></li>
                                                             <li><a href="shop-filter-dropdown.html"
                                                                     class="sub-menu_link">Filter Dropdown</a></li>
                                                             <li><a href="shop-filter-drawer.html"
                                                                     class="sub-menu_link">Filter Drawer</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Shop Hover</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="shop-hover-01.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 01</a></li>
                                                             <li><a href="shop-hover-02.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 02</a></li>
                                                             <li><a href="shop-hover-03.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 03</a></li>
                                                             <li><a href="shop-hover-04.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 04</a></li>
                                                             <li><a href="shop-hover-05.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 05</a></li>
                                                             <li><a href="shop-hover-06.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 06</a></li>
                                                             <li><a href="shop-hover-07.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 07</a></li>
                                                             <li><a href="shop-hover-08.html"
                                                                     class="sub-menu_link">Hover
                                                                     Style 08</a></li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                                 <div class="col-6">
                                                     <ul class="list-hor">
                                                         <li class="wg-cls hover-img">
                                                             <a href="shop-default.html" class="image img-style">
                                                                 <img src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                                     data-src="{{ asset('userInterface/') }}/images/products/electronic/product-3.jpg"
                                                                     alt="Collection" class="lazyload">
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
                                                                     data-src="{{ asset('userInterface/') }}/images/products/electronic/product-8.jpg"
                                                                     alt="Collection" class="lazyload">
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
                                     <a href="javascript:void(0)" class="item-link">PRODUCT<i
                                             class="icon icon-caret-down"></i></a>
                                     <div class="sub-menu mega-menu">
                                         <div class="container">
                                             <div class="row">
                                                 <div class="col-2">
                                                     <div class="mega-menu-item">
                                                         <h4 class="menu-heading">Product Layout</h4>
                                                         <ul class="sub-menu_list">
                                                             <li><a href="product-detail.html"
                                                                     class="sub-menu_link">Product Detail</a></li>
                                                             <li><a href="product-left-thumbnail.html"
                                                                     class="sub-menu_link">Product Left
                                                                     Thumbnail</a>
                                                             </li>
                                                             <li><a href="product-right-thumbnail.html"
                                                                     class="sub-menu_link">Product Right
                                                                     Thumbnail</a></li>
                                                             <li><a href="product-bottom-thumbnail.html"
                                                                     class="sub-menu_link">Product Bottom
                                                                     Thumbnail</a></li>
                                                             <li><a href="product-grid.html"
                                                                     class="sub-menu_link">Product Grid</a></li>
                                                             <li><a href="product-grid-2.html"
                                                                     class="sub-menu_link">Product Grid 2</a></li>
                                                             <li><a href="product-stacked.html"
                                                                     class="sub-menu_link">Product Stacked</a></li>
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
                                 <li><a href="product-available.html" class="sub-menu_link">Product Avaialable</a>
                                 </li>
                                 <li><a href="product-video.html" class="sub-menu_link">Product Video</a></li>
                                 <li><a href="product-buyX-getY.html" class="sub-menu_link">Product Buy X Get Y</a>
                                 </li>
                                 <li><a href="product-buy-the-look.html" class="sub-menu_link">Product Buy The
                                         Look</a>
                                 </li>
                                 <li><a href="product-out-of-stock.html" class="sub-menu_link">Product Out Of
                                         Stock</a>
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
                                         data-src="{{ asset('userInterface/') }}/images/products/electronic/product-10.jpg"
                                         alt="" class="lazyload">
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
                                         data-src="{{ asset('userInterface/') }}/images/products/electronic/product-6.jpg"
                                         alt="" class="lazyload">
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
