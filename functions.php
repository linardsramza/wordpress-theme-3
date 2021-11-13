<?php
include('includes/class-wp-bootstrap-navwalker.php');
include('includes/aq_resizer.php');

add_action( 'after_setup_theme', 'newpack_setup' );
function newpack_setup() {
    load_theme_textdomain( 'newpack', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form' ) );

    register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'newpack' ) ) );
}

add_action( 'wp_enqueue_scripts', 'newpack_load_scripts' );
function newpack_load_scripts() {
    wp_enqueue_style( 'newpack-style', get_stylesheet_uri() );
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), rand(111,9999), 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), rand(111,9999), 'all');
    wp_enqueue_style('modal', get_template_directory_uri() . '/assets/css/modal.css', array(), rand(111,9999), 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), rand(111,9999), 'all');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.3, true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), 1.3, true);
    wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', array ( 'jquery' ), 1.3, true);
    wp_enqueue_script( 'news-script', get_template_directory_uri() . '/assets/js/news/script.js', array ( 'jquery' ), 1.3, true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.6, true);
}

/*-------------------------------------------------*/
/* =  Register option page
/*-------------------------------------------------*/
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'New-Pack settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

/*-------------------------------------------------*/
/* =  Registers custom post types
/*-------------------------------------------------*/
function custom_post_type() {

    register_post_type( 'products_pack',
        array(
            'labels' => array(
                'name' => __( 'Packs', 'newpack' ),
                'singular_name' => __( 'Pack', 'newpack' )
            ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'revisions',
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'products-pack'),
        )
    );
}

/*-------------------------------------------------*/
/* =  Add Body class
/*-------------------------------------------------*/
add_action( 'init', 'custom_post_type' );

add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page_template( 'index.php' ) ) {
        $classes[] = 'home-page';
    }
    return $classes;
}


// Post views function
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count;
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }

}

// Remove issues with prefetching adding extra views

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
