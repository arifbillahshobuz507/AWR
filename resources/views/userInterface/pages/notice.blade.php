@extends('user-interface.layouts.layout-master')
@section('title','Notice')
@section('user-content')
  <x-breadcrumb title="Notice" subtitle="Notice"/>
  <div class="blog blog-style2 padding--top padding--bottom bg-light">
    <div class="container">
      <div class="section__wrapper">
        <div class="row g-4 justify-content-center">
          @foreach($items as $data)
            @php
              $date = \Carbon\Carbon::parse($data->published_at); // Replace $event->date with your date variable
            @endphp
            <div class="col-12">
              <div class="blog__item">
                <div class="blog__inner">
                  <div class="blog__content">
                    <h5 style="color: #2e2e2e; font-weight: 600;">{{$data->title}}</h5>
                    <ul class="blog__content-metapost">
                      <li style="font-size:17px; color: #2e2e2e;"><i class="far fa-calendar"></i> প্রকাশকাল: {{$date->format('D M Y')}}</li>
                    </ul>
                    <p style="color:#2e2e2e;font-size: 18px;">{!! $data->description !!}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <nav aria-label="Page navigation example">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-3">
              {{-- Previous Page Link --}}
              @if ($items->onFirstPage())
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
              @else
                <li class="page-item"><a class="page-link" href="{{ $items->previousPageUrl() }}">Previous</a></li>
              @endif

              {{-- Pagination Links --}}
              @for ($i = 1; $i <= $items->lastPage(); $i++)
                <li class="page-item {{ $i == $items->currentPage() ? 'active' : '' }}">
                  <a class="page-link" href="{{ $items->url($i) }}">{{ $i }}</a>
                </li>
              @endfor

              {{-- Next Page Link --}}
              @if ($items->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $items->nextPageUrl() }}">Next</a></li>
              @else
                <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
              @endif
            </ul>
          </nav>
        </nav>
      </div>
    </div>
  </div>
@endsection
