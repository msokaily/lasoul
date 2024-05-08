@extends('layout.webLayout')

@section('title')
    {{$page_name}}
@endsection
@php
    $div_name = $page_name.'_';
    $x = 0;
@endphp

@section('meta-tag')
    <meta name="description" content="{{$settings->site_description}}">
    <meta name="keywords" content="{{$settings->keywords}}">
    <meta property="og:title" content="Divota | {{ $page_name }}">
    <meta property="og:description" content="{{$settings->site_description}}">
    {{-- <meta property="og:image" content="{{asset('social.jpg')}}"> --}}
    <meta property="og:url" content="{{ url()->full() }}">
@endsection

@section('content')
  <section class="section wow fadeInUp section-about py-0" data-wow-delay="0.1s">
    <div class="position-relative mb-5">
      <div class="swiper-container swiper-about">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container pb-4">
              <div class="row"> 
                <div class="col-lg-8">
                  <h3 class="section-title font-news-bold mb-4 text-white">Get Ready to live for unlimited living experience</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container pb-4">
              <div class="row"> 
                <div class="col-lg-8">
                  <h3 class="section-title font-news-bold mb-4 text-white">Get Ready to live for unlimited living experience</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container pb-4">
              <div class="row"> 
                <div class="col-lg-8">
                  <h3 class="section-title font-news-bold mb-4 text-white">Get Ready to live for unlimited living experience</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container pb-4">
              <div class="row"> 
                <div class="col-lg-8">
                  <h3 class="section-title font-news-bold mb-4 text-white">Get Ready to live for unlimited living experience</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container pb-4">
              <div class="row"> 
                <div class="col-lg-8">
                  <h3 class="section-title font-news-bold mb-4 text-white">Get Ready to live for unlimited living experience</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container pb-4">
              <div class="row"> 
                <div class="col-lg-8">
                  <h3 class="section-title font-news-bold mb-4 text-white">Get Ready to live for unlimited living experience</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-action swiper-action-about w-100 swiper-action-center px-4 px-lg-5">
        <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
        <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <div class="text-center">
            <h3 class="section-title title-small font-news-bold">Get Ready to live for unlimited living experience</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row gx-lg-0 mb-5">
      <div class="col-12">
        <div class="swiper-container swiper-gallary-about">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="widget_item-image-about">
                <div class="widget_item-image"><img src="assets/images/img-03.png" alt=""/></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="widget_item-image-about">
                <div class="widget_item-image"><img src="assets/images/img-04.png" alt=""/></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="widget_item-image-about">
                <div class="widget_item-image"><img src="assets/images/img-05.png" alt=""/></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="widget_item-image-about">
                <div class="widget_item-image"><img src="assets/images/img-03.png" alt=""/></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="widget_item-image-about">
                <div class="widget_item-image"><img src="assets/images/img-04.png" alt=""/></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="widget_item-image-about">
                <div class="widget_item-image"><img src="assets/images/img-05.png" alt=""/></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-lg-7 mx-auto"> 
        <h3 class="text-center"> Our studios and rooms are all located in the Veli Varos quarter within 200 meters of each other. The labyrinthine alleyways and intimate passages of Split function as our lively hotel corridor! Additionally, we offer two exclusive villas, one of them close to the beach area in Meje. All Divota residences represent a dialog between the traditional and the contemporary. Enjoy the historical ambience of the old stone houses with all modern amenities.</h3>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-12"> 
        <div class="position-relative">
          <div class="swiper-container swiper-about">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
              <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
              <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
              <div class="swiper-slide" style="background: url(assets/images/bg-about.png); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
            </div>
          </div>
          <div class="swiper-action swiper-action-about w-100 swiper-action-center px-4 px-lg-5">
            <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
            <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="row align-items-center py-lg-5">
        <div class="col-lg-5"><img class="w-100" src="assets/images/img-06.png" alt=""/></div>
        <div class="col-lg-5 mx-auto"> 
          <h2 class="section-title font-news-bold title-small mb-4">Get Ready to live for unlimited living experience</h2>
          <h5 class="mb-4">The apartments are located within the pedestrian zone of Split. For guests with cars, metered public parking is provided close-by, but you might find free parking also along the small streets nearby.</h5><a class="btn btn-outline-black" href=""> Learn More</a>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="row">
        <div class="col-12"><img class="w-100" src="assets/images/img-07.png" alt=""/></div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="row align-items-center py-lg-5">
        <div class="col-lg-5 mx-auto mb-4 mb-lg-0"> 
          <h2 class="section-title font-news-bold title-small mb-4">Get Ready to live for unlimited living experience</h2>
          <h5 class="mb-4">The apartments are located within the pedestrian zone of Split. For guests with cars, metered public parking is provided close-by, but you might find free parking also along the small streets nearby.</h5><a class="btn btn-outline-black" href=""> Learn More</a>
        </div>
        <div class="col-lg-5"><img class="w-100" src="assets/images/img-06.png" alt=""/></div>
      </div>
    </div>
  </section><!-- end:: section --><!-- start:: section -->
@endsection