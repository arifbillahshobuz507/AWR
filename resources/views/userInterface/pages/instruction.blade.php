@extends('user-interface.layouts.layout-master')
@section('title','Instruction')
@section('user-content')
  <x-breadcrumb title="Instruction" subtitle="Instruction"/>
  <section class="instruction padding--top padding--bottom">
    <div class="container">
      <div class="section__header text-center">
        <h2 style="font-size: 32px;font-weight: 700;">{{ Helper::get_option('instruction_title')}}</h2>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="instruction-content">
            {!! Helper::get_option('instruction_settings') !!}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
