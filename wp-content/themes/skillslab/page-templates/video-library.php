<?php
/*
Template Name: Video Library Page
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="pt-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<h1>Video Library</h1>
		</div>
	</div>
</section>

<!-- List Section -->
<section id="videos" class="section" role="main">
	<div class="content clear">
		<div class="video-list">
	
	 	<?php 
	 	
		$posts = get_field('videos');

		if( $posts ): ?>
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		        <?php setup_postdata($post); ?>
		        	
		        	<div class="video-holder revealme">
			            <h3><span class="number"></span><?php the_title(); ?></h3>
			            <?php the_content(); ?>
			        </div>

		    <?php endforeach; ?>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		
		<?php endif; ?>

		</div>
	</div>
</section>

<?php endwhile;?>


<?php get_footer(); ?>

