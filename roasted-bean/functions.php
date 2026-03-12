<?php

function roasted_bean_setup() {
    add_theme_support('title-tag');

        add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'roasted-bean'),
    ));
}

add_action('after_setup_theme', 'roasted_bean_setup');

function roasted_bean_enqueue_styles() {
    wp_enqueue_style(
        'roasted-bean-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'roasted_bean_enqueue_styles');