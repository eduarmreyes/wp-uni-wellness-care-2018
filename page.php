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

	switch (str_replace( ' ', '-', strtolower( get_the_title() ) )) {
		case 'home':
			get_header('homepage');
			break;
    case 'student-how-it-works':
      get_header('student-how-it-works');
      break;
    case 'how-it-works':
			get_header('how-it-works');
			break;
		default:
			get_header();
			break;
	}
?>

	<div class="lp-content content__<?= str_replace( ' ', '-', strtolower( get_the_title() ) ) ?>">
		<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', preg_replace('/[^A-Za-z0-9\-]/', '', str_replace( ' ', '-', strtolower( get_the_title() ) ) ) );

			endwhile; // End of the loop.
		?>
	</div>

	<?php
		if (str_replace(' ', '-', strtolower( get_the_title() )) == "home") {
			get_template_part( 'template-parts/shared',  'subscribe' );
		}
	?>

<?php
// get_sidebar();
get_footer();
