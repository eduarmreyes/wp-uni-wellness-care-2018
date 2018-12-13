<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uni-wellness-care
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("p-b-35"); ?>>
	<header class="entry-header m-h-200 d-flex justify-content-center align-items-center">
		<div class="entry-header__wrapper">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="container entry-title m-t-0">', '</h1>' );
				else :
					the_title( '<h2 class="container entry-title m-t-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				
				if ( 'post' === get_post_type() ) :
					?>
				<div class="container entry-meta">
					<?php
					uni_wellness_care_posted_on();
					uni_wellness_care_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->

	<?php uni_wellness_care_post_thumbnail(); ?>

	<div class="container">
		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'uni-wellness-care' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'uni-wellness-care' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
