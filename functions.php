<?php
    function philosophy_theme_setup() {
        // Load Theme Textdomain
        load_theme_textdomain('philosophy');

        // Add All Theme Supports
        add_theme_support('title-tag');
        add_theme_support('description');
        add_theme_support('custom-header');
        add_theme_support('custom-logo');
        add_theme_support('menus');
        add_theme_support('custom-background');
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
        $philosophy_post_formats = array(
            'aside',
            'image',
            'gallery',
            'audio',
            'video',
            'quote',
            'link',
            'status',
            'chat',
        );
        add_theme_support('post-formats', $philosophy_post_formats);

    }
    add_action('after_setup_theme', 'philosophy_theme_setup');