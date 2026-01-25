@extends('user-interface.layouts.layout-master')
@section('title','Contact Us')
@section('user-content')
  <x-breadcrumb title="Keep In Touch with Us" subtitle="Contact"></x-breadcrumb>
  <section class="tp-contact-area pb-100">
    <div class="container">
      <div class="tp-contact-inner">
        <div class="row">
          <div class="col-xl-9 col-lg-8">
            <div class="tp-contact-wrapper">
              <h3 class="tp-contact-title">Sent A Message</h3>
              <div class="tp-contact-form">
                <form id="contact-form" action="assets/mail.php" method="POST">
                  <div class="tp-contact-input-wrapper">
                    <div class="tp-contact-input-box">
                      <div class="tp-contact-input">
                        <input name="name" id="name" type="text" placeholder="Shahnewaz Sakil">
                      </div>
                      <div class="tp-contact-input-title">
                        <label for="name">Your Name</label>
                      </div>
                    </div>
                    <div class="tp-contact-input-box">
                      <div class="tp-contact-input">
                        <input name="email" id="email" type="email" placeholder="shofy@mail.com">
                      </div>
                      <div class="tp-contact-input-title">
                        <label for="email">Your Email</label>
                      </div>
                    </div>
                    <div class="tp-contact-input-box">
                      <div class="tp-contact-input">
                        <input name="subject" id="subject" type="text" placeholder="Write your subject">
                      </div>
                      <div class="tp-contact-input-title">
                        <label for="subject">Subject</label>
                      </div>
                    </div>
                    <div class="tp-contact-input-box">
                      <div class="tp-contact-input">
                        <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                      </div>
                      <div class="tp-contact-input-title">
                        <label for="message">Your Message</label>
                      </div>
                    </div>
                  </div>
                  <div class="tp-contact-suggetions mb-20">
                    <div class="tp-contact-remeber">
                      <input id="remeber" type="checkbox">
                      <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                    </div>
                  </div>
                  <div class="tp-contact-btn">
                    <button type="submit">Send Message</button>
                  </div>
                </form>
                <p class="ajax-response"></p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4">
            <div class="tp-contact-info-wrapper">
              <div class="tp-contact-info-item">
                <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{asset('user-assets')}}/img/contact/contact-icon-1.png" alt="">
                                 </span>
                </div>
                <div class="tp-contact-info-content">
                  <p data-info="mail"><a href="mailto:contact@shofy.com">{{Helper::get_option('contact_us_email_one')}}</a></p>
                  <p data-info="phone"><a href="tel:670-413-90-762">+{{Helper::get_option('contact_us_phone_one')}}</a></p>
                </div>
              </div>
              <div class="tp-contact-info-item">
                <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{asset('user-assets')}}/img/contact/contact-icon-2.png" alt="">
                                 </span>
                </div>
                <div class="tp-contact-info-content">
                  <p>
                    <a href="{{Helper::get_option('contact_us_map_link')}}" target="_blank">
                      {{Helper::get_option('contact_us_location')}}
                    </a>
                  </p>
                </div>
              </div>
              <div class="tp-contact-info-item">
                <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{asset('user-assets')}}/img/contact/contact-icon-3.png" alt="">
                                 </span>
                </div>
                <div class="tp-contact-info-content">
                  <div class="tp-contact-social-wrapper mt-5">
                    <h4 class="tp-contact-social-title">Find on social media</h4>

                    <div class="tp-contact-social-icon">
                      <a href="{{Helper::get_option('facebook_url')}}"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="{{Helper::get_option('twitter_url')}}"><i class="fa-brands fa-twitter"></i></a>
                      <a href="{{Helper::get_option('linkedin_url')}}"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tp-map-area pb-120">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="tp-map-wrapper">
            <div class="tp-map-hotspot">
                           <span class="tp-hotspot tp-pulse-border">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="6" cy="6" r="6" fill="#821F40"></circle>
                              </svg>
                           </span>
            </div>
            <div class="tp-map-iframe">
              <iframe src="{{Helper::get_option('contact_us_map_link')}}" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{--  <x-breadcrumb title="Contact Us" subtitle="Contact Us"/>--}}
{{--  <div class="location padding--top padding--bottom">--}}
{{--    <div class="container">--}}
{{--      <div class="row g-0">--}}
{{--        <div class="col-lg-7 col-12">--}}
{{--          <div class="location__right padding--top padding--bottom">--}}
{{--            <div class="location__info">--}}

{{--              <div class="location__info-bottom">--}}
{{--                <div class="section__header">--}}
{{--                  <h2>Contact Info</h2>--}}
{{--                </div>--}}
{{--                <div class="section__wrapper">--}}
{{--                  <div class="location__info-list">--}}
{{--                    <ul>--}}
{{--                      <li>--}}
{{--                        <div class="location__info-left">--}}
{{--                          <i class="fas fa-gopuram"></i>--}}
{{--                        </div>--}}
{{--                        <div class="location__info-right">--}}
{{--                          <p style="color:#ffff;font-size: 18px;">{{Helper::get_option('contact_us_title')}}</p>--}}
{{--                        </div>--}}
{{--                      </li>--}}
{{--                      <li>--}}
{{--                        <div class="location__info-left">--}}
{{--                          <i class="fas fa-phone-alt"></i>--}}
{{--                        </div>--}}
{{--                        <div class="location__info-right">--}}
{{--                          <p style="color:#ffff;font-size: 18px;">{{Helper::get_option('contact_us_phone_one')}}</p>--}}
{{--                        </div>--}}
{{--                      </li>--}}
{{--                      <li>--}}
{{--                        <div class="location__info-left">--}}
{{--                          <i class="fa fa-envelope" aria-hidden="true"></i>--}}
{{--                        </div>--}}
{{--                        <div class="location__info-right">--}}
{{--                          <p style="color:#ffff;font-size: 18px;">{{Helper::get_option('contact_us_email_one')}}</p>--}}
{{--                        </div>--}}
{{--                      </li>--}}
{{--                      <li>--}}
{{--                        <div class="location__info-left">--}}
{{--                          <i class="fas fa-map-marker-alt"></i>--}}
{{--                        </div>--}}
{{--                        <div class="location__info-right">--}}
{{--                          <p style="color:#ffff;font-size: 18px;">{{Helper::get_option('contact_us_description')}}</p>--}}
{{--                        </div>--}}
{{--                      </li>--}}
{{--                    </ul>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-5 col-12">--}}
{{--          <div class="location__left">--}}
{{--            <div class="location__map">--}}
{{--              <iframe src="{{Helper::get_option('contact_us_map_link')}}" allowfullscreen="" loading="lazy"></iframe>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
@endsection
