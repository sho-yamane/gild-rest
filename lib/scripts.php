<?php

if (! function_exists('gildrest_scripts')) {
	function gildrest_scripts() {
		$the_theme = wp_get_theme();
		wp_enqueue_style('GoogleFont-Poppins-400-600-700', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700', array());
		wp_enqueue_style('gildrest-styles', get_stylesheet_directory_uri() . '/dist/css/app.css', array(), $the_theme->get('Version'));
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'gildrest-scripts', get_template_directory_uri() . '/dist/js/app.js', array(), $the_theme->get( 'Version' ), true );
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'gildrest_scripts');
