<?php
update_option( 'siteurl', 'https://vakom60.ru' );
update_option( 'home', 'https://vakom60.ru' );

require 'inc/bs-navmenu.php';

if (!function_exists('academlyc_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * Create your own academlyc_setup() function to override in a child theme.
     *
     * @since Twenty Sixteen 1.0
     */
    function academlyc_setup()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 0, true);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'left-menu' => __('Левое меню', 'academlyc'),
            'right-menu' => __('Правое меню', 'academlyc'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ));
    }
endif; // academlyc_setup
add_action('after_setup_theme', 'academlyc_setup');

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function academlyc_scripts()
{
    // bootstrap.min.css
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');

    // font-awesome.min.css
    wp_enqueue_style('font_awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');

    // style.css
    wp_enqueue_style('academlyc-style', get_stylesheet_uri());

	// jquery.min.js    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.2.min.js', array(), '20151219', true);

    // bootstrap.min.js
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151219', true);
}

add_action('wp_enqueue_scripts', 'academlyc_scripts');

function wp_bootstrap_register_sidebars() {
    register_sidebar(array(
        'id' => 'sidebar1',
        'name' => 'Left Sidebar',
        'description' => 'Left Sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'sidebar2',
        'name' => 'Right Sidebar',
        'description' => 'Right Sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
}
add_action( 'widgets_init', 'wp_bootstrap_register_sidebars' );
