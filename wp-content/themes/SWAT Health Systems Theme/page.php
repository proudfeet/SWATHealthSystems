<?php get_header(); ?>
	
	<?php if(is_front_page()): ?>
		<!-- if homepage -->

		<main role="main">

			<!-- homepage top banner -->
			<div class="homepage-hero homepage-hero__top-banner">
				<div class="wrapper hero-content clear">
					<div class="columns desk-six get-started__container">
						<h1 class="hero__message">Personalized training for you, wherever</h1>
						<a href="http://swathealth.trainerize.com/contact.aspx?ref=newuser" class="hero__button button button-yellow">
							Get started
						</a>
					</div>	
					<div class="columns desk-six example__container">
						<video class="example__video" preload="auto" loop="" autoplay="">
							<source type="video/mp4" src="http://www.trainerize.com/video/1-Training-plan-5May-1.mp4">
						</video>
						<img src="<?php echo bloginfo('template_directory'); ?>/img/trainerizeExample.png" alt="How Trainerize works">
					</div>				
				</div>
			</div>
			<!-- /homepage top banner -->

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="wrapper article__content">
						<?php the_content(); ?>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<br class="clear">
					</div>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			<div class="homepage-hero homepage-hero__bottom-banner">
				<video class="hero__video" preload="auto" loop="" autoplay="" poster="./img/SWATgymWeights.jpg">
					<source type="video/webm" src="http://swathealth.wpengine.com/wp-content/uploads/2014/04/swat-webm.webm">
					<source type="video/mp4" src="http://swathealth.wpengine.com/wp-content/uploads/2014/04/swat-high.mp4">
				</video>
				<div class="wrapper hero-content clear center">
					<h1 class="hero__message center">What are you waiting for?</h1>
					<a class="button button-yellow button-center" href="http://swathealth.trainerize.com/contact.aspx?ref=newuser">Get started today</a>
				</div>
			</div>
			
		</main>

	<!-- all other pages -->
	<?php else: ?>

		<main role="main">
			<!-- section -->
			<section class="wrapper clear">

				<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- featured image -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					<!-- /featured image -->

					<?php the_content(); ?>

					<?php comments_template( '', true ); // Remove if you don't want comments ?>

					<br class="clear">

					<?php // edit_post_link(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
		</main>

	<?php endif; ?>

<?php get_footer(); ?>
