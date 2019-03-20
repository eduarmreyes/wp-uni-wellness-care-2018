<div class="lp-section mt-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <?= get_field('advisors_title') ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-12 ml-auto d-block d-sm-flex mb-4">
        <?php
          $i = 0;
          $fields = CFS()->get( 'advisor' );
          foreach ( $fields as $key => $field ) { ?>
            <div class="card mb-4 min-weight-33-locked <?= ($i === 1) ? "ml-4 mr-4" : "" ?>">
              <div class="card-body d-grid d-sm-block gt-columns-150px-auto gt-rows-75px-75px-auto team-card__body">
                <img src="<?= $field['image'] ?>" alt="Advisor Image" width='150px' class='img-fluid rounded-circle d-block m-auto'>
                <?= $field['information'] ?>
              </div>
            </div> <!-- card-<?= $i ?> -->
            <?php
              if ($i === 2) {
            ?>
              </div>
              <div class="col-12 col-md-12 ml-auto d-block d-sm-flex mb-4">
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

