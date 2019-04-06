<div class="lp-section mt-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <?= get_field('the_team_title') ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 ml-auto d-block d-md-flex mb-4">
        <?php
          $i = 0;
          $fields = CFS()->get( 'team' );
          foreach ( $fields as $key => $field ) { ?>
            <div class="card mb-4 min-weight-33-locked <?= ($i === 1) ? "ml-md-4 mr-md-4" : "" ?>">
              <div class="card-body d-grid d-sm-block gt-columns-150px-auto gt-rows-75px-75px-auto team-card__body">
                <img src="<?= $field['image'] ?>" alt="Team Member Image" width='150px' class='img-fluid rounded-circle d-block m-auto'>
                <?= (strlen($field['information']) > 439) ?
                  substr($field['information'], 0, 440) .
                  "<span class='hide-content'></span><span class='card__excerpt__show'>. . .</span>" .
                  "<br><br><button
                    class='btn btn-primary btn-read-more cursor-pointer'
                    data-next-text-part='" . substr($field['information'], 439, strlen($field['information'])) . "'
                    data-state='show'
                  >
                    Read more
                  </button>" :
                  $field['information'] ?>
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
    jQuery('.btn-read-more').on('click', function() {
      if (jQuery(this).data('state') === "show") {
        jQuery(this).data('state', 'hide');
        jQuery('.hide-content').html(jQuery(this).data('next-text-part'));
        jQuery('.card__excerpt__show').hide();
        jQuery(this).text('Read less');
      } else {
        jQuery(this).data('state', 'show');
        jQuery('.card__excerpt__show').show();
        jQuery('.hide-content').html('');
        jQuery(this).text('Read more');
      }
    });
  });
</script>