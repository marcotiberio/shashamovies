<?php

namespace Flynt\Components\BlockNowShowingFeatured;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

const POST_TYPE = 'episode';

add_filter('Flynt/addComponentData?name=BlockNowShowingFeatured', function ($data) {

    $postType = POST_TYPE;

    $data['items'] = Timber::get_posts($data[$postType]);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockNowShowingFeatured',
        'label' => 'Block: Featured Movie',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'titleTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'date_picker',
                'display_format' => 'd.m.Y',
                'return_format' => 'd.m.Y',
                'required' => 0,
                'step' => 1,
            ],
            [
                'label' => __('Content Selection', 'flynt'),
                'name' => 'contentSelectionTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Episode', 'flynt'),
                'name' => 'episode',
                'type' => 'relationship',
                'post_type' => [
                    'movies'
                ],
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'post_object',
                'ui' => 1,
                'required' => 0,
            ],
            // [
            //     'label' => __('Options', 'flynt'),
            //     'name' => 'optionsTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0
            // ],
            // [
            //     'label' => '',
            //     'name' => 'options',
            //     'type' => 'group',
            //     'layout' => 'row',
            //     'sub_fields' => [
            //         [
            //             'label' => __('Columns', 'flynt'),
            //             'name' => 'columns',
            //             'type' => 'number',
            //             'default_value' => 3,
            //             'min' => 1,
            //             'max' => 4,
            //             'step' => 1
            //         ],
            //     ]
            // ]
        ]
    ];
}
