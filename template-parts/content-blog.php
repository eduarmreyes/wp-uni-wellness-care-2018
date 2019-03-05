<?php
  $args = array(
    'post_type' => 'post',
     'category__not_in' => 18 
  );

  $the_query = new WP_Query($args);

  $most_read_args = array(
    'posts_per_page' => 5,
    'meta_key' => 'post_views_count',
    'order_by' => 'meta_value_num',
  );

  $recommended_query = new WP_Query($most_read_args);
?>

<div class="lp-section mt-5 text-center text-md-left">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1><?= the_title(); ?></h1>
        <h5>
          <?= the_content(); ?>
        </h5>
      </div> <!-- ./col-12 -->
    </div> <!-- ./row -->
  </div> <!-- ./container -->

  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 mb-6">
        <div class="row">
          <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <div class="col-sm-12 col-md-6 mb-5">
                <a class="hover-box" href="<?= get_permalink(); ?>">
                  <div class="panel-wrap">
                    <?php the_post_thumbnail(); ?>
                    <h4 class="my-3"><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p><?php __('No New Post'); ?></p>
          <?php endif; ?>

        </div>
      </div>
      <div class="col-sm-12 col-md-4 mb-6">
        <div class="row">
          <div class="col-12">
            <div class="bg-blue px-3 py-4 rounded">
              <?= the_field('subscribe_title') ?>
              <form action="https://app.hatchbuck.com/onlineForm/submit.php" method="post" name="form_90203652666" id="custom_hatchbuck_scroll-box" accept-charset="utf-8">
                <input type="hidden" name="formID" value="90203652666">
                <input type="hidden" name="enableServerValidation" value="1">
                <input type="hidden" name="enable303Redirect" value="0">
                <div class="input-group mb-3">
                  <input type="email" class="far form-control bw-0 no-focus" placeholder="&#xf0e0;  Your email" aria-label="Your email" aria-describedby="basic-addon1" name="email" size="51" required>
                </div>
                <button class="btn btn-outline-white btn-lg btn-block bw-2">
                  <?= the_field('subscribe_cta') ?>
                </button>
                <div class="hb_div p-0 mt-3" id="custom_hatchbuck_scroll-box_result"></div>
                <!-- <input type="email" id="input_4" name="email" size="51"> -->
                <!-- <button type="submit" style="white-space:nowrap;">Submit Form</button> -->
                <li style="display:none">Should be Empty: <input type="hidden" name="website" value=""></li>
                <input type="hidden" id="simple_spc" name="simple_spc" value="90203652666-90203652666">
              </form>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-sm-12">
            <h3>Most Read</h3>
            <?php
              if ($recommended_query->have_posts()) :
                while ($recommended_query->have_posts()) :
                  $recommended_query->the_post();
                  ?>
                    <a href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>">
                      <article class="d-flex align-items-center b-b-1px">
                        <h4>
                          <?php the_title(); ?>
                        </h4>
                      </article>
                    </a>
                  <?php
                endwhile;
              else:
                ?>
                  <h4>No recommended posts are written yet.</h4>
                <?php
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- ./lp-section -->

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
