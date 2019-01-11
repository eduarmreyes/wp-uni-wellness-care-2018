<div class="lp-section mt-sm-5 pb-5 text-center text-md-left lp-testimonial">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-9 mx-auto">
        <h2 class='text-center'>
          <?= the_content(); ?>
        </h2>
      </div> <!-- ./col-12 col-sm-9 mx-auto -->
    </div> <!-- ./row -->
  </div> <!-- ./container -->

  <div class="container mt-6 mt-sm-5 mt-sm-0">
    <div class="row">
      <div class="col-12 mx-auto">
        <?= get_field('our_story_title') ?>
      </div>
      <div class="col-12 col-sm-7 mx-auto">
        <?= get_field('our_story_content') ?>
      </div>
    </div>
  </div>
</div>

<div class="lp-section">
  <div class="container-fluid">
    <div class="row">
      <style>
        .bg-image-section {
          background-image: none;
        }
        @media (min-width: 768px) {
          .bg-image-section {
            /* it's an image array */
            background-image: url(<?= get_field('the_team_image')['url']; ?>);
            min-height: 650px;
          }
        }
      </style>
      <div class="col-12 col-md-7 p-0 b-shadow bg-image-section">
        <img class="d-md-none" src="<?= get_field('the_team_image')['url'] ?>" alt="<?= get_field('the_team_image')['alt'] ?>">
      </div>
      <div class="col-12 col-md-5 bg-blue c-clear-blue d-flex justify-content-center align-items-center text-mid pt-5 pb-5 pt-lg-0 pb-lg-0">
        <div class="container">
          <div class="row">
            <div class="col-8 mx-auto text-center">
              <?= get_field('the_team_content') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="lp-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-9 mx-auto">
        <?= get_field('vision_title') ?>
        <?= get_field('vision_text_content') ?>
      </div>
    </div>
  </div>
</div>
<div class="lp-section mt-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <?= get_field('the_team_title') ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-8 ml-auto d-block d-sm-flex justify-content-between mb-4">
        <?php
          $i = 0;
          $fields = CFS()->get( 'team' );
          foreach ( $fields as $key => $field ) { ?>
            <div class="card w-48-sm-locked mb-4">
              <div class="card-body d-grid d-sm-block gt-columns-150px-auto gt-rows-75px-75px-auto team-card__body">
                <img src="<?= $field['image'] ?>" alt="Team Member Image" width='150px' class='img-fluid rounded-circle mt-sm-4 ml-sm-4 gc-start-1 gc-end-2 gr-start-1 gr-end-3 img-border'>
                <?= $field['information'] ?>
              </div>
            </div> <!-- card-<?= $i ?> -->
            <?php
              if ($i % 2 > 0) {
            ?>
              </div>
              <div class="col-12 col-md-8 ml-auto d-block d-sm-flex justify-content-between mb-4">
            <?php } ?>
        <?php $i++; } ?>
      </div>
    </div>
  </div>
</div>

<?php
  get_template_part( 'template-parts/shared',  'request-demo' );
?>
