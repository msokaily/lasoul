<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title') | {{ env('APP_NAME_TWO') }}
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/retreat/css/main.css') }}?ver={{ rand(1111, 9999) }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/livewire-content.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}" />

    @yield('meta-tag')

    @auth
        @if (auth()->user()->role == 'Admin')
            <link href="{{ admin_assets('assets/css/livewire-components.css?ver=' . rand(1111, 9999)) }}" rel="stylesheet"
                type="text/css" />
        @endif
    @endauth

    @stack('style')
    @livewireStyles
</head>

<body>
    <!-- begin:: Page -->
    <div class="main-wrapper">
        <div class="overlay-page"></div>
        <header class="main-header">
            <nav class="navbar navbar-expand-lg navbar-light py-0">
                <div class="container py-2"><a class="navbar-brand" href="#"> <img
                            src="{{ asset('assets/retreat/images/logo.svg') }}" alt="{{ env('APP_NAME_TWO') }}" /></a>
                    <button class="navbar-toggler collapsed ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars fa-lg"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                            <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('yoga_garden') }}">Yoga Gardenx</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('retreats') }}">Retreats</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('yoga_food') }}">Yogi Food</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('events') }}">Events</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route_('accommodations') }}">Accommodations</a></li>
                            <li class="nav-item mx-lg-3"><a class="nav-link btn btn-outline-black px-4"
                                    href="{{ route('contact_us') }}">Contact us</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav align-items-center d-flex flex-row navbar-toolpar">
                        <li class="nav-item">
                            <a class="nav-link text-black px-3 toggle-login" style="cursor: pointer;">
                                <img src="{{ asset('assets/retreat/images/icons/user.svg') }}">
                            </a>
                        </li>
                        <li class="nav-item">
                            @livewire(
                                'cart-btn',
                                [
                                    'routeName' => request()->route()->getName(),
                                ],
                                key('cart_btn')
                            )
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- start:: section -->
        @yield('content')
        <!-- start:: footer -->
        <!-- start:: modal -->
        <div class="modal fade" id="ModalService" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-4 p-lg-5">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <h2 class="font-itc-bold">Book Service</h2>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="col-auto">
                                <div class="modal-image-service"><img src="{{asset('assets/retreat/images/img-02.png')}}" alt="" />
                                </div>
                            </div>
                            <div class="col ms-3">
                                <h3 class="font-news-bold">Body Treatments</h3>
                                <h3>100$</h3>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean com
                                modo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. </h4>
                            <h4 class="mb-3">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate
                                eget, arcu. In enim justo, rhoncus.</h4>
                        </div>
                        <div class="d-lg-flex">
                            <div class="col-lg-6">
                                <h3 class="mb-3">Opening Hours</h3>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="font-news-bold">Monday to Friday:</h5>
                                    <h5>09:00 am – 08:00 pm</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="font-news-bold">Sunday:</h5>
                                    <h5>09:00 am – 08:00 pm</h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="font-news-bold">Sunday:</h5>
                                    <h5>09:00 am – 08:00 pm</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 ps-lg-5">
                                <div class="form-group">
                                    <div class="input-icon icon-left">
                                        <input class="form-control datetimepicker_1 border" type="text"
                                            placeholder="Check In" />
                                        <div class="icon"> <i class="fa-light fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon icon-left">
                                        <input class="form-control datetimepicker_1 border" type="text"
                                            placeholder="Check Out" />
                                        <div class="icon"> <i class="fa-light fa-calendar"></i></div>
                                    </div>
                                </div>
                                <button class="btn btn-black w-100">Book</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end:: modal -->
        <!-- start:: modal -->
        <div class="modal fade" id="ModalRoom" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body p-4 p-lg-5">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <h2 class="font-itc-bold">Book Room</h2>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="d-lg-flex">
                            <div class="col-lg-8 pe-lg-4">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="col-auto">
                                        <div class="modal-image-service"><img src="{{asset('assets/retreat/images/img-02.png')}}"
                                                alt="" /></div>
                                    </div>
                                    <div class="col ms-3">
                                        <h3 class="font-news-bold">Body Treatments</h3>
                                        <h3>100$</h3>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                        com modo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                        dis parturient montes, nascetur ridiculus mus. </h4>
                                    <h4 class="mb-3">Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                                        sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec, vulputate eget, arcu. In enim justo, rhoncus.</h4>
                                </div>
                                <div class="mb-4">
                                    <h3 class="mb-3">What’s included in this suite?</h3>
                                    <ul>
                                        <li class="mb-3"><i
                                                class="fa-solid fa-circle me-2 font-size-8 ms-2 text-muted"></i><span>Private
                                                balcony</span></li>
                                        <li class="mb-3"><i
                                                class="fa-solid fa-circle me-2 font-size-8 ms-2 text-muted"></i><span>140x200
                                                cm Elite bed</span></li>
                                        <li class="mb-3"><i
                                                class="fa-solid fa-circle me-2 font-size-8 ms-2 text-muted"></i><span>Upholstered
                                                seat beside the panoramic window</span></li>
                                        <li class="mb-3"><i
                                                class="fa-solid fa-circle me-2 font-size-8 ms-2 text-muted"></i><span>TV-UHD
                                                screen for watching mountaineering films</span></li>
                                        <li class="mb-3"><i
                                                class="fa-solid fa-circle me-2 font-size-8 ms-2 text-muted"></i><span>Comfortable
                                                terry towels and bathrobes</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="input-icon icon-left">
                                        <input class="form-control datetimepicker_1 border" type="text"
                                            placeholder="Check In" />
                                        <div class="icon"> <i class="fa-light fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon icon-left">
                                        <input class="form-control datetimepicker_1 border" type="text"
                                            placeholder="Check Out" />
                                        <div class="icon"> <i class="fa-light fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" type="number" placeholder="Adults" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" type="number" placeholder="Children" />
                                </div>
                                <div class="form-group">
                                    <h3 class="mb-2">Options</h3>
                                    <label class="m-checkbox mb-0 d-block">
                                        <input type="checkbox" /><span class="checkmark"></span><span>Room Clean $12 /
                                            Night</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-black w-100">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: modal -->
        <footer class="main-footer pt-5">
            <div class="container">
                <div class="footer-top">
                    <div class="row mb-4 mb-lg-5">
                        <div class="col-12">
                            <div class="logo"> <img src="{{ asset('assets/images/logo.svg') }}"
                                    alt="{{ env('APP_NAME_TWO') }}" /></div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6">
                            <h5>The neighbourhood Veli Varoš was once the home of farm labourers. Even today one can
                                sense the spirit of Split as it used to be in this exceptionally preserved old
                                neighbourhood of the town. </h5>
                        </div>
                        <div class="col-lg-6">
                            <ul
                                class="menu-footer d-lg-flex align-items-center justify-content-lg-end justify-content-center mt-4 mt-lg-0">
                                <li> <a href="{{ route('home') }}"
                                        class="{{ request()->routeIs('home') ? 'active' : '' }}">Home </a></li>
                                <li> <a href="{{ route('about_us') }}">About us</a></li>
                                <li> <a href="{{ route_('accommodations') }}">Accommodations</a></li>
                                <li> <a href="{{ route_('spa') }}">Holistic Spa</a></li>
                                <li> <a href="{{ route('contact_us') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom border-top my-3 py-3">
                    <h6 class="text-center">All Copyrights are reserved by Divota @2023</h6>
                </div>
            </div>
        </footer>
        <!-- end:: footer -->
        <!-- start:: sidebar Login -->
        <div class="sidebar sidebar-login">
            <div class="sidebar-content d-flex flex-column h-100">
                <div class="sidebar-header">
                    <div class="d-flex align-items-center justify-content-between px-3 py-3">
                        <h3 class="font-news-bold">Login</h3>
                        <button class="btn p-1 text-muted close-login border-0"><i
                                class="fa-regular fa-xmark fa-lg"></i></button>
                    </div>
                </div>
                <div class="sidebar-body p-4">
                    <form action="">
                        <div class="form-group">
                            <label class="form-label">Email Address </label>
                            <input class="form-control border" type="text"
                                placeholder="Enter your email address" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password </label>
                            <div class="input-icon icon-right">
                                <input class="form-control border" type="password"
                                    placeholder="Enter your password" />
                                <div class="icon text-muted toggle-pass"><i class="fa-solid fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6><a href="">Forget your password ?</a></h6>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-black w-100" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="mb-4 text-center pt-4">
                        <h6 class="text-muted mb-3">Or Login through :</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center me-4"><img src="assets/images/icons/facebook.svg"
                                    alt="" />
                                <h5 class="font-news-bold ms-2">Facebook</h5>
                            </div>
                            <div class="d-flex align-items-center"><img src="assets/images/icons/gmail.svg"
                                    alt="" />
                                <h5 class="font-news-bold ms-2">Gmail </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-footer p-3 mt-auto">
                    <h5 class="text-center">You don’t have an account? <a
                            class="pointer toggle-register font-news-bold">Create new account </a></h5>
                </div>
            </div>
        </div>
        <!-- end:: sidebar Login -->
        <!-- start:: sidebar Create New Account -->
        <div class="sidebar sidebar-register">
            <div class="sidebar-content d-flex flex-column h-100">
                <div class="sidebar-header">
                    <div class="d-flex align-items-center justify-content-between px-3 py-3">
                        <h3 class="font-news-bold">Getting started!</h3>
                        <button class="btn p-1 text-muted close-login border-0"><i
                                class="fa-regular fa-xmark fa-lg"></i></button>
                    </div>
                </div>
                <div class="sidebar-body p-4">
                    <form action="">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input class="form-control border" type="text" placeholder="Enter your Name" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address </label>
                            <input class="form-control border" type="text"
                                placeholder="Enter your email address" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number </label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-flag d-flex"><img
                                            src="assets/images/flag.png" alt="" /></span><span
                                        class="input-group-text px-1 py-0">+20</span><img src="assets/images/"
                                        alt="" /></div>
                                <input class="form-control border" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password </label>
                            <div class="input-icon icon-right">
                                <input class="form-control border" type="password"
                                    placeholder="Enter your password" />
                                <div class="icon text-muted toggle-pass"><i class="fa-solid fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-black w-100" type="submit">Create New Account</button>
                        </div>
                    </form>
                    <div class="mb-4 text-center pt-4">
                        <h6 class="text-muted mb-3">Or Login through :</h6>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="d-flex align-items-center me-4"><img src="assets/images/icons/facebook.svg"
                                    alt="" />
                                <h5 class="font-news-bold ms-2">Facebook</h5>
                            </div>
                            <div class="d-flex align-items-center"><img src="assets/images/icons/gmail.svg"
                                    alt="" />
                                <h5 class="font-news-bold ms-2">Gmail </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-footer p-3 mt-auto">
                    <h5 class="text-center">Have an account? <a class="pointer toggle-login font-news-bold">login</a>
                    </h5>
                </div>
            </div>
        </div>
        <!-- end:: sidebar Create New Account -->
        <!-- start:: Modal Login -->
        <div class="modal fade" id="ModalLogin" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-4 p-lg-5">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <h2 class="font-itc-bold">Login</h2>
                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="">
                            <div class="form-group">
                                <label class="form-label">Email Address </label>
                                <input class="form-control border" type="text"
                                    placeholder="Enter your email address" />
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password </label>
                                <div class="input-icon icon-right">
                                    <input class="form-control border" type="password"
                                        placeholder="Enter your password" />
                                    <div class="icon text-muted toggle-pass"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="text-end"><a href="">Forget your password ?</a></h6>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-black w-100" type="submit">Login</button>
                            </div>
                        </form>
                        <div class="mb-4 mb-lg-5 text-center">
                            <h6 class="text-muted mb-3">Or Login through :</h6>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="d-flex align-items-center me-4"><img
                                        src="assets/images/icons/facebook.svg" alt="" />
                                    <h5 class="font-news-bold ms-2">Facebook</h5>
                                </div>
                                <div class="d-flex align-items-center"><img src="assets/images/icons/gmail.svg"
                                        alt="" />
                                    <h5 class="font-news-bold ms-2">Gmail </h5>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5>You don’t have an account? <a class="font-news-bold" href="">Create new
                                    account</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Modal Login -->
        <!-- start:: footer -->
        @if (request()->route()->getName() != 'cart')
            <div class="cart">
                @livewire('cart', [], 'client_cart')
            </div>
        @endif
        <!-- end:: footer -->
        @auth
            @if (auth()->user()->role == 'Admin')
                @livewire('content-editor')
            @endif
        @endauth
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/fancybox.umd.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/retreat/js/function.js') }}?ver={{ rand(1111, 9999) }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgLfq54h5DuzBwBYYg0V5QkVXq4m36yYQ&amp"></script>
    <script>
        function init_map() {
            var myLatlng = new google.maps.LatLng(24.774036498832565, 46.652418028722494);
            var myOptions = {
                zoom: 16,
                center: myLatlng,
            };
            map = new google.maps.Map(document.getElementById("map"), myOptions);
            marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                //- icon: new google.maps.MarkerImage("assets/images/svg/marker.svg")
            });
        }
        google.maps.event.addDomListener(window, 'load', init_map);

        function scrollToDiv(target_id) {
            document.getElementById(target_id).scrollIntoView({
                behavior: "smooth"
            });
        }
    </script>
    <script>
        $('#ModalRoom').on('show.bs.modal', function(e) {
            let triggerElement = $(e.relatedTarget);
            try {
                let data = JSON.parse($(triggerElement).attr('data-object'));
                $(this).find('.title').html(data?.title);
                $(this).find('.description').html(data?.description);
                $(this).find('.price').html(data?.price);
                $(this).find('.image').attr('src', data?.image);
            } catch (error) {}
        });
    </script>
    <script>
        $(".date-input").flatpickr({
            enableTime: false,
            dateFormat: window?.date_input_format ? window.date_input_format : "Y-m-d",
        });
        $(".time-input").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: window?.time_input_format ? window.time_input_format : "H:i",
        });
        $(".date-time-input").flatpickr({
            enableTime: true,
            dateFormat: window?.date_time_input_format ? window.date_time_input_format : "Y-m-d H:i",
        });

        $(function() {
            $(window).on('scroll', function(e) {
                if ($(window).scrollTop() >= 300) {
                    $('.main-header').addClass('small-header');
                } else {
                    $('.main-header').removeClass('small-header');
                }
            });
        })

        var currentTab = 'accommodations';
        var price_type = 'standard';

        var updateExtra = '_client';
        var accommodationsStorage = [];
        try {
            accommodationsStorage = JSON.parse(localStorage.getItem('accommodations_cart' + updateExtra)) || [];
        } catch (error) {
            accommodationsStorage = [];
        }
        var servicesStorage = [];
        try {
            servicesStorage = JSON.parse(localStorage.getItem('services_cart' + updateExtra)) || [];
        } catch (error) {
            servicesStorage = [];
        }
        var eventsStorage = [];
        try {
            eventsStorage = JSON.parse(localStorage.getItem('events_cart' + updateExtra)) || [];
        } catch (error) {
            eventsStorage = [];
        }
        var cart = {
            accommodations: accommodationsStorage,
            services: servicesStorage,
            events: eventsStorage
        };
        console.log({
            cart
        });

        function total() {
            let price = 0;
            let optionsPrice = 0;
            ['accommodations', 'services', 'events'].forEach(type => {
                let price_prefix = '';
                if (price_type == 'local') {
                    price_prefix = 'local_';
                } else if (price_type == 'bundle') {
                    price_prefix = 'bundle_';
                }
                cart[type].forEach((element, index) => {
                    let days = Math.abs((new Date(new Date(element.end_date) - new Date(element.start_date))
                        .getTime()) / (1000 * 60 * 60 * 24)) + 1;
                    const opts = element?.options;
                    optionsPrice = 0;
                    if (opts) {
                        for (let i = 0; i < opts.length; i++) {
                            const opt = opts[i];
                            if (opt?.duration) {
                                optionsPrice += opt?.duration[price_prefix + 'price'];
                            } else {
                                optionsPrice += opt?.option[price_prefix + 'price'] * days;
                            }
                        }
                    }
                    const itemTotal = (element?.item[price_prefix + 'price'] * days) + optionsPrice;
                    cart[type][index].total = itemTotal;
                    price += itemTotal;
                });
            });
            return price;
        }

        function refreshCart() {
            currentTab = 'accommodations';
            price_type = 'standard';

            updateExtra = '_client';
            accommodationsStorage = [];
            try {
                accommodationsStorage = JSON.parse(localStorage.getItem('accommodations_cart' + updateExtra)) || [];
            } catch (error) {
                accommodationsStorage = [];
            }
            servicesStorage = [];
            try {
                servicesStorage = JSON.parse(localStorage.getItem('services_cart' + updateExtra)) || [];
            } catch (error) {
                servicesStorage = [];
            }
            eventsStorage = [];
            try {
                eventsStorage = JSON.parse(localStorage.getItem('events_cart' + updateExtra)) || [];
            } catch (error) {
                eventsStorage = [];
            }
            cart = {
                accommodations: accommodationsStorage,
                services: servicesStorage,
                events: eventsStorage
            };
        }

        function prepareDateInput() {
            const elems = $('.date-input');
            for (let i = 0; i < elems.length; i++) {
                const elem = elems[i];
                const temp = $(elem).attr('data-disabled-dates');
                const mode = $(elem).hasClass('date-range') ? 'range' : 'single';
                const disabledDates = temp ? JSON.parse(temp).map(v => {
                    return {
                        from: v?.start_date,
                        to: v?.end_date
                    }
                }) : [];
                const value = $(elem).val();
                $(elem).flatpickr({
                    minDate: new Date(),
                    disable: disabledDates,
                    mode: mode
                });
                if (mode == 'range' && value) {
                    $(elem).val(value);
                }
            }
        }
    </script>
    @livewireScripts
    @stack('js')
</body>

</html>
