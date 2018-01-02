<?php
/*
Template Name: Home
*/
get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->
<section id="home-hero" class="hero" role="main">
	<div class="headline revealme">
		<div class="content">
			<div class="titles ">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<!-- Overview video Section -->
<?php $posts = get_field('overview_video_link'); 
if ( $posts != '' ) :
	if( $posts ): ?>
	    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
			<section id="overview-video" class="section" role="main">
				
				<div class="revealme">
					<div class="content">
						<div class="iframe-holder ">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
	    <?php endforeach; ?>
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
<?php endif; ?>


<!-- Statement of Problem Section -->
<section id="problem" class="section" role="main">
	<div class="content">
		<div class="centered">
			<h1>Process Overview</h1>
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
						<div class="number">15</div>
						<div class="text">
							<span class="header">SCHOOLS</span>
							CTE, YABC, Transfer, Portfolio based, and traditional HS
						</div>
					</div>
				</div>
				<div class="quarter partners revealme delay1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/block-collaboration.svg">
					<div class="stats">
						<div class="number">5</div>
						<div class="text">
							<span class="header">PARTNERS</span>
							Community Based Organizations
						</div>
					</div>
				</div>
				<div class="quarter educators revealme delay2">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/book-apple.svg">
					<div class="stats">
						<div class="number">46<span>+</span></div>
						<div class="text">
							<span class="header">EDUCATORS</span>
							Principals, Assistant Principals, Teachers, Counselors, Community Associates

						</div>
					</div>
				</div>
				<div class="quarter students revealme delay3">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/backpack.svg">
					<div class="stats">
						<div class="number">2000<span>+</span></div>
						<div class="text">
							<span class="header">STUDENTS</span>
							served in the NYC area in the 9th-12th grade

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
					<div class="pilot_badge"><span>Initial<br> Pilot<br> Year</span></div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/svgs/thumbtack.svg">
					<?php the_field('performance_tasks'); ?>
				</div>
				<div class="quarter orange revealme delay3">
					<div class="pilot_badge"><span>Initial<br> Pilot<br> Year</span></div>
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

				<div class="email-form">
					

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://nycskillslab.us16.list-manage.com/subscribe/post?u=6c5fa6803a59427f9ee25e46c&amp;id=b880a203da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<h5>Subscribe to our mailing list</h5>

<div class="field-groups">
	<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
	</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
	</div>
	<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
	</div>
	<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
	</div>
	<div class="mc-field-group size1of2">
	<label for="mce-BIRTHDAY-month">Birthday </label>
	<div class="datefield">
	<span class="subfield monthfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month"></span> / 
	<span class="subfield dayfield"><input class="birthday " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day"></span> 
	<span class="small-meta nowrap">( mm / dd )</span>
	</div>
</div>

</div> <div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6c5fa6803a59427f9ee25e46c_b880a203da" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


				</div>
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
			<div class="sxsw_vid">
				<h3><div class="tweet-icon video-icon"><i class="fa fa-film" aria-hidden="true"></i></div>SXSWedu</h3>

		 		<div class="video-intro"><?php the_field('sxswedu_video_title_description'); ?></div>

			 	<?php $posts = get_field('sxswedu_video_link'); 
				if ( $posts != '' ) :
					if( $posts ): ?>
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
								<div class="iframe-holder ">
							        <?php the_content(); ?>
							    </div>
					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
				<?php endif; ?>
			
			</div>

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
