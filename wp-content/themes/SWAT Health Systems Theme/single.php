<?php get_header(); ?>

	<main class="clear" role="main">

	<?php if(has_post_thumbnail()): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<div class="post__header-hero" style="background: url('<? echo $image[0]; ?>'); background-size: cover;">
			<h1 class="wrapper post__title"><?php the_title(); ?></h1>
		</div>

		<div class="wrapper clear post__wrapper">

			<!-- section -->
			<section class="columns desk-twelve">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="post__details">
						<!-- post details -->
						Published on <span class="date"><?php the_time('F j, Y'); ?></span> by <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
						<!-- /post details -->
					</div>
					
					<div class="post__content">					
						<?php the_content(); // Dynamic Content ?>
					</div>

					<div class="post__tags post__details">
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
					</div>

					<p class="post__categories post__details">
						<?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?>
					</p>

					<?php // comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
			
		</div>


	<?php else: ?>
		<!-- POST HAS NO THUMBNAIl -->

		<div class="wrapper">

			<!-- section -->
			<section class="columns desk-twelve">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<!-- post title -->
					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					<!-- /post details -->

					<?php the_content(); // Dynamic Content ?>

					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

					<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

					<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

					<?php comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
			
		</div>
	<?php endif; ?>

		
	</main>

<?php get_footer(); ?>
