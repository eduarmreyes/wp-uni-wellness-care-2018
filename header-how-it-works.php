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
  <!-- Hotjar Tracking Code for https://uniwellnesscare.com -->
  <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1161275,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132533479-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-132533479-1');
  </script>
</head>

<body <?php body_class(); ?>>
	<div class="nav-header border-0 box-shadow-0">
		<a href="<?= get_site_url(); ?>" class="my-0 mr-md-auto text-dark text-large">
			uni <strong>wellness</strong>
		</a>
		<nav class="my-md-0 mr-md-2 d-none d-sm-flex">
      <?php
        $menu_args = array(
          'container' => false,
          'menu' => 'landing navigation',
          'menu_class' => 'd-flex align-items-center m-0 p-0 list-unstyled black-menu'
        );
        wp_nav_menu($menu_args);
      ?>
		</nav>
    <div class="contact-us__wrapper">
      <a class="btn btn-lg btn-primary f-bold" href="https://example.com">Request a demo</a>
      <?php
        $request_demo = wp_get_nav_menu_items('request a demo');
        foreach ((array) $request_demo as $menu) {
          ?>
          <!-- <a class="btn btn-large btn-primary f-bold" href="https://example.com">Request a demo</a> -->
          <?php
        }
      ?>
      <button class="navbar-toggler d-inline-block d-sm-none" data-toggle="collapse" data-target="#navbarHeader">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
	</div>
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
  <div class="home">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 mt-5 pt-5 pb-5 mb-5">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?= get_field('header_cta'); ?>
          <?php endwhile; endif; ?>
          <div class="row mt-5 pt-5">
            <div class="col-md-5">
              <a href="<?= get_site_url() . "/index.php/" . get_page_uri("88") ?>" class="btn btn-primary "><strong>Request a demo</strong></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
