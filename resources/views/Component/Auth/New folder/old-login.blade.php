@extends('user-interface.layouts.layout-master')
@section('title','login')
@section('user-content')
  <x-breadcrumb title="Login" subtitle="Login"></x-breadcrumb>
  <section class="registration padding--top padding--bottom ">
    <div class="container">
      <x-auth-session-status class="mb-4" :status="session('status')" />
      <form method="POST" action="{{route('login')}}" class="row g-3 p-4 justify-content-center">
        @csrf
        <div class="col-12 text-center">
          <h1>Login</h1>
        </div>

        <div class="col-md-12">
          <input type="text" class="form-control" id="mobile" value="{{old('email')}}" required autofocus autocomplete="email" name="email" placeholder="দয়া করে ইমেল অথবা মোবাইল নম্বর লিখুন">
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="col-md-12">
          <input type="password" name="password" required autofocus autocomplete="password" class="form-control" id="verificationcode" placeholder="পাসওয়ার্ড">
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="col-md-12">
          <a href="forgot-password.html" style="font-size:18px;font-weight:500;color: #fff;">Forgot Password ?</a>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
@endsection
