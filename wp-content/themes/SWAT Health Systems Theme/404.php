<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper">

			<!-- article -->
			<article id="post-404">

				<h1 class="center"><?php _e( "Sorry, there doesn't seem to be anything here", 'html5blank' ); ?></h1>
				<h2 class="center">
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
