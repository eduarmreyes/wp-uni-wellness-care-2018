<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uni-wellness-care
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="assets/styles/main.css"> -->

		<!-- Palanquin Font -->
    <link href="https://fonts.googleapis.com/css?family=Palanquin:400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="nav-header nav-header-clean">
		<nav class="ml-auto my-md-0 mr-md-2">
			<a class="px-3 py-1" href="#">About</a>
			<a class="px-4 py-1" href="#">Blog</a>
			<a class="px-2 py-1 sm-link" href="#"><i class="fab fa-facebook-square"></i></a>
			<a class="px-2 py-1 sm-link" href="#"><i class="fab fa-twitter-square"></i></a>
			<a class="px-2 py-1 sm-link" href="#"><i class="fab fa-slack-hash"></i></a>
		</nav>
		<a class="btn btn-primary" href="#"><b>Contact Us</b></a>
	</div>

	<div class="lp-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img class="brand-hero" src="<?=get_template_directory_uri();?>/images/uni-brand-color.png" />
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>					
					<!-- <p class="text-large mt-3"><b>Connect</b> with Uni Wellness and provide telemental health designed to support life’s key transitions</p> -->
				</div>
				<div class="col-md-6">
					<img class="bg-hero" src="<?=get_template_directory_uri();?>/images/hero-img.jpg" />
				</div>
			</div>
		</div>
	</div>

<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'uni-wellness-care' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
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
			$uni_wellness_care_description = get_bloginfo( 'description', 'display' );
			if ( $uni_wellness_care_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $uni_wellness_care_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>.site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'uni-wellness-care' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>#site-navigation -->
	<!-- </header>#masthead -->

	<!-- <div id="content" class="site-content"> -->
