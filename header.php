<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Your site title as branding in the menu -->
<?php if ( ! has_custom_logo() ) { ?>

	<?php if ( is_front_page() && is_home() ) : ?>

		<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

	<?php else : ?>

		<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

	<?php endif; ?>


<?php } else {
	the_custom_logo();
} ?><!-- end custom logo -->


<?php wp_nav_menu(
	array(
		'theme_location'  => 'primary',
		'container_class' => 'collapse navbar-collapse',
		'container_id'    => 'navbarNavDropdown',
		'menu_class'      => 'navbar-nav',
		'fallback_cb'     => '',
		'menu_id'         => 'main-menu'
	)
); ?>
