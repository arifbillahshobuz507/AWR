@extends('gust.layout.master')
@section('title', 'Verify OTP')
@section('content')
    @include('componentss.gust.pages.userVerifyOtp')
    @push('scripts')
        <script src="{{ asset('gust/js/gustVerifyOtp.js') }}"></script>
    @endpush
@endsection
