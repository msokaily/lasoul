@extends('layout.retreatLayout')

@section('title')
    {{ $event->title }}
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
    <section class="section wow fadeInUp pt-0" data-wow-delay="0.1s">
        <div class="row mb-5 gx-0">
            <div class="col-12">
                <div class="position-relative">
                    <div class="swiper-container swiper-event-signle">
                        <div class="swiper-wrapper">
                            @foreach ($event->image_urls as $img)
                                <div class="swiper-slide"
                                    style="background: url({{ $img->url }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-action swiper-action-event-signle w-100 swiper-action-center px-4 px-lg-5">
                        <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="mb-4">
                        <h2 class="section-title font-itc">{{ $event->title }}</h2>
                    </div>
                    <div class="mb-4 pb-lg-3">
                        <h5>{!! $event->description !!}</h5>
                    </div>
                    <div class="mb-4 pb-lg-3">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="border p-4">
                                    <div class="d-lg-flex">
                                        <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                                            <div class="d-flex">
                                                <h5 class="font-news-bold">From</h5>
                                                <div class="ms-3">
                                                    <h6 class="font-news-bold">
                                                        <i class="fa-light fa-calendar me-2"></i>
                                                        {{ \Carbon\Carbon::parse($event->start_at)->format('d M Y') }}
                                                        {{-- 16 November 2023 --}}
                                                    </h6>
                                                    <h6 class="font-news-bold">
                                                        <i class="fa-light fa-clock me-2"></i>
                                                        {{ \Carbon\Carbon::parse($event->start_at)->format('h:i A') }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="d-flex">
                                                <h5 class="font-news-bold">To</h5>
                                                <div class="ms-3">
                                                    <h6 class="font-news-bold">
                                                        <i class="fa-light fa-calendar me-2"></i>
                                                        {{ \Carbon\Carbon::parse($event->end_at)->format('d M Y') }}
                                                    </h6>
                                                    <h6 class="font-news-bold">
                                                        <i class="fa-light fa-clock me-2"></i>
                                                        {{ \Carbon\Carbon::parse($event->end_at)->format('h:i A') }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex align-items-center">
                            <a class="btn btn-outline-black px-5" href="{{route('event_booking', $event->id)}}">Book now </a>
                            <h2 class="ms-3">{{ $event->price }} {{ settings('currency') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
