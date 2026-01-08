<?php

function rtcamp_enqueue_assets() {
    wp_enqueue_style(
        'rtcamp-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'rtcamp_enqueue_assets');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');

    register_nav_menus([
        'primary' => 'Primary Menu',
    ]);
});
