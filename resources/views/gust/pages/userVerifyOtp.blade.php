@extends('gust.layout.master')
@section('title', 'Send OTP')
@section('content')
    @include('component.gust.pages.userVerifyOtp')
    @push('scripts')
        <script src="{{ asset('gust/js/gustSendOtp.js') }}"></script>
    @endpush
@endsection