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
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="position-relative">
                        <div class="swiper-container swiper-about">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-22.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-22.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-22.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                                <div class="swiper-slide"
                                    style="background: url({{asset('assets/retreat/images/img-22.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
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
            <div class="row-flex-direction-reverse mb-5">
                <div class="row align-items-center mb-5 justify-content-between">
                    <div class="col-lg-6 mb-3 mb-lg-0"><img src="{{asset('assets/retreat/images/img-23.png')}}" alt="" /></div>
                    <div class="col-lg-6">
                        <h2 class="section-title font-news-bold title-small mb-4">Get Ready to live for unlimited living
                            experience</h2>
                        <div class="mb-3">
                            <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan Buddhism. It is a series
                                of movements developed for the purpose of self-healing. With this practice, we can
                                effectively combat disease, release ourselves of negative emotions and increase energy
                                levels.</h5>
                            <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan Buddhism. It is a series
                                of movements developed for the purpose of self-healing. With this practice, we can
                                effectively combat disease, release ourselves of negative emotions and increase energy
                                levels.</h5>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-5 justify-content-between">
                    <div class="col-lg-6 mb-3 mb-lg-0"><img src="{{asset('assets/retreat/images/img-24.png')}}" alt="" /></div>
                    <div class="col-lg-6">
                        <h2 class="section-title font-news-bold title-small mb-4">Get Ready to live for unlimited living
                            experience</h2>
                        <div class="mb-3">
                            <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan Buddhism. It is a series
                                of movements developed for the purpose of self-healing. With this practice, we can
                                effectively combat disease, release ourselves of negative emotions and increase energy
                                levels.</h5>
                            <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan Buddhism. It is a series
                                of movements developed for the purpose of self-healing. With this practice, we can
                                effectively combat disease, release ourselves of negative emotions and increase energy
                                levels.</h5>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-5 justify-content-between">
                    <div class="col-lg-6 mb-3 mb-lg-0"><img src="{{asset('assets/retreat/images/img-25.png')}}" alt="" /></div>
                    <div class="col-lg-6">
                        <h2 class="section-title font-news-bold title-small mb-4">Get Ready to live for unlimited living
                            experience</h2>
                        <div class="mb-3">
                            <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan Buddhism. It is a series
                                of movements developed for the purpose of self-healing. With this practice, we can
                                effectively combat disease, release ourselves of negative emotions and increase energy
                                levels.</h5>
                            <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan Buddhism. It is a series
                                of movements developed for the purpose of self-healing. With this practice, we can
                                effectively combat disease, release ourselves of negative emotions and increase energy
                                levels.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-lg-5">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title font-itc-bold">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="position-relative pb-5">
                        <div class="swiper-container swiper-team">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row align-items-center mb-5 justify-content-between">
                                        <div class="col-lg-5">
                                            <h2 class="section-title font-news-bold mb-4">rainee wang</h2>
                                            <div class="mb-3">
                                                <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan
                                                    Buddhism. It is a series of movements developed for the purpose of
                                                    self-healing. With this practice, we can effectively combat disease,
                                                    release ourselves of negative emotions and increase energy levels.</h5>
                                                <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan
                                                    Buddhism. It is a series of movements developed for the purpose of
                                                    self-healing. With this practice, we can effectively combat disease,
                                                    release ourselves of negative emotions and increase energy levels.</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-5"><img src="{{asset('assets/retreat/images/img-26.png')}}" alt="" /></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row align-items-center mb-5 justify-content-between">
                                        <div class="col-lg-5">
                                            <h2 class="section-title font-news-bold mb-4">rainee wang</h2>
                                            <div class="mb-3">
                                                <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan
                                                    Buddhism. It is a series of movements developed for the purpose of
                                                    self-healing. With this practice, we can effectively combat disease,
                                                    release ourselves of negative emotions and increase energy levels.</h5>
                                                <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan
                                                    Buddhism. It is a series of movements developed for the purpose of
                                                    self-healing. With this practice, we can effectively combat disease,
                                                    release ourselves of negative emotions and increase energy levels.</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-5"><img src="{{asset('assets/retreat/images/img-26.png')}}" alt="" /></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row align-items-center mb-5 justify-content-between">
                                        <div class="col-lg-5">
                                            <h2 class="section-title font-news-bold mb-4">rainee wang</h2>
                                            <div class="mb-3">
                                                <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan
                                                    Buddhism. It is a series of movements developed for the purpose of
                                                    self-healing. With this practice, we can effectively combat disease,
                                                    release ourselves of negative emotions and increase energy levels.</h5>
                                                <h5 class="mb-3">Lu Jong is an ancient Tibetan practice from Tibetan
                                                    Buddhism. It is a series of movements developed for the purpose of
                                                    self-healing. With this practice, we can effectively combat disease,
                                                    release ourselves of negative emotions and increase energy levels.</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-5"><img src="{{asset('assets/retreat/images/img-26.png')}}" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-action swiper-action-team w-100 swiper-action-bottom">
                            <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                            <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
