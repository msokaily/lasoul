@extends('layout.retreatLayout')

@section('title')
    {{ $page_name }}
@endsection
@php
    $div_name = 'Home Page Retreat' . '_';
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
    <section class="section section-home">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="home-content text-center text-lg-start">
                        <h1 class="mb-4 pb-lg-3 font-itc-bold home-title">Transformation of body and mind</h1><a
                            class="btn btn-outline-dark" href="">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container">
            <div class="row wow fadeInUp mb-4" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="col-lg-8 mx-auto">
                    <div class="home-content text-center">
                        <h2 class="mb-4 font-itc-bold section-title">
                            @livewire('content', [
                                'name' => $div_name . 'about_retreat_' . $x++,
                                'type' => 'text' /* Types: text, image, images */,
                                'default' => 'Your Unplannedfortunate Discovery',
                            ])
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <div class="text-center px-lg-4 mb-4 mb-lg-0">
                                    <div class="mb-4 icon icon-80"><img src="{{asset('assets/retreat/images/icons/icon-07.png')}}"
                                            alt="" /></div>
                                    <h3 class="mb-2 font-itc-bold font-size-24">Mind</h3>
                                    <h5 class="text-muted">Meditation is a mental training practice that teaches
                                        you to slow down racing thoughts.</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                <div class="text-center px-lg-4 mb-4 mb-lg-0">
                                    <div class="mb-4 icon icon-80"><img src="{{asset('assets/retreat/images/icons/icon-08.png')}}"
                                            alt="" /></div>
                                    <h3 class="mb-2 font-itc-bold font-size-24">Mental health</h3>
                                    <h5 class="text-muted">Meditation is a mental training practice that teaches
                                        you to slow down racing thoughts.</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                <div class="text-center px-lg-4 mb-4 mb-lg-0">
                                    <div class="mb-4 icon icon-80"><img src="{{asset('assets/retreat/images/icons/icon-09.png')}}"
                                            alt="" /></div>
                                    <h3 class="mb-2 font-itc-bold font-size-24">Body</h3>
                                    <h5 class="text-muted">Meditation is a mental training practice that teaches
                                        you to slow down racing thoughts.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
    <!-- start:: section -->
    <section class="section bg py-0">
        <div class="row gx-0 my-lg-5 position-relative">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms"><img class="w-100"
                    src="{{asset('assets/retreat/images/img-01.png')}}" alt="" /></div>
            <div class="col-lg-6 bg-gray p-4 p-lg-5 d-flex flex-column justify-content-center align-items-start wow fadeInUp"
                data-wow-delay="0.2s" data-wow-duration="1500ms">
                <h2 class="mb-4 font-itc-bold section-title">why divota?</h2>
                <div class="mb-4 pe-lg-5">
                    <h5 class="mb-2 text-muted">‘Divota’ is a Croatian expression for “something that is beautiful,
                        something that inspires admiration, beauty that astonishes “. Like the loveliness of a
                        sunset or the magic of a mighty waterfall, something that makes one’s eyes light up.</h5>
                    <h5 class="mb-2 text-muted">This is exactly what we are aiming for. No matter where you come
                        from or who you are, whether you are staying with us enjoying the beauty of Split or taking
                        part in one of our retreats, we would like you to experience as many Divota moments as
                        possible.</h5>
                </div><a class="btn btn-outline-dark" href="">Learn More </a>
            </div>
        </div>
    </section><!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="row gx-0">
            <div class="col-lg-6 p-4 p-lg-5 d-flex flex-column justify-content-center align-items-start wow fadeInUp"
                data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="px-lg-5">
                    <h2 class="mb-4 font-itc-bold section-title title-small">lu jong tibetan healing yoga signature
                        retreat</h2>
                    <div class="text-center mb-4 w-100"><img src="{{asset('assets/retreat/images/symbol.png')}}" alt="" />
                    </div>
                    <h3 class="mb-4 font-itc-bold">lu jong tibetan healing yoga signature retreat</h3>
                    <div class="mb-4 pe-lg-5">
                        <h5 class="mb-2 text-muted">MON 30.8. – FRI 3.9.2021 / teacher Danijela Colić</h5>
                    </div>
                    <hr class="mb-4" /><a class="btn btn-outline-dark" href="">Book appointment</a>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms"><img class="w-100"
                    src="{{asset('assets/retreat/images/img-01.png')}}" alt="" /></div>
        </div>
    </section><!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="widget_item-gallary mb-3 mb-lg-0">
                        <div class="widget_item-image"><a href="{{asset('assets/retreat/images/img-03.png')}}" data-fancybox="data-fancybox">
                                <img class="w-100" src="{{asset('assets/retreat/images/img-03.png')}}" alt="" /></a></div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                    <div class="widget_item-gallary mb-3 mb-lg-0">
                        <div class="widget_item-image"><a href="{{asset('assets/retreat/images/img-04.png')}}" data-fancybox="data-fancybox">
                                <img class="w-100" src="{{asset('assets/retreat/images/img-04.png')}}" alt="" /></a></div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="widget_item-gallary mb-3 mb-lg-0">
                        <div class="widget_item-image"><a href="{{asset('assets/retreat/images/img-05.png')}}" data-fancybox="data-fancybox">
                                <img class="w-100" src="{{asset('assets/retreat/images/img-05.png')}}" alt="" /></a></div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                    <div class="widget_item-gallary mb-3 mb-lg-0">
                        <div class="widget_item-image"><a href="{{asset('assets/retreat/images/img-06.png')}}" data-fancybox="data-fancybox">
                                <img class="w-100" src="{{asset('assets/retreat/images/img-06.png')}}" alt="" /></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
    <!-- start:: section -->
    <section class="section bg-gray bg bg-left">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp mb-3 mb-lg-0" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <h3 class="mb-4 font-itc-bold section-title title-small pe-lg-5">your unplannedfortunate
                        discovery</h3>
                    <h5 class="mb-4 text-muted">This is exactly what we are aiming for. No matter where you come
                        from or who you are, whether you are staying with us enjoying the beauty of Split or taking
                    </h5>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3 pb-3 border-bottom d-flex align-items-center justify-content-between">
                                <h3 class="font-itc-bold">Retreats</h3><i class="fa-light fa-arrow-up-right fa-xl"></i>
                            </div>
                            <div class="mb-3 pb-3 border-bottom d-flex align-items-center justify-content-between">
                                <h3 class="font-itc-bold">Accommodation</h3><i
                                    class="fa-light fa-arrow-up-right fa-xl"></i>
                            </div>
                            <div class="mb-3 pb-3 border-bottom d-flex align-items-center justify-content-between">
                                <h3 class="font-itc-bold">Yoga Garden</h3><i class="fa-light fa-arrow-up-right fa-xl"></i>
                            </div>
                            <div class="mb-3 pb-3 border-bottom d-flex align-items-center justify-content-between">
                                <h3 class="font-itc-bold">Holistic Spa</h3><i
                                    class="fa-light fa-arrow-up-right fa-xl"></i>
                            </div>
                            <div class="mb-3 pb-3 border-bottom d-flex align-items-center justify-content-between">
                                <h3 class="font-itc-bold">Yogi Food</h3><i class="fa-light fa-arrow-up-right fa-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                    <div class="row">
                        <div class="col-6">
                            <div class="image transform-translateY--30"><img src="{{asset('assets/retreat/images/img-07.png')}}"
                                    alt="" /></div>
                        </div>
                        <div class="col-6">
                            <div class="image transform-translateY-100"><img src="{{asset('assets/retreat/images/img-08.png')}}"
                                    alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container py-lg-4">
            <div class="row">
                <div class="col-lg-2 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <h3 class="mb-4 font-itc-bold">Contact details</h3>
                    <h5 class="mb-4 text-muted">785 15h Street, Office 478 New York, 81566</h5>
                    <h5 class="mb-4 text-muted">info@email.com</h5>
                    <h5 class="mb-4 font-news-bold">+1 800 555 25 69</h5>
                </div>
                <div class="col-lg-9 ms-auto wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Phone" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Subject" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-outline-dark">Get In Touch</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
    <!-- start:: section -->
    <section class="section">
        <div class="container">
            <div class="row mb-4 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="col-lg-9 mx-auto">
                    <div class="content-website p-4 p-lg-5 d-flex align-items-end">
                        <div class="d-lg-flex align-items-end justify-content-between w-100">
                            <div class="d-flex flex-column align-items-center align-items-lg-start mb-3 mb-lg-0">
                                <div class="mb-lg-5 mb-3"><img src="{{asset('assets/retreat/images/logo.svg')}}" alt="" />
                                </div>
                                <h3><a class="font-itc-bold text-dark" href="">Visit Website <i
                                            class="fa-light fa-arrow-right-long me-2"></i></a></h3>
                            </div><img src="{{asset('assets/retreat/images/img-09.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
