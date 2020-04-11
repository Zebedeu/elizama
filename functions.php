<?php


function elizama_content_width()
{
    $GLOBALS['content_width'] = apply_filters('elizama_content_width', 640);
}

add_action('after_setup_theme', 'elizama_content_width', 0);



function elizama_setup(){
		load_theme_textdomain( 'elizama', get_template_directory() . '/languages' );
	}
add_action( 'after_setup_theme', 'elizama_setup' );


function elizama_add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'elizama_add_menu_link_class', 1, 3);

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory().'/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory().'/inc/enqueue.php';
require get_template_directory().'/inc/customize.php';
