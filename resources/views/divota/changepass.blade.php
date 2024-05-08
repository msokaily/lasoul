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
            style="background: url(assets/images/bg-contact.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="text-center">
                <h5 class="mb-2 text-white font-italic text-uppercase">Welcome to happiness</h5>
                <h3 class="section-title font-news-bold text-white font-italic">{{ $page_name }}</h3>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-2 mb-4">
                    @include('divota.includes.account_sidemenu')
                </div>
                <div class="col-lg-10">
                    <h3 class="section-title title-small font-itc mb-3">Change Password</h3>
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
                    <div class="border p-4">
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="mb-2 text-muted">Current password </label>
                                <div class="input-icon icon-right">
                                    <input class="form-control" type="password" name="old_password"
                                        placeholder="Enter your current password" required />
                                    <div class="icon text-muted toggle-pass"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-2 text-muted">New password </label>
                                <div class="input-icon icon-right">
                                    <input class="form-control" type="password" name="password"
                                        placeholder="Enter your new password" required />
                                    <div class="icon text-muted toggle-pass"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-2 text-muted">Confirm new password </label>
                                <div class="input-icon icon-right">
                                    <input class="form-control" type="password" name="password_confirmation"
                                        placeholder="Confirm your new password" required />
                                    <div class="icon text-muted toggle-pass"><i class="fa-solid fa-eye"></i></div>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <button class="btn btn-black" type="submit">UPDATE </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end:: section -->
@endsection
