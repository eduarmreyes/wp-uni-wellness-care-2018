<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uni-wellness-care
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="author-wrapper mt-6 d-flex justify-content-center">
        <div class="author__figure text-center">
          <?= get_avatar(get_the_author_meta('ID'), 512) ?>
          <div class="author__figcaption mt-4 text-lg">
            <h3 class="author__figcaption_title">
              <?= get_the_author_meta('display_name') ?>
            </h3>
            <p class="author__figcaption_description">
              <?= get_the_author_meta('description') ?>
            </p>
          </div>
        </div>
        <?//= get_the_author_meta('display_name') ?>
      </div>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
