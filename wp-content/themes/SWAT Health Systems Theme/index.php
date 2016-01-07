<?php get_header(); ?>

	<main class="clear" role="main">

		<div class="wrapper">
			
			<section class="columns desk-eight tablet-twelve">

				<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>

			<?php get_sidebar(); ?>
		</div>
		<!-- section -->
		
		<!-- /section -->
	</main>

<?php get_footer(); ?>
