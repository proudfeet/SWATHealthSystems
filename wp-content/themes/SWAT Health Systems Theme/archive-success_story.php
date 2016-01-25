<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="success-stories__wrapper">

			<h1 class="off-page"><?php _e( 'Success Stories', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
