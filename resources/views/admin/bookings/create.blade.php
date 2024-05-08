@extends('layout.adminLayout')
@php
    $page_name = 'bookings';
@endphp
@section('pageTitle')
    Create | {{ ucwords(__('siderbar.' . $page_name)) }}
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

@section('no_white_bg')
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
    <form class="form">
        @csrf
        <!--begin::Aside column-->
        {{-- <div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10"> --}}
        <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10 mb-5">
            <!--begin::Order details-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Order Details</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="d-flex flex-row gap-10">
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Payment Method</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" name="payment_type" required>
                                <option></option>
                                <option value="Terminal" @if (old('payment_type') == 'Terminal') selected @endif>Terminal</option>
                                <option value="Cash" @if (old('payment_type') == 'Cash') selected @endif>Cash</option>
                                <option value="Online" @if (old('payment_type') == 'Online') selected @endif>Online</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the payment method of the order to process.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Order Date</label>
                            <!--end::Label-->
                            <!--begin::Editor-->
                            <input name="created_at" placeholder="Select a date" class="form-control mb-2 date-input"
                                value="{{ old('created_at') }}" />
                            <!--end::Editor-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set the date of the order or leave it empty to current date.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row">
                            <!--begin::Label-->
                            <label class="required form-label">Customer Type</label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select customer-type-select" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" name="customer_type" required>
                                <option value="standard" selected>Standard</option>
                                <option value="local">Local</option>
                                <option value="bundle">Bundle</option>
                            </select>
                            <!--end::Select2-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Select Customer Type to use the proper price.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Buttons group-->
                        <div class="fv-row d-flex flex-column">
                            <!--begin::Button-->
                            <button type="button" name="add_paid_order" class="btn btn-success add_paid_order">
                                <span class="indicator-label">Add Paid Order</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7 mb-2">Add confirmed and paid order.</div>
                            <!--end::Description-->
                            <!--begin::Button-->
                            <button type="submit" name="add_unpaid_order" class="btn btn-warning add_unpaid_order">
                                <span class="indicator-label">Add UnPaid Order</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7 mb-2">Add confirmed but unpaid order.</div>
                            <!--end::Description-->
                            <!--begin::Button-->
                            <a href="{{ route('admin.' . $page_name . '.index') }}" class="btn btn-light">Cancel</a>
                            <!--end::Button-->
                        </div>
                        <!--end::Buttons group-->
                    </div>
                </div>
                <!--end::Card header-->
            </div>
            <!--end::Order details-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
            <!--begin::Order details-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Cart Items</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                @livewire('admin.create-order', [
                    'accommodations' => $accommodations,
                    'services' => $services,
                    'events' => $events,
                    'accommodations_cart' => $accommodations_cart ?? [],
                    'services_cart' => $services_cart ?? [],
                    'events_cart' => $events_cart ?? [],
                ])
                <!--end::Card body-->
            </div>
            <!--end::Order details-->
            <!--begin::Order details-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Guest Info</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::User-->
                    <div class="d-flex flex-column gap-5 gap-md-7 mb-5">
                        <!--begin::Input group-->
                        <div class="row">
                            <div class="col-md-6">
                                <!--begin::Label-->
                                <label class="required form-label">Select User</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select options="true" name="user_id"
                                    data-control="select2" data-placeholder="{{ __('common.select_option') }}"
                                    id="user_id" class="form-select form-select-solid">
                                    <option value="-1">Only a Guest</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                            @if ($user->id == old('user_id')) selected="selected" @endif>
                                            {{ $user->full_name }}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::User-->
                    <!--begin::Address-->
                    <div class="d-flex flex-column gap-5 gap-md-7 user-info-div">
                        <!--begin::Title-->
                        <div class="fs-3 fw-bold mb-n2">Personal</div>
                        <!--end::Title-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column flex-md-row gap-5">
                            <div class="fv-row flex-row-fluid">
                                <!--begin::Label-->
                                <label class="required form-label">First Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control" name="first_name" placeholder="Ex. John"
                                    value="{{ old('first_name') }}" />
                                <!--end::Input-->
                            </div>
                            <div class="flex-row-fluid">
                                <!--begin::Label-->
                                <label class="required form-label">Last Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control" name="last_name" placeholder="Ex. Wick"
                                    value="{{ old('last_name') }}" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Title-->
                        <div class="fs-3 fw-bold mb-n2">Address</div>
                        <!--end::Title-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column flex-md-row gap-5">
                            <div class="fv-row flex-row-fluid">
                                <!--begin::Label-->
                                <label class="required form-label">Address</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control" name="address" placeholder="Address"
                                    value="{{ old('address') }}" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column flex-md-row gap-5">
                            <div class="flex-row-fluid">
                                <!--begin::Label-->
                                <label class="form-label">City</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control" name="city" placeholder="Ex. Zurich"
                                    value="{{ old('city') }}" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row flex-row-fluid">
                                <!--begin::Label-->
                                <label class="required form-label">Postcode</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control" name="postal_code" placeholder="Ex 23000"
                                    value="{{ old('postal_code') }}" />
                                <!--end::Input-->
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Address-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Order details-->
        </div>
        <!--end::Main column-->
    </form>
@endsection
@section('script')
    <!--begin::Custom Javascript(used for this page only)-->
    {{-- <script src="{{ admin_assets('assets/js/custom/apps/ecommerce/sales/save-order.js') }}"></script> --}}
    <script src="{{ admin_assets('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ admin_assets('assets/js/custom/widgets.js') }}"></script>
    {{-- <script src="{{ admin_assets('assets/js/custom/apps/chat/chat.js') }}"></script> --}}
    {{-- <script src="{{ admin_assets('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script> --}}
    {{-- <script src="{{ admin_assets('assets/js/custom/utilities/modals/create-app.js') }}"></script> --}}
    {{-- <script src="{{ admin_assets('assets/js/custom/utilities/modals/users-search.js') }}"></script> --}}
    <!--end::Custom Javascript-->
    <script>
        function generateParams() {
            let temp = $('form select, form textarea, form input').serializeArray();
            let params = {};
            temp.forEach(v => {
                params[v.name] = v.value;
            });
            let accommodationsStorage = [];
            try {
                accommodationsStorage = JSON.parse(localStorage.getItem('accommodations_cart')) || [];
            } catch (error) {
                accommodationsStorage = [];
            }
            let servicesStorage = [];
            try {
                servicesStorage = JSON.parse(localStorage.getItem('services_cart')) || [];
            } catch (error) {
                servicesStorage = [];
            }
            let eventsStorage = [];
            try {
                eventsStorage = JSON.parse(localStorage.getItem('events_cart')) || [];
            } catch (error) {
                eventsStorage = [];
            }
            let cart = {
                accommodations: accommodationsStorage,
                services: servicesStorage,
                events: eventsStorage
            };
            params.cart_items = cart;
            params._token = '{{ csrf_token() }}';
            return params;
        }
        function clearCart() {
            localStorage.removeItem('accommodations_cart');
            localStorage.removeItem('services_cart');
            localStorage.removeItem('events_cart');
        }
        $("body").on('click', ".add_paid_order", (e) => {
            const params = generateParams();
            params.status = 'paid';
            $.post("{{ route('admin.' . $page_name . '.store') }}", params, (resp) => {
                if (resp?.status) {
                    clearCart();
                    Swal.fire(
                        "{{ __('common.success') }}",
                        resp?.message,
                        "success"
                    );
                    window.location.href = resp?.redirect;
                } else {
                    Swal.fire(
                        "{{ __('common.error') }}",
                        resp?.message,
                        "error"
                    );
                }
            });
        });
        $("body").on('click', ".add_unpaid_order", (e) => {
            const params = generateParams();
            params.status = 'unpaid';
            $.post("{{ route('admin.' . $page_name . '.store') }}", params, (resp) => {
                if (resp?.status) {
                    clearCart();
                    Swal.fire(
                        "{{ __('common.success') }}",
                        resp?.message,
                        "success"
                    );
                    window.location.href = resp?.redirect;
                } else {
                    Swal.fire(
                        "{{ __('common.error') }}",
                        resp?.message,
                        "error"
                    );
                }
            });
        });

        function checkUserSelect(value) {
            if (value === undefined) {
                value = $('select#user_id').val();
            }
            let div = $('.user-info-div');
            if (value == -1) {
                $(div).find('input').prop('disabled', false);
                $(div).find('input').val('');
            } else {
                $(div).find('input').prop('disabled', true);
                let url = "{{route('admin.users.show', '_ID_')}}".replace('_ID_', value);
                $.get(url, {}, function(data) {
                    $(div).find('input[name="first_name"]').val(data?.first_name);
                    $(div).find('input[name="last_name"]').val(data?.last_name);
                    $(div).find('input[name="address"]').val(data?.address);
                    $(div).find('input[name="city"]').val(data?.city || '');
                    $(div).find('input[name="postal_code"]').val(data?.postal_code || '');
                });
            }
        }

        $('body').on('change', 'select#user_id', (e) => {
            checkUserSelect(e.target.value);
        });
        checkUserSelect();
    </script>
@endsection
