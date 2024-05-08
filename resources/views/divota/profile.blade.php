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
            height: 250px;
        }
    </style>
@endpush

@section('content')
    <!-- start:: section -->
    <section class="section wow fadeInUp py-0" data-wow-delay="0.1s">
        <div class="bg-header"
            style="background: url({{ asset('assets/images/bg-contact.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
                <h5 class="mb-2 text-white font-italic text-uppercase">Welcome to happiness</h5>
                <h3 class="section-title font-news-bold mb-4 text-white font-italic">Your Account</h3>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-2 mb-4">
                    @include('divota.includes.account_sidemenu')
                </div>
                <div class="col-lg-10">
                    <h3 class="section-title title-small font-itc mb-3">My Account</h3>
                    <div>
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
                        <form action="{{route('profile.update')}}" method="post">
                            @csrf
                            <div class="border p-4 mb-4">
                                <h4 class="mb-2"><b>Personal Info</b></h4>
                                <div class="row">
                                    <div class="form-group col-md">
                                        <label class="mb-2 text-muted">First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="first_name"
                                            value="{{ $user->first_name }}" placeholder="First Name"
                                            required />
                                    </div>
                                    <div class="form-group col-md">
                                        <label class="mb-2 text-muted">Last Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="last_name"
                                            value="{{ $user->last_name }}" placeholder="Last Name"
                                            required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md">
                                        <label class="mb-2 text-muted">Eamil <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email"
                                            value="{{ $user->email }}" placeholder="Ex. john@example.com"
                                            required />
                                    </div>
                                    <div class="form-group col-md">
                                        <label class="mb-2 text-muted">Phone Number </label>
                                        {{-- <div class="input-group"> --}}
                                        {{-- <div class="input-group-prepend"><span class="input-group-flag d-flex"><img
                                                src="assets/images/flag.png" alt="" /></span><span
                                            class="input-group-text px-1 py-0">+20</span><img src="assets/images/"
                                            alt="" /></div> --}}
                                        <input class="form-control" type="tel" name="mobile"
                                            value="{{ $user->mobile ?? '' }}" placeholder="Ex. +417 1111 11 11" />
                                        {{-- </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="mb-2 text-muted">OIB </label>
                                        <input class="form-control" type="text" name="oib"
                                            value="{{ $user->oib ?? '' }}" placeholder="Ex. 67845678934"
                                             />
                                    </div>
                                </div>
                            </div>
                            <div class="border p-4 mb-4">
                                <h4 class="mb-2"><b>Address Info</b></h4>
                                <div class="row">
                                    <div class="form-group col-md">
                                        <label class="mb-2 text-muted">Country </label>
                                        <input class="form-control" type="text" name="country"
                                            value="{{ old('country', $user->country) }}" placeholder="Ex. Croatia" />
                                    </div>
                                    <div class="form-group col-md">
                                        <label class="mb-2 text-muted">City </label>
                                        <input class="form-control" type="text" name="city"
                                            value="{{ old('city', $user->city) }}" placeholder="Ex. Zagreb" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md">
                                        <label class="mb-2 text-muted">Address </label>
                                        <input class="form-control" type="text" name="address"
                                            value="{{ old('address', $user->address) }}"
                                            placeholder="street_name house_number [apartment] [floor]" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-2 text-muted">Postal Code </label>
                                        <input class="form-control" type="text" name="postal_code"
                                            value="{{ old('postal_code', $user->postal_code) }}" placeholder="Ex. 23000" />
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <button class="btn btn-black" type="submit">Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
