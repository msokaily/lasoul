<{{ $tag }} class="content-tag {{ $class }}"
    style="@if ($type == 'image' && !$inline) display: inline-block @endif {{ $style }}"
    @if ($tag_attributes)
        @if (is_string($tag_attributes))
            {!! $tag_attributes !!}
        @elseif (is_array($tag_attributes))
            @foreach ($tag_attributes as $attrKey => $attr)
                {!! $attrKey !!}="{!! $attr !!}"
            @endforeach
        @endif
    @endif
    >
    @if ($editMode)
        <button type="button" wire:click='edit' class="btn btn-sm btn-warning edit-content-btn skip-main">
            <i wire:loading.remove wire:target='edit' class="fa-regular fa-pen-to-square">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                </svg>
            </i>
            <i wire:loading.inline wire:target='edit'>
                <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100"
                    enable-background="new 0 0 0 0" xml:space="preserve">
                    <path fill="#000"
                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                            from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                    </path>
                </svg>
            </i>
        </button>
    @endif
    @if ($html && !empty($html))
        {!! $htmlContent !!}
    @elseif ($type == 'text')
        {!! nl2br($value && $value != '' ? $value : $default) !!}
    @endif
    </{{ $tag }}>
    @push('js')
        <script>
            function refreshSliders() {
                try {
                    let slides = @js($value ?? $default);
                    let count = 2;
                    if (Array.isArray(slides) && slides?.length > 0) {
                        if (slides?.length <= 2) {
                            count = slides.length;
                        } else {
                            count = 3;
                        }
                    }
                    var swiperImages = new Swiper(".swiper-images", {
                        slidesPerView: count,
                        speed: 1500,
                        spaceBetween: 20,
                        loop: true,
                        centeredSlides: true,
                        // gestures: 1,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: true,
                        },
                        navigation: {
                            nextEl: ".swiper-images .swiper-button-next",
                            prevEl: ".swiper-images .swiper-button-prev",
                        },
                    });
                    var swiperImages2 = new Swiper(".swiper-images-2", {
                        slidesPerView: count,
                        speed: 1500,
                        spaceBetween: 20,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: ".swiper-action-product .swiper-next",
                            prevEl: ".swiper-action-product .swiper-prev",
                        },
                        breakpoints: {
                            0: {
                                slidesPerView: 1.5,
                                spaceBetween: 20,
                            },
                            767: {
                                slidesPerView: 2.5,
                                spaceBetween: 30,
                            },
                            992: {
                                spaceBetween: 40,
                                slidesPerView: 3.5,
                            },
                        },
                    });
                    var swiperBrand = new Swiper(".swiper-brand", {
                        slidesPerView: 1,
                        speed: 1500,
                        spaceBetween: 20,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: ".swiper-action-product .swiper-next",
                            prevEl: ".swiper-action-product .swiper-prev",
                        },
                        breakpoints: {
                            0: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            767: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                            992: {
                                spaceBetween: 40,
                                slidesPerView: 4,
                            },
                        },
                    });
                    swiperImages.wsRestart();
                    swiperImages2.wsRestart();
                    swiperBrand.wsRestart();
                } catch (error) {}
            }
            function cmContentConditions() {
                let cmContentItems = $('[cm-content]');
                for (let i = 0; i < cmContentItems.length; i++) {
                    const cmContentItem = cmContentItems[i];
                    const conditionTxt = $(cmContentItem).attr('cm-content')?.toString()?.trim();
                    if (conditionTxt) {
                        const condition = eval(conditionTxt);
                        if (condition[0]) {
                            if (condition[0] == 'remove') {
                                if (condition[2]) { // If true then remove the element if the value is not empty
                                    if (condition[1] && condition[1]?.toString()?.trim()) {
                                        console.log({not_empty: condition});
                                        $(cmContentItem).remove();
                                    }
                                } else {
                                    if (!condition[1] || !(condition[1]?.toString()?.trim())) {
                                        console.log({empty: condition, operation: 'remove', cmContentItem});
                                        $(cmContentItem).remove();
                                    }
                                }
                            }
                        }
                    }

                }
            }
            document.addEventListener('livewire:initialized', function() {
                @this.on('refresh-sliders', function() {
                    setTimeout(function() {
                        refreshSliders();
                        setTimeout(function() {
                            refreshSliders();
                            @if ($script && isset($script['after_load']))
                                {!! $script['after_load'] !!}
                            @endif
                        }, 1000);
                    }, 500);
                });
                @this.on('refresh-content-component', function() {
                    setTimeout(function() {
                        console.log('refresh content');
                        @if ($script && isset($script['after_load']))
                            {!! $script['after_load'] !!}
                        @endif
                        @if ($script && isset($script['after_update']))
                            console.log({!! $script['after_update'] !!});
                            {!! $script['after_update'] !!}
                        @endif
                        // cmContentConditions();
                    }, 1000);
                });
                if (@this.type == 'images') {
                    @this.dispatch('refresh-sliders');
                }
                setTimeout(function() {
                    @if ($script && isset($script['after_load']))
                        // try {
                            {!! $script['after_load'] !!};
                        // } catch (error) {
                        //     console.log(error);
                        // }
                        @endif
                }, 1000);
            });
        </script>
    @endpush
