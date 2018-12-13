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
		<div class="lp-section mt-5 text-center text-md-left">
			<div class="container">
				<div class="row">
					<?php
							$fields = CFS()->get( 'advantages' );
							foreach ( $fields as $field ) { ?>
								<div class="col-sm-12 col-md-6 col-lg-3">
									<div class="cont-wrap text-mid">
										<i class="fas fa-<?= $field['advantage_item_icon'];?>"></i>
										<p><strong><?= $field['advantage_item_title'];?></strong></p>
										<?= $field['advantage_item_content'];?>
									</div>
								</div>
							<?php
							}
					?>
				</div>
			</div>
		</div>

		<div class="lp-section mt-5">
			<div class="container">
				<?= get_field('blog_first_section_title'); ?>

				<div class="row">
					<div class="col-sm-12 col-md-6 mb-5">
						<div class="panel-wrap text-center panel-decor-one">
							<h4 class="mb-3">Culture of Caring</h4>
							<p>Allow new ways for your students & faculty to connect with the right kind of therapy for them.</p>
							<a href="" class="d-block">Learn more…</a>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 mb-5">
						<div class="panel-wrap text-center panel-decor-two">
							<h4 class="mb-3">Access to Online Mental Health Care</h4>
							<p>We can improve lives by meeting their social emotional needs , no matter where they are located</p>
							<a href="" class="d-block">Learn more…</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="lp-section">
			<div class="container">
				<?= get_field('blog_second_section_title'); ?>

				<div class="row">
					<div class="col-sm-12 col-md-4 mb-5">
						<div class="panel-wrap text-center panel-decor-three">
							<h4 class="mb-3">Online Therapy</h4>
							<p>What makes an online therapy session successful?</p>
							<div class="horz-img-wrap-therapy"></div>
						</div>
					</div>

					<div class="col-sm-12 col-md-8 mb-2">
						<div class="panel-wrap text-center ">
							<h4 class="mb-3">Research suggests that our future lies in telehealth</h4>
							<p>Now that data transmission networks are much more robust and medical legislations are gradually allowing telehealth, the infrastructure is in place to make international medicine a common practice in the future.</p>
							<div class="horz-img-wrap-research"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="lp-section lp-testimonial">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-8 offset-md-2">
						<div class="panel-fade">
							<div class="row">
								<?php $testimonial = get_field('testimonial_group') ?>
								<div class="col-sm-12 col-md-4 text-center text-md-left">
									<img class="testimonial-doc" src="<?=$testimonial['testimonial_image']['url'];?>" alt="<?= $testimonial['testimonial_image']['alt']; ?>" />
								</div>
								<div class="col-sm-12 col-md-8">
									<?= $testimonial['testimonial_title']; ?>
									<?= $testimonial['testimonial_text']; ?>
									<?= $testimonial['testimonial_signature']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="lp-section lp-section-blue">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-8 offset-md-2 text-center">
						<?= get_field('cta_section_text'); ?>
						<?php $cta = get_field('cta_request_demo') ?>
						<a href="<?= $cta['url']; ?>" class="btn btn-outline-light btn-lg mt-2" target="<?= $cta['target']; ?>"><b><?= $cta['title']; ?></b></a>
					</div>
				</div>
			</div>
		</div>

		<div class="lp-section mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<?= get_field('') ?>
						<h2 class="mt-2 mb-4 text-left">Uni Wellness helps remove barriers</h2>
						<div class="panel-fade">
							<div class="row">
								<?php
									$implementations = CFS()->get( 'implementations' );
									foreach ( $implementations as $implementation ) { ?>
										<div class="col-sm-12 col-md-4">
											<img class="icon-draw mb-3 mt-1" src="<?= $implementation['image'] ?>" />
											<?= $implementation['title'] ?>
											<div class="font-grey text-mid">
												<?= $implementation['content'] ?>
											</div>
										</div>
									<?php
									}
								?>
							</div>
						</div>
						<?php $cta_therapy = get_field('cta_offer_therapy') ?>
						<a href="<?= $cta_therapy['url']; ?>" class="btn btn-primary btn-lg mt-2 ml-auto mr-auto" target="<?= $cta_therapy['target']; ?>"><b><?= $cta_therapy['title']; ?></b></a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- <div id="primary" class="content-area">
		<main id="main" class="site-main"> -->

		<?php
		// while ( have_posts() ) :
		// 	the_post();

			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		// endwhile; // End of the loop.
		?>

		<!-- </main>#main -->
	<!-- </div>#primary -->

<?php
// get_sidebar();
get_footer();
