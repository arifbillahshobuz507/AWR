@extends('user-interface.layouts.layout-master')
@section('title','Video Gallery')
@section('user-content')
  <x-breadcrumb title="Video Gallery" subtitle="Video Gallery"/>
  <div class="cause padding--top padding--bottom bg-img">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 mb-4">
          <iframe src="https://www.youtube.com/embed/qsXA3DTI-No?si=Fc9R_6qlqQUAaSJN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" style="width: 100%;height: 340px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;padding: 10px;border-radius: 8px;"></iframe>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mb-4">
          <iframe src="https://www.youtube.com/embed/oDhboDHLG5M?si=H2PJbBxzQoaZfXNO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" style="width: 100%;height: 340px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;padding: 10px;border-radius: 8px;"></iframe>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mb-4">
          <iframe src="https://www.youtube.com/embed/qsXA3DTI-No?si=Fc9R_6qlqQUAaSJN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" style="width: 100%;height: 340px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;padding: 10px;border-radius: 8px;"></iframe>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mb-4">
          <iframe src="https://www.youtube.com/embed/oDhboDHLG5M?si=H2PJbBxzQoaZfXNO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="" style="width: 100%;height: 340px;box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;padding: 10px;border-radius: 8px;"></iframe>
        </div>
        <div class="col-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-3">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="section__wrapper">
        <div class="cause__bottom">
          <div class="cause__bars">
            <div class="donaterange__content text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
