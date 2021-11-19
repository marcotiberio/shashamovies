<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'movieMeta',
        'title' => 'Info Movie',
        'style' => '',
        'fields' => [
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Director', 'flynt'),
                'name' => 'director',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Region', 'flynt'),
                'name' => 'region',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Duration', 'flynt'),
                'name' => 'movieDuration',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Release Date', 'flynt'),
                'name' => 'releaseDate',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Language', 'flynt'),
                'name' => 'languageTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Language Movie', 'flynt'),
                'name' => 'languageMovie',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Language Subtitles', 'flynt'),
                'name' => 'languageSubtitles',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Synopsis', 'flynt'),
                'name' => 'synopsisTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Synopsis - English', 'flynt'),
                'name' => 'synopsisEnglish',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Synopsis - Arabic', 'flynt'),
                'name' => 'synopsisArabic',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Cast', 'flynt'),
                'name' => 'castTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Cast Members', 'flynt'),
                'name' => 'cast',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ],
            ],
            [
                'label' => __('Share Links', 'flynt'),
                'name' => 'shareLinksTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Link Facebook', 'flynt'),
                'name' => 'shareLinkFacebook',
                'type' => 'text',
                'instructions' => __('To create a shareable link of your page, please visit https://www.websiteplanet.com/webtools/sharelink/ and follow the instructions to paste your page URL.', 'flynt'),
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Link Instagram', 'flynt'),
                'name' => 'shareLinkInstagram',
                'type' => 'text',
                'instructions' => __('To create a shareable link of your page, please visit https://www.websiteplanet.com/webtools/sharelink/ and follow the instructions to paste your page URL.', 'flynt'),
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Link Twitter', 'flynt'),
                'name' => 'shareLinkTwitter',
                'type' => 'text',
                'instructions' => __('To create a shareable link of your page, please visit https://www.websiteplanet.com/webtools/sharelink/ and follow the instructions to paste your page URL.', 'flynt'),
                'wrapper' => [
                    'width' => '33',
                ],
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'movies',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'acf_after_title',
    ]);
    // ACFComposer::registerFieldGroup([
    //     'name' => 'movieComponents',
    //     'title' => 'Movie Components',
    //     'style' => 'seamless',
    //     'fields' => [
    //         [
    //             'name' => 'movieComponents',
    //             'label' => __('Movie Components', 'flynt'),
    //             'type' => 'flexible_content',
    //             'button_label' => __('Add Component', 'flynt'),
    //             'layouts' => [
    //                 Components\BlockCollapse\getACFLayout(),
    //                 Components\BlockImage\getACFLayout(),
    //                 Components\BlockImageText\getACFLayout(),
    //                 Components\BlockVideoOembed\getACFLayout(),
    //                 Components\BlockWysiwyg\getACFLayout(),
    //                 Components\SliderImages\getACFLayout(),
    //             ],
    //         ],
    //     ],
    //     'location' => [
    //         [
    //             [
    //                 'param' => 'post_type',
    //                 'operator' => '==',
    //                 'value' => 'movies',
    //             ],
    //         ],
    //     ],
    // ]);
});
