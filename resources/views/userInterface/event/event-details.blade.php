@extends('user-interface.layouts.layout-master')
@section('title','Events Details')
@section('user-content')
  <x-breadcrumb title="Event Details" subtitle="Event Details"/>
  @php
    $date = \Carbon\Carbon::parse($data->published_at); // Replace $event->date with your date variable
  @endphp
  <div class="event event-single padding--top padding--bottom bg-light">
    <div class="container">
      <div class="section__wrapper">
        <div class="row g-4 justify-content-center">
          <div class="col-lg-9 col-12">
            <div class="event__item">
              <div class="event__inner">
                <div class="event__content pt-0">
                  <h3 style="margin-bottom: 5px;">{{$data->title}}</h3>
                  <div class="event__metapost">
                    <ul class="event__metapost-info">
                      <li><i class="far fa-clock"></i> {{$date->format('h:i A')}}</li>
                      <li><i class="fas fa-map-marker-alt"></i> {{$data->location}}</li>
                    </ul>
                  </div>
                  <div class="event__thumb mb-3">
                    <img src="{{asset(''.$data->image)}}" alt="event thumb">
                    <div class="event__thumb-date">
                      <h6>{{ $date->format('d') }}</h6>
                      <p>{{ $date->format('M') }}</p>
                    </div>
                  </div>
                  {!! $data->description !!}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="sidebar">
              <div class="sidebar__info">
                <div class="section__header">
                  <h2>Event Details</h2>
                </div>
                <div class="section__wrapper">
                  <ul class="sidebar__info-list mb-3">
                    <li>
                      <div class="sidebar__info-left"><i class="fas fa-map-marker-alt"></i></div>
                      <div class="sidebar__info-right">{{$data->location}}</div>
                    </li>
                    <li>
                      <div class="sidebar__info-left"><i class="far fa-calendar-alt"></i></div>
                      <div class="sidebar__info-right">{{$date->format('D M Y')}}</div>
                    </li>
                    <li>
                      <div class="sidebar__info-left"><i class="far fa-clock"></i></div>
                      <div class="sidebar__info-right">{{$date->format('h:i A')}}</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
