<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">

		<?php 
		 //$description = get_bloginfo('description');
		$description = my_excerpt( $post->post_content, $post->post_excerpt );
		$description = strip_tags($description);
		 //$description = str_replace("\"", "'", $description);
		if ($description == '') {
		 	$description = 'The Skills Lab Program supports educators and their partners to design and deliver rich learning experiences focused on students’ 21st Century Skills development.';
		 }
		$image = get_opengraph_image(); 
		 ?>
		
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php echo $image; ?>" /> 

	<?php if (is_single()) { ?>
		<meta property="og:url" content="<?php the_permalink() ?>"/>
		<meta property="og:title" content="<?php single_post_title(''); ?>" />
		<meta property="og:description" content="<?php echo $description; ?>>" />

		 
		<!-- if page is others -->
	<?php } else { ?>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />
		<meta property="og:description" content="The Skills Lab Program supports educators and their partners to design and deliver rich learning experiences focused on students’ 21st Century Skills development." />
		<meta property="og:url" content="<?php bloginfo('url'); ?>" />

	<?php } ?>


	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header clear" role="banner">
		<div class="content">
			<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
				<div class="top-bar-left">
					<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img width="200" height="118" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/skills-lab-GE-logo.svg">
					</a>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
