<?php

namespace Flynt\Components\GridImageText;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'GridImageText',
        'label' => 'Grid: Image Text',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'text',
                'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => 'Add',
                'sub_fields' => [
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'articleLink',
                        'type' => 'url',
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                    // [
                    //     'label' => __('Image', 'flynt'),
                    //     'name' => 'image',
                    //     'type' => 'image',
                    //     'preview_size' => 'medium',
                    //     'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                    //     'mime_types' => 'jpg,jpeg,png',
                    //     'wrapper' => [
                    //         'width' => 33
                    //     ],
                    // ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'newsTitle',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 33
                        ],
                    ]
                ]
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    [
                        'label' => __('Columns', 'flynt'),
                        'name' => 'columns',
                        'type' => 'number',
                        'default_value' => 3,
                        'min' => 1,
                        'max' => 4,
                        'step' => 1
                    ],
                    // [
                    //     'label' => __('Show as Card', 'flynt'),
                    //     'name' => 'card',
                    //     'type' => 'true_false',
                    //     'default_value' => 0,
                    //     'ui' => 1
                    // ]
                ]
            ]
        ]
    ];
}
