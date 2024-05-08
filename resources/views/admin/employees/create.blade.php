@extends('layout.adminLayout')
@php
    $page_name = 'employees';
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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/opening_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquerysctipttop.css') }}">
    <style type="text/css">
        .input-controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        #searchInput {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 50%;
        }

        #searchInput:focus {
            border-color: #4d90fe;
        }
    </style>
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
                        <h3 class="fw-bold m-0">{{ __('common.add') }}{{ __('siderbar.' . $page_name) }}</h3>
                    </div>
                    <!--end::Card title-->
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end">
                            {{-- <a href="{{route('admin.'.$page_name.'.index')}}" class="btn btn-light btn-active-light-primary me-2">{{__('common.discard')}}</a> --}}
                            <button type="submit" class="btn btn-primary"
                                onclick="document.querySelector('#form_category #save-btn').click()">{{ __('common.save_changes') }}</button>
                        </div>
                    </div>
                </div>
                <div class="portlet-body ">
                    <form autocomplete="off" id="form_category" method="post"
                        action="{{ route('admin.' . $page_name . '.store') }}" enctype="multipart/form-data"
                        class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label
                                        class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('common.active') }}</label>
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input autocomplete="off" @if (old('status', 1)) checked @endif
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
                                            placeholder="{{ __('common.name') }}" value="{{ old('name') }}">
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
                                        <textarea id="description" name="description" class="form-control kt_docs_tinymce_hidden"
                                            placeholder="{{ __('common.description') }}">{!! old('description') !!}</textarea>
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
                                                <option value="{{ $option->id }}"
                                                    @if (in_array($option->id, old('services', []))) selected="selected" @endif>
                                                    {{ $option->title }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7  mb-7">Add Services to a employee.</div>
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
                                        @livewire('upload-file', ['fileId' => old('image', ''), 'input' => 'image'])
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

                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="{{ route('admin.' . $page_name . '.index') }}" type="reset"
                        class="btn btn-light btn-active-light-primary me-2">{{ __('common.discard') }}</a>
                    <button type="submit" class="btn btn-primary" id="save-btn">{{ __('common.save_changes') }}</button>
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
        (function($) {
            $("#day-schedule").dayScheduleSelector({
                days: ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'],
                interval: {{$settings->working_hours_interval}},
                startTime: '{{$settings->working_hours_start}}',
                endTime: '{{$settings->working_hours_end}}'
            });
            $("#day-schedule").on('selected.artsy.dayScheduleSelector', function(e, selected) {
            });
            $("#day-schedule").data('artsy.dayScheduleSelector').deserialize({
                <?php
                $items = $item->working_times ?? [];
                if (count($items) > 0) {
                    foreach ($items as $time) {
                        $day_times = \App\Models\WorkingTimes::where('day', $time->day)->where('employee_id', $item->id)->get();
                        echo "'" . $time->day . "':[";
                        foreach ($day_times as $d_time) {
                            echo "['" . $d_time->hour_from . "', '" . $d_time->hour_to . "'],";
                        }
                        echo '],';
                    }
                }
                ?>
            });
            $('#save-btn').click(function(event) {
                event.preventDefault();
                let d = $("#day-schedule").data('artsy.dayScheduleSelector').serialize();
                $('input[name="times"]').val(JSON.stringify(d));
                $('#form_category').submit();
            });
        })($);
    </script>
@endsection
