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
    <section class="section wow fadeInUp section-single-room py-0" data-wow-delay="0.1s">
        <div class="row gx-0">
            @if (count($item->image_urls) > 0)
                <div class="col-12">
                    <div class="position-relative">
                        <div class="swiper-container swiper-single-room">
                            <div class="swiper-wrapper">
                                @foreach ($item->image_urls as $image)
                                    <div class="swiper-slide"
                                        style="background: url('{{ $image->url }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-action swiper-action-room w-100 swiper-action-center px-4 px-lg-5">
                                <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                                <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
            @endif
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h2 class="font-itc section-title title-small">{{ $item->title }}</h2>
                    </div>
                    <div class="mb-4 pb-lg-3">
                        <h6 class="mb-4 text-muted">{{ $item->space }}</h6>
                        <div class="d-flex flex-wrap">
                            <h6 class="ms-5 mb-3">{{ $item->adult_capacity }} Adults</h6>
                            <h6 class="ms-5 mb-3">{{ $item->kids_capacity }} Kids</h6>
                            <h6 class="ms-5 mb-3">
                                {{ $item->beds }} Beds
                            </h6>
                            <h6 class="ms-5 mb-3">{{ $item->bathroom }} Bathroom</h6>
                        </div>
                    </div>
                    <div class="mb-4 pb-lg-3 html-content-div">
                        <h4 class="mb-3">{!! $item->description !!}</h4>
                    </div>
                    <div class="mb-4 pb-lg-3">
                        <h3 class="font-itc font-size-24 mb-3">Client Amenities</h3>
                        <div class="row">
                            @foreach ($features as $featureName => $featureValue)
                                @if ($featureValue == 1)
                                    <div class="col-md-4">
                                        <div class="tag mb-3">
                                            <h5 class="tag-title">{{ $featureName }}</h5>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-4 pb-lg-3">
                        <h3 class="font-itc font-size-24 mb-3">Room Amenities</h3>
                        <div class="row">
                            @foreach ($item->tags->where('type', 'amenities') as $amen_tag)
                                <div class="col-lg-6">
                                    <h4 class="mb-3">{{ $amen_tag->tag->title }}</h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-4 pb-lg-3">
                        <h3 class="font-itc font-size-24 mb-3">What’s included in this suite?</h3>
                        @foreach ($item->tags->where('type', 'details') as $det_tag)
                            <div class="d-flex align-items-center mb-3"><i
                                    class="fa-solid fa-circle me-3 text-muted font-size-6"></i>
                                <h4>{{ $det_tag->tag->title }}</h4>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="box-shadow p-4 p-lg-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="font-itc">Book</h2>
                            <h5>From {{ $item->price . ' ' . $settings->currency }}/night</h5>
                        </div>
                        @livewire('accommodation-order-form', ['one' => $item], key('accommodation_item_' . $item->id))
                    </div>
                </div>
            </div>
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    @livewire('content', [
                        'name' => $div_name . 'yoga_' . $x++,
                        'type' => 'text' /* Types: text, image, images */,
                        'html' => '<h2 class="font-itc-bold">[title]</h2><h5>[description]</h5>',
                        'fields' => [
                            [
                                'type' => 'text',
                                'name' => 'title',
                                'default' => 'Our Services',
                            ],
                            [
                                'type' => 'textarea',
                                'name' => 'description',
                                'default' => 'Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti ex nec sit tale atqui abhorreant luptatum conclu',
                            ],
                        ],
                    ])
                </div>
                <div class="col-lg-6 text-center text-lg-end"><a class="btn btn-black" href="">View All </a></div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                @foreach ($services as $service)
                    <div class="col-lg-4">
                        <div class="widget_item-product mb-4">
                            <div class="widget_item-image">
                                <a href="">
                                    <img src="{{ $service->image_url->url }}" alt="{{ $service->title }}" />
                                </a>
                            </div>
                            <div class="widget_item-content py-3">
                                <div class="d-flex align-items-start mb-3">
                                    <div class="col">
                                        <h3><a class="text-dark" href="">{{ $service->title }} </a></h3>
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="font-itc-bold text-end">
                                            {{ $service->default_price->price ? $service->default_price->price : $service->default_price }}
                                            {{ settings('currency') }}</h3>
                                        <h4>{{ $service->default_price->duration->value . ' ' . $service->default_price->duration->duration_type }}
                                        </h4>
                                    </div>
                                </div>
                                <h5 class="mb-4">{{ truncateString($service->description) }}</h5>
                                <a class="btn btn-outline-black" href=""> Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
