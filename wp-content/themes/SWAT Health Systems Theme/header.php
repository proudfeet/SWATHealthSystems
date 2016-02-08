<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">

				<!-- wrapper -->
				<div class="wrapper">

					<!-- ************* -->
					<!-- NEW NAV -->
					<!-- ************* -->

					

					<!-- logo -->
					<div class="logo columns desk-twelve">
						<a href="<?php echo home_url(); ?>" title="<?php echo wp_title(''); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/SWATLogo.png" alt="SWAT Health Systems" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<div class="menu-toggle columns tablet-down tablet-three center">
						<a href="#" class="menu-toggle__button" id="menu-toggle__button">
							<span class="menu-toggle__text">Menu</span>
							<i class="fa fa-bars"></i>
						</a>
					</div>

					<div class="columns desk-two spacer tablet-hide">
						&nbsp;
					</div>					

					<!-- nav -->
					<nav class="nav columns desk-eight tablet-nav-offscreen" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

					<!-- ************ -->
					<!-- END NEW NAV -->
					<!-- ************ -->

					<div class="columns desk-two tablet-nine spacer">
						<ul class="social__container">
							<li class="social__item">
								<a class="social__link" href="http://www.twitter.com/SWAThealth" title="SWAT Health on Twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="social__item">
								<a class="social__link" href="http://www.facebook.com/SWAThealthPC" title="SWAT Health on Facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="social__item">
								<a class="social__link" href="https://www.youtube.com/channel/UCjGQeDKQrXyPl2RTu_LOzCA" title="SWAT Health on YouTube">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
							<li class="social__item">
								<a class="social__link" href="http://www.instagram.com/swathealth" title="SWAT Health on Instagram">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>

				</div>
				<!-- /wrapper -->

			</header>
			<!-- /header -->
