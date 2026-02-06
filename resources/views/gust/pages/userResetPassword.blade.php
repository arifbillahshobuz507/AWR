@extends('gust.layout.master')
@section('title')
    Reset Password
@endsection
@section('content')
    @include('componentss.gust.pages.userResetPassword')
@endsection
@push('scripts')
    <script src="{{ asset('gust/js/gustResetPassword.js') }}"></script>
@endpush
