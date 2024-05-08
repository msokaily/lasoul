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
    <!-- start:: section -->
    <section class="section wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row mb-5 pb-lg-4">
                <div class="col-8" style="position: relative;">
                    {{-- <div id="map"></div> --}}
                    @foreach ($locations as $loc)
                        <a href="{{ route('accommodations') }}?location={{ $loc->id }}"
                            class="location-pointer {{ $loc->id == request('location') ? 'location-visited' : '' }}"
                            style="left: {{ $loc->left_shift }}%; top: {{ $loc->top_shift }}%">
                            <div>
                                <div>{{ $loc->message }}</div>
                            </div>
                        </a>
                    @endforeach
                    <img src="{{ asset('assets/images/divota_map.png') }}" width="100%" alt="Divota Map">
                </div>
                <div class="col d-flex align-items-center" style="cursor: default;">
                    <h2><strong>Click on location to view accommodations</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="mb-2 font-itc-bold home-title title-small">Still Got a Question?</h1>
                    <h5>A series of open-house hotels inspired by the diversity and originality of the streets and scenes
                        that surround us.</h5>
                    <form class="style-form" action="">
                        <div class="form-group">
                            <label class="mb-2">Name </label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Email Address </label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Phone Number </label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Message </label>
                            <textarea class="form-control" rows="6"> </textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-black" type="submit">Submit </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h3 class="mb-4 font-itc-bold">Contact details</h3>
                    <h5 class="mb-3 text-muted">785 15h Street, Office 478 New York, 81566</h5>
                    <h5 class="mb-3 text-muted">info@email.com</h5>
                    <h5 class="mb-3">+1 800 555 25 69</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
