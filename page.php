<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uni-wellness-care
 */

	if (is_front_page()) {
		get_header('homepage');
	} else {
		get_header();
	}
?>

	<div class="lp-content">
		<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', strtolower(get_the_title()) );

			endwhile; // End of the loop.
		?>
	</div>
<?php
// get_sidebar();
get_footer();
