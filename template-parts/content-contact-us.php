<article id="post-<?php the_ID(); ?>" <?php post_class("p-b-35"); ?>>
	<header class="entry-header m-h-200 d-flex justify-content-center align-items-center">
		<div class="entry-header__wrapper">
			<div class="container">
				<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title m-t-0">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title m-t-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          endif;
				?>
			</div>
		</div>
	</header><!-- .entry-header -->

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
			?>
      <?php
        if ($_GET["contact_success"]) {
          ?>
          <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <p>Thank you for contacting us.</p>
          </div>
          <?php
        }
      ?>
      <form action="https://app.hatchbuck.com/onlineForm/submit.php" method="post" name="form_90203652666" accept-charset="utf-8" class="form" id="custom_hatchbuck_contact">
        <input type="hidden" name="formID" value="90380805226">
        <input type="hidden" name="enableServerValidation" value="1">
        <input type="hidden" name="enable303Redirect" value="0">
        <div class="form-row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="First Name" id="input_1" name="q1_firstName1" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="Last Name" id="input_3" name="q3_lastName3" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon1" id="input_4" name="q4_email" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <textarea class="form-control" name="q8_message" cols="51" rows="6" placeholder="Message (optional)"></textarea>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <button class="btn btn-primary btn-lg">
              Send Message
            </button>
            <div id="custom_hatchbuck_contact_result" class="mt-3"></div>
          </div>
        </div>
        <input type="hidden" name="website" value=""><!--  should be empty -->
        <input type="hidden" id="simple_spc" name="simple_spc" value="90380805226-90380805226">
      </form>
		</div><!-- .entry-content -->
</div>

</article><!-- #post-<?php the_ID(); ?> -->
