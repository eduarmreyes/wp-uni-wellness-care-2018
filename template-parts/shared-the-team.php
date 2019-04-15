<div class="lp-section mt-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <?= get_field('the_team_title') ?>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
    <div class="row">
      <div class="col-12 col-md-12 ml-auto d-block d-md-flex mb-4">
        <?php
          $i = 0;
          $fields = CFS()->get( 'team' );
          foreach ( $fields as $key => $field ) { ?>
            <div class="card card-<?= $i ?> mb-4 min-weight-33-locked <?= ($i === 1) ? "ml-md-4 mr-md-4" : "" ?>">
              <div class="card-body d-sm-block gt-columns-150px-auto gt-rows-75px-75px-auto team-card__body">
                <img src="<?= $field['image'] ?>" alt="Team Member Image" width='150px' class='img-fluid rounded-circle d-block m-auto'>
                <div class="card__content">
                  <?php
                    if ($field['excerpt']) {
                      ?>
                      <div class="card__content_excerpt d-block">
                        <?= $field['excerpt'] ?>
                      </div>
                      <div class="card__content_full d-none">
                        <?= $field['information'] ?>
                      </div>
                      <button
                        class='btn btn-primary btn-read-more cursor-pointer'
                        data-state='show'
                      >
                        Read more
                      </button>
                      <?php
                    } else {
                      ?>
                      <div class="card__content_full">
                        <?= $field['information'] ?>
                      </div>
                      <?php
                    }
                  ?>
                </div> <!-- .card-content -->
              </div> <!-- .card-body -->
            </div> <!-- card-<?= $i ?> -->
            <?php
              if ($i === 2) {
            ?>
              </div> <!-- col-12 -->
              <div class="col-12 col-md-12 ml-auto d-block d-md-flex mb-4">
            <?php } ?>
        <?php $i++;
          if ($i === 3) {
            $i = 0;
          }
        } ?>
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container -->
</div> <!-- .lp-section -->

<script>
  jQuery(document).on('ready', function () {
    jQuery('.btn-read-more').on('click', function() {
      if (jQuery(this).data('state') === "show") {
        jQuery(this).data('state', 'hide');
        jQuery(this).parent().find('.card__content_excerpt').toggleClass('d-block').toggleClass('d-none');
        jQuery(this).parent().find('.card__content_full').toggleClass('d-none').toggleClass('d-block');
        jQuery(this).text('Read less');
      } else {
        jQuery(this).data('state', 'show');
        jQuery(this).parent().find('.card__content_excerpt').toggleClass('d-none').toggleClass('d-block');
        jQuery(this).parent().find('.card__content_full').toggleClass('d-block').toggleClass('d-none');
        jQuery(this).text('Read more');
      }
    });
  });
</script>