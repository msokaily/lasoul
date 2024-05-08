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
    <section class="section wow fadeInUp pb-4" data-wow-delay="0.1s">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-9 mx-auto">
                    <div class="text-center">
                        <h3 class="section-title font-news-bold mb-4">Our {{ $page_name }}</h3>
                        {{-- <h3>The neighbourhood Veli Varoš was once the home of farm labourers. Even today one can sense the spirit of Split as it used to be in this exceptionally preserved old neighbourhood of the town.</h3> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row gx-0"> 
      <div class="col-12"><img class="w-100" src="assets/images/img-accomendations.png" alt=""/></div>
    </div> --}}
        <div class="container mt-4">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="border p-4">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-title title-small mb-3">Filter By:</h3>
                            </div>
                        </div>
                        <form action="" method="get">
                            <div class="row align-items-start">
                                <div class="col-md-4">
                                  <div class="row">
                                    <div class="form-group col-md">
                                        <label class="mb-2">Date From</label>
                                        <div class="input-icon icon-right">
                                            <input class="form-control datetimepicker_2" name="date_from" value="{{ request('date_from') }}" type="text"
                                                placeholder="Choose" />
                                            <div class="icon"> <i class="fa-light fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md">
                                        <label class="mb-2">Date To</label>
                                        <div class="input-icon icon-right">
                                            <input class="form-control datetimepicker_2" name="date_to" value="{{ request('date_to') }}" type="text"
                                                placeholder="Choose" />
                                            <div class="icon"> <i class="fa-light fa-calendar"></i></div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="mb-2">Price</label>
                                        <select class="form-select form-control select2" name="price_order">
                                            <option hidden="hidden" value="">Choose </option>
                                            <option value="asc" {{ request('price_order') == 'asc' ? 'selected' : '' }}>Low to High</option>
                                            <option value="desc" {{ request('price_order') == 'desc' ? 'selected' : '' }}>High to Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="mb-2">Options</label>
                                        <select class="form-select form-control select2 select-multi" data-close-on-select="false" name="features[]" placeholder="Choose options" aria-placeholder="Choose options" multiple>
                                          <option value="" hidden="hidden">Choose</option>
                                            @foreach ($features as $key => $value)
                                                <option value="{{ $key }}" {{ in_array($key, request('features', [])) ? 'selected' : '' }}>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label class="mb-2">Location</label>
                                        <select class="form-select form-control select2" name="location" placeholder="Choose Location" aria-placeholder="Choose Location">
                                          <option value="" hidden="hidden">Choose</option>
                                            @foreach ($locations as $key => $value)
                                                <option value="{{ $value->id }}" {{ request('location') == $value->id ? 'selected' : '' }}>{{ $value->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-auto">
                                    <div class="form-group">
                                        <div class="row">
                                          <label class="mb-2">Action</label>
                                        </div>
                                        <button class="btn btn-black">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-md-6">
                        <div class="widget_item-product mb-4">
                            <div class="widget_item-image"><a href="{{ route($item->type, [$item->slug]) }}"
                                    data-bs-toggles="modal" data-bs-target="#ModalRoom" data-object="{{$item->toJson()}}"><img src="{{ $item->image }}"
                                        alt="{{ $item->title }}" /></a></div>
                            <div class="widget_item-content py-3">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="col">
                                        <h3 class="font-news-bold"><a class="text-dark"
                                                href="{{ route($item->type, [$item->slug]) }}" data-bs-toggle="modal"
                                                data-bs-target="#ModalRoom" data-object="{{$item->toJson()}}">{{ $item->title }}</a></h3>
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="font-itc-bold">{{ $item->price }} {{ $settings->currency }}</h3>
                                    </div>
                                </div>
                                <h5 class="mb-3">Up to {{ $item->adult_capacity }} Adults & {{ $item->kids_capacity }}
                                    Kids • {{ $item->beds }} Beds • {{ $item->space }}</h5>
                                <h5 class="mb-4">{{ truncateString($item->description) }}</h5><a
                                    class="btn btn-outline-black" href="{{ route($item->type, [$item->slug]) }}"> Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
