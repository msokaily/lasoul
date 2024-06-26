@extends('layout.webLayout')

@section('title')
    {{__('Home')}}
@endsection

@section('content')
    @livewire('content', [
        'name' => 'home_main_section_content',
        'type' => 'text' /* Types: text, image, images */,
        'editor_title' => 'Main Section Content',
        'tag' => 'section',
        'tag_attributes' => 'id="home" data-id="c48c6d7" data-element_type="section" data-settings=\'{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"true","craftcoffee_ext_is_background_parallax_speed":{"unit":"px","size":0.8000000000000000444089209850062616169452667236328125,"sizes":[]}}\'',
        'class' => 'full-width-item content-editor-inside-btn elementor-section elementor-top-section elementor-element elementor-element-c48c6d7 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle',
        'style' => 'margin-top: 75px; height: calc(100vh - 75px); max-height: 620px;',
        'html' => '<div class="elementor-background-overlay"></div>'.(content_get('home_main_section_content', 'background video') ? '<video cm-content="[\'remove\', \'[__background video]\']" class="home-main-video" muted autoplay loop>
                            <source src="[background video]" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>' : '').'
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6957e71"
                                    data-id="6957e71" data-element_type="column"
                                    data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'>
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-6684a99 elementor-widget elementor-widget-heading" data-id="6684a99"
                                                data-element_type="widget"
                                                data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_translatey":{"unit":"px","size":100,"sizes":[]},"craftcoffee_ext_is_fadeout_animation":"true","craftcoffee_ext_is_fadeout_animation_velocity":{"unit":"px","size":0.299999999999999988897769753748434595763683319091796875,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation_direction":"up"}\'
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">[Text 1 ('.$current_locale.')]</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5e3984a elementor-widget elementor-widget-heading"
                                                data-id="5e3984a"
                                                data-element_type="widget"
                                                data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":100,"sizes":[]},"craftcoffee_ext_is_fadeout_animation":"true","craftcoffee_ext_is_fadeout_animation_velocity":{"unit":"px","size":0.299999999999999988897769753748434595763683319091796875,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation_direction":"up"}\'
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">[Text 2 ('.$current_locale.')]</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2cba262 elementor-widget elementor-widget-heading" data-id="2cba262"
                                                data-element_type="widget"
                                                data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_is_fadeout_animation":"true","craftcoffee_ext_is_fadeout_animation_direction":"down","craftcoffee_ext_is_fadeout_animation_velocity":{"unit":"px","size":0.5,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_infinite":"false"}\'
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">[Text 3 ('.$current_locale.')]</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-95baf5c elementor-widget elementor-widget-heading" data-id="95baf5c"
                                                data-element_type="widget"
                                                data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_is_fadeout_animation":"true","craftcoffee_ext_is_fadeout_animation_direction":"down","craftcoffee_ext_is_fadeout_animation_velocity":{"unit":"px","size":0.5,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":-100,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_infinite":"false"}\'
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">[Text 4 ('.$current_locale.')]</h3>
                                                </div>
                                            </div>
                                            '.(!content_get('home_main_section_content', 'background video') ? '<style cm-content="[\'remove\', \'[__background video]\', true]">
                                                .custom-css-style .elementor-element.elementor-element-c48c6d7:not(.elementor-motion-effects-element-type-background), .custom-css-style .elementor-element.elementor-element-c48c6d7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                                                    background-image: url([background image]);
                                                }
                                            </style>' : '').'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>',
        'fields' => array_merge(
            array_map(function ($lang) {
                return [
                    'type' => 'text',
                    'name' => "Text 1 ($lang)",
                    'default' => '*',
                ];
            }, array_keys($available_locales)),
            [[
                'type' => 'html',
                'only_editor' => true,
                'html' => '<hr>'
            ]],
            array_map(function ($lang) {
                return [
                    'type' => 'text',
                    'name' => "Text 2 ($lang)",
                    'default' => 'The Power of',
                ];
            }, array_keys($available_locales)),
            [[
                'type' => 'html',
                'only_editor' => true,
                'html' => '<hr>'
            ]],
            array_map(function ($lang) {
                return [
                    'type' => 'text',
                    'name' => "Text 3 ($lang)",
                    'default' => 'Coffee',
                ];
            }, array_keys($available_locales)),
            [[
                'type' => 'html',
                'name' => 'ff',
                'only_editor' => true,
                'html' => '<hr>'
            ]],
            array_map(function ($lang) {
                return [
                    'type' => 'text',
                    'name' => "Text 4 ($lang)",
                    'default' => '* feel the real joy *',
                ];
            }, array_keys($available_locales)),
            [
                [
                    'type' => 'html',
                    'only_editor' => true,
                    'html' => '<hr>'
                ],
                [
                    'type' => 'image',
                    'name' => 'background image',
                    'default' => asset('assets/website/upload/barista-making-coffee-F2GU6L8.jpg'),
                    'note' => 'refresh the page after update',
                ],
                [
                    'type' => 'video',
                    'name' => 'background video',
                    // 'default' => asset('assets/website/upload/home-video.mp4'),
                    'note' => 'Video is priority',
                ]
            ],
        ),
    ])
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c087f73 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="c087f73" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bc41ba8"
                    data-id="bc41ba8" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-783cc60 elementor-widget elementor-widget-spacer"
                                data-id="783cc60" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        id="about"
        class="elementor-section elementor-top-section elementor-element elementor-element-0dee37d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="0dee37d" data-element_type="section" data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11b9c38"
                    data-id="11b9c38" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-5d9474c elementor-widget__width-auto elementor-widget elementor-widget-spacer"
                                data-id="5d9474c" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fb4857b elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                data-id="fb4857b" data-element_type="widget"
                                data-settings='{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <img width="360" height="248"
                                            src="{{ asset('assets/website/upload/coffee-bg-3-1-e1592389838494.png') }}"
                                            class="attachment-full size-full" alt="" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                            @livewire('content', [
                                'name' => 'home_second_section_content_1',
                                'type' => 'text' /* Types: text, image, images */,
                                'editor_title' => 'About Us Section Content 1',
                                'tag' => 'section',
                                'class' => 'elementor-section elementor-inner-section elementor-element elementor-element-e84a0e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default',
                                'html' => '<div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-900d959"
                                                        data-id="900d959" data-element_type="column"
                                                        data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'>
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-a9e393d elementor-widget elementor-widget-image"
                                                                    data-id="a9e393d" data-element_type="widget"
                                                                    data-settings=\'{"craftcoffee_ext_is_scrollme":"true","craftcoffee_ext_scrollme_translatey":{"unit":"px","size":60,"sizes":[]},"craftcoffee_ext_scrollme_disable":"mobile","craftcoffee_ext_scrollme_smoothness":{"unit":"px","size":30,"sizes":[]},"craftcoffee_ext_scrollme_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scalez":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="683" height="1024"
                                                                                src="[left image]"
                                                                                class="attachment-large size-large"
                                                                                alt="Close up of Coffee Machine" loading="lazy" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f06fc51"
                                                        data-id="f06fc51" data-element_type="column"
                                                        data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'>
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-80a3390 elementor-widget elementor-widget-heading"
                                                                    data-id="80a3390" data-element_type="widget"
                                                                    data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default" style="color: [text 1 color];">[Text 1 ('.$current_locale.')]</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-7c5423f elementor-widget__width-inherit elementor-absolute elementor-hidden-phone elementor-widget elementor-widget-image"
                                                                    data-id="7c5423f" data-element_type="widget"
                                                                    data-settings=\'{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="350" height="340"
                                                                                src="'.asset('assets/website/upload/coffee-bg-1-e1592388441790.png').'"
                                                                                class="attachment-full size-full" alt=""
                                                                                loading="lazy" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-10812c3 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-heading"
                                                                    data-id="10812c3" data-element_type="widget"
                                                                    data-settings=\'{"_position":"absolute","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}\'
                                                                    data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default" style="color: [title color];">[Title ('.$current_locale.')]</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-de37a31 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                                                    data-id="de37a31" data-element_type="widget"
                                                                    data-settings=\'{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="180" height="443"
                                                                                src="'.asset('assets/website/upload/coffee-bg-3-e1592385684436.png').'"
                                                                                class="attachment-full size-full" alt=""
                                                                                loading="lazy" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>',
                                'fields' => array_merge(
                                    array_map(function ($lang) {
                                        return [
                                            'type' => 'text',
                                            'name' => "Title ($lang)",
                                            'default' => 'OUR PASSIONS',
                                        ];
                                    }, array_keys($available_locales)),
                                    [
                                        [
                                            'type' => 'color',
                                            'name' => "title color",
                                            'default' => '#b1c2a9',
                                        ],
                                        [
                                            'type' => 'html',
                                            'only_editor' => true,
                                            'html' => '<hr>'
                                        ]
                                    ],
                                    array_map(function ($lang) {
                                        return [
                                            'type' => 'textarea',
                                            'name' => "Text 1 ($lang)",
                                            'default' => 'A cup of gourmet coffee shared with a friend is happiness tasted and time well spent.',
                                        ];
                                    }, array_keys($available_locales)),
                                    [
                                        [
                                            'type' => 'color',
                                            'name' => "text 1 color",
                                            'default' => '#000000',
                                        ],
                                        [
                                            'type' => 'html',
                                            'only_editor' => true,
                                            'html' => '<hr>'
                                        ],
                                        [
                                            'type' => 'image',
                                            'name' => 'left image',
                                            'default' => asset('assets/website/upload/close-up-of-coffee-machine-in-cafe-PUW782D-683x1024.jpg'),
                                        ],
                                    ],
                                ),
                            ])
                            @livewire('content', [
                                'name' => 'home_second_section_content_2',
                                'type' => 'text' /* Types: text, image, images */,
                                'editor_title' => 'About Us Section Content 2',
                                'tag' => 'section',
                                'class' => 'content-editor-inside-btn elementor-section elementor-inner-section elementor-element elementor-element-9a66623 elementor-section-boxed elementor-section-height-default elementor-section-height-default',
                                'html' => '<div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-05306e2"
                                            data-id="05306e2" data-element_type="column"
                                            data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-a5ee4c4 elementor-widget elementor-widget-text-editor"
                                                        data-id="a5ee4c4" data-element_type="widget"
                                                        data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                <p style="color: [text 1 color];">
                                                                    [Text 1 ('.$current_locale.')]
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ad1eab2 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="ad1eab2" data-element_type="widget"
                                                        data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator"> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-7467473 elementor-widget elementor-widget-heading"
                                                        data-id="7467473" data-element_type="widget"
                                                        data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                        data-widget_type="heading.default"
                                                        style="text-align: start;">
                                                        <div class="elementor-widget-container">
                                                            <span
                                                                class="elementor-heading-title elementor-size-default" style="color: [text 2 color];">[Text 2 ('.$current_locale.')]</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d3afde9"
                                            data-id="d3afde9" data-element_type="column"
                                            data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-aa30c4d elementor-widget elementor-widget-image"
                                                        data-id="aa30c4d" data-element_type="widget"
                                                        data-settings=\'{"craftcoffee_ext_is_scrollme":"true","craftcoffee_ext_scrollme_translatey":{"unit":"px","size":40,"sizes":[]},"craftcoffee_ext_scrollme_disable":"mobile","craftcoffee_ext_scrollme_smoothness":{"unit":"px","size":30,"sizes":[]},"craftcoffee_ext_scrollme_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scalez":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img width="1024" height="683"
                                                                    src="[right image]"
                                                                    class="attachment-large size-large"
                                                                    alt="Fresh Coffee with Croissant" loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-da9d353 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                                        data-id="da9d353" data-element_type="widget"
                                                        data-settings=\'{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}\'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img width="350" height="333"
                                                                    src="'.asset('assets/website/upload/coffee-bg-4-e1592387391691.png').'"
                                                                    class="attachment-full size-full" alt=""
                                                                    loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>',
                                'fields' => array_merge(
                                    array_map(function ($lang) {
                                        return [
                                            'type' => 'textarea',
                                            'name' => "Text 1 ($lang)",
                                            'default' => 'Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar',
                                        ];
                                    }, array_keys($available_locales)),
                                    [
                                        [
                                            'type' => 'color',
                                            'name' => "text 1 color",
                                            'default' => '#000000',
                                        ],
                                        [
                                            'type' => 'html',
                                            'only_editor' => true,
                                            'html' => '<hr>'
                                        ],
                                    ],
                                    array_map(function ($lang) {
                                        return [
                                            'type' => 'text',
                                            'name' => "Text 2 ($lang)",
                                            'default' => 'CEO & Founder Lasoul Coffee & Burger Boutique',
                                        ];
                                    }, array_keys($available_locales)),
                                    [
                                        [
                                            'type' => 'color',
                                            'name' => "text 2 color",
                                            'default' => '#000000',
                                        ],
                                        [
                                            'type' => 'html',
                                            'only_editor' => true,
                                            'html' => '<hr>'
                                        ],
                                        [
                                            'type' => 'image',
                                            'name' => 'right image',
                                            'default' => asset('assets/website/upload/fresh-coffee-with-croissant-DC7H79J-1024x683.jpg'),
                                        ],
                                    ],
                                ),
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-72155ed elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="72155ed" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-30d0b2d"
                    data-id="30d0b2d" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-ba8a7ff elementor-widget elementor-widget-spacer"
                                data-id="ba8a7ff" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @livewire('content', [
        'name' => 'home_story_section_content',
        'type' => 'text' /* Types: text, image, images */,
        'editor_title' => 'Story Section Content',
        'tag' => 'section',
        'tag_attributes' => 'id="story" data-id="c48c6d7" data-element_type="section" data-settings=\'{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"true","craftcoffee_ext_is_background_parallax_speed":{"unit":"px","size":0.8000000000000000444089209850062616169452667236328125,"sizes":[]}}\'',
        'class' => 'full-width-item content-editor-inside-btn elementor-section elementor-top-section elementor-element elementor-element-ee6c107 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle',
        'html' => '<div class="elementor-background-overlay"></div>
                    <video cm-content="[\'remove\', \'[__background video]\']" class="home-main-video" muted autoplay loop>
                        <source src="[background video]" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <style cm-content="[\'remove\', \'[__background video]\', true]">
                        .custom-css-style .elementor-element.elementor-element-ee6c107:not(.elementor-motion-effects-element-type-background), .custom-css-style .elementor-element.elementor-element-ee6c107>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                            background-image: url([background image]);
                        }
                    </style>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f4ed7f"
                                data-id="7f4ed7f" data-element_type="column"
                                data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-e26396e elementor-widget elementor-widget-heading"
                                            data-id="e26396e" data-element_type="widget"
                                            data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":100,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}\'
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">[Text 1 ('.$current_locale.')]</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-25a1057 elementor-widget elementor-widget-heading"
                                            data-id="25a1057" data-element_type="widget"
                                            data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_infinite":"false"}\'
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-default">[Text 2 ('.$current_locale.')]</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>',
        'fields' => array_merge(
            array_map(function ($lang) {
                return [
                    'type' => 'text',
                    'name' => "Text 1 ($lang)",
                    'default' => 'Story of',
                ];
            }, array_keys($available_locales)),
            [[
                'type' => 'html',
                'only_editor' => true,
                'html' => '<hr>'
            ]],
            array_map(function ($lang) {
                return [
                    'type' => 'text',
                    'name' => "Text 2 ($lang)",
                    'default' => 'LASOUL',
                ];
            }, array_keys($available_locales)),
            [
                [
                    'type' => 'html',
                    'only_editor' => true,
                    'html' => '<hr>'
                ],
                [
                    'type' => 'image',
                    'name' => 'background image',
                    'default' => asset('assets/website/upload/tim-st-martin-IjnAc0vyqGs-unsplash.jpg'),
                    'note' => 'refresh the page after update',
                ],
                [
                    'type' => 'video',
                    'name' => 'background video',
                    'note' => 'Video is priority (Optional)',
                ]
            ],
        ),
    ])
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-e8d4d80 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="e8d4d80" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f89243"
                    data-id="3f89243" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-088011b elementor-widget elementor-widget-spacer"
                                data-id="088011b" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-bd5941a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="bd5941a" data-element_type="section" data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2f73c83"
                    data-id="2f73c83" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-96e9cf2 elementor-widget__width-auto elementor-widget elementor-widget-spacer"
                                data-id="96e9cf2" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a9367d4 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                data-id="a9367d4" data-element_type="widget"
                                data-settings='{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <img width="350" height="333"
                                            src="{{ asset('assets/website/upload/coffee-bg-4-e1592387391691.png') }}"
                                            class="attachment-full size-full" alt="" loading="lazy" />
                                    </div>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-183f684 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="183f684" data-element_type="section"
                                data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-24b53d2"
                                            data-id="24b53d2" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-c9c393e elementor-widget elementor-widget-image"
                                                        data-id="c9c393e" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"true","craftcoffee_ext_scrollme_translatey":{"unit":"px","size":40,"sizes":[]},"craftcoffee_ext_scrollme_smoothness":{"unit":"px","size":20,"sizes":[]},"craftcoffee_ext_scrollme_disable":"mobile","craftcoffee_ext_scrollme_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scalez":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                @livewire('content', [
                                                                    'name' => 'home_story_section_content_img_1',
                                                                    'type' => 'image' /* Types: text, image, images */,
                                                                    'html' => '<img width="1024" height="683"
                                                                                    src="[value]"
                                                                                    class="attachment-large size-large" loading="lazy" />',
                                                                    'default' => asset('assets/website/upload/matt-hoffman-7zwyUZVrt-U-unsplash-1024x683.jpg')
                                                                ])
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d95b506"
                                            data-id="d95b506" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-8456cf2 elementor-widget elementor-widget-heading"
                                                        data-id="8456cf2" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            @livewire('content', [
                                                                'name' => 'home_story_section_content_text_1',
                                                                'type' => 'text' /* Types: text, image, images */,
                                                                'html' => '<h2 class="elementor-heading-title elementor-size-default" style="color: [color];">[text]</h2>',
                                                                'fields' => [
                                                                    [
                                                                        'name' => 'text',
                                                                        'type' => 'textarea',
                                                                        'default' => 'The first cup is for the guest, the second for enjoyment, the third for the sword'
                                                                    ],
                                                                    [
                                                                        'name' => 'color',
                                                                        'type' => 'color',
                                                                        'default' => '#000000'
                                                                    ]
                                                                ]
                                                            ])
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e53fdd7 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                                        data-id="e53fdd7" data-element_type="widget"
                                                        data-settings='{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img width="350" height="269"
                                                                    src="{{ asset('assets/website/upload/coffee-bg-2-e1592389807271.png') }}"
                                                                    class="attachment-full size-full" alt=""
                                                                    loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-42b392b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="42b392b" data-element_type="section"
                                data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bb20033"
                                            data-id="bb20033" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-9bafdb1 elementor-absolute elementor-widget elementor-widget-image"
                                                        data-id="9bafdb1" data-element_type="widget"
                                                        data-settings='{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                @livewire('content', [
                                                                    'name' => 'home_story_section_content_img_2',
                                                                    'type' => 'image' /* Types: text, image, images */,
                                                                    'html' => '<img width="683" height="1024"
                                                                                src="[value]"
                                                                                class="attachment-large size-large" alt=""
                                                                                loading="lazy" />',
                                                                    'inline' => true,
                                                                    'default' => asset('assets/website/upload/brewing-coffee-by-an-alternative-method-pouring-gr-D8Z3PC3-1-683x1024.jpg')
                                                                ])
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2d8e628 elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-heading"
                                                        data-id="2d8e628" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_scrollme":"true","craftcoffee_ext_scrollme_translatey":{"unit":"px","size":-40,"sizes":[]},"craftcoffee_ext_scrollme_smoothness":{"unit":"px","size":10,"sizes":[]},"_position":"absolute","craftcoffee_ext_scrollme_disable":"mobile","craftcoffee_ext_scrollme_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_scalez":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_scrollme_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_scrollme_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}'
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            @livewire('content', [
                                                                'name' => 'home_story_section_content_text_2',
                                                                'type' => 'text' /* Types: text, image, images */,
                                                                'html' => '<h2 class="elementor-heading-title elementor-size-default" style="color: [color];">[text]</h2>',
                                                                'fields' => [
                                                                    [
                                                                        'name' => 'text',
                                                                        'type' => 'textarea',
                                                                        'default' => 'Delightful Expereience'
                                                                    ],
                                                                    [
                                                                        'name' => 'color',
                                                                        'type' => 'color',
                                                                        'default' => '#000000'
                                                                    ]
                                                                ]
                                                            ])
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-50256db"
                                            data-id="50256db" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap">
                                                <div class="elementor-widget-wrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-295cd9d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="295cd9d" data-element_type="section"
                                data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2d0a2ed"
                                            data-id="2d0a2ed" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-06a08e0 elementor-widget elementor-widget-text-editor"
                                                        data-id="06a08e0" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_scalex":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":1,"sizes":[]},"craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                @livewire('content', [
                                                                    'name' => 'home_story_section_content_text_3',
                                                                    'type' => 'text' /* Types: text, image, images */,
                                                                    'html' => '<p style="color: [color];">[text]</p>',
                                                                    'fields' => [
                                                                        [
                                                                            'name' => 'text',
                                                                            'type' => 'textarea',
                                                                            'default' => 'Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth.'
                                                                        ],
                                                                        [
                                                                            'name' => 'color',
                                                                            'type' => 'color',
                                                                            'default' => '#000000'
                                                                        ]
                                                                    ]
                                                                ])
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-1cb22f2 elementor-widget elementor-widget-image"
                                                        data-id="1cb22f2" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img width="300" height="257"
                                                                    src="{{ asset('assets/website/upload/take-away-badge-e1592385633283.png') }}"
                                                                    class="attachment-full size-full" alt=""
                                                                    loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-57d796d"
                                            data-id="57d796d" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-3cc8f2d elementor-widget elementor-widget-image"
                                                        data-id="3cc8f2d" data-element_type="widget"
                                                        data-settings='{"craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                @livewire('content', [
                                                                    'name' => 'home_story_section_content_img_3',
                                                                    'type' => 'image' /* Types: text, image, images */,
                                                                    'html' => '<img width="671" height="1024"
                                                                                src="[value]"
                                                                                class="attachment-full size-full" alt=""
                                                                                loading="lazy" />',
                                                                    'inline' => true,
                                                                    'default' => asset('assets/website/upload/coffee-PFMG7FM-671x1024.jpg')
                                                                ])
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-989557e elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                                        data-id="989557e" data-element_type="widget"
                                                        data-settings='{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img width="180" height="443"
                                                                    src="{{ asset('assets/website/upload/coffee-bg-3-e1592385684436.png') }}"
                                                                    class="attachment-full size-full" alt=""
                                                                    loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c1b4f3d"
                                            data-id="c1b4f3d" data-element_type="column"
                                            data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-66ed23f elementor-widget__width-initial elementor-absolute elementor-widget elementor-widget-image"
                                                        data-id="66ed23f" data-element_type="widget"
                                                        data-settings='{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img width="350" height="340"
                                                                    src="{{ asset('assets/website/upload/coffee-bg-1-e1592388441790.png') }}"
                                                                    class="attachment-full size-full" alt=""
                                                                    loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        id="menu"
        class="elementor-section elementor-top-section elementor-element elementor-element-ea812cf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="ea812cf" data-element_type="section" data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-feaaa0e"
                    data-id="feaaa0e" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        @livewire('content', [
                            'name' => 'home_menu_section_content_title',
                            'type' => 'text' /* Types: text, image, images */,
                            'tag' => 'div',
                            'class' => 'content-editor-inside-btn elementor-widget-wrap',
                            'html' => '<div class="elementor-element elementor-element-c411cf0 elementor-widget__width-auto elementor-widget elementor-widget-spacer"
                                            data-id="c411cf0" data-element_type="widget"
                                            data-settings=\'{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-efe116b elementor-widget elementor-widget-heading"
                                            data-id="efe116b" data-element_type="widget"
                                            data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":100,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}\'
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">[text 1 ('.$current_locale.')]</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-b22170b elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                            data-id="b22170b" data-element_type="widget"
                                            data-settings=\'{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}\'
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <img width="180" height="443"
                                                        src="'.asset('assets/website/upload/coffee-bg-3-e1592385684436.png').'"
                                                        class="attachment-full size-full" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6a1c1da elementor-widget elementor-widget-heading"
                                            data-id="6a1c1da" data-element_type="widget"
                                            data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_infinite":"false"}\'
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-default">[text 2 ('.$current_locale.')]</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6c407bf elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                            data-id="6c407bf" data-element_type="widget"
                                            data-settings=\'{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-image">
                                                    <img width="350" height="269"
                                                        src="'.asset('assets/website/upload/coffee-bg-2-e1592389807271.png').'"
                                                        class="attachment-full size-full" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>',
                            'fields' => array_merge(
                                array_map(function ($lang) {
                                    return [
                                        'type' => 'text',
                                        'name' => "text 1 ($lang)",
                                        'default' => 'Our',
                                    ];
                                }, array_keys($available_locales)),
                                [[
                                    'type' => 'html',
                                    'html' => '<hr>',
                                    'only_editor' => true
                                ]],
                                array_map(function ($lang) {
                                    return [
                                        'type' => 'text',
                                        'name' => "text 2 ($lang)",
                                        'default' => 'Menu',
                                    ];
                                }, array_keys($available_locales)),
                            ),
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-52dc38a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="52dc38a" data-element_type="section" data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-element elementor-element-c9f3e7c"
                    data-id="c9f3e7c" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="col-m-12">
                        @foreach ($menu as $cat)
                            <div class="row menu-main-col">
                                <div class="col-md-12 px-0"
                                    data-id="6cd32de" data-element_type="widget"
                                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                    data-widget_type="heading.default">
                                    <h2 class="elementor-heading-title elementor-size-default my-3">{{$cat->name}}</h2>
                                </div>
                                <div class="col-md-12 elementor-element elementor-element-6a86839 elementor-widget elementor-widget-craftcoffee-food-menu"
                                    data-id="6a86839" data-element_type="widget"
                                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                    data-widget_type="craftcoffee-food-menu.default">
                                    <div class="elementor-widget-container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @forelse ($cat->children ?? [] as $sub_cat)
                                                    <div class="row food-menu-grid-wrapper">
                                                        <div class="col-md-12 food-menu-content-highlight-holder">
                                                            <h4 style="margin-block: 5px;">{{$sub_cat->name}}</h4>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="row food-menu-highlight">
                                                                @foreach ($sub_cat->products as $prod)
                                                                    <div class="col-md-4" style="margin-bottom: 10px;">
                                                                        <div data-tooltip-content="#tooltip-content-{{$prod->id}}" class="food-tooltip">
                                                                            <div class="tooltip_templates">
                                                                                <div id="tooltip-content-{{$prod->id}}" class="food-menu-tooltip-content">
                                                                                    <div class="food-menu-tooltip-templates-content">
                                                                                        <img src="{{$prod->image_url->url ?? ''}}" alt="{{$prod->name}}" height="250px;">
                                                                                        <p>{{$prod->description}}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @if ($prod->image)
                                                                                <div class="food-menu-img">
                                                                                    <img src="{{$prod->image_url->url ?? ''}}" alt="{{$prod->name}}" />
                                                                                </div>
                                                                            @endif
                                                                            <div class="food-menu-content menu-highlight">
                                                                                <div class="food-menu-content-top-holder">
                                                                                    <div class="food-menu-content-title-holder">
                                                                                        <h3 class="food-menu-title">{{$prod->name}}</h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="food-menu-content-top-holder">
                                                                                    <h4 class="food-menu-content-price-normal" style="margin-inline: 0;"> {{$prod->price}} {{$settings->currency}} </h4>
                                                                                </div>
                    
                                                                                <div class="food-menu-desc">{{truncateString($prod->description, 50)}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="row food-menu-grid-wrapper">
                                                        <div class="col-md-12">
                                                            <div class="row food-menu-highlight">
                                                                @foreach ($cat->products as $prod)
                                                                    <div class="col-md-4" style="margin-bottom: 10px;">
                                                                        <div data-tooltip-content="#tooltip-content-{{$prod->id}}" class="food-tooltip">
                                                                            <div class="tooltip_templates">
                                                                                <div id="tooltip-content-{{$prod->id}}" class="food-menu-tooltip-content">
                                                                                    <div class="food-menu-tooltip-templates-content">
                                                                                        <img src="{{$prod->image_url->url}}" alt="{{$prod->name}}" height="250px;">
                                                                                        <p>{{$prod->description}}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @if ($prod->image)
                                                                                <div class="food-menu-img">
                                                                                    <img src="{{$prod->image_url->url}}" alt="{{$prod->name}}" />
                                                                                </div>
                                                                            @endif
                                                                            <div class="food-menu-content menu-highlight">
                                                                                <div class="food-menu-content-top-holder">
                                                                                    <div class="food-menu-content-title-holder">
                                                                                        <h3 class="food-menu-title">{{$prod->name}}</h3>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="food-menu-content-top-holder">
                                                                                    <h4 class="food-menu-content-price-normal" style="margin-inline: 0;"> {{$prod->price}} {{$settings->currency}} </h4>
                                                                                </div>
                    
                                                                                <div class="food-menu-desc">{{truncateString($prod->description, 50)}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section
        class="elementor-section elementor-top-section elementor-element elementor-element-041856f elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="041856f" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f333ce5"
                    data-id="f333ce5" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-bd023c9 elementor-widget elementor-widget-spacer"
                                data-id="bd023c9" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- <section
        class="elementor-section elementor-top-section elementor-element elementor-element-db40567 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="db40567" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"true","craftcoffee_ext_is_background_parallax_speed":{"unit":"px","size":0.8000000000000000444089209850062616169452667236328125,"sizes":[]}}'>
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50d593a"
                    data-id="50d593a" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-0286ef1 elementor-widget elementor-widget-heading"
                                data-id="0286ef1" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":100,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}'
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">Our</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-56938e0 elementor-widget elementor-widget-heading"
                                data-id="56938e0" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_infinite":"false"}'
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">Shop</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c22aa4e elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="c22aa4e" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9dd2a97"
                    data-id="9dd2a97" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-c39c493 elementor-widget elementor-widget-spacer"
                                data-id="c39c493" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d7723e8 elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="d7723e8" data-element_type="section"
        data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d28e719"
                    data-id="d28e719" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-bedfc57 elementor-widget elementor-widget-craftcoffee-woocommerce-grid"
                                data-id="bedfc57" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="craftcoffee-woocommerce-grid.default">
                                <div class="elementor-widget-container">
                                    <div class="woocommerce-grid-container">
                                        <div class="woocommerce columns-3">
                                            <ul class="products columns-3">
                                                <li
                                                    class="product type-product post-4276 status-publish first instock product_cat-coffee product_tag-blend product_tag-coffee has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                                    <a href="#"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <img width="300" height="300"
                                                            src="{{ asset('assets/website/upload/coffee-product-1-300x300.png') }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" loading="lazy" />
                                                        <h2 class="woocommerce-loop-product__title">Brazilian Coffee</h2>
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span>
                                                            &ndash;
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>40.00</span>
                                                        </span>
                                                    </a>
                                                    <a href="#" data-quantity="1"
                                                        class="button product_type_variable add_to_cart_button"
                                                        data-product_id="4276" data-product_sku="CRAFT-234"
                                                        aria-label="Select options for &ldquo;Brazilian Coffee&rdquo;"
                                                        rel="nofollow">
                                                        Select options
                                                    </a>
                                                </li>
                                                <li
                                                    class="product type-product post-4286 status-publish instock product_cat-accessories product_cat-equipment product_tag-blend product_tag-coffee has-post-thumbnail sale shipping-taxable purchasable product-type-simple">
                                                    <a href="#"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <span class="onsale">Sale!</span>
                                                        <img width="300" height="300"
                                                            src="{{ asset('assets/website/upload/Moccamaster_Thermal-Jug_540x-1-300x300.png') }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" loading="lazy" />
                                                        <h2 class="woocommerce-loop-product__title">Spare Thermal Carafe
                                                        </h2>
                                                        <span class="price">
                                                            <del>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>95.00</span>
                                                            </del>
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>79.00</span>
                                                            </ins>
                                                        </span>
                                                    </a>
                                                    <a href="?add-to-cart=4286" data-quantity="1"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                        data-product_id="4286" data-product_sku="CRAFT-234-6"
                                                        aria-label="Add &ldquo;Spare Thermal Carafe&rdquo; to your cart"
                                                        rel="nofollow">
                                                        Add to cart
                                                    </a>
                                                </li>
                                                <li
                                                    class="product type-product post-4295 status-publish last instock product_cat-accessories product_cat-equipment product_tag-blend product_tag-coffee has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                    <a href="#"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <img width="300" height="300"
                                                            src="{{ asset('assets/website/upload/Coffee-Image_Hario-Tea-Press_dbcc3335-ba56-4c5b-8ef0-84508a701881_540x-300x300.png') }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" loading="lazy" />
                                                        <h2 class="woocommerce-loop-product__title">Brew Coffee Pot</h2>
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>39.00</span>
                                                        </span>
                                                    </a>
                                                    <a href="?add-to-cart=4295" data-quantity="1"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                        data-product_id="4295" data-product_sku="CRAFT-234-6-1"
                                                        aria-label="Add &ldquo;Brew Coffee Pot&rdquo; to your cart"
                                                        rel="nofollow">
                                                        Add to cart
                                                    </a>
                                                </li>
                                                <li
                                                    class="product type-product post-4297 status-publish first instock product_cat-coffee product_tag-blend product_tag-coffee has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                                    <a href="#"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <img width="300" height="300"
                                                            src="{{ asset('assets/website/upload/el-salvador-coffee-300x300.png') }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" loading="lazy" />
                                                        <h2 class="woocommerce-loop-product__title">El Salvador Finca</h2>
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span>
                                                            &ndash;
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>40.00</span>
                                                        </span>
                                                    </a>
                                                    <a href="#" data-quantity="1"
                                                        class="button product_type_variable add_to_cart_button"
                                                        data-product_id="4297" data-product_sku="CRAFT-234-8"
                                                        aria-label="Select options for &ldquo;El Salvador Finca&rdquo;"
                                                        rel="nofollow">
                                                        Select options
                                                    </a>
                                                </li>
                                                <li
                                                    class="product type-product post-4307 status-publish instock product_cat-coffee product_tag-blend product_tag-coffee has-post-thumbnail shipping-taxable purchasable product-type-variable has-default-attributes">
                                                    <a href="#"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <img width="300" height="300"
                                                            src="{{ asset('assets/website/upload/milk-chocolate-blend-300x300.png') }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" loading="lazy" />
                                                        <h2 class="woocommerce-loop-product__title">Milk Chocolate Blend
                                                        </h2>
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span>
                                                            &ndash;
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>40.00</span>
                                                        </span>
                                                    </a>
                                                    <a href="#" data-quantity="1"
                                                        class="button product_type_variable add_to_cart_button"
                                                        data-product_id="4307" data-product_sku="CRAFT-234-8-2"
                                                        aria-label="Select options for &ldquo;Milk Chocolate Blend&rdquo;"
                                                        rel="nofollow">
                                                        Select options
                                                    </a>
                                                </li>
                                                <li
                                                    class="product type-product post-4315 status-publish last instock product_cat-accessories product_cat-apparel product_tag-blend product_tag-coffee has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                    <a href="#"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        <img width="300" height="300"
                                                            src="{{ asset('assets/website/upload/jercey-300x300.png') }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" loading="lazy" />
                                                        <h2 class="woocommerce-loop-product__title">Coffee Strip Jersey
                                                        </h2>
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>69.00</span>
                                                        </span>
                                                    </a>
                                                    <a href="?add-to-cart=4315" data-quantity="1"
                                                        class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                        data-product_id="4315" data-product_sku="CRAFT-234-6-2"
                                                        aria-label="Add &ldquo;Coffee Strip Jersey&rdquo; to your cart"
                                                        rel="nofollow">
                                                        Add to cart
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section
        id="gallery"
        class="elementor-section elementor-top-section elementor-element elementor-element-e57e3cb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="e57e3cb" data-element_type="section"
        data-settings='{"craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ffd0cbd"
                    data-id="ffd0cbd" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-1ae22a0 elementor-widget__width-auto elementor-widget elementor-widget-spacer"
                                data-id="1ae22a0" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            @livewire('content', [
                                'name' => 'home_menu_section_content_title',
                                'type' => 'text' /* Types: text, image, images */,
                                'tag' => 'div',
                                'class' => 'content-editor-inside-btn elementor-widget-wrap',
                                'html' => '<div class="elementor-element elementor-element-e3d5380 elementor-widget elementor-widget-heading"
                                                data-id="e3d5380" data-element_type="widget"
                                                data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":100,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}\'
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">[text 1 ('.$current_locale.')]</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4e3cd96 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                                data-id="4e3cd96" data-element_type="widget"
                                                data-settings=\'{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false"}\'
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="350" height="340"
                                                            src="'.asset('assets/website/upload/coffee-bg-1-e1592388441790.png').'"
                                                            class="attachment-full size-full" alt="" loading="lazy" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2921510 elementor-widget elementor-widget-heading"
                                                data-id="2921510" data-element_type="widget"
                                                data-settings=\'{"craftcoffee_ext_is_smoove":"true","craftcoffee_ext_smoove_disable":"769","craftcoffee_ext_smoove_duration":1000,"craftcoffee_ext_smoove_scalex":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_smoove_scaley":{"unit":"px","size":2,"sizes":[]},"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_smoove_rotatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_rotatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatex":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatey":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_translatez":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewx":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_skewy":{"unit":"px","size":0,"sizes":[]},"craftcoffee_ext_smoove_perspective":{"unit":"px","size":1000,"sizes":[]},"craftcoffee_ext_is_infinite":"false"}\'
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">[text 2 ('.$current_locale.')]</h1>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-42e2b84 elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image"
                                                data-id="42e2b84" data-element_type="widget"
                                                data-settings=\'{"_position":"absolute","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}\'
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image">
                                                        <img width="350" height="333"
                                                            src="'.asset('assets/website/upload/coffee-bg-4-e1592387391691.png').'"
                                                            class="attachment-full size-full" alt="" loading="lazy" />
                                                    </div>
                                                </div>
                                            </div>',
                                'fields' => array_merge(
                                    array_map(function ($lang) {
                                        return [
                                            'type' => 'text',
                                            'name' => "text 1 ($lang)",
                                            'default' => 'Our',
                                        ];
                                    }, array_keys($available_locales)),
                                    [[
                                        'type' => 'html',
                                        'html' => '<hr>',
                                        'only_editor' => true
                                    ]],
                                    array_map(function ($lang) {
                                        return [
                                            'type' => 'text',
                                            'name' => "text 2 ($lang)",
                                            'default' => 'Gallery',
                                        ];
                                    }, array_keys($available_locales)),
                                ),
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-7efb73b elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
        data-id="7efb73b" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2ea96f8"
                    data-id="2ea96f8" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-c3379f2 elementor-widget elementor-widget-spacer"
                                data-id="c3379f2" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-67fe11f elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="67fe11f" data-element_type="section"
        data-settings='{"stretch_section":"section-stretched","background_background":"classic","craftcoffee_ext_is_background_parallax":"false"}'>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3e0a9ea"
                    data-id="3e0a9ea" data-element_type="column"
                    data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'>
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-477fd83 elementor-widget elementor-widget-craftcoffee-gallery-horizontal"
                                data-id="477fd83" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="craftcoffee-gallery-horizontal.default">
                                <div class="elementor-widget-container">
                                    @livewire('content', [
                                        'name' => 'home_slider_section_content_images',
                                        'type' => 'images' /* Types: text, image, images */,
                                        'html' => '',
                                        'html_container' => '',
                                        'script' => [
                                            'after_update' => "window.location.reload();"
                                        ],
                                        'default' => [],
                                    ])
                                    @php
                                        $slider_images = content_get('home_slider_section_content_images');
                                    @endphp
                                    <div class="horizontal-gallery-wrapper" data-autoplay="0" data-loop="0" data-navigation="1" data-pagination="0" data-parallax="1" data-fullscreen="0">
                                        @foreach ($slider_images ?? [] as $slide)
                                            <div class="horizontal-gallery-cell" style="margin-right: 40px;">
                                                <img class="horizontal-gallery-cell-img"
                                                    data-flickity-lazyload="{{ $slide }}"
                                                    alt="" style="height: 450px;" />
                                            </div>
                                        @endforeach
                                        {{-- <div class="horizontal-gallery-cell" style="margin-right: 40px;">
                                            <img class="horizontal-gallery-cell-img"
                                                data-flickity-lazyload="{{ asset('assets/website/upload/coffee-cafe-barista-apron-uniform-brew-concept-PUPM2KN-768x513.jpg') }}"
                                                alt="" style="height: 450px;" />
                                        </div>
                                        <div class="horizontal-gallery-cell" style="margin-right: 40px;">
                                            <img class="horizontal-gallery-cell-img"
                                                data-flickity-lazyload="{{ asset('assets/website/upload/fresh-coffee-with-croissant-DC7H79J-768x512.jpg') }}"
                                                alt="" style="height: 450px;" />
                                        </div>
                                        <div class="horizontal-gallery-cell" style="margin-right: 40px;">
                                            <img class="horizontal-gallery-cell-img"
                                                data-flickity-lazyload="{{ asset('assets/website/upload/barista-prepare-coffee-working-order-concept-PBZ6VQ6-768x343.jpg') }}"
                                                alt="" style="height: 450px;" />
                                        </div>
                                        <div class="horizontal-gallery-cell" style="margin-right: 40px;">
                                            <img class="horizontal-gallery-cell-img"
                                                data-flickity-lazyload="{{ asset('assets/website/upload/close-up-of-coffee-machine-in-cafe-PUW782D-768x1152.jpg') }}"
                                                alt="" style="height: 450px;" />
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9f23810 elementor-align-center elementor-widget elementor-widget-button"
                                data-id="9f23810" data-element_type="widget"
                                data-settings='{"craftcoffee_ext_is_scrollme":"false","craftcoffee_ext_is_smoove":"false","craftcoffee_ext_is_parallax_mouse":"false","craftcoffee_ext_is_infinite":"false","craftcoffee_ext_is_fadeout_animation":"false"}'
                                data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="https://www.instagram.com/lasoul.bih"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button"
                                            target="_blank">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-left"> <i
                                                        aria-hidden="true" class="fab fa-instagram"></i> </span>
                                                <span class="elementor-button-text">@lasoul.bih</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
    </div>
    <div class="comment_disable_clearer"></div>
    </div>
    </div>
    <!-- End main content -->
    </div>
    </div>
    </div>
@endsection
