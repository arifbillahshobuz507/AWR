<header>
  <div class="tp-header-area p-relative z-index-11">
    <!-- header top start  -->
    <!-- header main start -->
    <div class="tp-header-main tp-header-sticky">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-2 col-lg-2 col-md-4 col-6">
            <div class="logo">
              <a href="{{route('home')}}">
                <img src="{{ asset((\App\Helpers\Helpers::get_option('app_logo') ?? '') . '/gsbd.jpg') }}" alt="logo" width="270px">
              </a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-7 d-none d-lg-block">
            <div class="tp-header-search pl-70">
              <form action="#">
                <div class="tp-header-search-wrapper d-flex align-items-center">
                  <div class="tp-header-search-box">
                    <input type="text" placeholder="Search for Products...">
                  </div>
                  <div class="tp-header-search-category">
                    <select>
                      <option>Select Category</option>
                      <option>Mobile</option>
                      <option>Digital Watch</option>
                      <option>Computer</option>
                      <option>Watch</option>
                    </select>
                  </div>
                  <div class="tp-header-search-btn">
                    <button type="submit">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-xl-4 col-lg-3 col-md-8 col-6">
            <div class="tp-header-main-right d-flex align-items-center justify-content-end">
              <div class="tp-header-login d-none d-lg-block">
                @guest()
                <a href="{{route('login')}}" class="d-flex align-items-center">
                  <div class="tp-header-login-icon">
                                    <span>
                                       <svg width="17" height="21" viewBox="0 0 17 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                       </svg>
                                    </span>
                  </div>
                  <div class="tp-header-login-content d-none d-xl-block">
                    <h5 class="tp-header-login-title">Sign In</h5>
                  </div>
                </a>
                @endguest
                @auth()
                  <a href="{{route('dashboard')}}" class="d-flex align-items-center">
                    <div class="tp-header-login-icon">
                                    <span>
                                       <svg width="17" height="21" viewBox="0 0 17 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor"
                                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                       </svg>
                                    </span>
                    </div>
                    <div class="tp-header-login-content d-none d-xl-block">
                      <h5 class="tp-header-login-title">Your Account</h5>
                    </div>
                  </a>
                  @endauth
              </div>
              <div class="tp-header-action d-flex align-items-center ml-50">
                <div class="tp-header-action-item d-lg-none">
                  <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                      <rect x="10" width="20" height="2" fill="currentColor" />
                      <rect x="5" y="7" width="25" height="2" fill="currentColor" />
                      <rect x="10" y="14" width="20" height="2" fill="currentColor" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header bottom start -->
    <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
      <div class="container">
        <div class="tp-mega-menu-wrapper p-relative">
          <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3">
              <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                <button class="tp-category-menu-btn tp-category-menu-toggle">
                                 <span>
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M0 1C0 0.447715 0.447715 0 1 0H15C15.5523 0 16 0.447715 16 1C16 1.55228 15.5523 2 15 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H11C11.5523 14 12 13.5523 12 13C12 12.4477 11.5523 12 11 12H1Z"
                                             fill="currentColor" />
                                    </svg>
                                 </span>
                  All Departments
                </button>
                <nav class="tp-category-menu-content">
                  <ul>
                    <li>
                      <a href="shop.html">
                                         <span>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                               <path
                                                 d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316"
                                                 stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                 stroke-linejoin="round" />
                                            </svg>
                                         </span>
                        New Arrivals</a>
                    </li>
                    @foreach($categoriesData as $category)
                      <li class="has-dropdown">
                        <a href="shop.html" class="has-mega-menu">
            <span>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.6856 4.54975C2.6856 3.52014 3.51984 2.6859 4.54945 2.68508H5.3977C5.88984 2.68508 6.36136 2.48971 6.71089 2.14348L7.30359 1.54995C8.02984 0.819578 9.21031 0.816281 9.94068 1.54253L9.9415 1.54336L9.94892 1.54995L10.5425 2.14348C10.892 2.49053 11.3635 2.68508 11.8556 2.68508H12.7031C13.7327 2.68508 14.5677 3.51932 14.5677 4.54975V5.39636C14.5677 5.88849 14.7623 6.36084 15.1093 6.71037L15.7029 7.3039C16.4332 8.03015 16.4374 9.21061 15.7111 9.94098L15.7103 9.94181L15.7029 9.94923L15.1093 10.5428C14.7623 10.8915 14.5677 11.363 14.5677 11.8551V12.7034C14.5677 13.733 13.7335 14.5672 12.7039 14.5672H12.7031H11.854C11.3619 14.5672 10.8895 14.7626 10.5408 15.1096L9.94727 15.7024C9.22185 16.4327 8.04221 16.4368 7.31183 15.7122C7.31101 15.7114 7.31019 15.7106 7.30936 15.7098L7.30194 15.7024L6.70924 15.1096C6.36054 14.7626 5.88819 14.568 5.39605 14.5672H4.54945C3.51984 14.5672 2.6856 13.733 2.6856 12.7034V11.8535C2.6856 11.3613 2.49023 10.8898 2.14318 10.5411L1.55047 9.94758C0.820097 9.22215 0.815976 8.04251 1.5414 7.31214C1.5414 7.31132 1.54223 7.31049 1.54305 7.30967L1.55047 7.30225L2.14318 6.70872C2.49023 6.35919 2.6856 5.88767 2.6856 5.39471V4.54975"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.50787 10.7453L10.745 6.50812" stroke="currentColor" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.6823 10.6862H10.6897" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                    <path d="M6.56053 6.56446H6.56795" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" />
                </svg>
            </span>
                          {{ $category->name }}
                        </a>
                        @if(!empty($category->subcategories) && count($category->subcategories) > 0)
                          <ul class="mega-menu tp-submenu">
                            <li>
                              <a href="shop.html" class="mega-menu-title"> New Arrivals</a>
                              <ul>
                                @foreach($category->subcategories as $subcategory)
                                  <li>
                                    <a href="shop.html">{{ $subcategory->name }}</a>
                                  </li>
                                @endforeach
                              </ul>
                            </li>
                          </ul>
                        @endif
                      </li>
                    @endforeach
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6">
              <div class="main-menu menu-style-1">
                <nav class="tp-main-menu-content">
                  <ul>
                    <li>
                      <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="has-dropdown has-mega-menu">
                      <a href="shop.html">Model</a>
                      <div class="shop-mega-menu tp-submenu tp-mega-menu">
                        <div class="row">
                          <div class="col-lg-2">
                            <div class="shop-mega-menu-list">
                              <a href="shop.html" class="shop-mega-menu-title">Shop Pages</a>
                              <ul>
                                @foreach($modelData as $category)
                                  @if($category->id <= 20)
                                <li><a href="{{route('model.category', $category->id)}}">{{$category->name}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="shop-mega-menu-list">
                              <a href="shop.html" class="shop-mega-menu-title">Features</a>
                              <ul>
                                @foreach($modelData as $category)
                                  @if($category->id > 20 && $category->id <= 40)
                                    <li><a href="{{route('model.category', $category->id)}}">{{$category->name}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="shop-mega-menu-list">
                              <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                              <ul>
                                @foreach($modelData as $category)
                                  @if($category->id > 40 && $category->id <= 60)
                                    <li><a href="{{route('model.category', $category->id)}}">{{$category->name}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="shop-mega-menu-list">
                              <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                              <ul>
                                @foreach($modelData as $category)
                                  @if($category->id > 60 && $category->id <= 80)
                                    <li><a href="{{route('model.category', $category->id)}}">{{$category->name}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="shop-mega-menu-list">
                              <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                              <ul>
                                @foreach($modelData as $category)
                                  @if($category->id > 80 && $category->id <= 100)
                                    <li><a href="{{route('model.category', $category->id)}}">{{$category->name}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="shop-mega-menu-list">
                              <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                              <ul>
                                @foreach($modelData as $category)
                                  @if($category->id > 100 && $category->id <= 120)
                                    <li><a href="{{route('model.category', $category->id)}}">{{$category->name}}</a></li>
                                  @endif
                                @endforeach
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li><a href="{{route('about-us')}}">About Us</a></li>
                    <li><a href="{{route('contact-us')}}">Contact</a></li>
                    <li><a href="{{route('faq')}}">Faqs</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3">
              <div class="tp-header-contact d-flex align-items-center justify-content-end">
                @if(!empty(Helper::get_option('contact_us_phone_one')))
                    <div class="tp-header-contact-icon">
                                     <span>
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                           <path fill-rule="evenodd" clip-rule="evenodd"
                                                 d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" />
                                           <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" />
                                           <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" />
                                        </svg>
                                     </span>
                    </div>
                    <div class="tp-header-contact-content">
                      <h5>Hotline:</h5>
                      <p><a href="{{Helper::get_option('contact_us_phone_one')}}">+{{Helper::get_option('contact_us_phone_one')}}</a></p>
                    </div>
                  @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div id="header-sticky-2" class="tp-header-sticky-area">
  <div class="container">
    <div class="tp-mega-menu-wrapper p-relative">
      <div class="row align-items-center">
        <div class="col-xl-3 col-lg-3 col-md-3 col-6">
          <div class="logo">
            <a href="index.html">
              <img src="{{ asset((\App\Helpers\Helpers::get_option('app_logo') ?? '') . '/gsbd.jpg') }}" alt="logo" width="270px">
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
          <div class="tp-header-sticky-menu main-menu menu-style-1">
            <nav id="mobile-menu">
              <ul>
                <li>
                  <a href="{{route('home')}}">Home</a>
                </li>
                <li class="has-dropdown has-mega-menu">
                  <a href="shop.html">Shop</a>
                  <div class="shop-mega-menu tp-submenu tp-mega-menu">
                    <div class="row">
                      <div class="col-lg-2">
                        <div class="shop-mega-menu-list">
                          <a href="shop.html" class="shop-mega-menu-title">Shop Pages</a>
                          <ul>
                            <li><a href="shop-category.html">Grid Category</a></li>
                            <li><a href="shop.html">Grid Layout</a></li>
                            <li><a href="shop-list.html">List Layout</a></li>
                            <li><a href="shop-masonary.html">Masonary Layout</a></li>
                            <li><a href="shop-full-width.html">Full width Layout</a></li>
                            <li><a href="shop-1600.html">1600px Layout</a></li>
                            <li><a href="shop.html">Left Sidebar</a></li>
                            <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="shop-no-sidebar.html">Hidden Sidebar</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="shop-mega-menu-list">
                          <a href="shop.html" class="shop-mega-menu-title">Features</a>
                          <ul>
                            <li><a href="shop-filter-dropdown.html">Filter Dropdown</a></li>
                            <li><a href="shop-filter-offcanvas.html">Filters Offcanvas</a></li>
                            <li><a href="shop.html">Filters Sidebar</a></li>
                            <li><a href="shop-load-more.html">Load More button</a></li>
                            <li><a href="shop-infinite-scroll.html">Infinit scrolling</a></li>
                            <li><a href="shop-list.html">Collections list</a></li>
                            <li><a href="shop.html">Hidden search</a></li>
                            <li><a href="shop.html">Search Full screen</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="shop-mega-menu-list">
                          <a href="shop.html" class="shop-mega-menu-title">Hover Style</a>
                          <ul>
                            <li><a href="shop.html">Hover Style 1</a></li>
                            <li><a href="shop.html">Hover Style 2</a></li>
                            <li><a href="shop.html">Hover Style 3</a></li>
                            <li><a href="shop.html">Hover Style 4</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="shop-mega-menu-img">
                          <img src="{{asset('user-assets')}}/img/menu/product/menu-product-img-1.jpg" alt="">
                          <div class="shop-mega-menu-btn">
                            <a href="shop-category.html"
                               class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="shop-mega-menu-img">
                          <img src="{{asset('user-assets')}}/img/menu/product/menu-product-img-2.jpg" alt="">
                          <div class="shop-mega-menu-btn">
                            <a href="shop-category.html"
                               class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="{{route('about-us')}}">About Us</a></li>
                <li><a href="{{route('contact-us')}}">Contact</a></li>
                <li><a href="{{route('faq')}}">Faqs</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-6">
          <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
            <div class="tp-header-action-item d-lg-none">
              <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                  <rect x="10" width="20" height="2" fill="currentColor"/>
                  <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                  <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
