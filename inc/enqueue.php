<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
/*all stylesheet add here*/
function softwarehoop_enqueue_style() {
			//-- fonts--//
 wp_enqueue_style('bootstrap_min', get_template_directory_uri() . "/assets/css/style.css", array(), false, 'all');
}
	add_action('wp_enqueue_scripts', 'softwarehoop_enqueue_style');

/*all scripts add here*/
function softwarehoop_enqueue_scripts() {
	wp_enqueue_script(' jquery', get_template_directory_uri() . "/assets/js/jquery.min.js", array('jquery'), false, true);
	wp_enqueue_script(' jquery-unveil', get_template_directory_uri() . "/assets/js/jquery.unveil.js", array('jquery'), false, true);
	wp_enqueue_script('aos-js', get_template_directory_uri() . "/assets/js/aos.js", array('jquery'), false, true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . "/assets/js/swiper.min.js", array('jquery'), false, true);
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", array('jquery'), false, true);
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . "/assets/js/owl.carousel.min.js", array('jquery'), false, true);
	wp_enqueue_script('isotope-min-js', get_template_directory_uri() . "/assets/js/isotope.min.js", array('jquery'), false, true);
	wp_enqueue_script('imagesloaded-min-js', get_template_directory_uri() . "/assets/js/imagesloaded.min.js", array('jquery'), false, true);
	wp_enqueue_script('carousel-js', get_template_directory_uri() . "/assets/js/carousel.js", array('jquery'), false, true);
	wp_enqueue_script('menu-js', get_template_directory_uri() . "/assets/js/menu.js", array('jquery'), false, true);
	wp_enqueue_script('elements-js', get_template_directory_uri() . "/assets/js/elements.js", array('jquery'), false, true);
	wp_enqueue_script('masonry-js', get_template_directory_uri() . "/assets/js/masonry.js", array('jquery'), false, true);
	wp_enqueue_script('form-js', get_template_directory_uri() . "/assets/js/form.js", array('jquery'), false, true);
	
	
}
add_action('wp_enqueue_scripts', 'softwarehoop_enqueue_scripts');
// Script to move all Head scripts to the Footer
function remove_head_scripts() {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	add_action('wp_footer', 'wp_print_scripts', 5);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('wp_enqueue_scripts', 'remove_head_scripts');
//Remove JQuery migrate
function remove_jquery_migrate($scripts) {
	if (!is_admin() && isset($scripts->registered['jquery'])) {
		$script = $scripts->registered['jquery'];
		if ($script->deps) {
// Check whether the script has any dependencies
			$script->deps = array_diff($script->deps, array('jquery-migrate'));
		}
	}
}
add_action('wp_default_scripts', 'remove_jquery_migrate');
?>