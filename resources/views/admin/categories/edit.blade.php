@extends('layout.adminLayout')
@php
    $page_name = 'categories';
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
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{ __('common.edit') }}{{ __('siderbar.' . $page_name) }}</h3>
                    </div>
                    <!--end::Card title-->
                </div>

                <div class="portlet-body ">
                    <form autocomplete="off" id="form_category" method="post"
                        action="{{ route('admin.' . $page_name . '.update', [$item->id]) }}" enctype="multipart/form-data"
                        class="form-horizontal" role="form">
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">

                            <input type="hidden" name="type" value="{{ request()->type }}">
                            @foreach ($available_locales as $key => $lang)
                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label" for="name_{{ $key }}">
                                            {{ __('common.name') }} ({{$lang['name']}})
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="name_{{ $key }}" type="text"
                                                name="name[{{ $key }}]" required class="form-control"
                                                autocomplete="off" title="Please category name in {{ $lang['name'] }}"
                                                placeholder="{{ __('common.name') }} ({{$lang['name']}})" value="{{ $item->translate('name', $key) }}">
                                        </div>
                                    </div>
                                </fieldset>
                            @endforeach

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="parent_id">
                                        {{ __('common.parent_cat') }}
                                        {{-- <span class="symbol">*</span> --}}
                                    </label>
                                    <div class="col-md-6">
                                        <select data-control="select2" id="parent_id" name="parent_id"
                                            class="form-select form-select-solid">
                                            <option value="">{{ __('common.select') }}</option>
                                            @foreach ($categories as $one)
                                                <option @if ($item->parent_id == $one->id) selected @endif
                                                    value="{{ $one->id }}"> {{ $one->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="status">
                                        {{ __('common.status') }}
                                        {{-- <span class="symbol">*</span> --}}
                                    </label>
                                    <div class="col-md-6">
                                        <select data-control="select2" id="status" name="status"
                                            class="form-select form-select-solid">
                                            @foreach ([(object)['id' => 1, 'name' => 'Active'], (object)['id' => 0, 'name' => 'InActive']] as $one)
                                                <option @if (old('status', $item->status) == $one->id) selected @endif
                                                    value="{{ $one->id }}"> {{ $one->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <hr>

                            <!--begin::Media-->
                            <fieldset class="mt-5">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label">Upload Category Thumbnail (Photo)</label>
                                    <div style="width: 300px;">
                                        @livewire('upload-file', ['fileId' => old('image', $item->image) ?? '', 'input' => 'image', 'multiple' => false, 'required' => false, 'fileSize' => 158576])
                                    </div>
                                </div>
                            </fieldset>
                            <!--end::Media-->

                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{ route('admin.' . $page_name . '.index') }}" type="reset"
                                class="btn btn-light btn-active-light-primary me-2">{{ __('common.discard') }}</a>
                            <button type="submit" class="btn btn-primary"
                                id="kt_account_profile_details_submit">{{ __('common.save_changes') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
