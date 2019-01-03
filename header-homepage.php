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
  <div class="nav-header nav-header-clean collapse navbar-homepage justify-content-end" id='navbarHeader'>
    <?php
      $menu_args = array(
        'container' => false,
        'menu' => 'landing navigation',
        'menu_class' => 'd-flex align-items-center m-0 p-0 list-unstyled'
      );
      wp_nav_menu($menu_args);
    ?>
  </div>
  <div class="nav-header nav-header-clean">
    <nav class="ml-auto my-md-0 mr-md-2 d-none d-sm-flex">
      <?php
        $menu_args = array(
          'container' => false,
          'menu' => 'landing navigation',
          'menu_class' => 'd-flex align-items-center m-0 p-0 list-unstyled'
        );
        wp_nav_menu($menu_args);
      ?>
      <?php
        $menu_options = wp_get_nav_menu_items('landing social navigation');
        foreach ((array) $menu_options as $menu) {
          ?>
          <a class="px-2 py-1 sm-link" href="<?= $menu->url; ?>" target="<?= $menu->target; ?>"><i class="fab fa-<?= $menu->title; ?>"></i></a>
          <?php
        }
      ?>
    </nav>
    <div class="contact-us__wrapper">
      <?php
        $contact_us_menu = wp_get_nav_menu_items('contact us');
        foreach ((array) $contact_us_menu as $menu) {
          ?>
          <a class="<?= implode(" ", $menu->classes); ?>" href="<?= $menu->url; ?>"><?= $menu->title; ?></a>
          <?php
        }
      ?>
      <button class="navbar-toggler d-inline-block d-sm-none" data-toggle="collapse" data-target="#navbarHeader">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <div class="lp-hero">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="brand-hero" src="<?=get_template_directory_uri();?>/images/uni-brand-color.png" />
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?= get_field('header_cta'); ?>
          <?php endwhile; endif; ?>
        </div>
        <div class="col-md-6">
          <img class="bg-hero" src="<?=get_template_directory_uri();?>/images/hero-img.jpg" />
        </div>
      </div>
    </div>
  </div>