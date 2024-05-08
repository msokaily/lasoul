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
    <!-- end:: section -->
    <section class="section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row mb-5 pb-lg-5">
                <div class="col-lg-9 mx-auto">
                    <div class="text-center">
                        <h6 class="mb-2 text-uppercase">Welcome to CozyStay Lodge</h6>
                        <h2 class="mb-4 h1 font-itc">Exceptional Chalets, tailored services and the experience of unique
                            holidays</h2>
                        <h4 class="mb-4">The CozyStay Lodge consists of exceptional hotels chalets forming a harmonious
                            and refined environment. Each room is unique, with colourful décor, Victorian furniture and
                            claw-foot bathtubs. We welcome guests with authentic wine country hospitality. Stay, sip, and
                            savor the best of Napa wine country at CozyStay.</h4><a class="btn btn-black"
                            href="">Explore Our Story </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5 pb-lg-5">
                <div class="col">
                    <div class="image-insp img-1"><img src="{{asset('assets/retreat/images/img-10.png')}}" alt="" /></div>
                    <div class="image-insp img-2 text-end mb-0"><img src="{{asset('assets/retreat/images/img-12.png')}}" alt="" /></div>
                </div>
                <div class="col-auto">
                    <div class="text-center title-insp">
                        <h2 class="font-itc h1">great place to gain new inspiration.</h2>
                    </div>
                </div>
                <div class="col text-end">
                    <div class="image-insp img-3"> <img src="{{asset('assets/retreat/images/img-11.png')}}" alt="" /></div>
                    <div class="image-insp img-4 mb-0"><img src="{{asset('assets/retreat/images/img-13.png')}}" alt="" /></div>
                </div>
            </div>
            <div class="row align-items-center mb-5 pb-lg-5 justify-content-between">
                <div class="col-lg-6 mb-4 mb-lg-0"><img class="w-100" src="{{asset('assets/retreat/images/img-14.png')}}" alt="" />
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h6 class="text-uppercase mb-1">Discover the Services we offered</h6>
                    <h2 class="section-title font-itc mb-3">great place to gain new inspiration.</h2>
                    <div class="mb-4">
                        <h4>Make the most of your time in Napa Valley with our collection of curated packages and
                            experiences. From private wine tours of the valley’s most celebrated vineyards to romantic
                            couples’ getaways, our team will take care of every detail so you can enjoy a relaxing retreat.
                        </h4>
                    </div><a class="btn btn-black" href="{{route('retreats')}}">View Retreats </a>
                </div>
            </div>
            <div class="row align-items-center mb-5 pb-lg-5 justify-content-between">
                <div class="col-lg-6 pe-lg-5">
                    <h6 class="text-uppercase mb-1">Discover the Services we offered</h6>
                    <h2 class="section-title font-itc mb-4">great place to gain new inspiration.</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-40 icon"><img src="{{asset('assets/retreat/images/icons/icon-01.png')}}" alt="" /></div>
                                <div class="ms-2">
                                    <h4 class="mb-2">Mental health</h4>
                                    <h5>Lorem ipsum proin gravida velit auctor sde re sit amet space.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-40 icon"><img src="{{asset('assets/retreat/images/icons/icon-02.png')}}" alt="" /></div>
                                <div class="ms-2">
                                    <h4 class="mb-2">Mental health</h4>
                                    <h5>Lorem ipsum proin gravida velit auctor sde re sit amet space.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-40 icon"><img src="{{asset('assets/retreat/images/icons/icon-03.png')}}" alt="" /></div>
                                <div class="ms-2">
                                    <h4 class="mb-2">Mental health</h4>
                                    <h5>Lorem ipsum proin gravida velit auctor sde re sit amet space.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-40 icon"><img src="{{asset('assets/retreat/images/icons/icon-04.png')}}" alt="" /></div>
                                <div class="ms-2">
                                    <h4 class="mb-2">Mental health</h4>
                                    <h5>Lorem ipsum proin gravida velit auctor sde re sit amet space.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-40 icon"><img src="{{asset('assets/retreat/images/icons/icon-05.png')}}" alt="" /></div>
                                <div class="ms-2">
                                    <h4 class="mb-2">Mental health</h4>
                                    <h5>Lorem ipsum proin gravida velit auctor sde re sit amet space.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-40 icon"><img src="{{asset('assets/retreat/images/icons/icon-06.png')}}" alt="" /></div>
                                <div class="ms-2">
                                    <h4 class="mb-2">Mental health</h4>
                                    <h5>Lorem ipsum proin gravida velit auctor sde re sit amet space.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6"><img class="w-100" src="{{asset('assets/retreat/images/img-15.png')}}" alt="" /></div>
            </div>
            <div class="row align-items-center mb-5 pb-lg-5 justify-content-between">
                <div class="col-lg-8 ms-auto">
                    <div class="position-relative"><img class="w-100" src="{{asset('assets/retreat/images/img-16.png')}}" alt="" />
                        <div class="content-great-place">
                            <h2 class="section-title font-itc">great place to gain new inspiration.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
