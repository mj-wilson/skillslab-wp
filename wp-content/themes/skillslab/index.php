<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<!-- Hero Section -->
<section id="pt-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<h1>BLOG</h1>
		</div>
	</div>
</section>

<div id="page" role="main" class="blog">
	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<div class="blog-left">

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		</div>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php  ?>
			<nav id="post-nav">
				<div class="post-next"><?php previous_posts_link( __( '&larr;  Newer posts', 'foundationpress' ) ); ?></div>
				<div class="post-previous"><?php next_posts_link( __( 'Older posts  &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php  ?>

	</article>
	<?php get_sidebar(); ?>

</div>

<?php get_footer();
