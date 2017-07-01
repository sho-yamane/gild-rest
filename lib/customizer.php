<?php

if (! function_exists('gildrest_customizer')) {
  function gildrest_customizer() {

		add_theme_support('custom-background', apply_filters('gildrest_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		add_theme_support( 'custom-logo' );

  }
}
add_action('after_setup_theme', 'gildrest_customizer');
