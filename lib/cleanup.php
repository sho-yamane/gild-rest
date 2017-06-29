<?php

if (! function_exists('gildrest_cleanup')) {
  function gildrest_cleanup() {
    remove_action('wp_head', 'wp_generator');
  }
}
add_action('after_setup_theme', 'gildrest_cleanup');

if ( ! function_exists( 'gildrest_custom_excerpt_more' ) ) {
	function gildrest_custom_excerpt_more($more) {
		return '';
	}
}
add_filter('excerpt_more', 'gildrest_custom_excerpt_more');
