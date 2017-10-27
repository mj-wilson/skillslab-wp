<?php
/*
Template Name: Team Bios
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="partners-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<h1>Meet Our Team</h1>
				<?php the_content(); ?>
		</div>
	</div>
</section>


<!-- List Section -->
<section id="team-bios" class="section" role="main">
	<div class="content clear">
		<div class="centered">
			<div class="bios">
			
			<?php 
			$args = array(
			    'posts_per_page' => -1,
			    'post_type' => 'team_bio',
			    'order' =>  asc
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
				?>
			 	<div class="post revealme">
			 		<div class="top">
					 	<div class="bio-pic">
					 		<?php  if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else { ?>
								<div class="headshot"></div>
							<?php } ?>

					 	</div>
				 		<h3 class="title"><?php the_title(); ?></h3>
					</div>
				 	<div class="description">
				 		
				 		<?php the_content(); ?>
				 	</div>
			 	</div>

			<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php endwhile;?>


<?php get_footer(); ?>

