<?php

if (! function_exists('gildrest_init')) {
  function gildrest_init() {

    // textdomain
    load_theme_textdomain('gildrest', get_template_directory().'/lang/');

    // add_theme_support
    add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		add_theme_support('post-thumbnails');
		add_theme_support('customize-selective-refresh-widgets');
		add_theme_support('post-formats', array('gallery'));

  }
}

add_action('after_setup_theme', 'gildrest_init');
