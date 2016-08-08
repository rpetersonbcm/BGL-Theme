<?php
/* LOAD Baylor Genetic Style Sheet 
function bgtheme_script_enqueue(){

	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', 'all' );		
}
add_action( 'wp_enqueue_scripts', 'bgtheme_script_enqueue');
/* LOAD Baylor Genetic Style Sheet */




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

// Remove Spaces from Added Content
function the_content_filter($content) {
    $block = join("|",array("one_third", "team_member"));
    $rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
    $rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
return $rep;
}
add_filter("the_content", "the_content_filter");


//Limit Excerpt Length
function custom_excerpt_length( $length ) {
        return 15;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );









?>