@extends('layout.retreatLayout')

@section('title')
    {{ $page_name }}
@endsection
@php
    $div_name = $page_name . '_';
    $x = 0;
@endphp

@section('meta-tag')
    <meta name="description" content="{{ $settings->site_description }}">
    <meta name="keywords" content="{{ $settings->keywords }}">
    <meta property="og:title" content="Divota | {{ $page_name }}">
    <meta property="og:description" content="{{ $settings->site_description }}">
    {{-- <meta property="og:image" content="{{asset('social.jpg')}}"> --}}
    <meta property="og:url" content="{{ url()->full() }}">
@endsection

@section('content')
    <!-- start:: section -->
    <section class="section wow fadeInUp section-about py-0" data-wow-delay="0.1s">
        <div class="container mb-5">
            <div class="row align-items-center py-lg-5">
                <div class="col-lg-5"><img class="w-100" src="{{asset('assets/retreat/images/img-17.png')}}" alt="" /></div>
                <div class="col-lg-5 mx-auto">
                    <h2 class="section-title font-news-bold title-small mb-4">Get Ready to live for unlimited living
                        experience</h2>
                    <h5 class="mb-4">The apartments are located within the pedestrian zone of Split. For guests with cars,
                        metered public parking is provided close-by, but you might find free parking also along the small
                        streets nearby.</h5><a class="btn btn-outline-black" href=""> Learn More</a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="swiper-container swiper-about">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-18.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-18.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-18.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-18.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-action swiper-action-about w-100 swiper-action-center px-4 px-lg-5">
                            <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                            <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center py-lg-5">
                <div class="col-lg-5 mx-auto">
                    <h2 class="section-title font-news-bold title-small mb-4">Get Ready to live for unlimited living
                        experience</h2>
                    <h5 class="mb-4">The apartments are located within the pedestrian zone of Split. For guests with cars,
                        metered public parking is provided close-by, but you might find free parking also along the small
                        streets nearby.</h5><a class="btn btn-outline-black" href=""> Learn More</a>
                </div>
                <div class="col-lg-5"><img class="w-100" src="{{asset('assets/retreat/images/img-19.png')}}" alt="" /></div>
            </div>
        </div>
        <div class="row gx-lg-0 mb-5">
            <div class="col-12">
                <div class="swiper-container swiper-gallary-about">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="widget_item-image-about">
                                <div class="widget_item-image"><img src="{{asset('assets/retreat/images/img-20.png')}}" alt="" /></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="widget_item-image-about">
                                <div class="widget_item-image"><img src="{{asset('assets/retreat/images/img-22.png')}}" alt="" /></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="widget_item-image-about">
                                <div class="widget_item-image"><img src="{{asset('assets/retreat/images/img-20.png')}}" alt="" /></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="widget_item-image-about">
                                <div class="widget_item-image"><img src="{{asset('assets/retreat/images/img-23.png')}}" alt="" /></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="widget_item-image-about">
                                <div class="widget_item-image"><img src="{{asset('assets/retreat/images/img-20.png')}}" alt="" /></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="widget_item-image-about">
                                <div class="widget_item-image"><img src="{{asset('assets/retreat/images/img-24.png')}}" alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
