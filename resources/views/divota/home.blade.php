@extends('layout.webLayout')

@section('title')
    {{ $page_name }}
@endsection
@php
    $div_name = 'Home Page' . '_';
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
    <section class="section section-home d-flex align-items-center">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                @livewire('content', [
                    'name' => $div_name . 'slider_' . $x++,
                    'class' => 'row',
                    'type' => 'text' /* Types: text, image, images */,
                    'html' => '<div class="col-lg-8 mb-4 mb-lg-0">
                                                                                                                                                                    <div class="home-content text-center text-lg-start">
                                                                                                                                                                        <h1 class="mb-4 mb-lg-5 pb-lg-3 font-itc-bold home-title text-white">[title]</h1>
                                                                                                                                                                        <a class="btn btn-outline-white" href="[button link]">[button title] </a>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-lg-4 text-center text-lg-end"><a class="btn-video ripple"
                                                                                                                                                                        href="[video url]" data-fancybox="data-fancybox"> <i
                                                                                                                                                                            class="fa-light fa-play"></i></a></div>',
                    'fields' => [
                        [
                            'type' => 'text',
                            'name' => 'title',
                            'default' => 'Enjoy a Luxury Experience',
                        ],
                        [
                            'type' => 'text',
                            'name' => 'button title',
                            'default' => 'View Our products',
                        ],
                        [
                            'type' => 'text',
                            'name' => 'button link',
                            'default' => '#accommodation',
                            'note' => '#accommodation => Go to Accommodations in current page.',
                        ],
                        [
                            'type' => 'text',
                            'name' => 'video url',
                            'default' => 'https://www.youtube.com/embed/xfrctRm5QIY',
                            'note' => 'embed url: ex. https://www.youtube.com/embed/xfrctRm5QIY',
                        ],
                    ],
                ])
            </div>
        </div>
    </section>
    <!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container">
            <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="col-lg-9 ms-auto">
                    <h3 class="font-news-bold mb-4">
                        @livewire('content', [
                            'name' => $div_name . 'about_' . $x++,
                            'type' => 'text' /* Types: text, image, images */,
                            'default' => "The neighbourhood Veli Varoš was once the home of farm labourers.
                                                                                                                                                                                                                                                                                                                                                                            Even today one can sense the spirit of Split as it used to be in this
                                                                                                                                                                                                                                                                                                                                                                            exceptionally preserved old neighbourhood of the town.",
                        ])
                    </h3>
                    <h4 class="font-news-bold"><a class="text-underline text-black d-inline-block"
                            href="{{ route('about_us') }}">Learn More
                        </a></h4>
                </div>
            </div>
        </div>
        @livewire('content', [
            'name' => $div_name . 'slider_' . $x++,
            'type' => 'images' /* Types: text, image, images */,
            'html' => '<div class="swiper-slide">
                                                                                                                            <div class="swiper-slide-image">
                                                                                                                                <img data-fancybox="data-fancybox-slider-0" src="[value]" alt="" />
                                                                                                                            </div>
                                                                                                                        </div>',
            'html_container' => '<div class="row gx-0 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                                                                                                    <div class="col-12"><div class="swiper-container swiper-images"><div class="swiper-wrapper">[html]</div><div class="swiper-button-prev"></div>
                                                                                                                                                            <div class="swiper-button-next"></div></div></div></div>',
            'default' => ['assets/images/product/img-01.png', 'assets/images/product/img-01.png'],
        ])
    </section>
    <!-- end:: section -->
    <div id="accommodation">
        @if (count($rooms) > 0)
            <!-- start:: section -->
            <section class="section">
                <div class="container">
                    <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="col-lg-9 mx-auto">
                            <div class="text-center">
                                <h2 class="section-title font-news-bold mb-4">Our Rooms</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                        <div class="col-12 position-relative">
                            <div class="swiper-container swiper-product">
                                <div class="swiper-wrapper">
                                    @foreach ($rooms as $room)
                                        <div class="swiper-slide">
                                            <div class="widget_item-product">
                                                <div class="widget_item-image">
                                                    <a href="{{ route('rooms', [$room->slug]) }}" data-bs-toggles="modal"
                                                        data-bs-target="#ModalRoom" data-object="{{ $room->toJson() }}">
                                                        <img src="{{ $room->image }}" alt="{{ $room->title }}" />
                                                    </a>
                                                </div>
                                                <div class="widget_item-content py-3">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div class="col">
                                                            <h3 class="font-news-bold">
                                                                <a class="text-dark"
                                                                    href="{{ route('rooms', [$room->slug]) }}"
                                                                    data-bs-toggles="modal" data-bs-target="#ModalRoom"
                                                                    data-object="{{ $room->toJson() }}">{{ $room->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h3 class="font-itc-bold">{{ $room->price }}
                                                                {{ $settings->currency }}</h3>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-3">Up to {{ $room->adult_capacity }} Adults &
                                                        {{ $room->kids_capacity }} Kids • {{ $room->beds }} Beds •
                                                        {{ $room->space }}</h5>
                                                    <h5 class="mb-4">{{ truncateString($room->description) }}</h5><a
                                                        class="btn btn-outline-black"
                                                        href="{{ route('rooms', [$room->slug]) }}"> Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if (count($rooms) > 2)
                                <div class="swiper-action swiper-action-product">
                                    <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                                    <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:: section -->
        @endif
        @if (count($apartments) > 0)
            <!-- start:: section -->
            <section class="section">
                <div class="container">
                    <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="col-lg-9 mx-auto">
                            <div class="text-center">
                                <h3 class="section-title font-news-bold mb-4">Our Apartments</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                        <div class="col-12 position-relative">
                            <div class="swiper-container swiper-product">
                                <div class="swiper-wrapper">
                                    @foreach ($apartments as $apartment)
                                        <div class="swiper-slide">
                                            <div class="widget_item-product">
                                                <div class="widget_item-image"><a
                                                        href="{{ route('apartments', [$apartment->slug]) }}"
                                                        data-bs-toggles="modal" data-bs-target="#ModalRoom"
                                                        data-object="{{ $apartment->toJson() }}"><img
                                                            src="{{ $apartment->image }}"
                                                            alt="{{ $apartment->title }}" /></a></div>
                                                <div class="widget_item-content py-3">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div class="col">
                                                            <h3 class="font-news-bold"><a class="text-dark"
                                                                    href="{{ route('apartments', [$apartment->slug]) }}"
                                                                    data-bs-toggles="modal" data-bs-target="#ModalRoom"
                                                                    data-object="{{ $apartment->toJson() }}">{{ $apartment->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h3 class="font-itc-bold">{{ $apartment->price }}
                                                                {{ $settings->currency }}</h3>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-3">Up to {{ $apartment->adult_capacity }} Adults &
                                                        {{ $apartment->kids_capacity }} Kids • {{ $apartment->beds }} Beds
                                                        • {{ $apartment->space }}</h5>
                                                    <h5 class="mb-4">{{ truncateString($apartment->description) }}</h5>
                                                    <a class="btn btn-outline-black"
                                                        href="{{ route('apartments', [$apartment->slug]) }}"> Learn
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if (count($apartments) > 2)
                                <div class="swiper-action swiper-action-product">
                                    <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                                    <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:: section -->
        @endif
        @if (count($villas) > 0)
            <!-- start:: section -->
            <section class="section">
                <div class="container">
                    <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="col-lg-9 mx-auto">
                            <div class="text-center">
                                <h3 class="section-title font-news-bold mb-4">Our Villas</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                        <div class="col-12 position-relative">
                            <div class="swiper-container swiper-product">
                                <div class="swiper-wrapper">
                                    @foreach ($villas as $villa)
                                        <div class="swiper-slide">
                                            <div class="widget_item-product">
                                                <div class="widget_item-image"><a
                                                        href="{{ route('villas', [$villa->slug]) }}"
                                                        data-bs-toggles="modal" data-bs-target="#ModalRoom"
                                                        data-object="{{ $villa->toJson() }}"><img
                                                            src="{{ $villa->image }}" alt="{{ $villa->title }}" /></a>
                                                </div>
                                                <div class="widget_item-content py-3">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <div class="col">
                                                            <h3 class="font-news-bold"><a class="text-dark"
                                                                    href="{{ route('villas', [$villa->slug]) }}"
                                                                    data-bs-toggles="modal" data-bs-target="#ModalRoom"
                                                                    data-object="{{ $villa->toJson() }}">{{ $villa->title }}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <h3 class="font-itc-bold">{{ $villa->price }}
                                                                {{ $settings->currency }}</h3>
                                                        </div>
                                                    </div>
                                                    <h5 class="mb-3">Up to {{ $villa->adult_capacity }} Adults &
                                                        {{ $villa->kids_capacity }} Kids • {{ $villa->beds }} Beds •
                                                        {{ $villa->space }}</h5>
                                                    <h5 class="mb-4">{{ truncateString($villa->description) }}</h5><a
                                                        class="btn btn-outline-black"
                                                        href="{{ route('villas', [$villa->slug]) }}"> Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if (count($villas) > 2)
                                <div class="swiper-action swiper-action-product">
                                    <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                                    <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:: section -->
        @endif
    </div>
    <!-- start:: section -->
    <section class="section">
        <div class="row gx-0 mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
            <div class="col-lg-6">
                <div class="h-100 p-4 p-lg-5 d-flex align-items-start justify-content-center bg-black flex-column">
                    <div class="px-lg-4">
                        @livewire('content', [
                            'name' => $div_name . 'yoga_' . $x++,
                            'type' => 'text' /* Types: text, image, images */,
                            'html' => '<h2 class="text-white section-title mb-4">[title]</h2>
                                                                                                                                                                                                                                                                                        <h4 class="text-white mb-5">[description]</h4>',
                            'fields' => [
                                [
                                    'type' => 'text',
                                    'name' => 'title',
                                    'default' => 'yoga and meditation center',
                                ],
                                [
                                    'type' => 'textarea',
                                    'name' => 'description',
                                    'default' => 'The apartments are located within the pedestrian zone of Split. For
                                                                                                                                                                                                                                                                                                    guests with cars, metered public parking is provided close-by, but you might find free parking
                                                                                                                                                                                                                                                                                                    also along the small streets nearby.',
                                ],
                            ],
                        ])
                        @livewire('content', [
                            'name' => $div_name . 'yoga_1_' . $x++,
                            'type' => 'text' /* Types: text, image, images */,
                            'html' => '<a class="btn btn-outline-white" href="'.route('spa').'">[value]</a>',
                            'fields' => [
                                [
                                    'type' => 'text',
                                    'name' => 'value',
                                    'default' => 'book your stay',
                                    'note' => 'enter button caption',
                                ],
                            ],
                        ])

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @livewire('content', [
                    'name' => $div_name . $x++,
                    'type' => 'image' /* Types: text, image, images */,
                    'html' => '<img class="w-100" src="[value]" alt="" />',
                    'default' => 'assets/images/img-01.png',
                ])
            </div>
        </div>
    </section>
    <!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
            <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="col-lg-11 mx-auto">
                    <div class="text-center">
                        @livewire('content', [
                            'name' => $div_name . 'whatwedo_' . $x++,
                            'type' => 'text' /* Types: text, image, images */,
                            'html' => '<h3 class="section-title font-news-bold mb-4">[title]</h3>
                                                                                                                                       <h3 class="title-small font-news-bold mb-4">[description]</h3>',
                            'fields' => [
                                [
                                    'type' => 'text',
                                    'name' => 'title',
                                    'default' => 'What we do',
                                ],
                                [
                                    'type' => 'textarea',
                                    'name' => 'description',
                                    'default' => 'The apartments are located within the pedestrian zone of Split.<br>For guests with cars, metered public parking is provided close ..',
                                ],
                            ],
                        ])
                    </div>
                </div>
            </div>
        </div>
        @livewire('content', [
            'name' => $div_name . 'slider_down' . $x++,
            'type' => 'images' /* Types: text, image, images */,
            'html' => '<div class="swiper-slide">
                                                            <div class="swiper-slide-image-2">
                                                                <img data-fancybox="data-fancybox-home-slider-2" src="[value]" />
                                                            </div>
                                                        </div>',
            'html_container' => '<div class="row gx-0 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                            <div class="col-12 ps-lg-5">
                                                <div class="swiper-container swiper-images-2">
                                                    <div class="swiper-wrapper">
                                                        [html]
                                                    </div>
                                                </div>
                                            </div>
                                        </div>',
            'default' => ['assets/images/product/img-01.png', 'assets/images/product/img-01.png'],
        ])
    </section>
    <!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container">
            <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="col-lg-11 mx-auto">
                    <div class="text-center">
                        @livewire('content', [
                            'name' => $div_name . 'our_achievements_' . $x++,
                            'type' => 'text' /* Types: text, image, images */,
                            'html' => '<h3 class="mb-3">[title]</h3>
                                                                                        <h3>[subtitle]</h3>',
                            'fields' => [
                                [
                                    'type' => 'text',
                                    'name' => 'title',
                                    'default' => 'our achievements',
                                ],
                                [
                                    'type' => 'textarea',
                                    'name' => 'subtitle',
                                    'default' => 'The neighbourhood Veli Varoš was once the home of farm labourers',
                                ],
                            ],
                        ])
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                <div class="col-12">
                    @livewire('content', [
                        'name' => $div_name . 'slider_achievements_' . $x++,
                        'type' => 'images' /* Types: text, image, images */,
                        'html' => '<div class="swiper-slide">
                                                                        <div class="widget_item-brand"><img src="[value]" />
                                                                        </div>
                                                                    </div>',
                        'html_container' => '<div class="swiper-container swiper-brand">
                                                                <div class="swiper-wrapper">
                                                                    [html]
                                                                </div>
                                                            </div>',
                        'default' => ['assets/images/img-brand.png', 'assets/images/img-brand.png', 'assets/images/img-brand.png', 'assets/images/img-brand.png'],
                    ])
                </div>
            </div>
        </div>
    </section>
    <!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container">
            <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="col-lg-9 mx-auto">
                    <div class="content-website p-4 p-lg-5 d-flex align-items-end">
                        <div class="d-lg-flex align-items-end justify-content-between w-100">
                            <div class="d-flex flex-column align-items-center align-items-lg-start mb-3 mb-lg-0">
                                <div class="mb-lg-5 mb-3"><img src="{{ asset('assets/images/logo.png') }}"
                                        alt="" /></div>
                                <h3><a class="font-itc-bold text-dark" target="_blank"
                                        href="{{ env('SITE_TWO') }}">Visit Website <i
                                            class="fa-light fa-arrow-right-long me-2"></i></a></h3>
                            </div><img src="{{ asset('assets/images/img-02.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
