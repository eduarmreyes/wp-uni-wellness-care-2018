<?php
  $args = array(
    'post_type' => 'post'
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
              <h3 class="c-white text-center px-5">Stay on top of the latest news</h3>
              <div class="input-group mb-3">
                <input type="email" class="far form-control bw-0 no-focus" placeholder="&#xf0e0;  Your email" aria-label="Your email" aria-describedby="basic-addon1">
              </div>
              <button class="btn btn-outline-white btn-lg btn-block bw-2">Subscribe</button>
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
                        <?php
                          if (has_post_thumbnail()) {
                        ?>
                            <figure class="most-read__figure my-3 mr-3 w-120px">
                              <?php the_post_thumbnail(); ?>
                            </figure>
                        <?php
                          }
                        ?>
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