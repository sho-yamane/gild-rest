<?php

if (! function_exists('gildrest_cleanup')) {
  function gildrest_cleanup() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  }
}
add_action('after_setup_theme', 'gildrest_cleanup');

if ( ! function_exists( 'gildrest_custom_excerpt_more' ) ) {
	function gildrest_custom_excerpt_more($more) {
		return '';
	}
}
add_filter('excerpt_more', 'gildrest_custom_excerpt_more');
