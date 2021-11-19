<?php

namespace Flynt\Components\BlockAbout;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockAbout',
        'label' => 'Block: About',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content Left', 'flynt'),
                'name' => 'contentHtmlLeft',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Content Right', 'flynt'),
                'name' => 'contentHtmlRight',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
        ]
    ];
}
