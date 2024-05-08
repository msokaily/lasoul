@extends('layout.adminLayout')
@php
    $page_name = 'durations';
@endphp
@section('pageTitle')
    {{ucwords(__('siderbar.'.$page_name))}}
@endsection
@section('title')
    <a href="{{route('admin.'.$page_name.'.index')}}">{{ucwords(__('siderbar.'.$page_name))}}</a>
@endsection

@section('css_file_upload')
    <link href="{{admin_assets('/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('css')
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
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="card mb-5 mb-xl-10 portlet light bordered">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{__('common.add')}}{{__('siderbar.'.$page_name)}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <div class="portlet-body ">
                    <form  autocomplete="off" id="form_category" method="post" action="{{route('admin.'.$page_name.'.store')}}"
                        enctype="multipart/form-data" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="for">
                                        For
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <!--begin::Select2-->
                                        <select required name="for" data-hide-search="true" data-control="select2" data-placeholder="{{__('common.select_option')}}" id="for" class="form-select form-select-solid">
                                            <option></option>
                                            <option value="options" @if(old('for') == "options") selected="selected" @endif>Options</option>
                                            <option value="services" @if(old('for') == "services") selected="selected" @endif>Services</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="duration_type">
                                        Type
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <!--begin::Select2-->
                                        <select required name="duration_type" data-hide-search="true" data-control="select2" data-placeholder="{{__('common.select_option')}}" id="duration_type" class="form-select form-select-solid">
                                            <option></option>
                                            <option value="days" @if(old('duration_type') == "days") selected="selected" @endif>Days</option>
                                            <option value="minutes" @if(old('duration_type') == "minutes") selected="selected" @endif>Minutes</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="value">
                                        {{__('common.value')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input id="value" type="text" name="value" required class="form-control" autocomplete="off" title="Please enter Value" placeholder="{{__('common.value')}}" value="{{ old('value') }}">
                                    </div>
                                </div>
                            </fieldset>

                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{route('admin.'.$page_name.'.index')}}" type="reset"
                                class="btn btn-light btn-active-light-primary me-2">{{__('common.discard')}}</a>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('common.save_changes')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
