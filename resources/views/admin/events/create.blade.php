@extends('layout.adminLayout')
@php
    $page_name = 'events';
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

@section('filter')
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-2 gap-lg-3" style="justify-content: flex-end;">
        <!--begin::Top Buttons-->
        <div class="m-0">
            <!--begin::Add user-->
            <a href="{{ route('admin.' . $page_name . '.index') }}"
                class="btn btn-sm btn-info">Return to {{ $page_name }}</a>
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
                            <button type="submit" class="btn btn-primary" onclick="document.querySelector('#form_category #save-btn').click()">{{ __('common.save_changes') }}</button>
                        </div>
                    </div>
                </div>
                <div class="portlet-body ">
                    <form autocomplete="off" id="form_category" method="post"
                        action="{{ route('admin.' . $page_name . '.store') }}" enctype="multipart/form-data"
                        class="form-horizontal needs-validation" role="form">
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">
                            <input type="hidden" name="type" value="{{ request()->type }}">
                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label
                                        class="col-lg-2 col-form-label fw-semibold fs-6">{{ __('common.active') }}</label>
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input autocomplete="off"
                                                @if (old('status', 1)) checked value="1" @endif
                                                class="form-check-input w-45px h-30px" type="checkbox" id="status"
                                                name="status">
                                            <label class="form-check-label" for="status"></label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="title">
                                        {{ __('common.title') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input id="title" type="text" name="title" required class="form-control"
                                            autocomplete="off" title="Please enter service title"
                                            placeholder="{{ __('common.title') }}" value="{{ old('title') }}">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="start_at">
                                        {{ __('common.start_at') }}
                                        <span class="symbol">*</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-html="true"
                                            data-bs-content="Select a date."></i>
                                    </label>
                                    <div class="col-md-6">
                                        <input class="form-control form-control-solid date-input"
                                            value="{{ old('start_at') }}" placeholder="Pick date" name="start_at"
                                            id="start_at" />
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="end_at">
                                        {{ __('common.end_at') }}
                                        <span class="symbol">*</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                            data-bs-trigger="hover" data-bs-html="true"
                                            data-bs-content="Select a date."></i>
                                    </label>
                                    <div class="col-md-6">
                                        <input class="form-control form-control-solid date-input"
                                            value="{{ old('end_at') }}" placeholder="Pick date" name="end_at"
                                            id="end_at" />
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
                                    <label class="col-sm-2 form-label" for="price">
                                        {{ __('common.price') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input id="price" type="number" step="1" name="price" required
                                            class="form-control" autocomplete="off" title="Please enter service price"
                                            placeholder="{{ __('common.price') }}" min="0" value="{{ old('price') }}">
                                        <div class="fs-7 fw-semibold text-muted">0 Price = Free event</div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="limit">
                                        {{ __('common.type') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select required data-control="select2" id="limit" name="limit"
                                            class="form-select form-select-solid">
                                            <option value="">{{ __('common.select') }}</option>
                                            <option @if (old('limit') === "accommodation_must") selected @endif value="accommodation_must"> Accommodations are Must</option>
                                            <option @if (old('limit') === "accommodation_optional") selected @endif value="accommodation_optional"> Accommodations are Optional</option>
                                            <option @if (old('limit') === "description") selected @endif value="description"> Just a Description</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="type_id">
                                        {{ __('common.category') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select required data-control="select2" id="type_id" name="type_id"
                                            class="form-select form-select-solid">
                                            <option value="">{{ __('common.select') }}</option>
                                            @foreach ($event_types as $one)
                                                <option @if (old('type_id') === $one->id) selected @endif
                                                    value="{{ $one->id }}"> {{ $one->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="location">
                                        {{ __('common.location') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select required data-control="select2" id="location_id" name="location_id"
                                            class="form-select form-select-solid">
                                            <option value="">{{ __('common.select') }}</option>
                                            @foreach ($locations as $one)
                                                <option @if (old('location_id') === $one->id) selected @endif
                                                    value="{{ $one->id }}"> {{ $one->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="image">
                                        {{ __('common.thumbnail') }}
                                    </label>
                                    <div class="col-md-6">
                                        @livewire('upload-file', ['fileId' => old('image', ''), 'input' => 'image', 'multiple' => false, 'fileSize' => 108576, 'required' => true])
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="images">
                                        {{ __('common.slider_images') }}
                                    </label>
                                    <div class="col-md-10">
                                        @livewire('upload-file', ['fileId' => old('images', []), 'input' => 'images', 'multiple' => true, 'fileSize' => 108576])
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
    <script>
        $(function() {
            $('input[name="start_at"], input[name="end_at"]').flatpickr({
                minDate: new Date()
			});
            $('input[name="start_at"]').change(function (e) { 
                $('input[name="end_at"]').flatpickr({
                    minDate: e?.target?.value ?? new Date()
                });
            });
        });
    </script>
@endsection
