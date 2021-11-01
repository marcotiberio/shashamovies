<?php

namespace Flynt\Components\BlockSignup;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockSignup',
        'label' => 'Block: Sign Up',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                'mime_types' => 'jpg,jpeg,png',
                'instructions' => __('Image-Format: JPG, PNG. Recommended proportions: 16:9. Recommended resolution greater than 2048 x 800 px.', 'flynt'),
                'wrapper' => [
                    'width' => 100
                ],
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
                'wrapper' => [
                    'width' => 100
                ],
            ],
            // [
            //     'label' => __('Button', 'flynt'),
            //     'name' => 'button',
            //     'type' => 'url',
            //     'return_format' => 'link',
            //     'wrapper' => [
            //         'width' => 50
            //     ],
            // ]
        ]
    ];
}
