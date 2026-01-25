@extends('user-interface.layouts.layout-master')
@section('title','About Us')
@section('user-content')
  <x-breadcrumb title="Quotation" subtitle="Quotation"></x-breadcrumb>
  <section class="tp-cart-area pb-120">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 col-lg-8">
          <div class="tp-cart-list mb-25 mr-30">
            <table class="table">
              <thead>
              <tr>
                <th colspan="2" class="tp-cart-header-product">Product</th>
                <th class="tp-cart-header-price">Price</th>
                <th class="tp-cart-header-quantity">Quantity</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <!-- img -->
                <td class="tp-cart-img"><a href="product-details.html"> <img src="{{asset('user-assets')}}/img/product/cart/product-cart-1.jpg" alt=""></a></td>
                <!-- title -->
                <td class="tp-cart-title"><a href="product-details.html">Legendary Whitetails Wmen's.</a></td>
                <!-- price -->
                <td class="tp-cart-price"><span>$76.00</span></td>
                <!-- quantity -->
                <td class="tp-cart-quantity">
                  <div class="tp-product-quantity mt-10 mb-10">
                                       <span class="tp-cart-minus">
                                          <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                    <input class="tp-cart-input" type="text" value="1">
                    <span class="tp-cart-plus">
                                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                  </div>
                </td>
                <!-- action -->
                <td class="tp-cart-action">
                  <button class="tp-cart-action-btn">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"></path>
                    </svg>
                    <span>Remove</span>
                  </button>
                </td>
              </tr>
              <tr>
                <!-- img -->
                <td class="tp-cart-img"><a href="product-details.html"> <img src="{{asset('user-assets')}}/img/product/cart/product-cart-2.jpg" alt=""></a></td>
                <!-- title -->
                <td class="tp-cart-title"><a href="product-details.html">Tommy Hilfiger Women’s Jaden</a></td>
                <!-- price -->
                <td class="tp-cart-price"><span>$44.00</span></td>
                <!-- quantity -->
                <td class="tp-cart-quantity">
                  <div class="tp-product-quantity mt-10 mb-10">
                                       <span class="tp-cart-minus">
                                          <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                    <input class="tp-cart-input" type="text" value="1">
                    <span class="tp-cart-plus">
                                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                  </div>
                </td>
                <!-- action -->
                <td class="tp-cart-action">
                  <button class="tp-cart-action-btn">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"></path>
                    </svg>
                    <span>Remove</span>
                  </button>
                </td>
              </tr>
              <tr>
                <!-- img -->
                <td class="tp-cart-img"><a href="product-details.html"> <img src="{{asset('user-assets')}}/img/product/cart/product-cart-3.jpg" alt=""></a></td>
                <!-- title -->
                <td class="tp-cart-title"><a href="product-details.html">Simple Modern School Boys</a></td>
                <!-- price -->
                <td class="tp-cart-price"><span>$62.00</span></td>
                <!-- quantity -->
                <td class="tp-cart-quantity">
                  <div class="tp-product-quantity mt-10 mb-10">
                                       <span class="tp-cart-minus">
                                          <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                    <input class="tp-cart-input" type="text" value="1">
                    <span class="tp-cart-plus">
                                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                  </div>
                </td>
                <!-- action -->
                <td class="tp-cart-action">
                  <button class="tp-cart-action-btn">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"></path>
                    </svg>
                    <span>Remove</span>
                  </button>
                </td>
              </tr>
              <tr>
                <!-- img -->
                <td class="tp-cart-img"><a href="product-details.html"> <img src="{{asset('user-assets')}}/img/product/cart/product-cart-4.jpg" alt=""></a></td>
                <!-- title -->
                <td class="tp-cart-title"><a href="product-details.html">Calvin Klein Gabrianna Novelty</a></td>
                <!-- price -->
                <td class="tp-cart-price"><span>$93.00</span></td>
                <!-- quantity -->
                <td class="tp-cart-quantity">
                  <div class="tp-product-quantity mt-10 mb-10">
                                       <span class="tp-cart-minus">
                                          <svg width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                    <input class="tp-cart-input" type="text" value="1">
                    <span class="tp-cart-plus">
                                          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 1V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                  </div>
                </td>
                <!-- action -->
                <td class="tp-cart-action">
                  <button class="tp-cart-action-btn">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.53033 1.53033C9.82322 1.23744 9.82322 0.762563 9.53033 0.46967C9.23744 0.176777 8.76256 0.176777 8.46967 0.46967L5 3.93934L1.53033 0.46967C1.23744 0.176777 0.762563 0.176777 0.46967 0.46967C0.176777 0.762563 0.176777 1.23744 0.46967 1.53033L3.93934 5L0.46967 8.46967C0.176777 8.76256 0.176777 9.23744 0.46967 9.53033C0.762563 9.82322 1.23744 9.82322 1.53033 9.53033L5 6.06066L8.46967 9.53033C8.76256 9.82322 9.23744 9.82322 9.53033 9.53033C9.82322 9.23744 9.82322 8.76256 9.53033 8.46967L6.06066 5L9.53033 1.53033Z" fill="currentColor"></path>
                    </svg>
                    <span>Remove</span>
                  </button>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="tp-cart-bottom">
            <div class="row align-items-end">
              <div class="col-xl-6 col-md-8">
                <div class="tp-cart-coupon">
                  <form action="#">
                    <div class="tp-cart-coupon-input-box">
                      <label>Coupon Code:</label>
                      <div class="tp-cart-coupon-input d-flex align-items-center">
                        <input type="text" placeholder="Enter Coupon Code">
                        <button type="submit">Apply</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-xl-6 col-md-4">
                <div class="tp-cart-update text-md-end">
                  <button type="button" class="tp-cart-update-btn">Update Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="tp-cart-checkout-wrapper">
            <div class="tp-cart-checkout-top d-flex align-items-center justify-content-between">
              <span class="tp-cart-checkout-top-title">Subtotal</span>
              <span class="tp-cart-checkout-top-price">$742</span>
            </div>
            <div class="tp-cart-checkout-shipping">
              <h4 class="tp-cart-checkout-shipping-title">Shipping</h4>

              <div class="tp-cart-checkout-shipping-option-wrapper">
                <div class="tp-cart-checkout-shipping-option">
                  <input id="flat_rate" type="radio" name="shipping">
                  <label for="flat_rate">Flat rate: <span>$20.00</span></label>
                </div>
                <div class="tp-cart-checkout-shipping-option">
                  <input id="local_pickup" type="radio" name="shipping">
                  <label for="local_pickup">Local pickup: <span> $25.00</span></label>
                </div>
                <div class="tp-cart-checkout-shipping-option">
                  <input id="free_shipping" type="radio" name="shipping">
                  <label for="free_shipping">Free shipping</label>
                </div>
              </div>
            </div>
            <div class="tp-cart-checkout-total d-flex align-items-center justify-content-between">
              <span>Total</span>
              <span>$724</span>
            </div>
            <div class="tp-cart-checkout-proceed">
              <a href="checkout.html" class="tp-cart-checkout-btn w-100">Proceed to Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
