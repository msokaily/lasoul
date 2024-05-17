<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title') | {{ env('APP_NAME') }}
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/website/css/reset.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/wordpress.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/modulobox.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/left-align-menu.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/font-awesome.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/themify-icons.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/tooltipster.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/demo.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/js/plugins/loftloader/assets/css/loftloader.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/elementor/assets/lib/animations/animations.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/js/plugins/elementor/assets/css/frontend-legacy.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/js/plugins/elementor/assets/css/frontend.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/css/swiper.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/css/justifiedGallery.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/css/flickity.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/css/owl.theme.default.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/css/switchery.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/css/craftcoffee-elementor.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/css/craftcoffee-elementor-responsive.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/responsive.css') }}" type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/elementor/assets/lib/font-awesome/css/brands.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="{{ asset('assets/website/js/plugins/elementor/assets/lib/font-awesome/css/solid.min.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/custom-css.min.css') }}" type="text/css"
        media="all" />

    {{-- Start Static Styles --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/bootstrap-modalonly/css/bootstrap.min.css') }}" /> --}}
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}" />
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/livewire-content.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}" />
    {{-- End Static Styles --}}

    @yield('meta-tag')

    @auth
        @if (auth()->user()->role == 'Admin')
            <link href="{{ admin_assets('assets/css/livewire-components.css?ver=' . rand(1111, 9999)) }}"
                rel="stylesheet" type="text/css" />
        @endif
    @endauth

    @stack('style')
    @livewireStyles
</head>

<body data-rsssl="1"
    class="home theme-craftcoffee  menu-transparent lightbox-black leftalign loftloader-lite-enabled elementor-default elementor-kit-6338 elementor-page elementor-page-4462">

    <div id="loftloader-wrapper" class="pl-imgloading" data-show-close-time="15000" data-max-load-time="0">
        <div class="loader-inner">
            <div id="loader">
                <div class="imgloading-container"><span
                        style="background-image: url({{ asset('images/logo-white.png') }});"></span>
                </div>
                <img data-no-lazy="1" class="skip-lazy" alt="loader image" src="{{ asset('images/logo-white.png') }}" />
            </div>
        </div>
        <div class="loader-section section-fade"></div>
        <div class="loader-close-button" style="display: none;"><span class="screen-reader-text">Close</span></div>
    </div>

    <div id="perspective">
        <!-- Begin mobile menu -->
        <a id="btn-close-mobile-menu" href="javascript:;"></a>

        <div class="mobile-menu-wrapper">
            <div class="mobile-menu-content">
                <div class="menu-main-menu-container">
                    <ul id="mobile_main_menu" class="mobile-main-nav">
                        <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li
                                    class="menu-item menu-item-home current-menu-item page_item page-item-4462 current_page_item">
                                    <a href="{{ route('home') }}" aria-current="page">Home 1</a>
                                </li>
                                <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                                <li class="menu-item"><a href="home-4.html">Home 4</a></li>
                                <li class="menu-item"><a href="home-5.html">Home 5</a></li>
                                <li class="menu-item"><a href="home-6.html">Home 6</a></li>
                                <li class="menu-item"><a href="home-7.html">Home 7</a></li>
                                <li class="menu-item"><a href="home-8.html">Home 8</a></li>
                                <li class="menu-item"><a href="home-9.html">Home 9</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children menu-item-10">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="menu.html">Menu</a></li>
                                <li class="menu-item"><a href="about-us-1.html">About Us 1</a></li>
                                <li class="menu-item"><a href="about-us-2.html">About Us 2</a></li>
                                <li class="menu-item"><a href="about-us-3.html">About Us 3</a></li>
                                <li class="menu-item"><a href="our-team.html">Our Team</a></li>
                                <li class="menu-item"><a href="our-process.html">Our Process</a></li>
                                <li class="menu-item"><a href="coffee-subscriptions.html">Coffee Subscriptions</a>
                                </li>
                                <li class="menu-item"><a href="contact-us-1.html">Contact Us 1</a></li>
                                <li class="menu-item"><a href="contact-us-2.html">Contact Us 2</a></li>
                                <li class="menu-item"><a href="reservation.html">Reservation</a></li>
                                <li class="menu-item"><a href="shop.html">Delivery</a></li>
                                <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                                <li class="menu-item"><a href="blog-grid-no-space.html">Blog Grid No Space</a></li>
                                <li class="menu-item"><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li class="menu-item"><a href="blog-metro-no-space.html">Blog Metro No Space</a></li>
                                <li class="menu-item"><a href="blog-metro.html">Blog Metro</a></li>
                                <li class="menu-item"><a href="blog-classic.html">Blog Classic</a></li>
                                <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                                <li class="menu-item"><a href="blog-textual.html">Blog Textual</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="portfolio-classic.html">Portfolio Classic</a></li>
                                <li class="menu-item"><a href="portfolio-grid.html">Portfolio Grid</a></li>
                                <li class="menu-item">
                                    <a href="portfolio-grid-overlay.html">Portfolio Grid Overlay</a>
                                </li>
                                <li class="menu-item"><a href="portfolio-3d-overlay.html">Portfolio 3D Overlay</a>
                                </li>
                                <li class="menu-item"><a href="portfolio-contain.html">Portfolio Contain</a></li>
                                <li class="menu-item"><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                <li class="menu-item">
                                    <a href="portfolio-masonry-grid.html">Portfolio Masonry Grid</a>
                                </li>
                                <li class="menu-item"><a href="portfolio-coverflow.html">Portfolio Coverflow</a></li>
                                <li class="menu-item">
                                    <a href="portfolio-timeline-horizon.html">Portfolio Timeline Horizon</a>
                                </li>
                                <li class="menu-item">
                                    <a href="portfolio-timeline-vertical.html">Portfolio Timeline Vertical</a>
                                </li>
                                <li class="menu-item"><a href="video-grid.html">Video Grid</a></li>
                                <li class="menu-item"><a href="gallery-grid.html">Gallery Grid</a></li>
                                <li class="menu-item"><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                <li class="menu-item"><a href="gallery-justified.html">Gallery Justified</a></li>
                                <li class="menu-item"><a href="gallery-fullscreen.html">Gallery Fullscreen</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Sliders</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="vertical-parallax-slider.html">Vertical Parallax
                                        Slider</a></li>
                                <li class="menu-item"><a href="animated-frame-slider.html">Animated Frame Slider</a>
                                </li>
                                <li class="menu-item"><a href="3d-room-slider.html">3D Room Slider</a></li>
                                <li class="menu-item"><a href="popout-slider.html">Popout Slider</a></li>
                                <li class="menu-item"><a href="clip-path-slider.html">Clip Path Slider</a></li>
                                <li class="menu-item"><a href="velo-slider.html">Velo Slider</a></li>
                                <li class="menu-item"><a href="split-slick-slider.html">Split Slick Slider</a></li>
                                <li class="menu-item"><a href="fullscreen-transition-slider.html">Fullscreen
                                        Transition Slider</a></li>
                                <li class="menu-item"><a href="flip-slider.html">Flip Slider</a></li>
                                <li class="menu-item"><a href="split-carousel-slider.html">Split Carousel Slider</a>
                                </li>
                                <li class="menu-item"><a href="mouse-driven-carousel.html">Mouse Driven Carousel</a>
                                </li>
                                <li class="menu-item"><a href="parallax-slider.html">Parallax Slider</a></li>
                                <li class="menu-item"><a href="zoom-slider.html">Zoom Slider</a></li>
                                <li class="menu-item"><a href="animated-slider.html">Animated Slider</a></li>
                                <li class="menu-item"><a href="fade-up-slider.html">Fade Up Slider</a></li>
                                <li class="menu-item"><a href="horizontal-slider.html">Horizontal Slider</a></li>
                                <li class="menu-item"><a href="motion-reveal-slider.html">Motion Reveal Slider</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End mobile menu -->
        <!-- Begin template wrapper -->
        <div id="wrapper" class="hasbg transparent">
            <div id="elementor-header elementor-sticky-header" class="main-menu-wrapper">
                <div data-elementor-type="wp-post" data-elementor-id="3099" class="elementor custom-css-style"
                    data-elementor-settings="[]">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-a216edb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="a216edb" data-element_type="section" style="z-index: 1;"
                                data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
                                @livewire('content', [
                                    'name' => 'main_top_menu_settings',
                                    'type' => 'text' /* Types: text, image, images */,
                                    'class' => 'content-editor-bottom-btn',
                                    'editor_title' => 'Top Menu Settings',
                                    'html' => '<style>
                                            .main-menu-wrapper .elementor-section:nth-child(1), .custom-css-style .elementor-element.elementor-element-6a86839 .food-menu-content-highlight-holder {
                                                background-color: [background color];
                                            }
                                        </style>',
                                    'fields' => [
                                        [
                                            'type' => 'color',
                                            'name' => 'background color',
                                            'default' => '#b1c2a9',
                                            'title_size' => '4',
                                            'note' => 'Default background color: #b1c2a9',
                                        ],
                                    ]
                                ])
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-eb2db78 elementor-hidden-tablet elementor-hidden-phone"
                                            data-id="eb2db78" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-d6b5ce3 elementor-widget elementor-widget-craftcoffee-navigation-menu"
                                                        data-id="d6b5ce3" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="craftcoffee-navigation-menu.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="themegoods-navigation-wrapper menu_style1">
                                                                <div class="menu-main-menu-container">
                                                                    <ul id="nav_menu34" class="nav">
                                                                        @php
                                                                            $div_name = 'main_top_menu_';
                                                                        @endphp
                                                                        @php $menu_item_name = 'home'; @endphp
                                                                        @livewire('content', [
                                                                            'name' => $div_name . 'link_' . $menu_item_name,
                                                                            'type' => 'text' /* Types: text, image, images */,
                                                                            'tag' => 'li',
                                                                            'class' => 'content-editor-bottom-btn menu-item',
                                                                            'html' => '<a href="' . route($menu_item_name) . '">[' . $menu_item_name . ' (' . $current_locale . ')]</a>',
                                                                            'fields' => array_map(function ($lang) use ($menu_item_name) {
                                                                                return [
                                                                                    'type' => 'text',
                                                                                    'name' => $menu_item_name . ' (' . $lang . ')',
                                                                                    'default' => __('common.' . $menu_item_name),
                                                                                ];
                                                                            }, array_keys($available_locales)),
                                                                        ])
                                                                        @php $menu_item_name = 'about'; @endphp
                                                                        @livewire('content', [
                                                                            'name' => $div_name . 'link_' . $menu_item_name,
                                                                            'type' => 'text' /* Types: text, image, images */,
                                                                            'tag' => 'li',
                                                                            'class' => 'content-editor-bottom-btn menu-item',
                                                                            'html' => '<a href="#' . $menu_item_name . '">[' . $menu_item_name . ' (' . $current_locale . ')]</a>',
                                                                            'fields' => array_map(function ($lang) use ($menu_item_name) {
                                                                                return [
                                                                                    'type' => 'text',
                                                                                    'name' => $menu_item_name . ' (' . $lang . ')',
                                                                                    'default' => __('common.' . $menu_item_name),
                                                                                ];
                                                                            }, array_keys($available_locales)),
                                                                        ])
                                                                        @php $menu_item_name = 'story'; @endphp
                                                                        @livewire('content', [
                                                                            'name' => $div_name . 'link_' . $menu_item_name,
                                                                            'type' => 'text' /* Types: text, image, images */,
                                                                            'tag' => 'li',
                                                                            'class' => 'content-editor-bottom-btn menu-item',
                                                                            'html' => '<a href="#' . $menu_item_name . '">[' . $menu_item_name . ' (' . $current_locale . ')]</a>',
                                                                            'fields' => array_map(function ($lang) use ($menu_item_name) {
                                                                                return [
                                                                                    'type' => 'text',
                                                                                    'name' => $menu_item_name . ' (' . $lang . ')',
                                                                                    'default' => __('common.' . $menu_item_name),
                                                                                ];
                                                                            }, array_keys($available_locales)),
                                                                        ])
                                                                        @php $menu_item_name = 'menu'; @endphp
                                                                        @livewire('content', [
                                                                            'name' => $div_name . 'link_' . $menu_item_name,
                                                                            'type' => 'text' /* Types: text, image, images */,
                                                                            'tag' => 'li',
                                                                            'class' => 'content-editor-bottom-btn menu-item',
                                                                            'html' => '<a href="#' . $menu_item_name . '">[' . $menu_item_name . ' (' . $current_locale . ')]</a>',
                                                                            'fields' => array_map(function ($lang) use ($menu_item_name) {
                                                                                return [
                                                                                    'type' => 'text',
                                                                                    'name' => $menu_item_name . ' (' . $lang . ')',
                                                                                    'default' => __('common.' . $menu_item_name),
                                                                                ];
                                                                            }, array_keys($available_locales)),
                                                                        ])
                                                                        @php $menu_item_name = 'gallery'; @endphp
                                                                        @livewire('content', [
                                                                            'name' => $div_name . 'link_' . $menu_item_name,
                                                                            'type' => 'text' /* Types: text, image, images */,
                                                                            'tag' => 'li',
                                                                            'class' => 'content-editor-bottom-btn menu-item',
                                                                            'html' => '<a href="#' . $menu_item_name . '">[' . $menu_item_name . ' (' . $current_locale . ')]</a>',
                                                                            'fields' => array_map(function ($lang) use ($menu_item_name) {
                                                                                return [
                                                                                    'type' => 'text',
                                                                                    'name' => $menu_item_name . ' (' . $lang . ')',
                                                                                    'default' => __('common.' . $menu_item_name),
                                                                                ];
                                                                            }, array_keys($available_locales)),
                                                                        ])
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="z-index: 0;"
                                            class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8dfe958"
                                            data-id="8dfe958" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-6f23744 elementor-absolute elementor-widget elementor-widget-image"
                                                        data-id="6f23744" data-element_type="widget"
                                                        style="transform: translateY(20%);"
                                                        data-settings='{"_position":"absolute","craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                @livewire('content', [
                                                                    'name' => 'top-menu-logo-data',
                                                                    'type' => 'text' /* Types: text, image, images */,
                                                                    'class' => 'content-editor-bottom-btn',
                                                                    'html' => '<a href="'.route('home').'">
                                                                                    <img width="[width]px" height="[height]px"
                                                                                    src="[logo]"
                                                                                    alt="" loading="lazy" />
                                                                                </a>',
                                                                    'fields' => [
                                                                        [
                                                                            'name' => 'logo',
                                                                            'type' => 'image',
                                                                            'note' => 'Upload Logo Image (recommended "*.png")',
                                                                            'default' => asset('images/logo-white-website.png'),
                                                                        ],
                                                                        [
                                                                            'name' => 'width',
                                                                            'type' => 'text',
                                                                            'placeholder' => 'ex. 170',
                                                                            'note' => 'Logo width in pixels (ex. 170)',
                                                                            'default' => '170',
                                                                        ],
                                                                        [
                                                                            'name' => 'height',
                                                                            'type' => 'text',
                                                                            'placeholder' => 'ex. 80',
                                                                            'note' => 'Logo height in pixels (ex. 80)',
                                                                            'default' => '80',
                                                                        ]
                                                                    ]
                                                                ])
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b401b7a elementor-hidden-phone"
                                            data-id="b401b7a" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-9966067 elementor-widget__width-auto elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                        data-id="9966067" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                <div class="elementor-grid-item">
                                                                    <a href="https://www.instagram.com/lasoul.bih"
                                                                        class="elementor-icon elementor-social-icon"
                                                                        target="_blank">
                                                                        <span
                                                                            class="elementor-screen-only">Instagram</span>
                                                                        <i class="fab fa-instagram"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="elementor-grid-item">
                                                                    <a href="{{$settings->location}}"
                                                                        class="elementor-icon elementor-social-icon"
                                                                        style="display: flex; align-items: center;"
                                                                        target="_blank">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        <span class="text-light" style="font-size: 16px; margin-inline-start: 5px;">{{$settings->address}}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="elementor-element elementor-element-9c9f0b7 elementor-widget__width-auto elementor-widget elementor-widget-craftcoffee-search"
                                                        data-id="9c9f0b7" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="craftcoffee-search.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="craftcoffee-search-icon">
                                                                <a data-open="tg_search_9c9f0b7"
                                                                    href="javascript:;"><i aria-hidden="true"
                                                                        class="fas fa-search"></i></a>
                                                            </div>

                                                            <div id="tg_search_9c9f0b7"
                                                                class="craftcoffee-search-wrapper">
                                                                <div class="craftcoffee-search-inner">
                                                                    <form id="tg_search_form_9c9f0b7"
                                                                        class="tg_search_form autocomplete_form"
                                                                        method="get" action="{{ route('home') }}"
                                                                        data-result="autocomplete_9c9f0b7"
                                                                        data-open="tg_search_9c9f0b7">
                                                                        <div class="input-group">
                                                                            <input id="s" name="s"
                                                                                placeholder="Search for anything"
                                                                                autocomplete="off" value="" />
                                                                            <span class="input-group-button">
                                                                                <button
                                                                                    aria-label="Search for anything"
                                                                                    type="submit"><i
                                                                                        aria-hidden="true"
                                                                                        class="fas fa-search"></i></button>
                                                                            </span>
                                                                        </div>

                                                                        <br class="clear" />
                                                                        <div id="autocomplete_9c9f0b7"
                                                                            class="autocomplete"
                                                                            data-mousedown="false"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-fcec661"
                                            data-id="fcec661" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-ff52274 elementor-align-center elementor-widget-tablet__width-auto elementor-hidden-phone elementor-widget elementor-widget-button"
                                                        data-id="ff52274" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="tel:{{$settings->mobile}}"
                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span
                                                                            class="elementor-button-text">{{$settings->mobile}}</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-0b79fea elementor_mobile_nav elementor-widget__width-auto elementor-hidden-desktop elementor-view-default elementor-widget elementor-widget-icon"
                                                        data-id="0b79fea" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="icon.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-wrapper">
                                                                <a class="elementor-icon" href=""> <i
                                                                        aria-hidden="true"
                                                                        class="fas fa-ellipsis-v"></i> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-3727a07 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="3727a07" data-element_type="section"
                                data-settings='{"stretch_section":"section-stretched","craftcoffee_ext_is_background_parallax":"false"}'>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f260150"
                                            data-id="f260150" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-d00d5a2 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="d00d5a2" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator"> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Begin content -->
            {{-- <div id="page-content-wrapper" class="no-title"> --}}
            <div class="no-title">
                <div class="inner">
                    <!-- Begin main content -->
                    <div class="inner-wrapper">
                        <div class="sidebar-content fullwidth">
                            <div data-elementor-type="wp-page" data-elementor-id="4462"
                                class="elementor custom-css-style" data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="footer-wrapper">
                            <div data-elementor-type="wp-post" data-elementor-id="3725" class="elementor custom-css-style"
                                data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        {{-- <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-c7d144f elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
                                            data-id="c7d144f" data-element_type="section"
                                            data-settings='{"background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-38383f6"
                                                        data-id="38383f6" data-element_type="column"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-c795a27 elementor-widget elementor-widget-heading"
                                                                    data-id="c795a27" data-element_type="widget"
                                                                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">History
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-fe30d60 elementor-widget elementor-widget-text-editor"
                                                                    data-id="fe30d60" data-element_type="widget"
                                                                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                    data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>
                                                                                Craft beer elit seitan exercitation, photo booth et 8-bit kale
                                                                                chips proident chillwave deep v laborum. Aliquip veniam
                                                                                delectus, Marfa eiusmod Pinterest in do umami
                                                                                readymade swag.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-bbbbc70 elementor-widget elementor-widget-image"
                                                                    data-id="bbbbc70" data-element_type="widget"
                                                                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="350" height="49"
                                                                                src="{{ asset('assets/website/upload/singature_white-e1592385719386.png') }}"
                                                                                class="attachment-full size-full" alt=""
                                                                                loading="lazy" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ff896b7"
                                                        data-id="ff896b7" data-element_type="column"
                                                        data-settings='{"background_background":"classic","craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-8af6019 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image"
                                                                    data-id="8af6019" data-element_type="widget"
                                                                    data-settings='{"_position":"absolute","craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="340" height="340"
                                                                                src="{{ asset('assets/website/upload/since_1997.png') }}"
                                                                                class="attachment-full size-full" alt=""
                                                                                loading="lazy" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> --}}
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-9229aee elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="9229aee" data-element_type="section"
                                            data-settings='{"background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2cba03a"
                                                        data-id="2cba03a" data-element_type="column"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <section
                                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7e367f8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                    data-id="7e367f8" data-element_type="section"
                                                                    data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4d8e803"
                                                                                data-id="4d8e803" data-element_type="column"
                                                                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                                                                <div
                                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-658e32a elementor-widget__width-auto elementor-widget elementor-widget-image"
                                                                                            data-id="658e32a" data-element_type="widget"
                                                                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                                            data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="124" height="124"
                                                                                                        src="{{ asset('assets/website/upload/icon_vintage_phone.png') }}"
                                                                                                        class="attachment-full size-full"
                                                                                                        alt="" loading="lazy" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-e3d4439 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                                                            data-id="e3d4439" data-element_type="widget"
                                                                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                                            data-widget_type="text-editor.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                                    <div>
                                                                                                        <span class="s1">
                                                                                                            {{__('common.Opening Hours')}}
                                                                                                            @livewire('content', [
                                                                                                                'name' => 'home_opening_times_section_content',
                                                                                                                'type' => 'text' /* Types: text, image, images */,
                                                                                                                'tag' => 'div',
                                                                                                                'class' => 'mt-2',
                                                                                                                'html' => '[from hour] – [to hour]',
                                                                                                                'fields' => [
                                                                                                                    [
                                                                                                                            'type' => 'text',
                                                                                                                            'name' => "from hour",
                                                                                                                            'default' => '11:00 AM',
                                                                                                                    ],
                                                                                                                    [
                                                                                                                            'type' => 'text',
                                                                                                                            'name' => "to hour",
                                                                                                                            'default' => '09:00 PM',
                                                                                                                    ]
                                                                                                                ],
                                                                                                            ])
                                                                                                        </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8d59401"
                                                                                data-id="8d59401" data-element_type="column"
                                                                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                                                                <div
                                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-03d2b2d elementor-widget__width-auto elementor-widget elementor-widget-image"
                                                                                            data-id="03d2b2d" data-element_type="widget"
                                                                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                                            data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img width="124" height="160"
                                                                                                        src="{{ asset('assets/website/upload/icon_vintage_compass.png') }}"
                                                                                                        class="attachment-full size-full"
                                                                                                        alt="" loading="lazy" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-5662f5b elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                                                            data-id="5662f5b" data-element_type="widget"
                                                                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                                            data-widget_type="text-editor.default"
                                                                                            style="display: flex; flex-direction: column; justify-content: center;">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                                    <p class="p1" style="padding: 0; margin: 0;">
                                                                                                        <span class="s1">
                                                                                                            {{$settings->address}}
                                                                                                        </span>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-06fc5ca"
                                                                                data-id="06fc5ca" data-element_type="column"
                                                                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                                                                <div
                                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-9c89ed9 elementor-widget__width-auto elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                                                            data-id="9c89ed9" data-element_type="widget"
                                                                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                                            data-widget_type="social-icons.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="elementor-social-icons-wrapper elementor-grid">
                                                                                                    {{-- <div class="elementor-grid-item">
                                                                                                        <a href="#"
                                                                                                            class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-fac257c"
                                                                                                            target="_blank">
                                                                                                            <span
                                                                                                                class="elementor-screen-only">Facebook</span>
                                                                                                            <i class="fab fa-facebook"></i>
                                                                                                        </a>
                                                                                                    </div> --}}
                                                                                                    <div class="elementor-grid-item">
                                                                                                        <a href="https://www.instagram.com/lasoul.bih"
                                                                                                            class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-4238c6b"
                                                                                                            target="_blank">
                                                                                                            <span
                                                                                                                class="elementor-screen-only">Instagram</span>
                                                                                                            <i class="fab fa-instagram"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div class="elementor-grid-item">
                                                                                                        <a href="{{$settings->location}}"
                                                                                                            class="elementor-icon elementor-social-icon"
                                                                                                            target="_blank">
                                                                                                            <i class="fa fa-map-marker"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-3374de8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="3374de8" data-element_type="section"
                                            data-settings='{"background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-58c7cfc"
                                                        data-id="58c7cfc" data-element_type="column"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-ebb6c30 elementor-widget elementor-widget-heading"
                                                                    data-id="ebb6c30" data-element_type="widget"
                                                                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        @livewire('content', [
                                                                            'name' => 'footer_2_section_content_text_1',
                                                                            'type' => 'text' /* Types: text, image, images */,
                                                                            'tag' => 'h3',
                                                                            'class' => 'elementor-heading-title elementor-size-default',
                                                                            'html' => '© [value]',
                                                                            'default' => 'All copyrights for LASOUL',
                                                                        ])
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a id="go-to-top" href="javascript:;"><span class="ti-arrow-up"></span></a>

                    </div>
                </div>
            </div>
        </div>

        @auth
            @if (auth()->user()->role == 'Admin')
                @livewire('content-editor')
            @endif
        @endauth

        {{-- Start Static Javascripts --}}
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/bootstrap-modalonly/js/bootstrap.bundle.min.js') }}"></script> --}}
        {{-- End Static Javascripts --}}

        <script type="text/javascript" src="{{ asset('assets/website/js/ui/core.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/website/js/ui/datepicker.min.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function(jQuery) {
                jQuery.datepicker.setDefaults({
                    closeText: "Close",
                    currentText: "Today",
                    monthNames: ["January", "February", "March", "April", "May", "June", "July", "August",
                        "September", "October", "November", "December"
                    ],
                    monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                        "Nov", "Dec"
                    ],
                    nextText: "Next",
                    prevText: "Previous",
                    dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                    dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
                    dateFormat: "MM d, yy",
                    firstDay: 1,
                    isRTL: false,
                });
            });
        </script>
        <script type="text/javascript" src="{{ asset('assets/website/js/imagesloaded.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/website/js/masonry.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/jquery.lazy.js') }}"></script>
        <script type="text/javascript">
            jQuery(function($) {
                jQuery("img.lazy").each(function() {
                    var currentImg = jQuery(this);

                    jQuery(this).Lazy({
                        onFinishedAll: function() {
                            currentImg.parent("div.post-featured-image-hover").removeClass("lazy");
                            currentImg.parent(".craftcoffee_gallery_lightbox").parent(
                                "div.gallery_grid_item").removeClass("lazy");
                            currentImg.parent("div.gallery_grid_item").removeClass("lazy");
                        },
                    });
                });
            });
        </script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/modulobox.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/jquery.parallax-scroll.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/jquery.smoove.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/parallax.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/jarallax.js') }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery(".themegoods-parallax").jarallax({
                    speed: 0.8,
                });
            });
        </script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/jquery.sticky-kit.min.js') }}"></script>
        <script type="text/javascript">
            jQuery(function($) {
                jQuery("#page-content-wrapper .sidebar-wrapper").stick_in_parent({
                    offset_top: 100
                });

                if (jQuery(window).width() < 768 || is_touch_device()) {
                    jQuery("#page-content-wrapper .sidebar-wrapper").trigger("sticky_kit:detach");
                }
            });
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var tgAjax = {
                ajaxurl: "#",
                ajax_nonce: "ab2451ad72"
            };
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/craftcoffee-elementor.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/website/js/ui/effect.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/tweenmax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/jquery-stellar.js') }}"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var craftcoffeePluginParams = {
                backTitle: "Back"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/craftcoffee-plugins.js') }}"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var tgAjax = {
                ajaxurl: "#"
            };
            var craftcoffeeParams = {
                menulayout: "leftalign",
                fixedmenu: "1",
                footerreveal: "",
                headercontent: "content",
                lightboxthumbnails: "thumbnail",
                lightboxtimer: "7000"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/craftcoffee-custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/jquery-tooltipster.js') }}"></script>
        <script type="text/javascript">
            jQuery(function($) {
                jQuery(".demotip").tooltipster({
                    position: "left",
                    multiple: true,
                    theme: "tooltipster-shadow",
                    delay: 0,
                });
            });
        </script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/loftloader/assets/js/loftloader.min.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/webfont.js') }}"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: ["Roboto:400", "Oswald:500"]
                }
            });
        </script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/craftcoffee-elementor/assets/js/flickity.pkgd.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/elementor/assets/js/frontend-modules.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/website/js/ui/position.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/elementor/assets/lib/dialog/dialog.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/elementor/assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script type="text/javascript"
            src="{{ asset('assets/website/js/plugins/elementor/assets/lib/swiper/swiper.min.js') }}"></script>
        <script type="text/javascript">
            var elementorFrontendConfig = {
                environmentMode: {
                    edit: false,
                    wpPreview: false
                },
                i18n: {
                    shareOnFacebook: "Share on Facebook",
                    shareOnTwitter: "Share on Twitter",
                    pinIt: "Pin it",
                    download: "Download",
                    downloadImage: "Download image",
                    fullscreen: "Fullscreen",
                    zoom: "Zoom",
                    share: "Share",
                    playVideo: "Play Video",
                    previous: "Previous",
                    next: "Next",
                    close: "Close",
                },
                is_rtl: false,
                breakpoints: {
                    xs: 0,
                    sm: 480,
                    md: 768,
                    lg: 1025,
                    xl: 1440,
                    xxl: 1600
                },
                version: "3.0.11",
                is_static: false,
                legacyMode: {
                    elementWrappers: true
                },
                urls: {
                    assets: "https:\/\/themes.themegoods.com\/craft\/wp-content\/plugins\/elementor\/assets\/"
                },
                settings: {
                    page: [],
                    editorPreferences: []
                },
                kit: {
                    global_image_lightbox: "yes",
                    lightbox_enable_counter: "yes",
                    lightbox_enable_fullscreen: "yes",
                    lightbox_enable_zoom: "yes",
                    lightbox_enable_share: "yes",
                    lightbox_title_src: "title",
                    lightbox_description_src: "description",
                },
                post: {
                    id: 4462,
                    title: "Craft%20%7C%20Cafes%20Coffee%20Shops%20Bars%20WordPress%20%E2%80%93%20Just%20another%20WordPress%20site",
                    excerpt: "",
                    featuredImage: false
                },
            };
        </script>
        <script type="text/javascript" src="{{ asset('assets/website/js/plugins/elementor/assets/js/frontend.min.js') }}">
        </script>

        <script>
            setTimeout(() => {
                $('#wrapper').removeAttr('style');
            }, 500);
            function fullscreen() {
                items = $('.full-width-item');
                for (let i = 0; i < items.length; i++) {
                    const item = items[i];
                    const wraperWidth = $(item).closest('.elementor-section-wrap').width();
                    const width = '100vw';
                    const left = -1 * (($(window).width() - wraperWidth) / 2);
                    $(item).css({'width': width, 'left': left});
                }
            }
            // $(window).resize(function() {
            //     fullscreen();
            // });
            // setTimeout(() => {
            //     fullscreen();
            // }, 1000);
            // fullscreen();
        </script>
        @livewireScripts
        @stack('js')
</body>

</html>
