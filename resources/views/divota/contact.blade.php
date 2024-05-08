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

@push('style')
    <style>
        .bg-header {
            height: 300px;
        }
    </style>
@endpush

@section('content')
    <section class="section wow fadeInUp py-0" data-wow-delay="0.1s">
        <div class="bg-header"
            style="background: url({{ asset('assets/images/bg-contact.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
                <h3 class="section-title font-news-bold mb-4 text-white font-italic">Contact Us</h3>
                <h5 class="mb-2 text-white font-italic text-uppercase">Keep in touch with our professionals</h5>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pe-lg-5 pt-lg-5">
                    <div class="mb-4">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $key => $error)
                                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                            @endforeach
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success success-msg-alert" role="alert">{{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <h1 class="mb-2 font-itc-bold home-title title-small">Still Got a Question?</h1>
                    <h5>A series of open-house hotels inspired by the diversity and originality of the streets and scenes
                        that surround us.</h5>
                </div>
                <div class="col-lg-6">
                    <form class="style-form" action="{{ route('contact_us.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="mb-2">Full Name </label>
                            <input class="form-control" type="text" name="full_name" value="{{ old('full_name') }}" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Email Address </label>
                            <input class="form-control" type="text" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Phone Number </label>
                            <input class="form-control" type="tel" name="mobile" value="{{ old('mobile') }}" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Title </label>
                            <input class="form-control" type="text" name="title" value="{{ old('title') }}" />
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Message </label>
                            <textarea class="form-control" rows="6" name="details">{{ old('details') }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-black" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
