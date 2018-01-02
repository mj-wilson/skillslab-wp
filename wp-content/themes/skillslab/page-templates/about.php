<?php
/*
Template Name: About
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="about-hero" class="hero section" role="main">
	<div class="content revealme">
		<div class="centered">
				<?php the_content(); ?>
		</div>
	</div>
</section>

<!-- Statement of Problem Section -->
<section id="problem" class="section" role="main">
	<div class="content">
		<div class="centered">
			<h2>Process Overview</h2>
			<div class="infographic-holder">
				<div class="infographic revealme">
					
					<div class="top clear">
						<div class="half left">
							<h3 class="problem">PROBLEM</h3>
							<!--<img width="190" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/info1.svg">-->
							<?php /* get_template_part('template-parts/inline', 'info1.svg'); */?>
							<?php get_template_part('template-parts/inline', 'info1-new.svg'); ?>
							<p>There is a disconnect between what students are learning and what the world demands.</p>
						</div>
						<div class="half right">
							<h3 class="aim">AIM</h3>
							<!--<img width="100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/info2.svg">-->
	 						<?php get_template_part('template-parts/inline', 'info2.svg'); ?>
							<p>To build the capacity of educators, school leadership, employer and youth-serving partners to provide students meaningful &amp; effective 21st century skill building experiences that prepare them for postsecondary success. </p>
							
						</div>
					</div>
					<div class="bottom clear">
						<div class="strategies-holder">
							<h3 class="strategies">STRATEGIES</h3>
						</div>
						<div class="green-text">
							<div class="third left">
								<p>Delivering skills-based workforce development support for school-based educators and their employer partners</p>
							</div>
							<div class="third middle">
								<p>Providing customized instructional coaching for classroom teachers</p>
							</div>
							<div class="third right">
								<p>Convening school leadership and their youth-serving partners in collaborative professional learning workshops</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="infographic-image-holder">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/process-graphic.svg">
			</div>
			<div class="support revealme">
				<h3>Skills Lab Support Strategies</h3>
				<?php the_field('support_strategies'); ?>
			</div>
		</div>
	</div>
</section>

<!-- Schools and Partners Section -->
<section id="schools-partners" class="section gray" role="main">
	<div class="content revealme">
		<div class="centered">
			<h2>Schools + Partners</h2>
			<div class="list">
					<?php the_field('schools_and_partners'); ?>
			

			</div>
		</div>
	</div>
</section>

<!-- Skills Framewokr Section -->
<section id="skills-framework" class="section " role="main">
	<div class="content">
		<div class="centered">
			<h2>Skills Framework</h2>
			<div class="list">
					<?php the_field('skills_framework'); ?>
			
					<h4 class="lined"><span>SKILLS BUILDING BLOCKS</span></h4>
					<div class="blocks clear">
					<?php 
					$args = array(
					    'posts_per_page' => -1,
					    'post_type' => 'building_blocks'
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="block-holder revealme">
							<div class="block <?php echo $post->post_name; ?>"></div>
							<div class="block-label"><?php the_title(); ?></div>
							<div class="bullets">
								<div class="bullets-inner">
									<?php the_content(); ?>
									<div class="close"></div>
								</div>
							</div>
						</div>

					<?php endwhile; 
					 wp_reset_postdata(); ?>

						
					</div>
				</div>
				
				<h4 class="lined"><span>Core Employability Framework</span></h4>
					<?php the_field('core_employability_framework'); ?>


			</div>
		</div>
	</div>
</section>

<!-- Innovations Section -->
<section id="innovations" class="section" role="main">
	<div class="content">
		<div class="centered">
			<h2>Innovations</h2>
			<div class="top revealme">
				<?php the_field('innovations_overview'); ?>
			</div>
			<div class="types revealme">
				<p class="icon-above">Types of school-wide innovations:</p>
				<div class="type-holder">
					<div class="half clear">
						<div class="img">
							<?php get_template_part('template-parts/inline', 'schoolwide.svg'); ?>
						</div>
						<div class="text">
							<?php 
							$post_object = get_field('school-wide_adoption');
							if( $post_object ): 
								// override $post
								$post = $post_object;
								setup_postdata( $post );
									$link = get_the_permalink();
									$school = get_the_title();
									$innovation = get_field('school_innovation_title');	
							    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>
							<h6>School-wide Adoption of 21st Century Skills</h6>
							<p><em>CASE STUDY:</em> <?php echo $school; ?> implements <?php echo $innovation;?></p>
				 			<a class="standalone-link" href="<?php echo $link; ?>#innovation">more about this innovation <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
					<div class="half clear">
						<div class="img">
							<?php get_template_part('template-parts/inline', 'clock.svg'); ?>
						</div>
						<div class="text">
							<?php 
							$post_object = get_field('integration_of_skills');
							if( $post_object ): 
								// override $post
								$post = $post_object;
								setup_postdata( $post );
									$link = get_the_permalink();
									$school = get_the_title();
									$innovation = get_field('school_innovation_title');	
							    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>
							<h6>Integration of Skills in Extended Learning Opportunities</h6>
							<p><em>CASE STUDY:</em> <?php echo $school; ?> implements <?php echo $innovation;?></p>
				 			<a class="standalone-link" href="<?php echo $link; ?>#innovation">more about this innovation <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
					<div class="half clear">
						<div class="img">
							<?php get_template_part('template-parts/inline', 'paper.svg'); ?>
						</div>
						<div class="text">
							<?php 
							$post_object = get_field('assessment_strategies');
							if( $post_object ): 
								// override $post
								$post = $post_object;
								setup_postdata( $post );
									$link = get_the_permalink();
									$school = get_the_title();
									$innovation = get_field('school_innovation_title');	
							    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>
							<h6>Assessment Strategies and Tools</h6>
							<p><em>CASE STUDY:</em> <?php echo $school; ?> implements <?php echo $innovation;?></p>
				 			<a class="standalone-link" href="<?php echo $link; ?>#innovation">more about this innovation <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
					<div class="half clear">
						<div class="img">
							<?php get_template_part('template-parts/inline', 'books.svg'); ?>
						</div>
						<div class="text">
							<?php 
							$post_object = get_field('curriculum_development');
							if( $post_object ): 
								// override $post
								$post = $post_object;
								setup_postdata( $post );
									$link = get_the_permalink();
									$school = get_the_title();
									$innovation = get_field('school_innovation_title');	
							    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>
							<h6>Curriculum Development</h6>
							<p><em>CASE STUDY:</em> <?php echo $school; ?> implements <?php echo $innovation;?></p>
				 			<a class="standalone-link" href="<?php echo $link; ?>#innovation">more about this innovation <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Tools Section -->
<section id="tools" class="section" role="main">
	<div class="content">
		<div class="centered">
			<h2>Tools</h2>
			<!--<div class="top revealme">
				<?php the_field('innovations_overview'); ?>
			</div>-->
			<div class="types revealme">
				<div class="type-holder">
					<div class="half clear">
						<div class="top">
							<div class="img">
								<?php get_template_part('template-parts/inline', 'toolkit.svg'); ?>
							</div>
							<h4>Workforce Alliance Internship Tools</h4>
						</div>	
						<div class="text">
							<?php the_field('workforce_alliance_internship_tools'); ?>
						</div>
					</div>
					<div class="half clear">
						<div class="top">
							<div class="img">
								<?php get_template_part('template-parts/inline', 'toolkit.svg'); ?>

							</div>
							<h4>Skills Fellowship Instruction Tools</h4>
						</div>	
						<div class="text">
							<?php the_field('skills_fellowship_instruction_tools'); ?>
						</div>
					</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Performance Tasks Section -->
<section id="performance-tasks" class="section" role="main">
	<div class="content">
		<div class="centered">
			<h2>Performance Tasks</h2>
			<div class="narrow revealme">
				<?php the_field('performance_tasks_overview'); ?>
			</div>
			<div class="types revealme">
				<p class="icon-above">Types of performance tasks:</p>
				<?php the_field('performance_tasks_types'); ?>
				<a class="standalone-link" href="/performance-tasks">view all performance tasks <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>



<!-- More Information Section -->
<section id="more-info" class="section" role="main">
	<div class="content revealme">
		<div class="centered">
			<div class="col">
				<h2>For More <br/>Information</h2>
			</div>
			
			<div class="col email">
				<a href="mailto:raimi.adesalu@esinyc.org"><p><strong>email</strong> raimi.adesalu@esinyc.org</p></a>
			</div>
			
			<div class="col twitter">
				<a href="https://twitter.com/NYC_Skills_Lab" target="_blank"><p><strong>twitter</strong> @NYC_Skills_Lab</p></a>
			</div>
	
			<div class="col spacer"></div>
			
			<div class="col facebook">
				<a href="https://www.facebook.com/NYCSkillsLab/" target="_blank"><p><strong>facebook</strong></p></a>
			</div>

			<div class="col linkedin">
				<a href="https://www.linkedin.com/company/nyc-skills-lab/" target="_blank"><p><strong>linkedin</strong></p></a>
			</div>

	</div>
</section>


<?php endwhile;?>


<?php get_footer(); ?>
