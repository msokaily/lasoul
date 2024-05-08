@extends('layout.webLayout')

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

@push('style')
    <style>
        .bg-header {
            height: 250px;
        }
    </style>
@endpush

@section('content')
    <!-- start:: section -->
    <section class="section wow fadeInUp py-0" data-wow-delay="0.1s">
        <div class="bg-header"
            style="background: url(assets/images/bg-contact.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
                <h5 class="mb-2 text-white font-italic text-uppercase">Welcome to happiness</h5>
                <h3 class="section-title font-news-bold text-white font-italic">{{ $page_name }}</h3>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-2 mb-4">
                    @include('divota.includes.account_sidemenu')
                </div>
                <div class="col-lg-10">
                    <h3 class="section-title title-small font-itc mb-3">My Bookings</h3>
                    @forelse ($orders as $order)
                        <div class="widget_item-booking border p-4 mb-3">
                            <div class="d-flex justify-content-between">
                                <h3 class="font-news-bold mb-3">Booking ID #{{ addZeros($order->id) }}</h3>
                                <h3 class="font-news-bold mb-3 text-success">{{ $order->total_price }}
                                    {{ settings('currency') }}</h3>
                            </div>
                            @foreach ($order->products as $index => $item)
                                @if ($index > 0)
                                    <hr style="border-width: 10px; border-color: #dedede;">
                                @endif
                                @php
                                    $days = orderDays($item);
                                @endphp
                                <div class="d-flex mb-5">
                                    <div class="widget_item-image col-auto me-4">
                                        <img src="{{ $item->product->image }}" alt="{{ $item->product->title }}" />
                                    </div>
                                    <div class="widget_item-content col">
                                        <div
                                            class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                            <h5 class="font-news-bold"><a
                                                    href="{{ $item->product->url }}">{{ $item->product->title }}</a>
                                            </h5>
                                            <h5 class="font-news-bold">({{ $days }}&times;) {{ $item->price }}
                                                {{ settings('currency') }}</h5>
                                        </div>
                                        <div class="pb-3 mb-3 border-bottom">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="text-muted">Details</h5>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="font-news-bold">Check in & out</h5>
                                                <h5 class="font-news-bold">({{ $days }}
                                                    {{ $days == 1 ? 'night' : 'nights' }}) {{ $item->start_date }} <i
                                                        class="fa-solid fa-arrow-right text-secondary"></i>
                                                    {{ $item->end_date }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="font-news-bold">Adults</h5>
                                                <h5 class="font-news-bold">{{ $item->adults }}</h5>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <h5 class="font-news-bold">Children</h5>
                                                <h5 class="font-news-bold">{{ $item->kids }}</h5>
                                            </div>
                                        </div>
                                        @if (isset($item->options) && count($item->options) > 0)
                                            <div class="pb-3">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
                                                    <h5 class="text-muted">Options</h5>
                                                </div>
                                                @foreach ($item->options as $opt_ind => $opt)
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h5 class="font-news-bold">{{ $opt->option->option->title }}</h5>
                                                        <h5 class="font-news-bold">
                                                            @if (!$opt->option_duration_id)
                                                                ({{ $days }}&times;)
                                                            @endif
                                                            {{ $opt->price }}
                                                            {{ settings('currency') }}
                                                        </h5>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h5 class="font-news-bold">Total</h5>
                                            <h3 class="font-news-bold">{{ calcProductSum($item) }}
                                                {{ settings('currency') }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @empty
                        <h3 class="text-center" style="padding-block: 50px;">No bookings yet!</h3>
                    @endforelse
                    {{-- 
                          <div class="widget_item-booking border p-4 mb-3">
                          <h3 class="font-news-bold mb-3">Booking ID #3439</h3>
                          <div class="d-flex">
                            <div class="widget_item-image col-auto me-4"><img src="assets/images/product/img-05.png" alt=""/></div>
                            <div class="widget_item-content col">
                              <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                <h5 class="font-news-bold">Spa Service</h5>
                                <h5 class="font-news-bold">$122</h5>
                              </div>
                              <div class="pb-3 mb-3 border-bottom d-flex"> 
                                <div class="col-lg-4">
                                  <h5 class="text-muted mb-2">Date</h5>
                                  <h5 class="font-news-bold">14 April 2023</h5>
                                </div>
                                <div class="col-lg-4">
                                  <h5 class="text-muted mb-2">Time</h5>
                                  <h5 class="font-news-bold">09:00 AM</h5>
                                </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="font-news-bold">Total</h5>
                                <h3 class="font-news-bold">$299</h3>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="widget_item-booking border p-4 mb-3">
                          <h3 class="font-news-bold mb-3">Booking ID #3439</h3>
                          <div class="d-flex">
                            <div class="widget_item-image col-auto me-4"><img src="assets/images/product/img-03.png" alt=""/></div>
                            <div class="widget_item-content col">
                              <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom">
                                <h5 class="font-news-bold">Small and Cozy Double Room</h5>
                                <h5 class="font-news-bold">$299</h5>
                              </div>
                              <div class="pb-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h5 class="text-muted">Options</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h5 class="font-news-bold">Cleaning Room</h5>
                                  <h5 class="font-news-bold">$299</h5>
                                </div>
                              </div>
                              <div class="pb-3 mb-3 border-bottom">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h5 class="text-muted">Services</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h5 class="font-news-bold">Cleaning Room</h5>
                                  <h5 class="font-news-bold">$299</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h5 class="font-news-bold">Cleaning Room</h5>
                                  <h5 class="font-news-bold">$299</h5>
                                </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <h5 class="font-news-bold">Total</h5>
                                <h3 class="font-news-bold">$299</h3>
                              </div>
                            </div>
                          </div>
                        </div>
                    --}}
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
