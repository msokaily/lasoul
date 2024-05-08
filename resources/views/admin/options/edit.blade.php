@extends('layout.adminLayout')
@php
    $page_name = 'options';
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
                        <h3 class="fw-bold m-0">{{__('common.edit')}}{{__('siderbar.'.$page_name)}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                
                <div class="portlet-body ">
                    <form  autocomplete="off" id="form_category" method="post" action="{{route('admin.'.$page_name.'.update', [$item->id])}}"
                        enctype="multipart/form-data" class="form-horizontal" role="form">
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="form-body form card-body border-top p-9">

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="title">
                                        {{__('common.title')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input id="title" type="text" name="title" required class="form-control" autocomplete="off" title="Please enter Tag" placeholder="{{__('common.title')}}" value="{{ old('title', $item->title) }}">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label
                                        class="col-lg-2 col-form-label fw-semibold fs-6">Does have Durations?</label>
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->is_durations == 1) checked @endif
                                                class="form-check-input w-45px h-30px" type="checkbox" id="is_durations"
                                                name="is_durations">
                                            <label class="form-check-label" for="is_durations"></label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5" id="durations_div" @if($item->is_durations != 1) style="display:none" @endif>
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label">
                                        Durations with prices
                                    </label>
                                    <div class="add-remove-rows col-md-10 sortable">
                                        @if(count($item->option_durations))
                                            @foreach ($item->option_durations as $item_duration)
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
                            
                            <div  id="normal_price">

                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label" for="price">
                                            {{__('common.price')}}
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="price" step=".01" type="number" name="price" required class="form-control" autocomplete="off" title="Please enter Price" placeholder="{{__('common.price')}}" value="{{ $item->price }}">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label" for="bundle_price">
                                            {{__('common.bundle_price')}}
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="bundle_price" step=".01" type="number" name="bundle_price" required class="form-control" autocomplete="off" title="Please enter Price" placeholder="{{__('common.bundle_price')}}" value="{{ $item->bundle_price }}">
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="mt-5">
                                    <div class="input-group input-group-solid mb-5">
                                        <label class="col-sm-2 form-label" for="price">
                                            {{__('common.local_price')}}
                                            <span class="symbol">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="local_price" step=".01" type="number" name="local_price" required class="form-control" autocomplete="off" title="Please enter Price" placeholder="{{__('common.local_price')}}" value="{{ $item->local_price }}">
                                        </div>
                                    </div>
                                </fieldset>

                            </div>

                            
                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label
                                        class="col-lg-2 col-form-label fw-semibold fs-6">Does have Quantity?</label>
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->is_quantity == 1) checked @endif
                                                class="form-check-input w-45px h-30px" type="checkbox" id="is_quantity"
                                                name="is_quantity">
                                            <label class="form-check-label" for="is_quantity"></label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset id="quantity_div" class="mt-5" style="display: @if ($item->is_quantity == 1) block; @else none; @endif ">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="quantity">
                                        {{__('common.quantity')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input id="quantity" type="number" name="quantity" class="form-control" autocomplete="off" title="Please enter Quantity" placeholder="{{__('common.quantity')}}" value="{{ $item->quantity }}">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="image">
                                        Upload Image
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        @livewire('upload-file', ['fileId' => $item->image ?? '', 'input' => 'image', 'multiple' => false, 'fileSize' => 108576])  
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="mt-5">
                                <div class="input-group input-group-solid mb-5">
                                    <label class="col-sm-2 form-label" for="description">
                                        {{__('common.description')}}
                                        <span class="symbol">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <textarea required class="form-control" rows="10" name="description">{{$item->description}}</textarea> 
                                    </div>
                                </div>
                            </fieldset>
                            
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <a href="{{route('admin.'.$page_name.'.index')}}" type="reset" class="btn btn-light btn-active-light-primary me-2">{{__('common.discard')}}</a>
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('common.save_changes')}}</button>
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
        $(document).ready(function() {
            var $checkbox = $("#is_quantity");
            var $quantityInput = $("#quantity");
            var $quantityDiv = $("#quantity_div");
        
            toggleQuantityInput();
        
            $checkbox.on("change", function() {
                toggleQuantityInput();
            });
        
            function toggleQuantityInput() {
                if ($checkbox.is(":checked")) {
                    $quantityInput.show().prop("disabled", false);
                    $quantityDiv.show();
                } else {
                    $quantityDiv.hide();
                    $quantityInput.hide().prop("disabled", true);
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            var $checkbox_duration = $("#is_durations");
            var $durationsDiv = $("#durations_div");
            var $normalPrice = $("#normal_price");
        
            toggleQuantityInput_duration();
        
            $checkbox_duration.on("change", function() {
                toggleQuantityInput_duration();
            });
        
            function toggleQuantityInput_duration() {
                if ($checkbox_duration.is(":checked")) {
                    $durationsDiv.find('input, select').prop('disabled', false);
                    $durationsDiv.show();
                    $normalPrice.hide();
                    
                    $("#price").hide().prop("disabled", true);
                    $("#bundle_price").hide().prop("disabled", true);
                    $("#local_price").hide().prop("disabled", true);
                } else {
                    $durationsDiv.hide();
                    $durationsDiv.find('input, select').prop('disabled', true);
                    $normalPrice.show();

                    $("#price").show().prop("disabled", false);
                    $("#bundle_price").show().prop("disabled", false);
                    $("#local_price").show().prop("disabled", false);
                }
            }
        });
    </script>

@endsection
