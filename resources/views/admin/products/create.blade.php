@extends('layout.adminLayout')
@php
    $page_name = 'products';
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
                        <h3 class="fw-bold m-0">{{ __('common.add') }}{{ __('siderbar.' . $page_name) }}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <div class="portlet-body ">
                    <form autocomplete="off" id="form_category" method="post"
                        action="{{ route('admin.' . $page_name . '.store') }}" enctype="multipart/form-data"
                        class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">
                            <input type="hidden" name="type" value="{{ request()->type }}">
                            <div class="row">
                                <div class="col-12 mb-5 required">
                                    {{ __('common.name') }}
                                </div>
                                @foreach ($available_locales as $key => $lang)
                                    <div class="col">
                                        <fieldset>
                                            <div class="input-group input-group-solid mb-5">
                                                <input id="name_{{ $key }}" type="text"
                                                    name="name[{{ $key }}]" required class="form-control"
                                                    autocomplete="off" title="Please product name in {{ $lang['name'] }}"
                                                    placeholder="{{ __('common.name') }} ({{ $lang['name'] }})"
                                                    value="{{ old("name.$key") }}">
                                            </div>
                                        </fieldset>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-12 mb-5">
                                    {{ __('common.description') }}
                                </div>
                                @foreach ($available_locales as $key => $lang)
                                    <div class="col">
                                        <fieldset>
                                            <div class="input-group input-group-solid mb-5">
                                                <textarea id="description_{{ $key }}" type="text" name="description[{{ $key }}]" required
                                                    class="form-control" autocomplete="off" title="Please product description in {{ $lang['name'] }}"
                                                    placeholder="{{ __('common.description') }} ({{ $lang['name'] }})" rows="6">{{ old("description.$key") }}</textarea>
                                            </div>
                                        </fieldset>
                                    </div>
                                @endforeach
                            </div>

                            <hr>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label required" for="cat_id">
                                        {{ __('common.category') }}
                                    </label>
                                    <div class="col-md-6">
                                        <select data-control="select2" id="cat_id" name="cat_id"
                                            class="form-select form-select-solid" required>
                                            <option value="">{{ __('common.select') }}</option>
                                            @foreach ($categories as $one)
                                                <option @if (old('cat_id') === $one->id) selected @endif
                                                    value="{{ $one->id }}"> {{ $one->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <hr>

                            <fieldset class="mt-5">
                                <label class="col-sm-2 form-label required" for="price">
                                    {{ __('common.price') }}
                                </label>
                                <div class="input-group input-group-solid mb-5" style="max-width: 200px">
                                    <input id="price" type="number" step="0.1"
                                        name="price" required class="form-control"
                                        autocomplete="off" title="Please product price"
                                        placeholder="{{ __('common.price') }}"
                                        value="{{ old("price") }}">
                                </div>
                            </fieldset>

                            <hr>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label required" for="status">
                                        {{ __('common.status') }}
                                    </label>
                                    <div class="col-md-6">
                                        <select data-control="select2" id="status" name="status"
                                            class="form-select form-select-solid">
                                            @foreach ([(object)['id' => 1, 'name' => 'Active'], (object)['id' => 0, 'name' => 'InActive']] as $one)
                                                <option @if (old('status') === $one->id) selected @endif
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
                                    <label class="required form-label">Upload Product Thumbnail (Photo)</label>
                                    <div style="width: 300px;">
                                        @livewire('upload-file', ['fileId' => old('image') ?? '', 'input' => 'image', 'multiple' => false, 'required' => true, 'fileSize' => 158576])
                                    </div>
                                </div>
                            </fieldset>
                            <!--end::Media-->

                            <hr>

                            <!--begin::Media-->
                            <fieldset class="mt-5">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="form-label">Upload Product Slider Media (Photos, Videos)</label>
                                    @livewire('upload-file', ['fileId' => old('slider') ?? '', 'input' => 'slider', 'type' => 'media', 'multiple' => true, 'fileSize' => 158576])
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
