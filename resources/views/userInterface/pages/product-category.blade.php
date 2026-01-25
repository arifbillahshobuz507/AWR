@extends('user-interface.layouts.layout-master')
@section('title','Product Category')
@section('user-content')
  <section class="breadcrumb__area include-bg pt-95 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content p-relative z-index-1">
            <h3 class="breadcrumb__title">Only Categories</h3>
            <div class="breadcrumb__list">
              <span><a href="#">Home</a></span>
              <span>Only Category</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner area start -->
  <section class="tp-banner-area pb-30">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <div class="tp-banner-item tp-banner-height has-square p-relative mb-30 z-index-1 fix">
            <div class="tp-banner-thumb include-bg transition-3" data-background="{{asset('/')}}/user-assets/img/product/banner/product-banner-1.jpg"></div>
            <div class="tp-banner-content">
              <span>Sale 20% off all store</span>
              <h3 class="tp-banner-title">
                <a href="product-details.html">Smartphone <br> BLU G91 Pro 2022</a>
              </h3>
              <div class="tp-banner-btn">
                <a href="product-details.html" class="tp-link-btn">Shop Now
                  <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="tp-banner-item tp-banner-item-sm has-square tp-banner-height p-relative mb-30 z-index-1 fix">
            <div class="tp-banner-thumb include-bg transition-3" data-background="{{asset('/')}}/user-assets/img/product/banner/product-banner-2.jpg"></div>
            <div class="tp-banner-content">
              <h3 class="tp-banner-title">
                <a href="product-details.html">HyperX Cloud II <br> Wireless</a>
              </h3>
              <p>Sale 35% off</p>
              <div class="tp-banner-btn">
                <a href="product-details.html" class="tp-link-btn">Shop Now
                  <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner area end -->
  <!-- category area start -->
  <section class="tp-category-area pb-120">
    <div class="container">
      <div class="row">
        @foreach($categories as $category)
        <div class="col-lg-4 col-sm-6">
          <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
            <div class="tp-category-main-thumb include-bg transition-3" data-background="{{ asset('/' . $category->image) }}"></div>
            <div class="tp-category-main-content">
              <h3 class="tp-category-main-title">
                <a href="{{route('product.category.filter', $category->slug)}}">{{$category->name}}</a>
              </h3>
              <span class="tp-category-main-item">{{$category->products->count()}} Products</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="tp-category-main-result text-center mb-35 mt-35">
            <p>Showing 12 of 46 products</p>
            <div class="tp-category-main-result-bar">
              <span data-width="40%"></span>
            </div>
          </div>
          <div class="tp-category-main-more text-center">
            <a href="shop.html" class="tp-load-more-btn">
              Load More
              <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0003 1.698V5.2986H9.39966" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.4933 8.29916C11.1032 9.40329 10.3649 10.3507 9.38948 10.9987C8.41408 11.6467 7.2545 11.9601 6.08548 11.8917C4.91647 11.8233 3.80134 11.3768 2.90816 10.6195C2.01497 9.86225 1.3921 8.83518 1.13343 7.69309C0.874748 6.551 0.99427 5.35578 1.47398 4.28753C1.95369 3.21928 2.7676 2.33588 3.79306 1.77045C4.81852 1.20502 5.99998 0.988199 7.15939 1.15265C8.3188 1.31711 9.39335 1.85393 10.2211 2.68222L12.9996 5.29866" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- category area end -->
@endsection
