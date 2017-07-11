<?php

if (! function_exists('gildrest_customizer')) {
  function gildrest_customizer() {

		add_theme_support( 'custom-header', apply_filters('gildrest_custom_header_args', array(
			'header-text' => false,
		)));

		add_theme_support('custom-logo');

  }
}
add_action('after_setup_theme', 'gildrest_customizer');
