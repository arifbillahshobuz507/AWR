@extends('user-interface.layouts.layout-master')
@section('title','Verification')
@section('user-content')
  <x-breadcrumb title="Verification" subtitle="Verification"/>
  <section class="registration padding--top padding--bottom ">
    <div class="container">
      <form class="row g-3 p-4">
        <div class="col-12 text-center">
          <h1>ভেরিফিকেশন/ Verification</h1>
        </div>

        <div class="col-md-6">
          <input type="text" class="form-control" id="mobile" placeholder="মোবাইল নং">
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" id="verificationcode" placeholder="ভেরিফিকেশন কোড">
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
@endsection
