<?php
/*
Template Name: Performance Task Landing Page
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="pt-hero" class="hero section" role="main">
	<div class="content">
		<div class="centered">
				<h1>Performance Tasks</h1>
		</div>
	</div>
</section>
<section id="pt-subhero" class="hero section" role="main">
	<div class="content">
		<div class="centered">
				<?php the_content(); ?>
		</div>
	</div>
</section>


<!-- List Section -->
<section id="pt-list" class="section" role="main">
	<div class="content clear">
		<div class="left">
			
			<div class="cat-container">
				<h2><span>1</span>Work Based Problems</h2>
				<div class="cat-description"><?php echo term_description( '6', 'task_type' ) ?></div>
				<div class="post-list">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'performance_task',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'task_type',
				            'field' => 'slug',
				            'terms' => 'work-based-problems'
				        )
				    )
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<?php 
				 	$task_title = get_the_title(); 
				 	$summary = wpautop(get_the_content());
				 	$question = get_field('driving_question'); 
				 	$download = get_field('project_plan_document'); 
				 	
					$post_object = get_field('school');
					if( $post_object ): 
						// override $post
						$post = $post_object;
						setup_postdata( $post );
						$link = get_the_permalink();
						$school = get_the_title();
					    //wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
				 	<div class="post">
				 		<div class="title"><?php echo $task_title ; ?></div>
				 		<div class="show-hide">
				 			<p class="question"><?php echo $question; ?></p>
				 			<p class="school"> <span>SCHOOL: </span><?php echo $school; ?></p>
				 			<?php echo $summary; ?>
				 			<div class="bottom">
				 				<a class="standalone-link" href="<?php echo $link; ?>">view project page <i class="fa fa-chevron-right"></i></a>
				 				<?php 
					            if($download){ ?>
									<a target="_blank" href="<?php echo $download; ?>" class="sl-button">DOWNLOAD PROJECT PLAN </a>
								<?php } ?>

				 			</div>
				 		</div>
				 	</div>
				<?php endwhile; ?>
			 	</div>
			</div>

			<div class="cat-container">
				<h2><span>3</span>Simulations</h2>
				<div class="cat-description"><?php echo term_description( '8', 'task_type' ) ?></div>
				<div class="post-list">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'performance_task',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'task_type',
				            'field' => 'slug',
				            'terms' => 'simulations'
				        )
				    )
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<?php 
				 	$task_title = get_the_title(); 
				 	$summary = wpautop(get_the_content());
				 	$question = get_field('driving_question'); 
				 	$download = get_field('project_plan_document'); 
				 	
					$post_object = get_field('school');
					if( $post_object ): 
						// override $post
						$post = $post_object;
						setup_postdata( $post );
						$link = get_the_permalink();
						$school = get_the_title();
					    //wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
				 	<div class="post">
				 		<div class="title"><?php echo $task_title ; ?></div>
				 		<div class="show-hide">
				 			<p class="question"><?php echo $question; ?></p>
				 			<p class="school"> <span>SCHOOL: </span><?php echo $school; ?></p>
				 			<?php echo $summary; ?>
				 			<div class="bottom">
				 				<a class="standalone-link" href="<?php echo $link; ?>">view project page <i class="fa fa-chevron-right"></i></a>
				 				<?php 
					            if($download){ ?>
									<a target="_blank" href="<?php echo $download; ?>" class="sl-button">DOWNLOAD PROJECT PLAN</a>
								<?php } ?>

				 			</div>
				 		</div>
				 	</div>
					<?php endwhile; ?>
			 	</div>
			</div>

		</div>			

		<div class="right">
			<div class="cat-container">
				<h2><span>2</span>Student Driven Campaigns</h2>
				<div class="cat-description"><?php echo term_description( '9', 'task_type' ) ?></div>
				<div class="post-list">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'performance_task',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'task_type',
				            'field' => 'slug',
				            'terms' => 'student-driven-campaigns'
				        )
				    )
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<?php 
				 	$task_title = get_the_title(); 
				 	$summary = wpautop(get_the_content());
				 	$question = get_field('driving_question'); 
				 	$download = get_field('project_plan_document'); 
				 	
					$post_object = get_field('school');
					if( $post_object ): 
						// override $post
						$post = $post_object;
						setup_postdata( $post );
						$link = get_the_permalink();
						$school = get_the_title();
					    //wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
				 	<div class="post">
				 		<div class="title"><?php echo $task_title ; ?></div>
				 		<div class="show-hide">
				 			<p class="question"><?php echo $question; ?></p>
				 			<p class="school"> <span>SCHOOL: </span><?php echo $school; ?></p>
				 			<?php echo $summary; ?>
				 			<div class="bottom">
				 				<a class="standalone-link" href="<?php echo $link; ?>">view project page <i class="fa fa-chevron-right"></i></a>
				 				<?php 
					            if($download){ ?>
									<a target="_blank" href="<?php echo $download; ?>" class="sl-button">DOWNLOAD PROJECT PLAN</a>
								<?php } ?>

				 			</div>
				 		</div>
				 	</div>
				<?php endwhile; ?>
			 	</div>
			</div>

			<div class="cat-container">
				<h2><span>4</span>Design Challenges</h2>
				<div class="cat-description"><?php echo term_description( '7', 'task_type' ) ?></div>
				<div class="post-list">
				<?php 
				$args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'performance_task',
				    'tax_query' => array(
				        array(
				            'taxonomy' => 'task_type',
				            'field' => 'slug',
				            'terms' => 'design-challenges'
				        )
				    )
				);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>
				 	<?php 
				 	$task_title = get_the_title(); 
				 	$summary = wpautop(get_the_content());
				 	$question = get_field('driving_question'); 
				 	$download = get_field('project_plan_document'); 
				 	
					$post_object = get_field('school');
					if( $post_object ): 
						// override $post
						$post = $post_object;
						setup_postdata( $post );
						$link = get_the_permalink();
						$school = get_the_title();
					    //wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
				 	<div class="post">
				 		<div class="title"><?php echo $task_title ; ?></div>
				 		<div class="show-hide">
				 			<p class="question"><?php echo $question; ?></p>
				 			<p class="school"> <span>SCHOOL: </span><?php echo $school; ?></p>
				 			<?php echo $summary; ?>
				 			<div class="bottom">
				 				<a class="standalone-link" href="<?php echo $link; ?>">view project page <i class="fa fa-chevron-right"></i></a>
				 				<?php 
					            if($download){ ?>
									<a target="_blank" href="<?php echo $download; ?>" class="sl-button">DOWNLOAD PROJECT PLAN</a>
								<?php } ?>

				 			</div>
				 		</div>
				 	</div>
					<?php endwhile; ?>
			 	</div>
			</div>

			

		</div>
	</div>
</section>

<?php endwhile;?>


<?php get_footer(); ?>

