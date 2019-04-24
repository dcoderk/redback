<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package redback
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<style>

	@media only screen and (min-width: 1024px) { 
		.site-header {
			height: 30vh;
		}
	} 

	@media (min-width: 560px) and (max-width: 650px) {
	header .jarallax h1 {
		margin-bottom: .5rem !important;
	}
	header .jarallax h5 {
		margin-bottom: .5rem !important;
	}
	}


	@media (min-width: 660px) and (max-width: 700px) {
	header .jarallax h1 {
		margin-bottom: 1.5rem !important;
	}
	header .jarallax h5 {
		margin-bottom: 1.5rem !important;
	}
	}

	
	.navbar:not(.top-nav-collapse) {
		background: transparent !important;
	}


	@media (min-width: 800px) and (max-width: 850px) {
		.navbar:not(.top-nav-collapse) {
			background: #9da4b1!important;
		}
	} 

	
	</style>

</head>

<body <?php body_class(); ?>>

<header>

	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top scrolling-navbar custom-nav">
	<div class="container">
		<a class="navbar-brand" href="#">
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$redback_theme_description = get_bloginfo( 'description', 'display' );
			if ( $redback_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $redback_theme_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
		aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-7">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_class'     => 'navbar-nav nav-list mr-auto',
			) );
		?>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
			<a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Asset_A1.png"  alt="product" class="product-icon" /></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Asset_A2.png"  alt="product" class="product-icon"/></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Asset_A3.png"  alt="product" class="product-icon"/></a>
			</li>
		</ul>
		</div>
	</div>
	</nav>

	<!-- Intro Section -->
	<div class="view jarallax site-header" data-jarallax='{"speed": 0.2}' style="background-image: url('http://redback.test/wp-content/uploads/2019/04/Header1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div class="mask rgba-purple-slight">
		<div class="container h-100 d-flex justify-content-center align-items-center">
		<div class="row pt-5 mt-3">
			<div class="col-md-12 wow fadeIn mb-3">
			<div class="text-center">
				<h2 class="heading-title font-weight-bold mb-5 wow fadeInUp white-text">Collaboration Services</h2>
				</li>
				<h6 class="mb-5 heading-subtitle wow fadeInUp font-weight-bold white-text" data-wow-delay="0.2s">For All Your Day-to-day Meetings</h6>
				</ul>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>

</header>
<!--Main Navigation-->




<div id="content" class="site-content">
	