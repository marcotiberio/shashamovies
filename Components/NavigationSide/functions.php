<?php

namespace Flynt\Components\NavigationSide;

use Timber;
use Flynt\Utils\Asset;

add_action('init', function () {
    register_nav_menus([
        'navigation_side' => __('Navigation Side', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationSide', function ($data) {
    $data['menu'] = new Timber\Menu('navigation_side');
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/NavigationSide/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});
