<?php
// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');


/* Theme setup */
add_action( 'after_setup_theme', 'bgtheme_setup' );
    if ( ! function_exists( 'bgtheme_setup' ) ):
        function bgtheme_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'bgtheme' ) );
        } endif;


//Add Post Thumbnails
if (function_exists('add_theme_support')){

	add_theme_support('post-thumbnails', array('post', 'page') );
}


//remove class from the_post_thumbnail
function the_post_thumbnail_remove_class($output) {
	$output = preg_replace('/class=".*?"/', 'class="img-responsive img-portfolio img-hover"', $output);
	return $output;
}
add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );















?>