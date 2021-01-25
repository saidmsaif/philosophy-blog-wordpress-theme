<?php
    // TGM Plugin Activation File
    require_once 'inc/philosophy-required-plugins.php';

    function philosophy_theme_setup() {
        // Load Theme Text domain
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
            'footer_left_links' =>  __('Footer Left Links', 'philosophy'),
            'footer_middle_links'=> __('Footer Middle Links', 'philosophy'),
            'footer_right_links'=>  __('Footer Right Links', 'philosophy'),
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
        wp_enqueue_script('plugins-script', get_template_directory_uri().'/assets/js/plugins.js',  array('jquery'), time(), true);
        wp_enqueue_script('modernizr-script', get_template_directory_uri().'/assets/js/modernizr.js', null, time(), true);
        wp_enqueue_script('pace-script', get_template_directory_uri().'/assets/js/pace.min.js', null, time(), true);
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
        echo $paginate_num;
    }

    remove_action('term_description', 'wpautop');

    function philosophy_widgets() {
        register_sidebar(array(
            'name'          =>  __('About Page', 'philosophy'),
            'id'            =>  'about-page-after-content-widget',
            'description'   =>  __('About Us Page After Content Widget', 'philosophy'),
            'before_title'  =>  '<h3 class="quarter-top-margin">',
            'after_title'   =>  '</h3>',
            'before_widget' =>  '<div class="col-block">',
            'after_widget'  =>  '</div>'
        ));

        register_sidebar(array(
            'name'          =>  __('Popular Post Sidebar', 'philosophy'),
            'id'            =>  'popular-post-sidebar-widget',
            'description'   =>  __('Popular Post Sidebar Widget', 'philosophy'),
            'before_title'  =>  '<h3>',
            'after_title'   =>  '</h3>',
            'before_widget' =>  '<div class="col-four md-six tab-full about">',
            'after_widget'  =>  '</div>'
        ));

        register_sidebar(array(
            'name'          =>  __('Philosophy Contact Page Maps', 'philosophy'),
            'id'            =>  'philosophy-gmaps',
            'description'   =>  __('Contact Page Google Maps', 'philosophy'),
            'before_title'  =>  '',
            'after_title'   =>  '',
            'before_widget' =>  '<div id="map-wrap">',
            'after_widget'  =>  '</div>'
        ));

        register_sidebar(array(
            'name'          =>  __('Philosophy Contact Page Information', 'philosophy'),
            'id'            =>  'contact-information',
            'description'   =>  __('Contact Page Information', 'philosophy'),
            'before_title'  =>  '<h3>',
            'after_title'   =>  '</h3>',
            'before_widget' =>  '<div class="col-six tab-full">',
            'after_widget'  =>  '</div>'
        ));

        register_sidebar(array(
            'name'          =>  __('Footer Right Text Area', 'philosophy'),
            'id'            =>  'footer_right_text_widget',
            'description'   =>  __('Footer Right Text Area', 'philosophy'),
            'before_title'  =>  '<h4>',
            'after_title'   =>  '</h4>',
            'before_widget' =>  '<div class="">',
            'after_widget'  =>  '</div>',
        ));

        register_sidebar(array(
            'name'          =>  __('Philosophy Copyright', 'philosophy'),
            'id'            =>  'philosophy_copyright',
            'description'   =>  __('Copyright Text', 'philosophy'),
            'before_title'  =>  '',
            'after_title'   =>  '',
            'before_widget' =>  '<div class="s-footer__copyright">',
            'after_widget'  =>  '</div>',
        ));
    }
    add_action('widgets_init', 'philosophy_widgets');

    function philosophy_head() {
        if (current_theme_supports('custom-header')) :
?>
        <style>
            .wpcf7-form-control-wrap input, .wpcf7-form-control-wrap textarea {
                width: 100% !important;
            }
            .textwidget p {
                margin-bottom: 0;
            }
        </style>
<?php
    endif;
    }

    add_action('wp_head', 'philosophy_head');