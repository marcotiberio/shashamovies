<?php

namespace Flynt\Components\BlockShortcode;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockShortcode',
        'label' => 'Block: Shortcode',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Shortcode', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
