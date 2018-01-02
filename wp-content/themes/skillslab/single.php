<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<div class="blog-left ">
			<div class="blogpost-entry revealme">
				<header>
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<time class="updated" datetime="' . get_the_time( 'c' ) . '">Posted on <?php echo get_the_date(); ?></time>
					<p class="byline author">Written by <?php echo get_the_author(); ?></p>
				</header>
				<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
				<div class="entry-content">

				<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail();
					endif;
				?>

				<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
			</div>
			<nav id="post-nav">
				<div class="post-previous"><?php next_post_link('%link', '&larr; Previous Post'); ?></div>
				<div class="post-next"><?php previous_post_link('%link', 'Next Post &rarr;'); ?> </div>
			</nav>
		</div>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer();
