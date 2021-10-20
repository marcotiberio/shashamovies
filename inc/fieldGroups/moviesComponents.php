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
                'name' => 'duration',
                'type' => 'text',
                'required' => 0,
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Date', 'flynt'),
                'name' => 'date',
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
                'tabs' => 'visual,text',
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
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'required' => 0,
                'wrapper' => [
                    'width' => '50',
                ],
            ],
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
    ACFComposer::registerFieldGroup([
        'name' => 'movieComponents',
        'title' => 'Movie Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'movieComponents',
                'label' => __('Movie Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
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
    ]);
});
