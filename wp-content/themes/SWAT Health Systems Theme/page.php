<?php get_header(); ?>
	
	<?php if(is_front_page()): ?>
		<!-- if homepage -->

		<main role="main">

			<!-- homepage top banner -->
			<div class="homepage-hero homepage-hero__top-banner">
				<div class="wrapper hero-content clear">
					<div class="columns desk-six tablet-twelve get-started__container">
						<h1 class="hero__message">Personalized training for you, wherever</h1>
						<a href="<?php echo site_url('sign-up') ?>" class="hero__button button button-yellow">
							Get started
						</a>
					</div>	
					<div class="columns desk-six example__container tablet-hide">
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
				<video class="hero__video" preload="auto" loop="" autoplay="" poster="<?php get_template_directory_uri ('img/SWATgymweights.jpg') ?>">
					<source type="video/webm" src="http://swathealth.wpengine.com/wp-content/uploads/2014/04/swat-webm.webm">
					<source type="video/mp4" src="http://swathealth.wpengine.com/wp-content/uploads/2014/04/swat-high.mp4">
				</video>
				<div class="wrapper hero-content clear center">
					<h1 class="hero__message center">What are you waiting for?</h1>
					<a class="button button-yellow button-center" href="<?php echo site_url('sign-up'); ?>">Get started today</a>
				</div>
			</div>
			
		</main>

	<!-- all other pages -->
	<?php else: ?>

		<main role="main">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- featured image -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="page__header-hero" style="background: url('<?php echo $image[0] ?>'); background-size: cover">
							<div class="wrapper clear">
								<h1 class="page__title"><?php the_title(); ?></h1>
							</div>
						</div>
					<?php else: ?>
						<h1 class="page__title wrapper"><?php the_title(); ?></h1>
					<?php endif; ?>
					<!-- /featured image -->

					<div class="wrapper clear page__wrapper">					
						<?php the_content(); ?>
					</div>


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

		</main>

	<?php endif; ?>

<?php get_footer(); ?>
