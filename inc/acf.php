<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'position' => '4',
		'icon_url' => 'dashicons-layout',
		'redirect' => false,
	));

}
?>