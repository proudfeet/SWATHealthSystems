<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php $post_type = get_post_type(); ?>

	<!-- SUCCESS STORIES -->
	<?php if($post_type === "success_story"): ?>
		<!-- article -->
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: url('<?php echo $image[0] ?>'); background-size: 100% 100%;">

			<!-- wrapper -->
			<div class="wrapper">
				
				<!-- post title -->
				<h2 class="post__header center">
					<span class="post__title"><?php the_title(); ?></span>
				</h2>
				<!-- /post title -->
				
				<!-- post content -->
				<div class="post__content center">
					<?php the_content(); // Build your custom callback length in functions.php ?>
				</div>
				<!-- /post content -->

			</div>
			<!-- /wrapper -->
			
			

		</article>
		<!-- /article -->

	<!-- ALL OTHER POSTS -->
	<?php else: ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h2 class="post__header">
				<a class="post__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<!-- post details -->
			<div class="post__details">
				Published on <span class="date"><?php the_time('F j, Y'); ?></span> by <span class="author"><?php the_author_posts_link(); ?></span>
			</div>		
			<!-- /post details -->
			
			<div class="post__content">
				<a class="post__excerpt-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				</a>
			</div>
			

		</article>
		<!-- /article -->
	<?php endif; ?>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
