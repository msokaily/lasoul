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
            style="background: url({{ asset('assets/images/bg-contact.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
                <h5 class="mb-2 text-white font-italic"> Welcome to happiness</h5>
                <h3 class="section-title font-news-bold text-white font-italic"> Your Cart</h3>
            </div>
        </div>
        <div class="container py-5">
            @unless (auth()->check())
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="border p-4">
                            <div class="d-lg-flex align-items-between">
                                <div class="col-lg-6 mb-3 mb-lg-0">
                                    <h3 class="font-news-bold">You can create your account now to follow up with your bookings.
                                    </h3>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="{{ route('login') }}?redirect={{ route('cart') }}"
                                            class="btn btn-black me-2 px-5">Login</a>
                                        <a href="{{ route('login') }}?redirect={{ route('cart') }}"
                                            class="btn btn-outline-black px-1 px-lg-4">Create new Account </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endunless
            <div class="row mb-4">
                <div class="col-12">
                    <h2 id="productTitleDiv" class="section-title font-itc-bold">Products</h2>
                </div>
            </div>
            @livewire('cart-page', [], 'client_cart')
        </div>
    </section>
    <!-- end:: section -->
@endsection
