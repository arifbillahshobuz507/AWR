@extends('gust.layout.master')
@section('title', 'Login')
@section('content')
    @include('components.gust.pages.userLogin')
    @push('scripts')
        <script src="{{ asset('gust/js/gustLogin.js') }}"></script>
    @endpush
@endsection
