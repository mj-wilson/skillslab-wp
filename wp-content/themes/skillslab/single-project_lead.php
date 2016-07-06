<?php
/**
 * The template for displaying all single skills fellow pages 
 *
 */

get_header(); ?>

<?php $query = new WP_Query( 'pagename=Project Leads' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<!-- Hero Section -->
<section id="fellows-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<?php the_content(); ?> 
				
		</div>
	</div>
</section>
<?php endwhile; endif; 
wp_reset_postdata(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<!-- List Section -->
<section id="fellows-list" class="section" role="main">
	<div class="content clear">
		<div class="centered">
			
			<div class="grid-container clear">
				 	<div class="bio-post single-bio revealme" id="bio-<?php the_ID(); ?>">
					 	<div class="top">
						 	<div class="bio-pic">
						 		<?php  if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else { ?>
									<div class="headshot"></div>
								<?php } ?>

						 	</div>
						 	<div class="description">
						 		<h3><?php the_title(); ?></h3>
						 		<div class="school"><?php the_field('school_name'); ?></div>
						 	</div>
						 	<div class="current-role">
						 		<?php the_content(); ?>
						 	</div>

						 </div>
				 		<div class="additional-content clear">
				 			<h4>21st Century Skills Building Initiative</h4>
				 			<?php the_field('21st_century_skills_building_initiative'); ?>
				 			<div class="building_block_spotlight_quote">
				 				<?php 
				 				$field = get_field_object('building_block_spotlight');
								$v = get_field('building_block_spotlight'); ?>
				 			
				 				<h4>Building Block Spotlight: <span><?php
									echo $field['choices'][ $v ];
									?></span></h4>	
				 				<div class="block-holder">
				 					<div class="block">
									<?php 
									switch ($v) {
								    case 'personal-mindset':
										get_template_part('template-parts/inline', 'personal-mindset.svg');
								        break;
								    case 'planning-success':
										get_template_part('template-parts/inline', 'planning-success.svg');
								        break;
								    case 'social-awareness':
										get_template_part('template-parts/inline', 'social-awareness.svg');
								        break;
								    case 'communication':
										get_template_part('template-parts/inline', 'communication.svg');
								        break;
								    case 'collaboration':
										get_template_part('template-parts/inline', 'collaboration.svg');
								        break;
								    case 'problem-solving':
										get_template_part('template-parts/inline', 'problem-solving.svg');
								        break;
									}?>
									</div>									
				 				</div>
				 				<p><?php the_field('building_block_spotlight_quote');  ?><span class="quote"></span></p>
				 			</div>
				 		</div>
				</div>

			 	<div class="navigation">
					<a class="standalone-link" href="/project-leads"><i class="fa fa-chevron-left"></i> view all Project Leads </a>
				</div>

			</div>

		</div>
	</div>
</section>



<?php endwhile;?>


<?php get_footer(); ?>
