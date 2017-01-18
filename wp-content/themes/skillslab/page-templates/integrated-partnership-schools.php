<?php
/*
Template Name: Integrated Partnership Schools
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<h1>Integrated Partnership Schools</h1>
				<?php the_content(); ?>
		</div>
	</div>
</section>


<!-- List Section -->
<section id="schools-list" class="section" role="main">
	<div class="content clear">
		<div class="centered">
			
			<div class="grid-container clear">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'partnership-school'
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<div class="school-post revealme">
					 	<div class="top">
					 		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					 		<div class="plus">+</div>
					 		<?php $logo = get_field('partner_logo'); 					 		
							    if($logo){ ?>
									<div class="partner-logo">	
										<img src="<?php echo $logo; ?>"/>
									</div>	
							<?php } ?>
						</div>
						<div class="description">
					 		<?php the_content(); ?>
				 		</div>
			 			<div class="link">
			 				<a class="standalone-link"  href="<?php the_permalink(); ?>">view partnership program details <i class="fa fa-chevron-right"></i></a>
			 			</div>
				 		
					</div>
				<?php endwhile; ?>

			 	
			</div><!-- end .cat-container -->

		</div>
	</div>
</section>

<?php endwhile;?>


<?php get_footer(); ?>

