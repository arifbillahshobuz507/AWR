@extends('gust.layout.master')
@section('title', 'Send OTP')
@section('content')
    @include('component.gust.pages.userSendOtp')
    @push('scripts')
        <script src="{{ asset('gust/js/gustSendOtp.js') }}"></script>
    @endpush
@endsection
