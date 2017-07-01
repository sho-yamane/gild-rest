<?php

if (! function_exists('gildrest_widgets')) {
  function gildrest_widgets() {
		register_nav_menus( array(
			'primary' => __('Primary Menu', 'gildrest'),
		));
  }
}

add_action('after_setup_theme', 'gildrest_widgets');



