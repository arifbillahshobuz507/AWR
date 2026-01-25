<footer>
  <div class="tp-footer-area" data-bg-color="footer-bg-grey">
    <div class="tp-footer-top pt-95 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
            <div class="tp-footer-widget footer-col-1 mb-50">
              <div class="tp-footer-widget-content">
                <div class="tp-footer-logo">
                  <a href="index.html">
                    <img src="{{ asset((\App\Helpers\Helpers::get_option('app_logo') ?? '') . '/gsbd.jpg') }}" alt="logo">
                  </a>
                </div>
                <p class="tp-footer-desc">We are a team of designers and developers that create high quality WordPress</p>
{{--                <div class="tp-footer-social">--}}
{{--                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>--}}
{{--                  <a href="#"><i class="fa-brands fa-twitter"></i></a>--}}
{{--                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>--}}
{{--                  <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>--}}
{{--                </div>--}}
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="tp-footer-widget footer-col-2 mb-50">
              <h4 class="tp-footer-widget-title">My Account</h4>
              <div class="tp-footer-widget-content">
                <ul>
                  <li><a href="{{route('dashboard')}}">Profile</a></li>
                  <li><a href="{{route('dashboard')}}">Quotation</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="tp-footer-widget footer-col-3 mb-50">
              <h4 class="tp-footer-widget-title">Infomation</h4>
              <div class="tp-footer-widget-content">
                <ul>
                  <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                  <li><a href="{{route('terms-conditions')}}">Terms & Conditions</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="tp-footer-widget footer-col-4 mb-50">
              <h4 class="tp-footer-widget-title">Talk To Us</h4>
              <div class="tp-footer-widget-content">
                <div class="tp-footer-talk mb-20">
                  <span>Got Questions? Call us</span>
                  <h4><a href="{{Helper::get_option('contact_us_phone_one')}}">+{{Helper::get_option('contact_us_phone_one')}}</a></h4>
                </div>
                <div class="tp-footer-contact">
                  <div class="tp-footer-contact-item d-flex align-items-start">
                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M13 5.40039L10.496 7.40039C9.672 8.05639 8.32 8.05639 7.496 7.40039L5 5.40039" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                             <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                       </span>
                    </div>
                    <div class="tp-footer-contact-content">
                      <p><a href="{{Helper::get_option('contact_us_email_one')}}">{{Helper::get_option('contact_us_email_one')}}</a></p>
                    </div>
                  </div>
                  <div class="tp-footer-contact-item d-flex align-items-start">
                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M8.50001 10.9417C9.99877 10.9417 11.2138 9.72668 11.2138 8.22791C11.2138 6.72915 9.99877 5.51416 8.50001 5.51416C7.00124 5.51416 5.78625 6.72915 5.78625 8.22791C5.78625 9.72668 7.00124 10.9417 8.50001 10.9417Z" stroke="currentColor" stroke-width="1.5"></path>
                                             <path d="M1.21115 6.64496C2.92464 -0.887449 14.0841 -0.878751 15.7889 6.65366C16.7891 11.0722 14.0406 14.8123 11.6313 17.126C9.88298 18.8134 7.11704 18.8134 5.36006 17.126C2.95943 14.8123 0.210885 11.0635 1.21115 6.64496Z" stroke="currentColor" stroke-width="1.5"></path>
                                          </svg>
                                       </span>
                    </div>
                    <div class="tp-footer-contact-content">
                      <p><a href="{{Helper::get_option('contact_us_location')}}" target="_blank">{{Helper::get_option('contact_us_location')}}</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tp-footer-bottom">
      <div class="container">
        <div class="tp-footer-bottom-wrapper">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="tp-footer-copyright">
                <p>© 2025 Glowbal Parts BD All Rights Reserved.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tp-footer-payment text-md-end">
                <p>
                  <span>We Using Safe Payment For:</span>
                  <img src="{{asset('user-assets')}}/img/footer/footer-pay.png" alt="">
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
