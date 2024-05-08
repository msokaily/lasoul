 <!-- start:: modal -->  
 <div style="display: none" class="modal fade" id="ModalService-{{$service->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-body p-4 p-lg-5">
            <div class="mb-3 d-flex align-items-center justify-content-between">
                <h2 class="font-itc-bold">Book Service</h2>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex align-items-center mb-3"> 
                <div class="col-auto"> 
                <div class="modal-image-service"><img src="{{$service->image_url->url}}" alt=""/></div>
                </div>
                <div class="col ms-3">
                <h3 class="font-news-bold">{{$service->title}}</h3>
                {{-- <h3>100$</h3> --}}
                </div>
            </div>
            <div class="mb-4"> 
                <h4 class="mb-3">{!!$service->description!!}</h4>
            </div>
            @if($service->is_class == 1)
                <div class="d-lg-flex"> 
                    <div class="col-lg-6">
                        <h3 class="mb-3">Prices:</h3>
                        <div class="pricing-options">
                            @foreach ($service->class_prices as $class_price)
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <label>
                                        <input type="radio" name="selected_price" value="{{$class_price->id}}">
                                        <span>{{$class_price->sessions}} times a week: {{$class_price->price}} {{$settings->currency}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-3">Classes Times:</h3>
                        @foreach ($service->class_times as $class_time)
                            <div class="class_times_select mb-3">
                                <input type="checkbox" name="selected_time" value="{{$class_time->id}}">
                                <h5 class="font-news-bold">{{$class_time->weekday}}:</h5>
                                <h5>{{date("g:i A", strtotime($class_time->fromTime))}} – {{date("g:i A", strtotime($class_time->toTime))}}</h5>
                            </div>
                        @endforeach
                        <button class="btn btn-black w-100">Book</button>
                    </div>
                </div>
            @else
                <div class="d-lg-flex"> 
                    <div class="col-lg-6">
                        <h3 class="mb-3">Select a Duration:</h3>
                        <div class="pricing-options">
                            @foreach ($service->service_durations as $service_duration)
                                @if(isset($service_duration->duration))
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <label>
                                        <input @if($service_duration->duration->value == 30) checked="checked" @endif type="radio" id="{{$service_duration->id}}" name="selected_price" value="{{$service_duration->duration_id}}">
                                        <span>{{$service_duration->duration->value}} {{$service_duration->duration->duration_type}}:  {{$service_duration->price}} {{$settings->currency}}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-3">Select the Time:</h3>
                        <div class="service_duration_select mb-3">
                            <h5 class="font-news-bold">Date:</h5>
                            <div class="input-icon icon-right">
                                <input class="form-control datetimepicker_1" type="text" placeholder="Choose"/>
                                <div class="icon"> <i class="fa-light fa-calendar"></i></div>
                            </div>
                            <h5 class="font-news-bold">Time:</h5>
                            <select name="status" data-hide-search="false" data-control="select2" data-placeholder="{{__('common.select_option')}}" id="status" class="form-control form-select form-select-solid">
                                <option>13:00</option>
                                <option>13:30</option>
                                <option disabled>14:00</option>
                                <option>14:30</option>
                            </select>
                        </div>
                        <button class="btn btn-black w-100">Book</button>
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
</div>
<!-- end:: modal -->  

