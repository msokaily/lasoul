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
                <h5 class="mb-2 text-white font-italic text-uppercase">Welcome to happiness</h5>
                <h3 class="section-title font-news-bold text-white font-italic">Sent Successfully</h3>
            </div>
        </div>
        <div class="container py-5 my-lg-4">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="text-center mb-5">
                        <div class="mb-3">
                            <img src="{{ asset('assets/images/check.png') }}" alt="Success" />
                        </div>
                        <div class="mb-5">
                            <h3>Thank you. Your order has been received.</h3>
                        </div>
                        <div class="d-flex">
                            <div class="col-4 text-center">
                                <h6 class="mb-1">Order number:</h6>
                                <h4 class="font-news-bold">{{ addZeros($order->id) }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <h6 class="mb-1">Date:</h6>
                                <h4 class="font-news-bold">{{ $order->created_at->format('M d, Y') }}</h4>
                            </div>
                            <div class="col-4 text-center">
                                <h6 class="mb-1">Total:</h6>
                                <h4 class="font-news-bold">{{ $order->total_price }} {{ settings('currency') }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="border p-4 p-lg-5 mb-4">
                        <h2 class="font-itc text-center mb-4">Order details</h2>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6>Product</h6>
                            <h6>Total</h6>
                        </div>
                        <hr />
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($order->products as $item)
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1">{{ $item->product->title }}</h6>
                                    <h6 class="mb-1">
                                        <span class="font-news-bold">Date:</span>
                                        <span>{{ $item->start_date }} - {{ $item->end_date }}</span>
                                    </h6>
                                    <h6 class="mb-1">
                                        <span class="font-news-bold">Details:</span>
                                        <span>Adults: {{ $item->adults }}, Children: {{ $item->kids }}</span>
                                    </h6>
                                    @if (isset($item->options) && count($item->options) > 0)
                                        <h6 class="mb-1">
                                            <span class="font-news-bold">Options:</span>
                                            <span>
                                                @foreach ($item->options as $ind => $opt)
                                                    {{ $opt->option->option->title }}{{ $ind + 1 < count($item->options) ? ', ' : '' }}
                                                @endforeach
                                            </span>
                                        </h6>
                                    @endif
                                </div>
                                @php
                                    $itemTotal = calcProductSum($item);
                                    $total += $itemTotal;
                                @endphp
                                <h5>{{ $itemTotal }} {{ settings('currency') }}</h5>
                            </div>
                            <hr />
                        @endforeach
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="font-news-bold">Subtotal:</h6>
                            <h6 class="font-news-bold">{{ $total }} {{ settings('currency') }}</h6>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="font-news-bold">Total:</h6>
                            <h6 class="font-news-bold">{{ $order->total_price }} {{ settings('currency') }}</h6>
                        </div>
                    </div>
                    <div class="text-center"><a class="btn btn-black" href="{{ route('bookings') }}">Got to your bookings </a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
