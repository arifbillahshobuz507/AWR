@extends('user-interface.layouts.layout-master')
@section('title','Register')
@section('vendor-style')
  @vite([
    'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
    'resources/assets/vendor/libs/select2/select2.scss',
    'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
    'resources/assets/vendor/libs/typeahead-js/typeahead.scss',
    'resources/assets/vendor/libs/tagify/tagify.scss',
    'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  ])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
  @vite([
    'resources/assets/vendor/libs/select2/select2.js',
    'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
    'resources/assets/vendor/libs/moment/moment.js',
    'resources/assets/vendor/libs/flatpickr/flatpickr.js',
    'resources/assets/vendor/libs/typeahead-js/typeahead.js',
    'resources/assets/vendor/libs/tagify/tagify.js',
    'resources/assets/vendor/libs/@form-validation/popular.js',
    'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
    'resources/assets/vendor/libs/@form-validation/auto-focus.js'
  ])
@endsection

<!-- Page Scripts -->
@section('page-script')
  @vite(['resources/assets/js/user-interface-js/user-form.js'])
@endsection
@section('user-content')
  <x-breadcrumb title="Register" subtitle="Register"></x-breadcrumb>
  <section class="registration padding--top padding--bottom ">
    <div class="container">
      <form id="userRegister" data-url="{{route('register')}}" data-csrf_token="{{csrf_token()}}" class="row g-6 p-4">
        @csrf
        <div class="col-12 text-center">
          <h1>ব্যাক্তিগত তথ্য/ Personal Information</h1>
        </div>
        <div class="col-md-12">
          <input type="text" class="form-control" id="name" name="name" placeholder="নাম">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="father_name" name="father_name" placeholder="পিতার নাম">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="মাতার নাম">
        </div>
        <div class="col-md-4">
          <select id="gender" class="form-select" name="gender">
            <option selected>লিঙ্গ</option>
            <option value="men">পুরুষ</option>
            <option value="women">মহিলা</option>
            <option value="others">অন্যান্য</option>
          </select>
        </div>
        <div class="col-md-4">
          <select id="married" class="form-select" name="married">
            <option selected>বৈবাহিক অবস্থা</option>
            <option value="married">বিবাহিত</option>
            <option value="unmarried">অবিবাহিত</option>
          </select>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="husband_wife" name="husband_wife" placeholder="স্বামী বা স্ত্রীর নাম">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control flatpickr-human-friendly" placeholder="YYYY-MM-DD জন্মতারিখ" name="date_of_birth" id="flatpickr-human-friendly" />
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="national_id" name="nid_number" placeholder="ন্যাশনাল আইডি নং">
        </div>
        <div class="col-12 text-center">
          <h1>যোগাযোগের তথ্য/ Contact Information</h1>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="মোবাইল নং">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="email" name="email" placeholder="ইমেইল ঠিকানা">
        </div>
        <div class="col-md-6">
          <select id="district" class="form-select" name="district">
            <option selected>জেলা</option>
            <option value="norsindi">নরসিংদী</option>
            <option value="gajipur">গাজীপুর</option>
            <option value="soriotpur">শরীয়তপুর</option>
          </select>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="police_station" name="police_station" placeholder="থানা">
        </div>
        <div class="col-md-12">
          <input type="text" class="form-control" id="address" name="address" placeholder="ঠিকানা">
        </div>
        <div class="col-12 text-center">
          <h1>দীক্ষার তথ্য/ Initiation information</h1>
        </div>
        <div class="col-md-3">
          <select id="nation" class="form-select" name="nation_name">
            <option selected>বর্ণ</option>
            <option value="a">ক্ষত্রিয়</option>
            <option value="b">বিপ্র</option>
            <option value="c">বৈশ্য</option>
            <option value="d">শুদ্র</option>
            <option value="others">অন্যান্য</option>
          </select>
        </div>
        <div class="col-md-3">
          <select id="family" class="form-select" name="family_name">
            <option selected>গোত্র</option>
            <option value="a">অগস্ত্য গোত্র</option>
            <option value="b">অত্রি গোত্র</option>
            <option value="others">অন্যান্য গোত্র</option>
          </select>
        </div>
        <div class="col-md-3">
          <select id="priest_id" class="form-select" name="priest_id" required>
            <option disabled selected>ঋত্বিক নাম</option>
            @foreach($priestItem as $item)
              <option value="{{$item->id}}">{{$item->name}}-({{$item->mobile}})</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="initiation_date" name="initiation_date" placeholder="দীক্ষা গ্রহণের তারিখ">
        </div>
        <div class="col-md-6">
          <input type="password" class="form-control" id="password" name="password" placeholder="*********">
        </div>
        <div class="col-md-6">
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="*******">
        </div>
        <div class="col-12 text-center mt-5">
          <button type="submit" id="submitButton" class="btn btn-primary">Submit Information</button>
        </div>
      </form>
    </div>
  </section>
@endsection
