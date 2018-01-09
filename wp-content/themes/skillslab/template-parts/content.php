<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?> >
	<div class="revealme">
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<time class="updated" datetime="' . get_the_time( 'c' ) . '">Posted on <?php echo get_the_date(); ?></time>
		<p class="byline author">Written by <?php echo get_the_author(); ?></p>
		<?php the_category(); ?>

	</header>
	<div class="entry-content">
		<?php
			if ( has_post_thumbnail() ) : ?>
				<div class="blog-image">
				<?php the_post_thumbnail(); ?>
				</div>
			<?php endif;
		?>

		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	</div>
</div>
