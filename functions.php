<?php
    // TGM Plugin Activation File
    require_once 'inc/philosophy-required-plugins.php';

    if (class_exists( 'Attachments' ) ) {
        require_once 'lib/attachments.php';
    }


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
        wp_enqueue_style('tiny-slider', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css');
        wp_enqueue_style('theme-stylesheet', get_stylesheet_uri());

        // Scripts Enqueue
        wp_enqueue_script('plugins-script', get_template_directory_uri().'/assets/js/plugins.js', null, time(), true);
        wp_enqueue_script('tiny-slider-script', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', null, time(), true);
        wp_enqueue_script('main-script', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    }
    add_action('wp_enqueue_scripts', 'philosophy_assets_enqueue');


    function philosophy_blog_home_pagination() {
        global $wp_query;
        $paginate_num = paginate_links(array(
            'current'   =>  max(1, get_query_var('paged')),
            'total'     =>  $wp_query->max_num_pages,
            'type'      =>  'list',
        ));
        $paginate_num = str_replace('page-numbers', 'pgn__num', $paginate_num);
        $paginate_num = str_replace("<ul class='pgn__num'>", '<ul>', $paginate_num);
        $paginate_num = str_replace("<ul class='pgn__num'>", '<ul>', $paginate_num);
        $paginate_num = str_replace("next pgn__num", 'pgn__next', $paginate_num);
        $paginate_num = str_replace("prev pgn__num", 'pgn__prev', $paginate_num);
        echo $paginate_num;    }
