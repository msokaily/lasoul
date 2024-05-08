@extends('layout.adminLayout')
@php
    $page_name = 'accommodations';
@endphp
@section('pageTitle')
    {{ucwords(__('siderbar.'.request('type', 'apartments')))}} | {{ucwords(__('siderbar.'.$page_name))}}
@endsection
@section('title')
    <a href="{{route('admin.'.$page_name.'.index')}}?type={{request('type')}}">{{ucwords(__('siderbar.'.$page_name))}} - {{ucwords(__('siderbar.'.request('type', 'apartments')))}}</a>
@endsection

@section('css_file_upload')
    <link href="{{admin_assets('/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('css')
    <style type="text/css"> 
        .app-main > .d-flex:first-child {
            background-color: #fff;
        }

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
    <div class="row" >
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div style="background-color: #f5f8fa; padding-bottom: 30px;" class="card mb-5 mb-xl-10 portlet light bordered">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{__('common.edit')}}{{__('siderbar.'.$page_name)}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                
                <div id="kt_app_content_container" style="background-color: #f5f8fa" class="app-container container-xxl">
                    <!--begin::Form-->
                    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework" id="form_category" method="post" action="{{route('admin.'.$page_name.'.update', [$item->id])}}?type={{request('type')}}"
                        enctype="multipart/form-data"  role="form">
                        @method('PUT')
                        {{ csrf_field() }}
                        <!--begin::Aside column-->
                        <input type="hidden" name="type" value="{{request()->type}}">
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Thumbnail</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px" style="background-image: url({{$item->image}})"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the {{$product}} thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Thumbnail settings-->
                            <!--begin::Status-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Status</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        @if($item->status == 1)
                                            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                        @else
                                            <div class="rounded-circle bg-danger w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                        @endif
                                    </div>
                                    <!--begin::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Select2-->
                                    <select name="status" data-hide-search="true" required data-control="select2" data-placeholder="{{__('common.select_option')}}" id="status" class="form-select form-select-solid">
                                        <option></option>
                                        <option value="1" @if($item->status == 1) selected="selected" @endif>Published</option>
                                        <option value="0" @if($item->status == 0) selected="selected" @endif>Inactive</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Status-->
                            <!--begin::Category & tags-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>{{$product}} Details</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label">Location</label>
                                    <!--end::Label-->
                                    <!--begin::Select2-->
                                    <select required name="location" required data-control="select2" data-placeholder="{{__('common.select_option')}}" id="location" class="form-select form-select-solid">
                                        <option></option>
                                        @foreach ($locations as $location)
                                            <option value="{{$location->id}}" @if($location->id == $item->location_id) selected="selected" @endif>{{$location->title}}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 mb-7">Add {{$product}} to a Location.</div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Space</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control" value="{{$item->space}}" name="space" type="text">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7  mb-7"></div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Adult Capacity</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control" value="{{$item->adult_capacity}}" name="adult_capacity" type="number">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7  mb-7"></div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Kids Capacity</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control" value="{{$item->kids_capacity}}" name="kids_capacity" type="number">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7  mb-7"></div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Bathrooms</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control" value="{{$item->bathroom}}" name="bathroom" type="number">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7  mb-7"></div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    <label class="form-label d-block">Beds</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-control" value="{{$item->beds}}" name="beds" type="number">
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Category & tags-->
                            <!--begin::Category & tags-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>{{$product}} Options</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 row">
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->balcony == 1) checked @endif class="form-check-input w-45px h-30px" type="checkbox" id="balcony" name="balcony">
                                            <label class="form-check-label" for="balcony">Balcony</label>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->terrace == 1) checked @endif class="form-check-input w-45px h-30px" type="checkbox" id="terrace" name="terrace">
                                            <label class="form-check-label" for="terrace">Terrace</label>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="card-body pt-0 row">
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->baby_cot == 1) checked @endif class="form-check-input w-45px h-30px" type="checkbox" id="baby_cot" name="baby_cot">
                                            <label class="form-check-label" for="baby_cot">Baby Cot</label>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="col-md-6 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->twin_bed == 1) checked @endif class="form-check-input w-45px h-30px" type="checkbox" id="twin_bed" name="twin_bed">
                                            <label class="form-check-label" for="terrace">Twin Bed</label>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="card-body pt-0 row">
                                    
                                    <!--begin::Input group-->
                                    <div class="col-md-12 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->ground_floor == 1) checked @endif class="form-check-input w-45px h-30px" type="checkbox" id="ground_floor" name="ground_floor">
                                            <label class="form-check-label" for="terrace">Ground Floor</label>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="card-body pt-0 row">
                                    <!--begin::Input group-->
                                    <div class="col-md-12 d-flex align-items-center">
                                        <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                            <input @if ($item->washing_machine == 1) checked @endif class="form-check-input w-45px h-30px" type="checkbox" id="washing_machine" name="washing_machine">
                                            <label class="form-check-label" for="washing_machine">Washing Machine</label>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Category & tags-->
                            <!--begin::Category & tags-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Additional Options</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 row">
                                    <!--begin::Input group-->
                                    <!--begin::Label-->
                                    {{-- <label class="form-label">Amenities Tags</label> --}}
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select options="true" name="options[]" data-close-on-select="false" multiple
                                    data-control="select2" data-placeholder="{{__('common.select_option')}}" id="options" class="form-select form-select-solid">
                                        <option></option>
                                        @foreach ($options as $option)
                                            <option value="{{$option->id}}" @if(is_array($item->options->pluck('option_id')->toArray()) AND in_array($option->id, $item->options->pluck('option_id')->toArray())) selected="selected" @endif>{{$option->title}} - {{$option->price}}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7  mb-7">Add Options to a {{$product}}.</div>
                                    <!--end::Description-->
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Category & tags-->
                        </div>
                        <!--end::Aside column-->
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                        <!--begin::General options-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>General</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">{{$product}} Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input required type="text" name="title" class="form-control mb-2" placeholder="Product name" value="{{$item->title}}">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <!--end::Description-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                <!--end::Input group-->
                                                 <!--begin::Input group-->
                                                 <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">{{$product}} Number</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input required type="text" name="number" class="form-control mb-2" placeholder="Product name" value="{{$item->number}}">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <!--end::Description-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div>
                                                    <!--begin::Label-->
                                                    <label class="form-label">Description</label>
                                                    <!--end::Label-->
                                                    <!--begin::Description-->
                                                    <textarea name="description" id="kt_docs_tinymce_hidden" required>{!!$item->description!!}</textarea>
                                                    {{-- <textarea class="form-control mb-2" rows="10">{!!$item->description!!}</textarea> --}}
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::General options-->
                                        <!--begin::Pricing-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Pricing</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Base Price</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input required type="number" step=".01" name="price" class="form-control mb-2" placeholder="Product price" value="{{$item->price}}">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <!--end::Description-->
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Bundle Price</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" step=".01" name="bundle_price" class="form-control mb-2" placeholder="Product bundle price" value="{{$item->bundle_price}}">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <!--end::Description-->
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Local Price</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="number" step=".01" name="local_price" class="form-control mb-2" placeholder="Product local price" value="{{$item->local_price}}">
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Pricing-->
                                        <!--begin::Tags-->
                                        <div class="card card-flush py-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Tags</h2>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <!--begin::Label-->
                                                <label class="form-label">Amenities Tags</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select tags="true"  name="amenities_tags[]"  data-close-on-select="false" multiple
                                                data-control="select2" data-placeholder="{{__('common.select_option')}}" id="amenities_tags" class="form-select form-select-solid">
                                                    <option></option>
                                                    @foreach ($amenities_tags as $tag)
                                                        <option value="{{$tag->id}}" @if(in_array($tag->id, $item_amenities_tags)) selected="selected" @endif>{{$tag->title}}</option>
                                                    @endforeach
                                                </select>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7  mb-7">Add amenities tags to a {{$product}}.</div>
                                                <!--end::Description-->
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <!--begin::Label-->
                                                <label class="form-label d-block">Details Tags</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select  name="details_tags[]"  data-close-on-select="false" multiple
                                                data-control="select2" data-placeholder="{{__('common.select_option')}}" id="details_tags" class="form-select form-select-solid">
                                                    <option></option>
                                                    @foreach ($details_tags as $tag)
                                                        <option value="{{$tag->id}}" @if(in_array($tag->id, $item_details_tags)) selected="selected" @endif>{{$tag->title}}</option>
                                                    @endforeach
                                                </select>
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7  mb-7">Add details tags to a {{$product}}.</div>
                                                <!--end::Description-->
                                                <!--end::Input group-->
                                            </div>                                      
                                        </div>
                                        <!--end::Tags-->
                                        <!--begin::Media-->
                                        <div class="card card-flush py-4">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Images</h2>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Upload Images</label>
                                                    @livewire('upload-file', ['fileId' => $item->images ?? '', 'input' => 'images', 'multiple' => true, 'fileSize' => 108576])  
                                                </div>
                                            </div>                                      
                                        </div>
                                        <!--end::Media-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <a href="{{route('admin.'.$page_name.'.index')}}?type={{request('type')}}" type="reset" class="btn btn-light btn-active-light-primary me-2">{{__('common.discard')}}</a>
                                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('common.save_changes')}}</button>
                            </div>
                        </div>
                        <!--end::Main column-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
{{-- CKEditor --}}
<script>
    tinymce.init({
        selector: "#kt_docs_tinymce_hidden", height : "480",
        menubar: false,
        toolbar: ["styleselect | fontsizeselect",
            "undo redo | cut copy paste | bold italic | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | advlist | autolink | lists charmap | preview"],
        plugins : "advlist  link image lists charmap print preview code"
    });
</script>
{{-- CKEditor --}}

@endsection
