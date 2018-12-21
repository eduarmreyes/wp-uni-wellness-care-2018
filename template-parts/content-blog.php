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
        <h3>Most Read</h3>
        <div class="row">
          <div class="col-sm-12">
            <?php
              if ($recommended_query->have_posts()) :
                while ($recommended_query->have_posts()) :
                  $recommended_query->the_post();
                  ?>
                    <a href="https://example.com">
                      <article class="d-flex align-items-center b-b-1px">
                        <figure class="most-read__figure my-3 mr-3 w-120px">
                          <img src="http://localhost/uni/wp-content/uploads/2018/12/shutterstock_255944587_V2.jpg" alt="Article image ">
                        </figure>
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