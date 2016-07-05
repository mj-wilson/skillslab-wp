<?php
/**
 * The template for displaying all single partnership school posts 
 *
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="school-hero" class="hero section" role="main">
	<div class="content">
		<div class="centered clear">
			<div class="left">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="right">
				<?php $logo = get_field('partner_logo'); 					 		
				    if($logo){ ?>
						<div class="parnter-logo">	
							<span>School Partnership</span> 
							<div class="logo-wrapper"><img src="<?php echo $logo; ?>"/></div>
						</div>	
				<?php } ?>
				<?php the_content(); ?>
				<a class="standalone-link" target="_blank" href="<?php the_field('school_website_url'); ?>">visit school website <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>
<!-- School Innovation Section -->
<section id="innovation" class="section secondary" role="main">
	<div class="content">
		<div class="centered clear">
			<h2><span>Implemented Partnership Program</span></h2>
			<div class="left">
				<div id="innovation-skills" class="skills">
					<h3>Partnership Skills Focus</h3>
					<ul>
						<?php $field = get_field_object('partnership_21st_century_skills_focus');
						$value = $field['value'];
						$choices = $field['choices'];
						if( $value ): foreach( $value as $v ): ?>

						<li class="<?php echo $v; ?>">
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
								<div class="block-label"><?php echo $choices[ $v ]; ?></div>
							</div>
						</li>
						<?php endforeach; endif; ?>
					</ul>
				</div>	

			</div>
			<div class="right">
				<h3><?php the_field('implemented_partnership_program_title'); ?></h3>
				<?php the_field('implemented_partnership_program_description'); ?>
			</div>

		</div>
	 	<div class="navigation">
			<a class="standalone-link" href="/integrated-partnership-schools"><i class="fa fa-chevron-left"></i> view all Integrated Partnership Schools</a>
		</div>
	</div>
</section>
				

<?php endwhile;?>


<?php get_footer(); ?>
