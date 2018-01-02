<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- Hero Section -->
<section id="pt-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<h1>BLOG | <span><?php echo get_the_archive_title(); ?></span></h1>
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
