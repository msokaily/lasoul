@extends('layout.adminLayout')
@php
    $page_name = 'services';
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
                        class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">

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
                                    <label
                                        class="col-lg-2 col-form-label fw-semibold fs-6">Is it a Class?</label>
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input
                                                class="form-check-input w-45px h-30px" type="checkbox" id="is_class"
                                                name="is_class">
                                            <label class="form-check-label" for="is_class"></label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div id="classes_div">

                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label">
                                            Classes Times
                                        </label>
                                        <div class="add-remove-rows col-md-10 sortable">
                                            @if(is_array(old('class_times')) AND count(old('class_times')))
                                                @foreach (old('class_times') as $class_time)
                                                    <div class="col-md-10 col-md-offset-2 mt-5 add-push-row row">
                                                        <div class="col-md-3">
                                                            <label for="weekday">{{__('common.weekday')}}</label>
                                                            <select data-control="select2" name="class_times[weekday][]" class="form-select form-select-solid item-product">
                                                                <option value="">{{__('common.select')}} </option>
                                                                @foreach ($weekdays as $weekday)
                                                                    <option @if($class_time->weekday == $weekday) selected @endif value="{{$weekday}}"> {{$weekday}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="from">{{__('common.from')}}</label>
                                                            <input autocomplete="off" type="time" name="class_times[fromTime][]" class="form-control item-quantity"
                                                                placeholder="{{__('common.from')}}" value="{{$class_time->fromTime}}" />
                                                        </div>
                                                        <div class="col-md-3 toTime">
                                                            <label for="to">{{__('common.to')}}</label>
                                                            <input autocomplete="off" type="time" name="class_times[toTime][]" class="form-control item-quantity"
                                                                placeholder="{{__('common.to')}}" value="{{$class_time->toTime}}" />
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-10 col-md-offset-2 mt-5 add-push-row row">
                                                    <div class="col-md-3">
                                                        <label for="weekday">{{__('common.weekday')}}</label>
                                                        <select data-control="select2" name="class_times[weekday][]" class="form-select form-select-solid item-product">
                                                            <option value="">{{__('common.select')}} </option>
                                                            @foreach ($weekdays as $weekday)
                                                                <option value="{{$weekday}}"> {{$weekday}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="from">{{__('common.from')}}</label>
                                                        <input autocomplete="off" type="time" name="class_times[fromTime][]" class="form-control item-quantity"
                                                            placeholder="{{__('common.from')}}"  />
                                                    </div>
                                                    <div class="col-md-3 toTime">
                                                        <label for="to">{{__('common.to')}}</label>
                                                        <input autocomplete="off" type="time" name="class_times[toTime][]" class="form-control item-quantity"
                                                            placeholder="{{__('common.to')}}"  />
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label">
                                            Classes Prices
                                        </label>
                                        <div class="add-remove-rows col-md-10 sortable">
                                            @if(is_array(old('class_prices')) AND count(old('class_prices')))
                                                @foreach (old('class_prices') as $class_price)
                                                    <div class="col-md-10 col-md-offset-2 mt-5 add-push-row row">
                                                        <div class="col-md-3">
                                                            <label for="sessions">Classes Per Week</label>
                                                            <input class="form-control classes_per_week" placeholder="Classes Per Week" type="number" max="4" name="class_prices[sessions][]"  value="{{$class_price->sessions}}">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="price">{{__('common.price')}}</label>
                                                            <input autocomplete="off" step=".01" type="number" name="class_prices[price][]" class="form-control item-quantity"
                                                                placeholder="{{__('common.price')}}" value="{{$class_price->price}}" />
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-10 col-md-offset-2 mt-5 add-push-row row">
                                                    <div class="col-md-3">
                                                        <label for="sessions">Classes Per Week</label>
                                                        <input class="form-control classes_per_week" placeholder="Classes Per Week" type="number" max="4" name="class_prices[sessions][]">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="price">{{__('common.price')}}</label>
                                                        <input autocomplete="off" step=".01" type="number" name="class_prices[price][]" class="form-control item-quantity"
                                                            placeholder="{{__('common.price')}}"/>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </fieldset>
                                
                            </div>
                            
                            

                            <div id="durations_div">
                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label" for="lead_time">
                                            Lead Time
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="lead_time" type="number" step="1" name="lead_time"
                                                required class="form-control" autocomplete="off"
                                                title="Please enter lead time for the session"
                                                placeholder="{{ __('common.lead_time') }}"
                                                value="{{ old('lead_time') }}">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label">
                                            Durations with prices
                                        </label>
                                        <div class="add-remove-rows col-md-10 sortable">
                                            @if(is_array(old('item_durations')) AND count(old('item_durations')))
                                                @foreach (old('item_durations') as $item_duration)
                                                    <div class="col-md-10 col-md-offset-2 mt-5 add-push-row row">
                                                        <div class="col-md-3">
                                                            <label for="duration_id">{{__('common.duration')}}</label>
                                                            <select data-control="select2" name="item_durations[duration_id][]" class="form-select form-select-solid item-product">
                                                                <option value="">{{__('common.select')}} </option>
                                                                @foreach ($durations as $duration)
                                                                    <option @if($item_duration->duration_id == $duration->id) selected @endif value="{{$duration->id}}"> {{$duration->value}} {{$duration->duration_type}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="price">{{__('common.price')}}</label>
                                                            <input autocomplete="off" type="number" step=".01" name="item_durations[price][]" class="form-control item-quantity"
                                                                placeholder="{{__('common.price')}}" value="{{$item_duration->price}}" />
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="bundle_price">{{__('common.bundle_price')}}</label>
                                                            <input autocomplete="off" type="number" step=".01" name="item_durations[bundle_price][]" class="form-control item-quantity"
                                                                placeholder="{{__('common.bundle_price')}}" value="{{$item_duration->bundle_price}}" />
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="local_price">{{__('common.local_price')}}</label>
                                                            <input autocomplete="off" type="number" step=".01" name="item_durations[local_price][]" class="form-control item-quantity"
                                                                placeholder="{{__('common.local_price')}}" value="{{$item_duration->local_price}}" />
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-md-10 col-md-offset-2 mt-5 add-push-row row">
                                                    <div class="col-md-3">
                                                        <label for="duration_id">{{__('common.duration')}}</label>
                                                        <select data-control="select2" name="item_durations[duration_id][]" class="form-select form-select-solid item-product">
                                                            <option value="">{{__('common.select')}} </option>
                                                            @foreach ($durations as $duration)
                                                                <option value="{{$duration->id}}"> {{$duration->value}} {{$duration->duration_type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="price">{{__('common.price')}}</label>
                                                        <input autocomplete="off" type="number" step=".01" name="item_durations[price][]" class="form-control item-quantity"
                                                            placeholder="{{__('common.price')}}"/>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="bundle_price">{{__('common.bundle_price')}}</label>
                                                        <input autocomplete="off" type="number" step=".01" name="item_durations[bundle_price][]" class="form-control item-quantity"
                                                            placeholder="{{__('common.bundle_price')}}" />
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="local_price">{{__('common.local_price')}}</label>
                                                        <input autocomplete="off" type="number" step=".01" name="item_durations[local_price][]" class="form-control item-quantity"
                                                            placeholder="{{__('common.local_price')}}" />
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            
                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="price">
                                        {{__('common.max_customers')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input min="1" id="max_customers" type="number" name="max_customers" required class="form-control" autocomplete="off" title="Please enter Price" placeholder="{{__('common.max_customers')}}" value="{{ old('max_customers') }}">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="categories">
                                        {{ __('common.categories') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select tags="true"  name="categories[]"  data-close-on-select="false" multiple
                                        data-control="select2" data-placeholder="{{__('common.select_option')}}" id="categories" class="form-select form-select-solid">
                                            <option></option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
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
                                                <option
                                                    value="{{ $one->id }}"> {{ $one->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="employees">
                                        {{ __('common.employees') }}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-10">
                                        <!--begin::Input-->
                                        <select options="true" name="employees[]" data-close-on-select="false" multiple
                                            data-control="select2" data-placeholder="{{ __('common.select_option') }}"
                                            id="employees" class="form-select form-select-solid">
                                            <option></option>
                                            @foreach ($employees as $employee)
                                                @php
                                                    $employeesIds = old('employees');
                                                @endphp
                                                <option value="{{ $employee->id }}"
                                                    @if (is_array($employeesIds) and in_array($employee->id, $employeesIds)) selected="selected" @endif>
                                                    {{ $employee->name }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7  mb-7">Select service employees.</div>
                                        <!--end::Description-->
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="location">
                                        Service Image
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-3">
                                        @livewire('upload-file', ['fileId' => old('image', ''), 'input' => 'image'])
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
    
    @include('admin.'.$page_name.'.add_remove_rows_code')
    <script>
        $(function() {
            $('input[name="start_at"], input[name="end_at"]').flatpickr({
                minDate: new Date()
            });
            $('input[name="start_at"]').change(function(e) {
                $('input[name="end_at"]').flatpickr({
                    minDate: e?.target?.value ?? new Date()
                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            var $checkbox_is_class = $("#is_class");
            var $class_div = $("#classes_div");
            var $durations_div = $("#durations_div");
        
            toggleQuantityInput_duration();
        
            $checkbox_is_class.on("change", function() {
                toggleQuantityInput_duration();
            });
        
            function toggleQuantityInput_duration() {
                if ($checkbox_is_class.is(":checked")) {
                    $class_div.show();
                    $durations_div.hide();

                    $("#lead_time").hide().prop("disabled", true);
                } else {
                    $class_div.hide();
                    $durations_div.show();

                    $("#lead_time").show().prop("disabled", false);
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            function updateOptions() {
                var numberOfClasses = $('select[name^="class_times[weekday]"]').length;
                $('.classes_per_week').attr('max', numberOfClasses);
            }

            updateOptions();

            $('#classes_div .add-push-add-btn').on('click', function() {
                updateOptions();
            });
                        
            $('#kt_app_content_container').on('click', '.btn-danger', function() {
                setTimeout(function() {
                    updateOptions();
                }, 1000);
            });
        });
    </script>
@endsection
