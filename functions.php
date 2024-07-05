<?php

/**
 * Essential theme supports
 */
function techub_theme_setup()
{
    /**  thumbnail */
    add_theme_support('post-thumbnails');

    /** automatic feed link */
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('post-formats', array(
        'image',
        'video',
        'audio',
        'gallery',
        'quote'
    ));

    // register_nav_menus(
    //     array(
    //         'main-menu' => __('Main Menu','harry'),
    //     )
    // );

    // remove_theme_support( 'widgets-block-editor' );

    // add_theme_support('woocommerce');

    // add_theme_support( 'wc-product-gallery-lightbox' );
    // add_theme_support( 'wc-product-gallery-slider' );

    // Remove woocommerce defauly styles
    // add_filter( 'woocommerce_enqueue_styles', '__return_false' );

    // add_theme_support( 'woocommerce', array(
    // 	'thumbnail_image_width' => 200,
    // 	'gallery_thumbnail_image_width' => 200,
    // ) );
}
add_action('after_setup_theme', 'techub_theme_setup');

/**
 * Proper way to enqueue scripts and styles
 */
function techub_theme_scripts()
{
    // css here
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.2.3', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all');
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '1.0.0', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all');
    wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0.0', 'all');
    wp_enqueue_style('techub-core', get_template_directory_uri() . '/assets/css/techub-core.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    // js here
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array('imagesloaded'), '1.0.0', true);
    wp_enqueue_script('jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array('jquery-ui-slider'), '1.0.0', true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('techub-main', get_template_directory_uri() . '/assets/js/techub-main.js', array('jquery'), '1.0.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'techub_theme_scripts');
