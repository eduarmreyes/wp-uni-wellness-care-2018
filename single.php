<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package uni-wellness-care
 */

get_header();
setPostViews(get_the_ID());
?>

	<div class="lp-section">
		<?php
			while ( have_posts() ) :
				the_post();
				
				get_template_part( 'template-parts/content', get_post_type() );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
					// comments_template();
				// endif;
				
			endwhile; // End of the loop.
		?>
	</div>
<?php
// get_sidebar();
get_footer();
