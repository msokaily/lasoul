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
                <div class="bg-header"
                    style="background: url({{asset('assets/retreat/images/img-29.png')}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    <div class="text-center">
                        <h5 class="mb-2 text-white font-italic text-uppercase">Welcome to happiness</h5>
                        <h3 class="section-title font-news-bold mb-4 text-white font-italic">Complete Booking</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="widget_item-product-single d-lg-flex">
                        <div class="col-auto mb-3 mb-lg-0">
                            <div class="widget_item-image"><img src="{{asset('assets/retreat/images/img-01.png')}}" alt="" /></div>
                        </div>
                        <div class="col mx-lg-3">
                            <div class="widget_item-content">
                                <h2 class="mb-lg-4 mb-2 font-itc">Yoga Event</h2>
                                <h3 class="mb-lg-4 mb-3 font-itc">Price: 100$</h3>
                                <h4 class="mb-lg-4 mb-3">The CozyStay Lodge consists of exceptional hotels chalets forming a
                                    harmonious and refined environment. Each room is unique, with colourful décor.</h4>
                                <div class="d-lg-flex mb-3 mb-lg-0">
                                    <div class="col-lg-6 mb-3 mb-lg-0">
                                        <div class="d-flex">
                                            <h5 class="font-news-bold">From</h5>
                                            <div class="ms-3">
                                                <h6 class="font-news-bold"><i class="fa-light fa-calendar me-2"></i>16
                                                    November 2023</h6>
                                                <h6 class="font-news-bold"><i class="fa-light fa-clock me-2"></i>10:00 AM
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex">
                                            <h5 class="font-news-bold">To</h5>
                                            <div class="ms-3">
                                                <h6 class="font-news-bold"><i class="fa-light fa-calendar me-2"></i>16
                                                    November 2023</h6>
                                                <h6 class="font-news-bold"><i class="fa-light fa-clock me-2"></i>10:00 AM
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <h2 class="mb-3 font-itc">Total Price: 250$</h2><a class="btn btn-black" href=""
                                data-bs-toggle="modal" data-bs-target="#ModalRoom">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title title-small">Add to Event</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 mb-3">
                    <h2 class="section-title title-small">Room</h2>
                </div>
                <div class="col-12 position-relative">
                    <div class="swiper-container swiper-product">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-07.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-success px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Booked</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-10.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-12.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-11.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-08.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-action swiper-action-product">
                        <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 mb-3">
                    <h2 class="section-title title-small">Apartments</h2>
                </div>
                <div class="col-12 position-relative">
                    <div class="swiper-container swiper-product">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-04.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-05.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-04.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href="" data-bs-toggle="modal"
                                            data-bs-target="#ModalRoom"><img src="{{asset('assets/retreat/images/img-05.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href=""
                                                        data-bs-toggle="modal" data-bs-target="#ModalRoom">Small and Cozy
                                                        Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href="" data-bs-toggle="modal" data-bs-target="#ModalRoom"> Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-action swiper-action-product">
                        <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 mb-3">
                    <h2 class="section-title title-small">Villas</h2>
                </div>
                <div class="col-12 position-relative">
                    <div class="swiper-container swiper-product">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-23.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-success px-5"
                                            href=""> Booked</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-05.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href=""> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-04.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href=""> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-05.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href=""> Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-action swiper-action-product">
                        <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="row align-items-end mb-4">
                        <div class="col-lg-6">
                            <h2 class="font-itc-bold">Our Services</h2>
                            <h5>Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam
                                deleniti ex nec sit tale atqui abhorreant luptatum conclu</h5>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end"><a class="btn btn-black" href="">View All
                            </a></div>
                    </div>
                </div>
                <div class="col-12 position-relative">
                    <div class="swiper-container swiper-product">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-04.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href=""> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-05.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href=""> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-04.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href=""> Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="widget_item-product">
                                    <div class="widget_item-image"><a href=""><img src="{{asset('assets/retreat/images/img-05.png')}}"
                                                alt="" /></a></div>
                                    <div class="widget_item-content py-3">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col">
                                                <h3 class="font-news-bold"><a class="text-dark" href="">Small and
                                                        Cozy Double product </a></h3>
                                            </div>
                                            <div class="col-auto">
                                                <h3 class="font-itc-bold">100$</h3>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Up to 4 Adults • 2 King Beds • 500 sq feet / 100 m</h5>
                                        <h5 class="mb-4">This product is located on the first floor of a traditional
                                            Dalmatian house above the reception</h5><a class="btn btn-outline-black px-5"
                                            href=""> Add</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-action swiper-action-product">
                        <div class="swiper-prev"><i class="fa-regular fa-chevron-left"></i></div>
                        <div class="swiper-next"><i class="fa-regular fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
