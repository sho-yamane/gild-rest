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

	<div class="menu-mask" id="js-mask"></div>

	<?php if (is_front_page() && is_home()) : ?>
		<header class="header header-top" id="header">
	<?php else : ?>
		<header class="header" id="header">
	<?php endif; ?>

		<div class="logo">
			<?php if (! has_custom_logo()) : ?>
				<?php if (is_front_page() && is_home()) : ?>
					<h1 class="logo-txt"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<a class="logo-txt" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
			<?php else : ?>
				<?php the_custom_logo(); ?>
			<?php endif; ?>
		</div>

		<div class="menu-btn-container" id="js-btn">
			<a class="menu-btn">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>

		<nav class="menu" id="js-menu">
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'menu-container',
					'menu_class'      => 'menu-lists',
					'fallback_cb'     => '',
					'menu_id'         => 'primary-menu'
				)
			); ?>
		</nav>

		<div class="header-inner">

			<?php $header_image = get_header_image(); ?>
			<?php if (! empty($header_image)) : ?>
				<div class="header-background" style="background-image: url(<?php header_image(); ?>);"></div>
			<?php else: ?>
				<div class="header-background"></div>
			<?php endif;?>

			<?php if (is_front_page() && is_home() && get_bloginfo('description')) : ?>

				<div class="copy">
					<div class="copy-background"></div>
					<div class="brdr brdr-left"></div>
					<div class="brdr brdr-bottom"></div>
					<div class="brdr brdr-right"></div>
					<div class="brdr brdr-top"></div>
					<h2 class="description"><?php bloginfo('description'); ?></h2>
				</div>
			<?php endif;?>

		</div>

		<?php if (is_front_page() && is_home()) : ?>
			<div class="scroll-down">
				<div class="line"></div>
			</div>
		<?php endif; ?>

	</header>
