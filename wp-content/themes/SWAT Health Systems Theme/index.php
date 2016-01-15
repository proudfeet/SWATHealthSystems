<?php get_header(); ?>

	<main class="clear" role="main">

		<?php if(is_home()): ?>

			<div class="blog__header-hero">
				<div class="wrapper">
					<h1 class="blog__header"><?php _e( 'Blog', 'html5blank' ); ?></h1>
				</div>
			</div>

			<div class="wrapper clear blog__wrapper">
				<section class="columns desk-twelve">
					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</section>

			</div>

		<?php else: ?>

			<div class="wrapper">
				
				<section class="columns desk-eight">

					<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</section>

				<?php get_sidebar(); ?>

			</div>
			<!-- section -->

		<?php endif; ?>
		
		<!-- /section -->
	</main>

<?php get_footer(); ?>
