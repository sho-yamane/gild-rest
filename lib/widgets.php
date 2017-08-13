<?php

if (! function_exists('gildrest_widgets')) {
  function gildrest_widgets() {
		register_nav_menus( array(
			'primary' => __('Primary Menu', 'gildrest'),
		));
  }
}

add_action('after_setup_theme', 'gildrest_widgets');

if (! function_exists('gildrest_widgets_init')) {
	function gildrest_widgets_init() {
		register_sidebar( array(
			'name'          => __('Bottom Widget', 'gildrest'),
			'id'            => 'sidebar-1',
			'description'   => __('Bottom Widget area', 'gildrest'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'gildrest_widgets_init' );
