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
	<div class="nav-header">
		<a href="<?= get_site_url(); ?>" class="my-0 mr-md-auto">
			<img class="brand-header" src="<?=get_template_directory_uri();?>/images/uni-brand-color.png" />
		</a>
		<nav class="my-md-0 mr-md-2">
			<a class="px-3 py-1" href="#">About</a>
			<a class="px-4 py-1" href="#">Blog</a>
			<a class="px-2 py-1 sm-link" href="https://www.facebook.com/UniWellnessCare/" target="_blank"><i class="fab fa-facebook-square"></i></a>
			<a class="px-2 py-1 sm-link" href="https://twitter.com/uniwellnesscare" target="_blank"><i class="fab fa-twitter-square"></i></a>
		</nav>
		<a class="btn btn-primary" href="#">Contact Us</a>
	</div>
