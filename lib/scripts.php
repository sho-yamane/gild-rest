<?php

if (! function_exists('gildrest_scripts')) {
	function gildrest_scripts() {
		$the_theme = wp_get_theme();
		wp_enqueue_style('gildrest-styles', get_stylesheet_directory_uri() . '/dist/css/app.min.css', array(), $the_theme->get('Version'));
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'gildrest-scripts', get_template_directory_uri() . '/dist/js/app.min.js', array(), $the_theme->get( 'Version' ), true );
	}
}
add_action('wp_enqueue_scripts', 'gildrest_scripts');
