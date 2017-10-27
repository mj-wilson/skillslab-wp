<?php
/**
 * The template for displaying all single skills fellow pages 
 *
 */

get_header(); ?>

<?php $query = new WP_Query( 'pagename=Skills Fellows' ); ?>
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
						 		<div class="title"><?php the_field('school_title'); ?></div>
						 		<div class="school"><?php the_field('school_name'); ?></div>
						 	</div>
						 	<div class="teaching_philosophy_outer">
					 			<h4>My Teaching Philosophy</h4>
					 			<div class="teaching_philosophy"><?php the_field('teaching_philosophy'); ?></div>
				 			</div>
						</div>
				 		<div class="additional-content clear">
				 			<div class="building_block_spotlight_quote">


								<?php $field = get_field_object('building_block_spotlight');
								$value = $field['value'];
								$choices = $field['choices']; ?>
								
				 			
				 				<h4>Building Block Spotlight: <span>
				 				<?php if( $value ): foreach( $value as $k=>$v ): 
				 				if($k) echo ', ';
				 				echo $choices[ $v ]; 
				 				endforeach; endif; ?>
				 				</span></h4>	
				 				<div class="block-holder">
				 				<?php if( $value ): foreach( $value as $v ): ?>
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
				 			<?php endforeach; endif; ?>
				 				</div>

				 				<p><?php the_field('building_block_spotlight_quote');  ?><span class="quote"></span></p>
				 			</div>

				 			<h4>What I'm Working on</h4>
				 			<div class="teaching_philosophy"><?php the_field('working_on'); ?></div>

				 		</div>
				</div>

			 	<div class="navigation">
					<a class="standalone-link" href="/2017-2018-skills-fellowship/"><i class="fa fa-chevron-left"></i> view all Skills Fellows </a>
				</div>

			</div>

		</div>
	</div>
</section>



<?php endwhile;?>


<?php get_footer(); ?>
