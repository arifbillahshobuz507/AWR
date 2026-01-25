@extends('user-interface.layouts.layout-master')
@php
$title = $category->title ?? ' ';
@endphp
@section('title',$title)
@section('user-content')
  <x-breadcrumb :title="$title" :subtitle="$title"/>
  <div class="gallery padding--top padding--bottom bg-light">
    <div class="container">
      <div class="section__wrapper">
        <div class="row g-0 grid">
          @if(strtolower($category->title) === 'video gallery')
            @forelse($items as $data)
              <div class="col-lg-6 col-md-6 col-12 mb-4">
                <iframe
                  src="https://www.youtube.com/embed/{{$data->youtube_url ? $data->youtube_url : 'qsXA3DTI-No?si=Fc9R_6qlqQUAaSJN'}}"
                  title="YouTube video player"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen
                  style="width: 100%; height: 340px; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px; padding: 10px; border-radius: 8px;">
                </iframe>
              </div>
            @empty
              There Is No video
            @endforelse
          @else
            @forelse($items as $data)
              <div class="col-xl-3 col-lg-4 col-sm-6 col-12 cate-1 mr-2">
                <div class="gallery__item">
                  <div class="gallery__inner">
                    <div class="gallery__thumb">
                      <img src="{{asset(''.$data->image)}}" alt="gallery-thumb" class="w-100">
                    </div>
                    <div class="gallery__content text-center">
                      <a href="{{asset(''.$data->image)}}" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              There I no Data Found
            @endforelse
          @endif
          <div class="col-12">
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
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
