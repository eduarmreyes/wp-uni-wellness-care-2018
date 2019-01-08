<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uni-wellness-care
 */

?>

		<!-- </div>#content -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-nav">
							<a href="<?= get_site_url(); ?>">
								<img class="brand-footer" src="<?=get_template_directory_uri();?>/images/uni-brand-white.png" />
							</a>
							<ul class="list-unstyled hovered-opacity-off no-decoration">
								<?php
									$menu_options = wp_get_nav_menu_items('landing navigation footer');
									foreach ((array) $menu_options as $menu) {
										?>
										<li>
											<a href="<?= $menu->url; ?>" target="<?= $menu->target; ?>"><?= $menu->title; ?></a>
										</li>
										<?php
									}
								?>
								<li class="sm-link-wrap">
									<?php
										$menu_options = wp_get_nav_menu_items('landing social navigation');
										foreach ((array) $menu_options as $menu) {
											?>
											<a class="sm-link" href="<?= $menu->url; ?>" target="<?= $menu->target; ?>"><i class="fab fa-<?= $menu->title; ?>"></i></a>
											<?php
										}
									?>
								</li>

							</ul>

						</div>
					</div>
				</div>
			</div>
		</footer>


		<!-- <footer id="colophon" class="site-footer"> -->
			<!-- <div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'uni-wellness-care' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'uni-wellness-care' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'uni-wellness-care' ), 'uni-wellness-care', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div>.site-info -->
		<!-- </footer>#colophon -->
	<!-- </div>#page -->

	<?php wp_footer(); ?>
	</body>
</html>
