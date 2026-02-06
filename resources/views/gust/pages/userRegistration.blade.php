@extends('gust.layout.master')
@section('title')
    Register
@endsection
@section('content')
    @inclucomponentsnents.gust.pages.userRegister')
@endsection
@push('scripts')
    <script src="{{ asset('gust/js/gustRegister.js') }}"></script>
@endpush
