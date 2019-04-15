<div class="lp-section mt-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <?= get_field('advisors_title') ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 ml-auto d-block d-md-flex mb-4">
        <?php
          $i = 0;
          $fields = CFS()->get( 'advisor' );
          foreach ( $fields as $key => $field ) { ?>
            <div class="card mb-4 min-weight-33-locked <?= ($i === 1) ? "ml-md-4 mr-md-4" : "" ?>">
              <div class="card-body d-grid d-sm-block gt-columns-150px-auto gt-rows-75px-75px-auto team-card__body">
                <img src="<?= $field['image'] ?>" alt="Advisor Image" width='150px' class='img-fluid rounded-circle d-block m-auto'>
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
                        class='btn btn-primary btn-read-more__advisor cursor-pointer'
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
              </div>
            </div> <!-- card-<?= $i ?> -->
            <?php
              if ($i === 2) {
            ?>
              </div>
              <div class="col-12 col-md-12 ml-auto d-block d-md-flex mb-4">
            <?php } ?>
        <?php $i++;
          if ($i === 3) {
            $i = 0;
          }
        } ?>
      </div>
    </div>
  </div>
</div>

<script>
  jQuery(document).on('ready', function () {
    jQuery('.btn-read-more__advisor').on('click', function() {
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