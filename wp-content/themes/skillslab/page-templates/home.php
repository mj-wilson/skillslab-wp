<?php
/*
Template Name: Home
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="home-hero" class="hero" role="main">
	<div class="content">
		<div class="headline">
			<div class="titles revealme">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<!-- Statement of Problem Section -->
<section id="problem" class="section" role="main">
	<div class="content">
		<div class="centered">
			<h1>Process Overview</h1>
			<div class="infographic revealme">
				<div class="top clear">
					<div class="third left">
						<h3>PROBLEM:</h3>
						<!--<img width="190" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/info1.svg">-->
						<?php get_template_part('template-parts/inline', 'info1.svg'); ?>
						<p>There is a disconnect between what students are taught and what the world demands.</p>
					</div>
					<div class="third middle">
						<div class="green-bubble">
							<p>Convening teachers and their partners in collaborative task design and professional learning sessions</p>
						</div>
						<div class="drivers">
							<h3>DRIVERS</h3>
						</div>						
					</div>
					<div class="third right">
						<h3>AIM:</h3>
						<!--<img width="100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/info2.svg">-->
 						<?php get_template_part('template-parts/inline', 'info2.svg'); ?>
						<p>To engage educators, employers and other youth service providers in identifying, designing, implementing and sharing experiences that help students to build skills that support their postsecondary success.</p>
						
					</div>
					
				</div>
				<div class="bottom clear">
					<div class="mobile-only">
						<div class="green-bubble">
							<p>Convening teachers and their partners in collaborative task design and professional learning sessions</p>
						</div>
						<div class="drivers">
							<h3>DRIVERS</h3>
						</div>						
					</div>

					<div class="half left">
						<div class="green-bubble">
							<p>Providing resources to fund local change ideas and innovation strategies</p>
						</div>
					</div>
					<div class="half right">
						<div class="green-bubble">
							<p>Providing local customized training and technical assistance to practitioners</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Schools and Partners Section -->
<section id="schools-partners" class="section gray" role="main">
	<div class="content">
		<div class="centered">
			<h1 revealme>Schools + Partners</h1>
			<div class="clear col-holder ">
				<div class="quarter schools revealme">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/school_sm.svg">
					<div class="stats">
						<div class="number">11</div>
						<div class="text">
							<span class="header">SCHOOLS</span>
							CTE, Transfer, Portfolio Based and one M.S. School
						</div>
					</div>
				</div>
				<div class="quarter partners revealme delay1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/block-collaboration.svg">
					<div class="stats">
						<div class="number">28</div>
						<div class="text">
							<span class="header">PARTNERS</span>
							Mix of Nonprofit, Corporate &amp; Education Based Organizations
						</div>
					</div>
				</div>
				<div class="quarter educators revealme delay2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/book-apple.svg">
					<div class="stats">
						<div class="number">40<span>+</span></div>
						<div class="text">
							<span class="header">EDUCATORS</span>
							Principals/Vice-Principals, Teachers, Community Assistants &amp; Paraprofessionals
						</div>
					</div>
				</div>
				<div class="quarter students revealme delay3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/backpack.svg">
					<div class="stats">
						<div class="number">1000<span>+</span></div>
						<div class="text">
							<span class="header">STUDENTS</span>
							served in the NYC area in 6-12 grade
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Detail Section -->
<section id="details" class="section " role="main">
	<div class="content">
		<div class="centered">
			<div class="clear col-holder">
				<div class="quarter revealme">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/blocks.svg">
					<?php the_field('skills_framework'); ?>
				</div>
				<div class="quarter dark-orange revealme delay1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/support.svg">
					<?php the_field('support_strategies'); ?>
				</div>
				<div class="quarter dark-green revealme delay2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/thumbtack.svg">
					<?php the_field('performance_tasks'); ?>
				</div>
				<div class="quarter orange revealme delay3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/light-bulb-line.svg">
					<?php the_field('innovation_projects'); ?>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- Goals -->
<section id="goals" class="section " role="main">
	<div class="content revealme">
		<div class="centered">
			<?php the_field('targeted_achievements'); ?>
		</div>
	</div>
</section>

<!-- About -->
<section id="about" class="section " role="main">
	<div class="content">
		<div class="centered clear">
			<div class="left revealme">
				<?php the_field('about_skills_lab'); ?>
			</div>
			<div class="right revealme delay1">
				<?php the_field('about_ge_foundation'); ?>
			</div>
		</div>
	</div>
</section>

<!-- Partners -->
<section id="partner" class="section " role="main">
	<div class="content">
		<div class="centered">
			<h1>Our Partners</h1>
			<div class="clear col-holder">

			<?php $posts = get_field('partners');

			if( $posts ): ?>
			<?php $i = 0; ?>
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <div class="quarter revealme delay<?php echo $i; ?>">
			            <div class="logo-image">
			            	<?php  if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>

			            </div>

			            <h6><?php the_title(); ?></h6>
			        </div>
				<?php $i++; ?>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

			</div>
			<a class="standalone-link" href="/about">view all <i class="fa fa-chevron-right"></i></a>

		</div>
	</div>
</section>

<section id="social-feed" class="section " role="main">
	<div class="content">
		<div class="centered clear">
			<div class="latest-tweets">
				<h3><div class="tweet-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div><span>Latest Tweets</span> @NYC_Skills_lab</h3>
				<div class="tweet-holder">
				<?php echo do_shortcode('[kebo_tweets title="" display="all" count="8" style="list" theme="light" offset="false" avatar="off" conversations="false" media="false"]'); ?>

				</div>
			</div>
		</div>
	</div>
</section>


<?php endwhile;?>


<?php get_footer(); ?>
