@extends('user-interface.layouts.layout-master')
@section('title','My Profile')
@section('user-content')
  @php
  $user = \Illuminate\Support\Facades\Auth::user();
  @endphp
  @dd($user)
  <x-breadcrumb title="My Profile" subtitle="Profile"/>
  <!-- ================> registration section start here <================== -->
  <section class="registration padding--top padding--bottom ">
    <div class="container">
      <form class="row g-3 p-4 justify-content-center">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Change Password</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Payment History</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <form class="">
              <div class="col-12 text-center">
                <h1>Profile</h1>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-12">
                  <div class="custom-profile">
                    <div>
                      <img src="assets/images/user1.png" alt="image" style="width:150px;cursor: pointer;">
                    </div>
                    <div>
                      <h4>Select Your Picture</h4>
                      <p>Accepted Image File : JPG, JPEG, PNG</p>
                      <p>Accepted Size : 300 x 300 (1MB)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="name" value="{{$user->name??''}}" placeholder="আপনার নাম">
                </div>

                <div class="col-md-8">
                  <input type="text" class="form-control" id="mobile" value="{{$user->mobile ?? ''}}" placeholder="মোবাইল নং">
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="email" value="{{$user->email ?? ''}}" placeholder="ইমেইল">
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="address" value="{{$user->userInformation->address ?? ''}}" placeholder="আপনারা ঠিকানা">
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <form class="">
              <div class="col-12 text-center">

              </div>
              <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-4">
                  <h1>Update Password</h1>
                </div>


                <div class="col-md-8">
                  <input type="password" class="form-control" id="verificationcode" placeholder="পুরাতন পাসওয়ার্ড লিখুন">
                </div>
                <div class="col-md-8">
                  <input type="password" class="form-control" id="verificationcode" placeholder="নতুন পাসওয়ার্ড লিখুন">
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </form>

          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <table class="table table-bordered">
              <thead>
              <tr>
                <th scope="col">মাস</th>
                <th scope="col">খাত</th>
                <th scope="col">টাকার পরিমান</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td rowspan="10">January</td>
                <td>বেতন</td>
                <td>5000</td>
              </tr>
              <tr>
                <td>আপ্যায়ন</td>
                <td>100</td>
              </tr>
              <tr>
                <td>শ্রী মন্দির নির্মাণ</td>
                <td>200</td>
              </tr>
              <tr>
                <td>ঋত্বিকী </td>
                <td>250</td>
              </tr>
              <tr>
                <td>শ্রী শ্রী ঠাকুর ভোগ </td>
                <td>300</td>
              </tr>
              <tr>
                <td>সংগঠনী</td>
                <td>300</td>
              </tr>
              <tr>
                <td>প্রচার ও প্রকাশনা </td>
                <td>300</td>
              </tr>
              <tr>
                <td>আনন্দ বাজার </td>
                <td>300</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- ================> registration section start here <================== -->
@endsection
