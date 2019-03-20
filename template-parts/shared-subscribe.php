<div class="lp-section lp-section-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 offset-md-2 text-center">
        <?= (get_field('subscribe_title')) ? the_field('subscribe_title') : "<p class='text-large'>Stay on top of the latest news</p>" ; ?>
        <form action="https://app.hatchbuck.com/onlineForm/submit.php" method="post" name="form_90203652666" accept-charset="utf-8" class="form justify-conten-center alig-items-center" id="custom_hatchbuck_scroll-box">
          <input type="hidden" name="formID" value="90203652666">
          <input type="hidden" name="enableServerValidation" value="1">
          <input type="hidden" name="enable303Redirect" value="0">
          <div class="form-row">
            <div class="col-md-7">
              <input type="email" class="far form-control bw-0 no-focus h-100" placeholder="&#xf0e0;  Your email" aria-label="Your email" aria-describedby="basic-addon1" name="email" size="51" required>
            </div>
            <div class="col-md-5">
              <button class="btn btn-outline-white btn-lg btn-block bw-2">
                <?= (get_field('subscribe_cta')) ? the_field('subscribe_cta') : "Subscribe" ; ?>
              </button>
            </div>
            <div class="col-md-7 ml-auto mr-auto mt-3">
              <div id="custom_hatchbuck_scroll-box_result"></div>
            </div>
          </div>
          <li style="display:none">Should be Empty: <input type="hidden" name="website" value=""></li>
          <input type="hidden" id="simple_spc" name="simple_spc" value="90203652666-90203652666">
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  jQuery(document).on('ready', function() {
    jQuery('#custom_hatchbuck_scroll-box').on('submit', function(e) {
      e.preventDefault();
      jQuery.ajax({
        type: "POST",
        data : jQuery("#custom_hatchbuck_scroll-box").serialize(),
        cache: false,
        url: "<?= get_template_directory_uri(); ?>/inc/hatchbuck-subscribe.php",
        success: function(data) {
          jQuery("#custom_hatchbuck_scroll-box_result").css( "display", "block");
          jQuery("#custom_hatchbuck_scroll-box_result").height(70);
          jQuery("#custom_hatchbuck_scroll-box_result").html(data);
          // p tag return from Ajax file

          jQuery("#custom_hatchbuck_scroll-box_result").delay(3000).fadeOut( "slow" );

          setTimeout(function() {
            jQuery("#custom_hatchbuck_scroll-box_result").height(0);
            jQuery('#custom_hatchbuck_scroll-box').find('input').val('');
            jQuery('#custom_hatchbuck_scroll-box').find('input').val('');
          }, 4000);
        },
        error: function(data) {
          jQuery("#custom_hatchbuck_scroll-box_result").css( "display", "block");
          jQuery("#custom_hatchbuck_scroll-box_result").height(70);
          jQuery("#custom_hatchbuck_scroll-box_result").html(data);
          // p tag return from Ajax file
          setTimeout(function() {
            jQuery("#custom_hatchbuck_scroll-box_result").height(0);
            jQuery('#custom_hatchbuck_scroll-box').find('input').val('');
            jQuery('#custom_hatchbuck_scroll-box').find('input').val('');
          }, 4000);
        }
      });
    });
  });
</script>
