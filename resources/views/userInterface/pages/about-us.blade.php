@extends('user-interface.layouts.layout-master')
@section('title','About Us')
@section('user-content')
  <section class="tp-about-area pb-80 pt-95">
    <div class="container">
      <x-breadcrumb title="Well-coordinated Teamwork Speaks About Us" subtitle="about-us"></x-breadcrumb>
{{--      <div class="row">--}}
{{--        <div class="col-xl-8 col-lg-10">--}}
{{--          <div class="tp-about-banner-wrapper">--}}
{{--            <span class="tp-about-banner-subtitle">History</span>--}}
{{--            <h3 class="tp-about-banner-title">Well-coordinated Teamwork Speaks About Us</h3>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
      <div class="row">
        <div class="col-xl-12">
          <div class="tp-about-banner-thumb w-img">
            <img src="{{asset('user-assets')}}/img/about/about-big-1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="tp-about-banner-content">
            <p>We are thrilled to offer you a wide range of products that you won't find anywhere else. Whether you're shopping for clothing, accessories, gadgets, or home decor, we have something for everyone.</p>

            <p>Our commitment to quality is reflected in every product we offer. We work with top suppliers and manufacturers to ensure that every item we sell meets our high standards for durability, performance, and style. And with a user-friendly interface and intuitive navigation, shopping on our site is a breeze. We understand that security is a top concern for online shoppers, which is why we employ the latest encryption technologies and follow industry best practices to keep your personal information safe. And with fast, reliable shipping options, you can enjoy your purchases in no time.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tp-counter-area pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="tp-counter-wrapper d-flex flex-wrap justify-content-between">
            <div class="tp-counter-item d-flex align-items-start mb-30">
              <div class="tp-counter-icon mr-15">
                              <span>
                                 <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M11.3642 0.575106C12.2609 -0.191702 13.7293 -0.191702 14.639 0.575106L16.6922 2.34265C17.0821 2.68056 17.8098 2.95353 18.3296 2.95353H20.5388C21.9163 2.95353 23.0468 4.08424 23.0468 5.4619V7.67128C23.0468 8.17816 23.3197 8.91898 23.6576 9.30889L25.425 11.3624C26.1917 12.2592 26.1917 13.7278 25.425 14.6376L23.6576 16.691C23.3197 17.0809 23.0468 17.8088 23.0468 18.3286V20.5381C23.0468 21.9158 21.9163 23.0465 20.5388 23.0465H18.3296C17.8228 23.0465 17.0821 23.3194 16.6922 23.6574L14.639 25.4249C13.7423 26.1917 12.2739 26.1917 11.3642 25.4249L9.31102 23.6574C8.92117 23.3194 8.19343 23.0465 7.67362 23.0465H5.42545C4.04797 23.0465 2.9174 21.9158 2.9174 20.5381V18.3156C2.9174 17.8088 2.64452 17.0809 2.31964 16.691L0.565288 14.6246C-0.188429 13.7278 -0.188429 12.2722 0.565288 11.3754L2.31964 9.30889C2.64452 8.91898 2.9174 8.19117 2.9174 7.68429V5.4619C2.9174 4.08424 4.04797 2.95353 5.42545 2.95353H7.67362C8.18043 2.95353 8.92117 2.68056 9.31102 2.34265L11.3642 0.575106Z" fill="currentColor"></path>
                                    <path d="M18.9404 11.778C18.6935 11.4271 18.2777 11.2321 17.7839 11.2321H15.2498C15.0809 11.2321 14.925 11.1671 14.821 11.0372C14.7171 10.9072 14.6651 10.7382 14.6911 10.5563L15.0029 8.5288C15.1329 7.93095 14.7301 7.2421 14.1323 7.04715C13.5735 6.8392 12.9107 7.12511 12.6508 7.51502L10.1298 11.2581V10.7902C10.1298 9.88045 9.73993 9.50356 8.77829 9.50356H8.1415C7.17986 9.50356 6.79004 9.88045 6.79004 10.7902V17.0027C6.79004 17.9125 7.17986 18.2894 8.1415 18.2894H8.77829C9.68795 18.2894 10.0778 17.9384 10.1168 17.1066L12.0271 18.5753C12.287 18.8352 12.8718 18.9782 13.2876 18.9782H15.6917C16.5234 18.9782 17.3551 18.3543 17.537 17.5875L19.0574 12.9607C19.2264 12.5448 19.1874 12.1159 18.9404 11.778Z" fill="currentColor"></path>
                                    </svg>
                              </span>
              </div>
              <div class="tp-counter-content">
                <h4><span class="purecounter" data-purecounter-duration="0" data-purecounter-end="750">750</span>+</h4>
                <p>Happy Customers</p>
              </div>
            </div>
            <div class="tp-counter-item d-flex align-items-start mb-30">
              <div class="tp-counter-icon mr-15">
                              <span>
                                 <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M20.2244 7.5118C20.1332 7.49878 20.0421 7.49878 19.951 7.5118C17.9331 7.44671 16.3318 5.79333 16.3318 3.76241C16.3318 1.69243 18.0112 0 20.0942 0C22.1642 0 23.8566 1.67941 23.8566 3.76241C23.8436 5.79333 22.2423 7.44671 20.2244 7.5118Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M24.4685 16.5338C23.0104 17.5102 20.9665 17.8747 19.0788 17.6274C19.5735 16.5599 19.8339 15.3752 19.8469 14.1254C19.8469 12.8235 19.5605 11.5867 19.0137 10.5062C20.9404 10.2458 22.9844 10.6103 24.4555 11.5867C26.5125 12.9407 26.5125 15.1669 24.4685 16.5338Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M5.78651 7.5118C5.87764 7.49878 5.96878 7.49878 6.05991 7.5118C8.07781 7.44671 9.67911 5.79333 9.67911 3.76241C9.67911 1.69243 7.9997 0 5.9167 0C3.84673 0 2.1543 1.67941 2.1543 3.76241C2.16732 5.79333 3.76861 7.44671 5.78651 7.5118Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M5.93002 14.1253C5.93002 15.3881 6.20341 16.5858 6.69813 17.6663C4.86249 17.8616 2.94874 17.4711 1.54272 16.5467C-0.514239 15.1798 -0.514239 12.9536 1.54272 11.5866C2.93572 10.6492 4.90155 10.2717 6.7502 10.48C6.21643 11.5736 5.93002 12.8104 5.93002 14.1253Z" fill="currentColor"></path>
                                    <path d="M13.1814 18.057C13.0772 18.044 12.9601 18.044 12.8429 18.057C10.4474 17.9789 8.53369 16.0131 8.53369 13.5916C8.53369 11.118 10.5256 9.11316 13.0121 9.11316C15.4857 9.11316 17.4906 11.118 17.4906 13.5916C17.4906 16.0131 15.5898 17.9789 13.1814 18.057Z" fill="currentColor"></path>
                                    <path d="M8.95069 20.7518C6.98486 22.0667 6.98486 24.2278 8.95069 25.5296C11.1899 27.0268 14.8612 27.0268 17.1004 25.5296C19.0662 24.2147 19.0662 22.0536 17.1004 20.7518C14.8742 19.2546 11.2029 19.2546 8.95069 20.7518Z" fill="currentColor"></path>
                                 </svg>
                              </span>
              </div>
              <div class="tp-counter-content">
                <h4><span class="purecounter" data-purecounter-duration="0" data-purecounter-end="2016">2016</span></h4>
                <p>Founding Year</p>
              </div>
            </div>
            <div class="tp-counter-item d-flex align-items-start mb-30">
              <div class="tp-counter-icon mr-15">
                              <span>
                                 <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M17.3335 2.47705V13.6194C17.3335 14.9812 16.2193 16.0955 14.8574 16.0955H1.23901V8.19678C2.14278 9.27387 3.52942 9.94242 5.06458 9.90528C6.315 9.88052 7.44159 9.39768 8.28345 8.59296C8.66724 8.27107 8.98916 7.8625 9.23676 7.41681C9.68246 6.66161 9.93004 5.7702 9.90528 4.84167C9.86814 3.39317 9.22437 2.11802 8.22156 1.23901H16.0955C16.7764 1.23901 17.3335 1.79613 17.3335 2.47705Z" fill="currentColor"></path>
                                    <path d="M25.9998 16.0955V19.8096C25.9998 21.8647 24.3408 23.5237 22.2857 23.5237H21.0476C21.0476 22.1618 19.9334 21.0476 18.5715 21.0476C17.2097 21.0476 16.0955 22.1618 16.0955 23.5237H11.1433C11.1433 22.1618 10.0291 21.0476 8.66724 21.0476C7.3054 21.0476 6.19116 22.1618 6.19116 23.5237H4.95313C2.89798 23.5237 1.23901 21.8647 1.23901 19.8096V16.0955H14.8574C16.2193 16.0955 17.3335 14.9812 17.3335 13.6194V4.95312H19.6115C20.5029 4.95312 21.32 5.43597 21.7657 6.20356L23.8827 9.90528H22.2857C21.6047 9.90528 21.0476 10.4624 21.0476 11.1433V14.8574C21.0476 15.5383 21.6047 16.0955 22.2857 16.0955H25.9998Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M8.66748 25.9998C10.035 25.9998 11.1436 24.8912 11.1436 23.5237C11.1436 22.1562 10.035 21.0476 8.66748 21.0476C7.29998 21.0476 6.19141 22.1562 6.19141 23.5237C6.19141 24.8912 7.29998 25.9998 8.66748 25.9998Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M18.5715 25.9998C19.939 25.9998 21.0476 24.8912 21.0476 23.5237C21.0476 22.1562 19.939 21.0476 18.5715 21.0476C17.204 21.0476 16.0955 22.1562 16.0955 23.5237C16.0955 24.8912 17.204 25.9998 18.5715 25.9998Z" fill="currentColor"></path>
                                    <path opacity="0.4" d="M26.0002 14.2755V16.0953H22.2861C21.6052 16.0953 21.0481 15.5382 21.0481 14.8573V11.1432C21.0481 10.4623 21.6052 9.90515 22.2861 9.90515H23.8832L25.6783 13.0497C25.8888 13.4212 26.0002 13.8421 26.0002 14.2755Z" fill="currentColor"></path>
                                    <path d="M8.22201 1.23897C7.33062 0.446625 6.14205 -0.0238295 4.84212 0.000931254C3.67836 0.025692 2.61367 0.458996 1.77181 1.1523C0.657572 2.08083 -0.0357196 3.50461 0.00142154 5.06454C0.0261823 5.99307 0.298557 6.85967 0.781391 7.59011C0.917575 7.80057 1.06613 8.01103 1.23946 8.19673C2.14323 9.27383 3.52986 9.94237 5.06503 9.90523C6.31545 9.88047 7.44203 9.39764 8.2839 8.59292C8.66769 8.27103 8.9896 7.86246 9.23721 7.41676C9.6829 6.66156 9.93048 5.77015 9.90572 4.84163C9.86858 3.39312 9.22482 2.11798 8.22201 1.23897ZM7.50393 4.35885L4.91639 6.85963C4.73069 7.03296 4.50789 7.11965 4.27267 7.11965C4.03744 7.11965 3.81457 7.03296 3.62886 6.85963L2.37843 5.67116C2.00702 5.31213 1.99469 4.73026 2.35372 4.35885C2.71275 3.98744 3.29463 3.97503 3.66604 4.33406L4.27267 4.9159L6.21639 3.03414C6.58781 2.67511 7.16968 2.68744 7.52871 3.05885C7.88774 3.41788 7.87534 3.99982 7.50393 4.35885Z" fill="currentColor"></path>
                                    </svg>
                              </span>
              </div>
              <div class="tp-counter-content">
                <h4><span class="purecounter" data-purecounter-duration="0" data-purecounter-end="120">120</span>+</h4>
                <p>Product Orders</p>
              </div>
            </div>
            <div class="tp-counter-item d-flex align-items-start mb-30">
              <div class="tp-counter-icon mr-15">
                              <span>
                                 <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" d="M22.0813 9.0813C22.0813 10.9624 21.5235 12.6879 20.5634 14.1279C19.1623 16.2037 16.9439 17.6696 14.3622 18.0459C13.9211 18.1237 13.467 18.1626 13 18.1626C12.533 18.1626 12.0789 18.1237 11.6378 18.0459C9.05612 17.6696 6.83769 16.2037 5.43658 14.1279C4.47655 12.6879 3.9187 10.9624 3.9187 9.0813C3.9187 4.06064 7.97934 0 13 0C18.0207 0 22.0813 4.06064 22.0813 9.0813Z" fill="currentColor"></path>
                                    <path d="M25.0003 21.367L22.8597 21.8729C22.3797 21.9897 22.0035 22.353 21.8997 22.833L21.4456 24.7401C21.1991 25.7779 19.8758 26.0893 19.1883 25.272L13 18.1626L6.81174 25.2849C6.12416 26.1022 4.80088 25.7909 4.55439 24.753L4.10032 22.8459C3.98356 22.3659 3.60734 21.9897 3.1403 21.8859L0.999704 21.38C0.0137342 21.1465 -0.336545 19.914 0.376986 19.2004L5.43657 14.1409C6.83769 16.2166 9.05612 17.6826 11.6378 18.0588C12.0789 18.1367 12.533 18.1756 13 18.1756C13.467 18.1756 13.9211 18.1367 14.3622 18.0588C16.9439 17.6826 19.1623 16.2166 20.5634 14.1409L25.623 19.2004C26.3365 19.901 25.9863 21.1335 25.0003 21.367Z" fill="currentColor"></path>
                                    <path d="M13.7521 5.16337L14.5175 6.69421C14.6213 6.90178 14.8937 7.10936 15.1402 7.14828L16.5283 7.38179C17.4105 7.5245 17.6181 8.17317 16.9824 8.80886L15.9056 9.88562C15.724 10.0673 15.6202 10.4176 15.6851 10.677L15.9964 12.0133C16.2429 13.0641 15.6851 13.4792 14.751 12.9214L13.4537 12.156C13.2202 12.0132 12.831 12.0132 12.5974 12.156L11.3001 12.9214C10.366 13.4662 9.80818 13.0641 10.0547 12.0133L10.366 10.677C10.4179 10.4305 10.3271 10.0673 10.1455 9.88562L9.0687 8.80886C8.43301 8.17317 8.64058 7.53747 9.52277 7.38179L10.9109 7.14828C11.1444 7.10936 11.4169 6.90178 11.5207 6.69421L12.2861 5.16337C12.6623 4.33308 13.3369 4.33308 13.7521 5.16337Z" fill="currentColor"></path>
                                 </svg>
                              </span>
              </div>
              <div class="tp-counter-content">
                <h4><span class="purecounter" data-purecounter-duration="0" data-purecounter-end="60">60</span>+</h4>
                <p>Quality Products</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tp-history-area pt-140 pb-140" data-bg-color="#F8F8F8" style="background-color: rgb(248, 248, 248);">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="tp-history-slider mb-50">
            <div class="tp-history-slider-active swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
              <div class="swiper-wrapper" id="swiper-wrapper-5612f7e10b1244ab1" aria-live="polite">
                <div class="tp-thistory-item swiper-slide swiper-slide-active" data-bg-color="#F8F8F8" style="background-color: rgb(248, 248, 248); width: 1116px; opacity: 1; transform: translate3d(0px, 0px, 0px);" role="group" aria-label="1 / 4">
                  <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                      <div class="tp-history-wrapper pr-45">
                        <div class="tp-history-content mb-40">
                          <h3 class="tp-history-title">About our <br> Online Store</h3>
                          <p>At our eCommerce site, we are passionate about providing our customers with the best possible shopping experience. From our extensive product selection to our exceptional customer service, we are committed to exceeding your expectations.</p>
                          <p>So start browsing today and find the perfect products to suit your needs!</p>

                        </div>
                        <div class="tp-history-year">
                          <p>2016</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                      <div class="tp-history-thumb-wrapper ml-150 p-relative">
                        <div class="tp-history-thumb-text">
                          <p>Welcome to our <br> Shofy eCommerce Theme</p>
                        </div>
                        <div class="tp-history-thumb m-img">
                          <img src="{{asset('user-assets')}}/img/history/history-1.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tp-thistory-item swiper-slide swiper-slide-next" data-bg-color="#F8F8F8" style="background-color: rgb(248, 248, 248); width: 1116px; opacity: 0; transform: translate3d(-1116px, 0px, 0px);" role="group" aria-label="2 / 4">
                  <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                      <div class="tp-history-wrapper pr-110">
                        <div class="tp-history-content mb-40">
                          <h3 class="tp-history-title">About our <br> Online Store</h3>
                          <p>At our eCommerce site, we are passionate about providing our customers with the best possible shopping experience. From our extensive product selection to our exceptional customer service, we are committed to exceeding your expectations.</p>
                          <p>So start browsing today and find the perfect products to suit your needs!</p>

                        </div>
                        <div class="tp-history-year">
                          <p>2017</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                      <div class="tp-history-thumb-wrapper ml-150 p-relative">
                        <div class="tp-history-thumb-text">
                          <p>Welcome to our <br> Shofy eCommerce Theme</p>
                        </div>
                        <div class="tp-history-thumb m-img">
                          <img src="{{asset('user-assets')}}/img/history/history-2.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tp-thistory-item swiper-slide" data-bg-color="#F8F8F8" style="background-color: rgb(248, 248, 248); width: 1116px; opacity: 0; transform: translate3d(-2232px, 0px, 0px);" role="group" aria-label="3 / 4">
                  <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                      <div class="tp-history-wrapper pr-110">
                        <div class="tp-history-content mb-40">
                          <h3 class="tp-history-title">About our <br> Online Store</h3>
                          <p>At our eCommerce site, we are passionate about providing our customers with the best possible shopping experience. From our extensive product selection to our exceptional customer service, we are committed to exceeding your expectations.</p>
                          <p>So start browsing today and find the perfect products to suit your needs!</p>

                        </div>
                        <div class="tp-history-year">
                          <p>2018</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                      <div class="tp-history-thumb-wrapper ml-150 p-relative">
                        <div class="tp-history-thumb-text">
                          <p>Welcome to our <br> Shofy eCommerce Theme</p>
                        </div>
                        <div class="tp-history-thumb m-img">
                          <img src="{{asset('user-assets')}}/img/history/history-1.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tp-thistory-item swiper-slide" data-bg-color="#F8F8F8" style="background-color: rgb(248, 248, 248); width: 1116px; opacity: 0; transform: translate3d(-3348px, 0px, 0px);" role="group" aria-label="4 / 4">
                  <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                      <div class="tp-history-wrapper pr-110">
                        <div class="tp-history-content mb-40">
                          <h3 class="tp-history-title">About our <br> Online Store</h3>
                          <p>At our eCommerce site, we are passionate about providing our customers with the best possible shopping experience. From our extensive product selection to our exceptional customer service, we are committed to exceeding your expectations.</p>
                          <p>So start browsing today and find the perfect products to suit your needs!</p>

                        </div>
                        <div class="tp-history-year">
                          <p>2019</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-6">
                      <div class="tp-history-thumb-wrapper ml-150 p-relative">
                        <div class="tp-history-thumb-text">
                          <p>Welcome to our <br> Shofy eCommerce Theme</p>
                        </div>
                        <div class="tp-history-thumb m-img">
                          <img src="{{asset('user-assets')}}/img/history/history-2.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>
        </div>
      </div>

      <div class="tp-history-nav">
        <div class="row">
          <div class="col-xl-12">
            <div class="tp-history-nav-active swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-thumbs">
              <div class="swiper-wrapper" id="swiper-wrapper-4ecf103593d8ecd55" aria-live="polite">
                <div class="tp-history-nav-year swiper-slide text-center swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1 / 4" style="width: 114px; margin-right: 220px;">
                  <p>2016</p>
                </div>
                <div class="tp-history-nav-year swiper-slide text-center swiper-slide-next" role="group" aria-label="2 / 4" style="width: 114px; margin-right: 220px;">
                  <p>2017</p>
                </div>
                <div class="tp-history-nav-year swiper-slide text-center" role="group" aria-label="3 / 4" style="width: 114px; margin-right: 220px;">
                  <p>2018</p>
                </div>
                <div class="tp-history-nav-year swiper-slide text-center" role="group" aria-label="4 / 4" style="width: 114px; margin-right: 220px;">
                  <p>2019</p>
                </div>
              </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tp-work-area pt-115 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6">
          <div class="tp-work-section-title-wrapper text-center mb-60">
            <h3 class="tp-work-section-title">Take a Look at our <br> Team's Work</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="tp-work-item mb-35 text-center">
            <div class="tp-work-icon d-flex align-items-end justify-content-center">
                           <span>
                              <svg width="42" height="43" viewBox="0 0 42 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M41 37.14V21.36C41 10.16 32 1 21 1C10 1 1 10.16 1 21.36V37.14C1 39.66 2.49997 40.34 4.33997 38.66L6.33997 36.84C7.07997 36.16 8.28002 36.16 9.02002 36.84L13.02 40.5C13.76 41.18 14.96 41.18 15.7 40.5L19.7 36.84C20.44 36.16 21.64 36.16 22.38 36.84L26.38 40.5C27.12 41.18 28.3201 41.18 29.0601 40.5L33.0601 36.84C33.8001 36.16 35 36.16 35.74 36.84L37.74 38.66C39.5 40.34 41 39.66 41 37.14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M13 25C17.74 28.56 24.26 28.56 29 25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M21 19C23.2091 19 25 17.2091 25 15C25 12.7909 23.2091 11 21 11C18.7909 11 17 12.7909 17 15C17 17.2091 18.7909 19 21 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
            </div>
            <div class="tp-work-content">
              <h3 class="tp-work-title">We have something <br> for everyone.</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="tp-work-item mb-35 text-center">
            <div class="tp-work-icon  d-flex align-items-end justify-content-center">
                           <span>
                              <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M30.4302 34.9645H11.7143C10.8781 34.9645 9.94231 34.305 9.66356 33.5056L1.42062 10.363C0.245898 7.04547 1.61972 6.02623 4.44701 8.0647L12.2121 13.6405C13.5063 14.5398 14.9797 14.0802 15.5372 12.6213L19.0414 3.24831C20.1564 0.250562 22.0081 0.250562 23.1231 3.24831L26.6273 12.6213C27.1848 14.0802 28.6582 14.5398 29.9325 13.6405L37.2197 8.42443C40.3257 6.18611 41.819 7.32526 40.5447 10.9425L32.5009 33.5456C32.2022 34.305 31.2665 34.9645 30.4302 34.9645Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M10.1211 40.9998H32.0226" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M16.0942 25.012H26.0495" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
            </div>
            <div class="tp-work-content">
              <h3 class="tp-work-title">We be glad to work <br> with you!</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="tp-work-item mb-35 text-center">
            <div class="tp-work-icon d-flex align-items-end justify-content-center">
                           <span>
                              <svg width="42" height="44" viewBox="0 0 42 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M2.42554 20.1025V29.4052C2.42554 38.7079 6.15491 42.4373 15.4576 42.4373H26.625C35.9277 42.4373 39.6571 38.7079 39.6571 29.4052V20.1025" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M21.052 21.7187C24.8435 21.7187 27.6405 18.6316 27.2676 14.8401L25.9001 1H16.2245L14.8363 14.8401C14.4634 18.6316 17.2604 21.7187 21.052 21.7187Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M34.1251 21.7187C38.3103 21.7187 41.3767 18.3209 40.9623 14.1564L40.3822 8.45874C39.6363 3.07187 37.5644 1 32.1361 1H25.8169L27.2672 15.5238C27.6194 18.9424 30.7065 21.7187 34.1251 21.7187Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M7.87469 21.7187C11.2933 21.7187 14.3804 18.9424 14.7119 15.5238L15.1677 10.945L16.1622 1H9.84297C4.41466 1 2.34279 3.07187 1.59692 8.45874L1.03751 14.1564C0.623137 18.3209 3.68951 21.7187 7.87469 21.7187Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M21.052 32.0781C17.592 32.0781 15.8723 33.7978 15.8723 37.2578V42.4375H26.2317V37.2578C26.2317 33.7978 24.512 32.0781 21.052 32.0781Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                           </span>
            </div>
            <div class="tp-work-content">
              <h3 class="tp-work-title">Whether you're <br> shopping for clothing</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="tp-work-item mb-35 text-center">
            <div class="tp-work-icon d-flex align-items-end justify-content-center">
                           <span>
                              <svg width="43" height="53" viewBox="0 0 43 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M21.0019 15.9417L18.2894 20.6568C17.681 21.6962 18.188 22.5581 19.3795 22.5581H22.599C23.8158 22.5581 24.2975 23.42 23.689 24.4594L21.0019 29.1745" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M11.6218 41.6723V38.7317C5.79122 35.208 1 28.338 1 21.0371C1 8.4887 12.5344 -1.34724 25.5645 1.492C31.2937 2.75952 36.313 6.56208 38.9241 11.8096C44.2224 22.4568 38.6453 33.763 30.4571 38.7063V41.647C30.4571 42.3821 30.736 44.0806 28.0235 44.0806H14.0554C11.2669 44.106 11.6218 43.0159 11.6218 41.6723Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M12.1292 51.7112C17.9344 50.0634 24.0692 50.0634 29.8744 51.7112" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </span>
            </div>
            <div class="tp-work-content">
              <h3 class="tp-work-title">We work with top <br> suppliers</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-4">
          <div class="tp-work-quote text-center">
            <p>So start browsing today and find the perfect <br> products to suit your needs!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tp-author-area pb-120">
    <div class="container">
      <div class="tp-author-inner p-relative z-index-1 tp-author-bg-overlay fix" data-bg-color="#821F40" style="background-color: rgb(130, 31, 64);">

        <!-- shape -->
        <span class="tp-author-shape-1"></span>
        <!-- shape end -->

        <div class="tp-author-bg include-bg " data-background="{{asset('user-assets')}}/img/author/author-bg.jpg" style="background-image: url(&quot;assets/img/author/author-bg.jpg&quot;);"></div>
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="tp-author-wrapper p-relative z-index-1">
              <div class="tp-author-info-wrapper d-flex align-items-center mb-30">
                <div class="tp-author-info-avater mr-10">
                  <img src="{{asset('user-assets')}}/img/users/user-4.jpg" alt="user">
                </div>
                <div class="tp-author-info">
                  <h3 class="tp-author-info-title">Theodore Handle</h3>
                  <span class="tp-author-info-designation">UI/UX design</span>
                </div>
              </div>
              <div class="tp-author-content">
                <p>We work with top suppliers and manufacturers to ensure that every item we sell meets our high standards for durability, performance, and style.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="tp-author-brand-wrapper d-flex flex-wrap align-items-center justify-content-lg-end">
              <div class="tp-author-brand-item text-center">
                <img src="{{asset('user-assets')}}/img/brand/author/logo_01.png" alt="">
              </div>
              <div class="tp-author-brand-item text-center">
                <img src="{{asset('user-assets')}}/img/brand/author/logo_02.png" alt="">
              </div>
              <div class="tp-author-brand-item text-center">
                <img src="{{asset('user-assets')}}/img/brand/author/logo_03.png" alt="">
              </div>
              <div class="tp-author-brand-item text-center">
                <img src="{{asset('user-assets')}}/img/brand/author/logo_04.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

{{--  <x-breadcrumb title="About Us" subtitle="About Us"/>--}}
{{--  <div class="about-us padding--top padding--bottom">--}}
{{--    <div class="container">--}}
{{--      <div class="row">--}}
{{--        <div class="col-xl-6 col-lg-6 col-12">--}}
{{--          <p style="color:#000">{{ Helper::get_option('about_us_description')}}</p>--}}
{{--        </div>--}}
{{--        <div class="col-xl-6 col-lg-6 col-12">--}}
{{--          <img src="{{ Helper::get_option('about_us_image') ?? 'assets/images/about/about.jpg'}}" class="img-fluid" style="border-radius: 10px;">--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
@endsection
