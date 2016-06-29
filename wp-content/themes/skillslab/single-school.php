<?php
/**
 * The template for displaying all single school posts 
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
			<h2><span>School Innovation</span></h2>
			<div class="left">
				<div id="innovation-skills" class="skills">
					<h3>21st Century Skills</h3>
					<ul>
						<?php $field = get_field_object('21st_century_skills');
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
				<h3><?php the_field('school_innovation_title'); ?></h3>
				<h6>innovation description:</h6>
				<?php the_field('school_innovation_description'); ?>
				<?php $logo = get_field('school_partner_logo'); 					 		
				    if($logo){ ?>
						<div class="parnter-logo">	
							<span>School Partner</span> <img src="<?php echo $logo; ?>"/>
						</div>	
				<?php } ?>
			</div>

		</div>
	</div>
</section>


<!-- Performance Tasks Section -->
<section id="tasks" class="section secondary" role="main">
	<div id="performance-tasks"></div>
	<div class="content">
		<div class="centered clear">
			<h2><span>Performance Tasks</span></h2>
			<div class="left">
				<div class="index">
					<ul>
					<?php $posts = get_field('performance_tasks');
					if( $posts ): ?>
					<?php $i = 0; ?>
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <?php $field = get_field_object('21st_century_skills');
						$value = $field['value'];
						$choices = $field['choices'];
						if( $value ): foreach( $value as $v ): ?>
						<?php $set .=  $v . ' '; ?>

						<?php endforeach; endif; 
						$set = rtrim($set);?>

				        <li <?php if($i == 0) echo 'class="active"'; ?> data-skills="<?php echo $set; ?>" data-index="<?php echo $i; ?>"><?php the_title(); ?></li>
				        <?php $i++; $set = ''; ?>
				    <?php endforeach; ?>
				<?php endif; ?>
			    

					</ul>
				</div>
				<div id="pt-skills" class="skills">
					<h3>21st Century Skills</h3>
					<ul>
						<li class="personal-mindset">
							<div class="block-holder">
								<div class="block">
									<?php get_template_part('template-parts/inline', 'personal-mindset.svg'); ?>
								</div>
								<div class="block-label">Personal Mindset</div>
							</div>
						</li>
						<li class="planning-success">
							<div class="block-holder">
							<div class="block">
								<?php get_template_part('template-parts/inline', 'planning-success.svg'); ?>
							</div>
							<div class="block-label">Planning for Success</div>
							</div>
						</li>
						<li class="social-awareness">
							<div class="block-holder">
							<div class="block">
								<?php get_template_part('template-parts/inline', 'social-awareness.svg'); ?>
							</div>
							<div class="block-label">Social Awareness</div>
							</div>
						</li>
						<li class="communication">
							<div class="block-holder">
							<div class="block">
								<?php get_template_part('template-parts/inline', 'communication.svg'); ?>
							</div>
							<div class="block-label">Communication</div>
							</div>
						</li>
						<li class="collaboration">
							<div class="block-holder">
							<div class="block">
								<?php get_template_part('template-parts/inline', 'collaboration.svg'); ?>
							</div>
							<div class="block-label">Collaboration</div>
							</div>
						</li>
						<li class="problem-solving">
							<div class="block-holder">
							<div class="block">
								<?php get_template_part('template-parts/inline', 'problem-solving.svg'); ?>
							</div>
							<div class="block-label">Problem Solving</div>
							</div>
						</li>
					</ul>
				</div>

				
			</div>
			<div class="right">

			<?php if( $posts ): ?>
				<?php $i = 0; ?>
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <div class="task-container" data-index="<?php echo $i; ?>">
			            <h6>Project Title: <span><?php the_title(); ?></span></h6>
			            <?php $question = get_field('driving_question'); 
			            if ($question) { ?>
			            <div class="question">
			            	<h6>DRIVING QUESTION: <span><?php echo $question; ?></span></h6>
			            </div>
			            <?php } ?>
			            <h6>OVERVIEW AND PURPOSE:</h6>
			            <?php the_content(); ?>
			            <?php $link = get_field('project_plan_document'); 
			            if($link){ ?>
							<a target="_blank" href="<?php echo $link; ?>" class="sl-button">DOWNLOAD PROJECT PLAN</a>
						<?php } ?>

			        </div>
				<?php $i++; ?>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>


<?php endwhile;?>


<?php get_footer(); ?>
