<?php
/*
Template Name: Partners
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="partners-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<h1>Our Partners</h1>
				<?php the_content(); ?>
		</div>
	</div>
</section>


<!-- List Section -->
<section id="parter-list" class="section" role="main">
	<div class="content clear">
		<div class="centered">
			
			<div class="cat-container clear">
				<div class="left revealme">
					<h2></h2>
				</div>
				<div class="right">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'partner',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'partner_type',
				            'field' => 'slug',
				            'terms' => 'nyc-doe'
				        )
				    )
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<div class="post revealme">
					 	<div class="logo">
					 		<?php  if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>

					 	</div>
					 	<div class="description">
					 		<div class="title"><?php the_title(); ?></div>
					 		<?php the_content(); ?>
					 		<?php $url = get_field('partner_website_url'); 					 		
				            if($url){ ?>
								<a target="_blank" href="<?php echo $url; ?>" class="standalone-link">view partner website <i class="fa fa-chevron-right"></i></a>
							<?php } ?>
					 	</div>
				 	</div>
				<?php endwhile; ?>
			 	</div>
			</div><!-- end .cat-container -->
			<div class="cat-container clear">
				<div class="left revealme">
					<h2>Funder</h2>
				</div>
				<div class="right">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'partner',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'partner_type',
				            'field' => 'slug',
				            'terms' => 'sponsor'
				        )
				    )
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<div class="post revealme">
					 	<div class="logo">
					 		<?php  if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>

					 	</div>
					 	<div class="description">
					 		<div class="title"><?php the_title(); ?></div>
					 		<?php the_content(); ?>
					 		<?php $url = get_field('partner_website_url'); 					 		
				            if($url){ ?>
								<a target="_blank" href="<?php echo $url; ?>" class="standalone-link">view partner website <i class="fa fa-chevron-right"></i></a>
							<?php } ?>
					 	</div>
				 	</div>
				<?php endwhile; ?>
			 	</div>
			</div><!-- end .cat-container -->

			<div class="cat-container clear">
				<div class="left revealme">
					<h2>Partners</h2>
				</div>
				<div class="right">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'partner',
				    'order' =>  asc,
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'partner_type',
				            'field' => 'slug',
				            'terms' => 'partners',
				        )
				    )
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<div class="post revealme">
					 	<div class="logo">
					 		<?php  if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>

					 	</div>
					 	<div class="description">
					 		<div class="title"><?php the_title(); ?></div>
					 		<?php the_content(); ?>
					 		<?php $url = get_field('partner_website_url'); 					 		
				            if($url){ ?>
								<a target="_blank" href="<?php echo $url; ?>" class="standalone-link">view partner website <i class="fa fa-chevron-right"></i></a>
							<?php } ?>
					 	</div>
				 	</div>
				<?php endwhile; ?>
			 	</div>
			</div><!-- end .cat-container -->
		</div>
	</div>
</section>

<?php endwhile;?>


<?php get_footer(); ?>

