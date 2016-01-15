<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper author__wrapper">

		<?php if (have_posts()): the_post(); ?>

			<h1><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<h2 class="post__header">
					<a class="post__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /Post title -->

				<!-- post details -->
				<div class="post__details">
					Published on <span class="date"><?php the_time('F j, Y'); ?></span>
				</div>		
				<!-- /post details -->

				<div class="post__excerpt">
					<a class="post__excerpt-link" href="<?php the_permalink(); ?>" title="<?php html5wp_excerpt ?>">
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
					</a>
				</div>

				<br class="clear">

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

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
