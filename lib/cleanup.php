<?php

if ( ! function_exists( 'gildrest_custom_excerpt_more' ) ) {
	function gildrest_custom_excerpt_more($more) {
		return '';
	}
}
add_filter('excerpt_more', 'gildrest_custom_excerpt_more');
