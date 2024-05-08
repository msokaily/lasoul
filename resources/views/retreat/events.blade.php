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
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="border p-4">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="section-title title-small mb-3">Filter By:</h3>
                            </div>
                        </div>
                        <form action="{{ route('events') }}" method="get">
                            <div class="row align-items-end">
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label class="mb-2">Month</label>
                                        <select class="form-select form-control border select2" name="month">
                                            <option hidden="hidden" value="">Any time </option>
                                            @php
                                                $now = now();
                                                $months = [];
                                                for ($i = 0; $i < 5; $i++) {
                                                    $months[] = [
                                                        'number' => $now->format('m'),
                                                        'name' => $now->format('M'),
                                                    ];
                                                    $now->addMonth();
                                                }
                                            @endphp
                                            @foreach ($months as $month)
                                                <option value="{{ $month['number'] }}"
                                                    @if (request('month') == $month['number']) selected @endif>{{ $month['number'] }}
                                                    -
                                                    {{ $month['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label class="mb-2">Event Type</label>
                                        <select class="form-select form-control border select2" name="event_type">
                                            <option value="" hidden="hidden">All </option>
                                            @foreach ($event_types as $type)
                                                <option value="{{ $type->id }}"
                                                    @if (request('event_type') == $type->id) selected @endif>{{ $type->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-auto">
                                    <div class="form-group">
                                        <button class="btn btn-black px-5">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h2 class="section-title font-itc-bold">{{ $selected_event_type }} Events</h2>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    @foreach ($events as $item)
                        <div class="widget_item-event">
                            <div class="widget_item-image"><img class="w-100"
                                    src="{{ $item->image_url->url }}" alt="{{$item->title}}" />
                            </div>
                            <div class="widget_item-content">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="col">
                                        <h2 class="widget_item-title font-itc-bold">{{$item->title}}</h2>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="widget_item-price">{{$item->price}} {{settings('currency')}}</h2>
                                    </div>
                                </div>
                                <h5 class="widget_item-desc mb-4">{{ truncateString($item->description) }}</h5>
                                <div class="d-flex align-items-center pt-3">
                                    <a class="btn btn-outline-black me-2">Book now </a>
                                    <a class="btn btn-link-black" href="{{route('event', $item->id)}}">Read More </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end:: section -->
@endsection
