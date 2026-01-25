@extends('user-interface.layouts.layout-master')
@section('title','forgot Password')
@section('user-content')
  <!-- breadcrumb area start -->
  <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content p-relative z-index-1">
            <h3 class="breadcrumb__title"></h3>
            <div class="breadcrumb__list">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->
  <!-- login area start -->
  <section class="tp-login-area pb-140 p-relative z-index-1 fix">
    <div class="tp-login-shape">
      <img class="tp-login-shape-1" src="assets/img/login/login-shape-1.png" alt="">
      <img class="tp-login-shape-2" src="assets/img/login/login-shape-2.png" alt="">
      <img class="tp-login-shape-3" src="assets/img/login/login-shape-3.png" alt="">
      <img class="tp-login-shape-4" src="assets/img/login/login-shape-4.png" alt="">
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
          <div class="tp-login-wrapper">
            <div class="tp-login-top text-center mb-30">
              <h3 class="tp-login-title">Reset Passowrd</h3>
              <p>Enter your email address to request password reset.</p>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <div class="tp-login-option">
                <div class="tp-login-input-wrapper">
                  <div class="tp-login-input-box">
                    <div class="tp-login-input">
                      <input id="email" type="email" name="email" placeholder="info@mail.com">
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="tp-login-input-title">
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                </div>
                <div class="tp-login-bottom mb-15">
                  <button type="submit" class="tp-login-btn w-100">Send Mail</button>
                </div>
                <div class="tp-login-suggetions d-sm-flex align-items-center justify-content-center">
                  <div class="tp-login-forgot">
                    <span>Remeber Passowrd? <a href="{{route('login')}}"> Login</a></span>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login area end -->
@endsection


{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
