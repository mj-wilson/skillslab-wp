<?php
/*
Template Name: Project Leads
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="fellows-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<?php the_content(); ?>
		</div>
	</div>
</section>


<!-- List Section -->
<section id="fellows-list" class="section" role="main">
	<div class="content clear">
		<div class="centered">
			<div class="intro">
				<?php the_field('meet_the_project_leads'); ?>
			</div>
			<div class="grid-container clear">
				<div class="column left">
				
				<?php  $posts = get_field('project_leads');

				if( $posts ): ?>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				    <?php setup_postdata($post); ?>

				 	<div class="bio-post revealme">
					 	<div class="bio-pic">
					 		<?php  if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else { ?>
								<div class="headshot"></div>
							<?php } ?>
							<?php if( get_field('second_lead_profile_pic') ): ?>
								<img src="<?php the_field('second_lead_profile_pic'); ?>" />
							<?php endif; ?>
					 	</div>
					 	<div class="description">
					 		<h3><?php the_title(); ?></h3>
					 		<div class="school"><?php the_field('school_name'); ?></div>
					 		<?php the_content(); ?>
					 		<div class="toggle"></div>
					 	</div>
				 		<div class="show-hide additional-content clear">
				 		<?php if ( get_field('21st_century_skills_building_initiative') != '') { ?>
				 			<h4>21st Century Skills Building Initiative</h4>
				 			<?php ( the_field('21st_century_skills_building_initiative') != '') ?>
				 		<?php } elseif (get_field('work_readiness') != '') { ?>
				 			<h4>21st Century Skills Building Initiative: Work Readiness</h4>
				 			<?php ( the_field('work_readiness') != '') ?>
				 		<?php } ?>
				 			<div class="building_block_spotlight_quote">
				 				<?php 
				 				$field = get_field_object('building_block_spotlight');
								$v = get_field('building_block_spotlight'); 
								$employability_skill = get_field('core_employability_skill'); ?>
				 			
				 				<h4>Building Block Spotlight: <span><?php
									echo $field['choices'][ $v ];
									?> <?php if($employability_skill) { echo '>> ' .$employability_skill; }?></span></h4>	
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
				 			<div class="link">
				 				<a class="standalone-link"  href="<?php the_permalink(); ?>">view bio page <i class="fa fa-chevron-right"></i></a>
				 			</div>
				 		
				 		</div>
					</div>

					<?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>


				</div>

				<div class="column right">
				</div>
			 	
			</div><!-- end .cat-container -->

		</div>
	</div>
</section>

<?php endwhile;?>


<?php get_footer(); ?>

