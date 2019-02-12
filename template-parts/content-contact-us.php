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
      <form action="https://app.hatchbuck.com/onlineForm/submit.php" method="post" name="form_90203652666" accept-charset="utf-8" class="form" id="custom_hatchbuck_contact">
        <input type="hidden" name="contact" value="true">
        <input type="hidden" name="enableServerValidation" value="1">
        <input type="hidden" name="enable303Redirect" value="0">
        <div class="form-row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="First Name" name="first_name" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="Last Name" name="last_name" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon1" name="email" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1" name="title" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Company" aria-label="Company" aria-describedby="basic-addon1" name="company" size="51" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <input type="tel" class="form-control" placeholder="Phone Number (optional)" aria-label="Phone Number" aria-describedby="basic-addon1" name="phone_number" size="51">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-5">
            <button class="btn btn-primary btn-lg">
              <?= (get_field('subscribe_cta')) ? the_field('subscribe_cta') : "Subscribe" ; ?>
            </button>
            <div id="custom_hatchbuck_contact_result" class="mt-3"></div>
          </div>
        </div>
        <li style="display:none">Should be Empty: <input type="hidden" name="website" value=""></li>
        <input type="hidden" id="simple_spc" name="simple_spc" value="90203652666-90203652666">
      </form>
		</div><!-- .entry-content -->
</div>

</article><!-- #post-<?php the_ID(); ?> -->

<script>
  jQuery(document).on('ready', function() {
    jQuery('#custom_hatchbuck_contact').on('submit', function(e) {
      e.preventDefault();
      jQuery.ajax({
        type: "POST",
        data : jQuery("#custom_hatchbuck_contact").serialize(),
        cache: false,
        url: "<?= get_template_directory_uri(); ?>/inc/hatchbuck-subscribe.php",
        success: function(data) {
          jQuery("#custom_hatchbuck_contact_result").css( "display", "block");
          jQuery("#custom_hatchbuck_contact_result").height(70);
          jQuery("#custom_hatchbuck_contact_result").html(data);
          // p tag return from Ajax file

          jQuery("#custom_hatchbuck_contact_result").delay(3000).fadeOut( "slow" );

          setTimeout(function() {
            jQuery("#custom_hatchbuck_contact_result").height(0);
            jQuery('#custom_hatchbuck_contact').find('input').val('');
            jQuery('#custom_hatchbuck_contact').find('input').val('');
          }, 4000);
        },
        error: function(data) {
          jQuery("#custom_hatchbuck_contact_result").css( "display", "block");
          jQuery("#custom_hatchbuck_contact_result").height(70);
          jQuery("#custom_hatchbuck_contact_result").html(data);
          // p tag return from Ajax file
          setTimeout(function() {
            jQuery("#custom_hatchbuck_contact_result").height(0);
            jQuery('#custom_hatchbuck_contact').find('input').val('');
            jQuery('#custom_hatchbuck_contact').find('input').val('');
          }, 4000);
        }
      });
    });
  });
</script>
