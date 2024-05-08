@extends('layout.webLayout')

@section('title')
    {{$page_name}}
@endsection
@php
    $div_name = $page_name.'_';
    $x = 0;
@endphp

@section('meta-tag')
    <meta name="description" content="{{$settings->site_description}}">
    <meta name="keywords" content="{{$settings->keywords}}">
    <meta property="og:title" content="Divota | {{ $page_name }}">
    <meta property="og:description" content="{{$settings->site_description}}">
    {{-- <meta property="og:image" content="{{asset('social.jpg')}}"> --}}
    <meta property="og:url" content="{{ url()->full() }}">
@endsection

@section('content')
  <section class="section wow fadeInUp section-service py-0" data-wow-delay="0.1s">
    <div class="container">
      <div class="row"> 
        <div class="col-lg-5 mx-auto">
          <div class="text-center">
            <h5 class="mb-2 text-white font-italic">Welcome to happiness</h5>
            <h3 class="section-title font-news-bold mb-4 text-white font-italic"> Holistic Spa</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end:: section -->
  <!-- start:: section -->  
  <section class="section wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-8">
          <h2 class="font-itc section-title">The wide offer of our spa will leave no one indifferent.</h2>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-4 ms-auto">
          <h4>To complete your stay, we offer you a wide variety of wellness services. Located in the heart of Split’s Varoš, at Plinarska 75, the divota holistic spa offers a large selection of holistic treatments, massages, and beauty treatments.</h4>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-lg-8">
          <h2 class="section-title title-small lh-sm">What makes us unique (not only in Split, but also in Europe) are our holistic treatments. Try a kum nye massage which is a part of the traditional healing practices from the Himalayas.</h2>
        </div>
      </div>
    </div>
    <div class="row gx-0 mt-5">
      <div class="col-12"> 
        <div class="swiper-container swiper-images">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-slide-image"><img src="assets/images/product/img-01.png" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-slide-image"><img src="assets/images/product/img-02.png" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-slide-image"><img src="assets/images/product/img-03.png" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-slide-image"><img src="assets/images/product/img-01.png" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-slide-image"><img src="assets/images/product/img-02.png" alt=""/></div>
            </div>
            <div class="swiper-slide">
              <div class="swiper-slide-image"><img src="assets/images/product/img-03.png" alt=""/></div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </section><!-- end:: section -->
  <!-- start:: section -->  
  <section class="section wow fadeInUp pt-0" data-wow-delay="0.1s">
    <div class="container">
      <div class="row align-items-center mb-5 pb-lg-5">
        <div class="col-lg-5"><img class="w-100" src="assets/images/img-08.png" alt=""/></div>
        <div class="col-lg-5 mx-auto"> 
          <h2 class="section-title font-itc title-small mb-4">Our Philosophy</h2>
          <h4 class="mb-4">Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam.</h4>
          <h4 class="mb-4">Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti ex nec te sit tale atqui abhorreant luptatum conclusionemque cum quo et wisi ignota semper.</h4>
          <div class="d-lg-flex flex-wrap mb-4">
            <div class="col-lg-6 mb-3">
              <h5><i class="fa-regular fa-check me-2"></i>Te est consul graeco.</h5>
            </div>
            <div class="col-lg-6 mb-3">
              <h5><i class="fa-regular fa-check me-2"></i>Te est consul graeco.</h5>
            </div>
            <div class="col-lg-6 mb-3">
              <h5><i class="fa-regular fa-check me-2"></i>Te est consul graeco.</h5>
            </div>
            <div class="col-lg-6 mb-3">
              <h5><i class="fa-regular fa-check me-2"></i>Te est consul graeco.</h5>
            </div>
            <div class="col-lg-6 mb-3">
              <h5><i class="fa-regular fa-check me-2"></i>Te est consul graeco.</h5>
            </div>
            <div class="col-lg-6 mb-3">
              <h5><i class="fa-regular fa-check me-2"></i>Te est consul graeco.</h5>
            </div>
          </div>
          <div class="d-flex align-items-center"><a class="btn btn-black me-4" href=""> Book Now</a><a class="btn btn-outline-black" href="{{route('contact_us')}}"> Contact Us</a></div>
        </div>
      </div>
      <div class="row align-items-end justify-content-between mb-5">
        <div class="col-lg-6"> 
          <h2 class="font-itc section-title mb-3">Our Services</h2>
          <h4>Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti ex nec sit tale atqui abhorreant luptatum conclu</h4>
        </div>
        <div class="col-lg-auto text-end"><a class="btn btn-black" href="">View All </a></div>
      </div>
      <div class="row"> 
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href="" data-bs-toggle="modal" data-bs-target="#ModalService"><img src="assets/images/product/img-01.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-02.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-03.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-04.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-04.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-01.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-02.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-03.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="widget_item-product mb-4">
            <div class="widget_item-image"><a href=""><img src="assets/images/product/img-04.png" alt=""/></a></div>
            <div class="widget_item-content py-3">
              <div class="d-flex align-items-center mb-3">
                <div class="col">
                  <h3><a class="text-dark" href="">Small and Cozy Double product </a></h3>
                </div>
                <div class="col-auto">
                  <h3 class="font-itc-bold">100$</h3>
                </div>
              </div>
              <h5 class="mb-4">This product is located on the first floor of a traditional Dalmatian house above the reception</h5><a class="btn btn-outline-black" href=""> Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end:: section -->
@endsection