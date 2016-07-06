<?php
/*
Template Name: Skills Fellows
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
				<?php the_field('meet_the_skills_fellows_text'); ?>
			</div>
			
			<div class="grid-container clear">
				<div class="column left">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'skills_fellows',
				    'orderby'=> 'title', 
				    'order' => 'ASC'
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<div class="bio-post revealme" id="bio-<?php the_ID(); ?>" >
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
					 		<div class="toggle"></div>
					 	</div>
				 		<div class="show-hide additional-content clear">
				 			<h4>My Teaching Philosophy</h4>
				 			<p class="teaching_philosophy"><?php the_field('teaching_philosophy'); ?></p>
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
				 			<div class="link">
				 				<a class="standalone-link"  href="<?php the_permalink(); ?>">view bio page <i class="fa fa-chevron-right"></i></a>
				 			</div>
				 			
				 		</div>
					</div>
				<?php endwhile; ?>
				</div>

				<div class="column right">
				</div>
			 	
			</div><!-- end .cat-container -->

		</div>
	</div>
</section>

<?php endwhile;?>


<?php get_footer(); ?>

