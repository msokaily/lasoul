@extends('layout.adminLayout')
@php
    $page_name = 'bookings';
@endphp
@section('pageTitle')
    {{ ucwords(__('siderbar.' . $page_name)) }}
@endsection
@section('title')
    <a href="{{ route('admin.' . $page_name . '.index') }}">{{ ucwords(__('siderbar.' . $page_name)) }}</a>
@endsection

@section('css_file_upload')
    <link href="{{ admin_assets('/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('css')
@endsection
@section('filter')
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-2 gap-lg-3" style="justify-content: flex-end;">
        <!--begin::Top Buttons-->
        <div class="m-0">
            <!--begin::Add user-->
            <a href="{{ route('admin.' . $page_name . '.index') }}" class="btn btn-sm btn-info">Return to
                {{ $page_name }}</a>
            <!--end::Add user-->
        </div>
        <!--end::Top Buttons-->
    </div>
    <!--end::Actions-->
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="card mb-5 mb-xl-10 portlet light bordered">

                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{ __('common.edit') }}{{ __('siderbar.' . $page_name) }}</h3>
                    </div>
                    <!--end::Card title-->

                    <!--end::Card title-->
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            {{-- <a href="{{ route('admin.' . $page_name . '.index') }}" type="reset"
                                class="btn btn-light btn-active-light-primary me-2">{{ __('common.discard') }}</a> --}}
                            <button type="submit" class="btn btn-primary"
                                onclick="document.querySelector('#form_category #save-btn').click()">{{ __('common.save_changes') }}</button>
                        </div>
                    </div>
                </div>

                <div class="portlet-body ">
                    <form autocomplete="off" id="form_category" method="post"
                        action="{{ route('admin.' . $page_name . '.update', [$item->id]) }}" enctype="multipart/form-data"
                        class="form-horizontal" role="form">
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label
                                        class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('common.active') }}</label>
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input autocomplete="off" @if (old('status', $item->status)) checked @endif
                                                class="form-check-input w-45px h-30px" type="checkbox" id="status"
                                                name="status">
                                            <label class="form-check-label" for="status"></label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="name">
                                        {{ __('common.full_name') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" name="name" required class="form-control"
                                            autocomplete="off" title="Please enter employee name"
                                            placeholder="{{ __('common.name') }}" value="{{ old('name', $item->name) }}">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="description">
                                        {{ __('common.description') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-10">
                                        <textarea required id="description" name="description" class="form-control kt_docs_tinymce_hidden"
                                            placeholder="{{ __('common.description') }}">{!! old('description', $item->description) !!}</textarea>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="services">
                                        {{ __('common.services') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-10">
                                        <!--begin::Input-->
                                        <select options="true" name="services[]" data-close-on-select="false" multiple
                                            data-control="select2" data-placeholder="{{ __('common.select_option') }}"
                                            id="services" class="form-select form-select-solid">
                                            <option></option>
                                            @foreach ($services as $option)
                                                @php
                                                    $servicesIds = $item->services->pluck('service_id')->toArray();
                                                @endphp
                                                <option value="{{ $option->id }}"
                                                    @if (is_array($servicesIds) and in_array($option->id, $servicesIds)) selected="selected" @endif>
                                                    {{ $option->title }} - {{ $option->price }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7  mb-7">Select employee's services.</div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="location">
                                        Employee Image
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-3">
                                        @livewire('upload-file', ['fileId' => old('image', $item->image), 'input' => 'image'])
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="location">
                                        Working Times
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="hidden" name="times" value="">
                                        <div class="form-body form card-body border-top p-9">
                                            <div id="day-schedule" class="mt-5"></div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{ route('admin.' . $page_name . '.index') }}" type="reset"
                                class="btn btn-light btn-active-light-primary me-2">{{ __('common.discard') }}</a>
                            <button type="submit" class="btn btn-primary"
                                id="save-btn">{{ __('common.save_changes') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/index.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.change_card_status').click(function(e) {
                e.preventDefault();
                const card_id = $(this).data('card-id');
                const confirmed = window.confirm(
                    'Are you sure you want to change the status of this card?');
                if (confirmed) {
                    const url = "/admin/change_card_status?card_id=" + card_id;
                    window.location.href = url;
                }
            });

            @if (session()->has('scroll_to_cards') && session('scroll_to_cards') == true)
                const cardsTable = $('#cards-table'); // Replace 'cards-table' with the ID of your table
                $('html, body').animate({
                    scrollTop: cardsTable.offset().top
                }, 'slow');
            @endif
        });
    </script>

    <script>
        (function($) {
            function updateTimes() {
                let d = $("#day-schedule").data('artsy.dayScheduleSelector').serialize();
                $('input[name="times"]').val(JSON.stringify(d));
            }
            $("#day-schedule").dayScheduleSelector({
                days: ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'],
                interval: 30,
                startTime: '08:00',
                endTime: '24:00'
            });
            $("#day-schedule").on('selected.artsy.dayScheduleSelector', function(e, selected) {
                updateTimes();
            });
            $("#day-schedule").data('artsy.dayScheduleSelector').deserialize({
                <?php
                $items = $item->working_times;
                if (count($items) > 0) {
                    foreach ($items as $item) {
                        $day_times = \App\Models\WorkingTimes::where('day', $item->day)->get();
                        echo "'" . $item->day . "':[";
                        foreach ($day_times as $d_time) {
                            echo "['" . $d_time->hour_from . "', '" . $d_time->hour_to . "'],";
                        }
                        echo '],';
                    }
                }
                ?>
            }).then(() => {
                updateTimes();
            });
        })($);
    </script>
@endsection