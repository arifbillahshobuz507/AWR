@extends('user-interface.layouts.layout-master')
@section('title','Events')
@section('user-content')
  <x-breadcrumb title="Events" subtitle="Events"/>
  <div class="event padding--top padding--bottom">
    <div class="container">
      <div class="section__header text-center">
        <h2>Upcoming Utsavs</h2>
      </div>
      <div class="section__wrapper">
        <div class="row g-4 justify-content-center">
          @foreach($items as $data)
            @php
              $date = \Carbon\Carbon::parse($data->published_at); // Replace $event->date with your date variable
            @endphp
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="event__item">
                <div class="event__inner">
                  <div class="event__thumb">
                    <a href="{{route('event.details',['slug'=>$data->slug])}}"><img src="{{asset(''.$data->image)}}" alt="event thumb"></a>
                    <div class="event__thumb-date">
                      <h6>{{ $date->format('d') }}</h6>
                      <p>{{ $date->format('M') }}</p>
                    </div>
                  </div>
                  <div class="event__content">
                    <a href="{{route('event.details',['slug'=>$data->slug])}}">
                      <h5>{{$data->title}}</h5>
                    </a>
                    <div class="event__metapost">
                      <ul class="event__metapost-info">
                        <li><i class="far fa-clock"></i> {{$date->format('h:i A')}}</li>
                        <li><i class="fas fa-map-marker-alt"></i> {{$data->location}}</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
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
