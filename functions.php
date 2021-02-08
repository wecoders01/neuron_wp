<?php

/**
 * Enqueue scripts and styles.
 */
function neuron_theme_file() {
    // Call Css File
    wp_enqueue_style( 'animated', get_stylesheet_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'font_awesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'owl_carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootsnav', get_stylesheet_directory_uri() . '/assets/css/bootsnav.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all' );
    // Style Css
    wp_enqueue_style( 'neuron_style', get_stylesheet_uri() );

    // Call Js File
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'owl_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'ajaxchimp_config', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0', true );

    // Threaded comment reply styles.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'neuron_theme_file' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function neuron_theme_support() {

    // Loading theme textdomain
    load_theme_textdomain( 'neuron_itanvir', get_template_directory() . '/languages' );

    // GEnerate Automated Feed Link on Head
    add_theme_support( 'automatic-feed-links' );

    // Adding Automatic Title Tag
    add_theme_support( 'title-tag' );

    /**
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'neuron_blog_thumb', '740', '520', true );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'neuron_itanvir' ),
        )
    );

    // Support HTML5
    add_theme_support( 'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     */
    add_theme_support( 'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'neuron_theme_support' );

/**
 * Enable Shortcode Any Text Widget Area
 */
add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Register Custom Post Type
 */
add_action( 'init', 'neuron_theme_custom_post' );
function neuron_theme_custom_post() {
    // Register Custom Post for Slides
    register_post_type( 'slide',
        array(
            'labels'   => array(
                'name'          => __( 'Slides' ),
                'singular_name' => __( 'Slide' ),
                'add_new'       => __( 'Add New Slide' ),
                'add_new_item'  => __( 'Add New Slide' ),
            ),
            'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
            'public'   => false,
            'show_ui'  => true,
        )
    );
    // Register Custom Post for Feature
    register_post_type( 'feature',
        array(
            'labels'   => array(
                'name'          => __( 'Features' ),
                'singular_name' => __( 'Feature' ),
                'add_new'       => __( 'Add New Feature' ),
                'add_new_item'  => __( 'Add New Feature' ),
            ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
            'public'   => false,
            'show_ui'  => true,
        )
    );
    // Register Custom Post for Services
    register_post_type( 'service',
        array(
            'labels'   => array(
                'name'          => __( 'Services' ),
                'singular_name' => __( 'Service' ),
                'add_new'       => __( 'Add New Service' ),
                'add_new_item'  => __( 'Add New Service' ),
            ),
            'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' ),
            'public'   => false,
            'show_ui'  => true,
        )
    );
    // Register Custom Post for Works
    register_post_type( 'work',
        array(
            'labels'   => array(
                'name'          => __( 'Works' ),
                'singular_name' => __( 'Work' ),
                'add_new'       => __( 'Add New Work' ),
                'add_new_item'  => __( 'Add New Work' ),
            ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
            'public'   => true,
        )
    );
}

/**
 * Register footer widget area.
 */
function neuron_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer One', 'neuron' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add Footer One Widgets Here.', 'neuron' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Two', 'neuron' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add Footer Two Widgets Here.', 'neuron' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Three', 'neuron' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add Footer Three Widgets Here.', 'neuron' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Four', 'neuron' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add Footer Four Widgets Here.', 'neuron' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'neuron_widgets_init' );

/**
 * Register Thumbpost List Shortcode
 */
function thumbpost_list_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts ) );

    $q = new WP_Query(
        array( 'posts_per_page' => $count, 'post_type' => 'post' )
    );

    $list = '<ul>';
    while ( $q->have_posts() ): $q->the_post();
        $idd = get_the_ID();
        $list .= '
						       <li>
						         ' . get_the_post_thumbnail( $idd, 'thumbnail' ) . '
						         <p><a href="' . get_permalink() . '">' . get_the_title() . '</a></p>
						         <span>' . get_the_date( 'd F Y', $idd ) . '</span>
						      </li>
						       ';
    endwhile;
    $list .= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode( 'thumb_post', 'thumbpost_list_shortcode' );

// Register CodeStar Framework
require get_template_directory() . '/inc/cs-framework/cs-framework.php';

if ( !function_exists( 'neuron_entry_footer' ) ):
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function neuron_entry_footer() {

        // Hide author, post date, category and tag text for pages.
        if ( 'post' === get_post_type() ) {

            /* translators: Used between list items, there is a space after the comma. */
            $categories_list = get_the_category_list( __( ', ', 'neuron' ) );

            if ( $categories_list ) {
                /* translators: 1: List of categories. */
                echo '<span class="cat-links">' . $categories_list . '</span>';
            }

            /* translators: Used between list items, there is a space after the comma. */
            $tags_list = get_the_tag_list( ' ', __( ', ', 'neuron' ) );

            if ( $tags_list && !is_wp_error( $tags_list ) ) {
                /* translators: 1: List of categories. */
                echo '<span class="tags-links">' . $tags_list . '</span>';
            }
        }
    }
endif;

function custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Limit except length to 125 characters.
// tn limited excerpt length by number of characters
function get_excerpt( $count ) {
    $excerpt = get_the_content();
    $excerpt = strip_tags( $excerpt );
    $excerpt = substr( $excerpt, 0, $count );
    $excerpt = substr( $excerpt, 0, strripos( $excerpt, " " ) );
    $excerpt = '<p>' . $excerpt . '..... </p>'; // '<p>'.$excerpt.'... <a href="'.get_the_permalink().'">Read More</a></p>'
    return $excerpt;
}

require get_template_directory() . '/inc/neuron-activation.php';
require get_template_directory() . '/inc/neuron-demo-content.php';