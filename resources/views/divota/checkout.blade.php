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

@section('content')
    <!-- start:: section -->
    <section class="section wow fadeInUp py-0" data-wow-delay="0.1s">
        <div class="bg-header"
            style="background: url(assets/images/bg-contact.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
                <h5 class="mb-2 text-white font-italic text-uppercase">Welcome to happiness</h5>
                <h3 class="section-title font-news-bold text-white font-italic">Checkout</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-lg-5 py-3 py-lg-5">
                    <h2 class="font-itc-bold mb-4 section-title">Checkout</h2>
                    <h3 class="font-itc-bold mb-3">Pay With: Card</h3>
                    <form action="">
                        <div class="form-group">
                            <label class="mb-2">Card Number </label>
                            <input class="form-control" type="text" placeholder="1234  5678  9101  1121" />
                        </div>
                        <div class="row gx-2">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="mb-2">Expiration Date</label>
                                    <input class="form-control" type="text" placeholder="MM/YY" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="mb-2">CVV</label>
                                    <input class="form-control" type="text" placeholder="123" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            @livewire('pay-btn')
                        </div>
                    </form>
                    <h6 class="text-muted pe-lg-5">Your personal data will be used to process your order, support your
                        experience throughout this website, and for other purposes described in our privacy policy.</h6>
                </div>
                @livewire('checkout-summery')
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
