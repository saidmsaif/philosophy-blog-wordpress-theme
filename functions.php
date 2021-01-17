<?php
    // TGM Plugin Activation File
    require_once get_theme_file_path('inc/philosophy-required-plugins.php');


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

        register_nav_menus(array(
            'primary-menu'      =>  __('Primary Menu', 'philosophy'),
        ));

    }
    add_action('after_setup_theme', 'philosophy_theme_setup');

    function philosophy_assets_enqueue() {
        // Style Enqueue
        wp_enqueue_style('base-stylesheet', get_template_directory_uri().'/assets/css/base.css');
        wp_enqueue_style('vendor-stylesheet', get_template_directory_uri().'/assets/css/vendor.css');
        wp_enqueue_style('main-stylesheet', get_template_directory_uri().'/assets/css/main.css');
        wp_enqueue_style('theme-stylesheet', get_stylesheet_uri());

        // Scripts Enqueue
        wp_enqueue_script('plugins-script', get_template_directory_uri().'/assets/js/plugins.js', null, time(), true);
        wp_enqueue_script('main-script', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    }
    add_action('wp_enqueue_scripts', 'philosophy_assets_enqueue');