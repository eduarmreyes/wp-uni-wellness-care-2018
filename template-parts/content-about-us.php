<div class="lp-section mt-5 pb-5 text-center text-md-left lp-testimonial">
  <div class="container">
    <div class="row">
      <div class="col-9 mx-auto">
        <h2 class='text-center'>
          <?= the_content(); ?>
        </h2>
      </div> <!-- ./col-9 mx-auto -->
    </div> <!-- ./row -->
  </div> <!-- ./container -->

  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto">
        <?= get_field('our_story_title') ?>
      </div>
      <div class="col-7 mx-auto">
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
          /* it's an image array */
          background-image: url(<?= get_field('the_team_image')['url']; ?>);
        }
      </style>
      <div class="col-7 p-0 b-shadow bg-image-section"></div>
      <div class="col-5 bg-blue c-clear-blue d-flex justify-content-center align-items-center text-mid">
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
      <div class="col-9 mx-auto">
        <?= get_field('vision_title') ?>
        <?= get_field('vision_text_content') ?>
      </div>
    </div>
  </div>
</div>
<div class="lp-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?= get_field('the_team_title') ?>
      </div>
    </div>
    <div class="row">
      <div class="col-8 ml-auto d-flex justify-content-around mb-4">
        <?php
          $i = 0;
          $fields = CFS()->get( 'team' );
          foreach ( $fields as $key => $field ) { ?>
            <div class="card w-45-locked">
              <img src="<?= $field['image'] ?>" alt="Team Member Image" width='150px' class='img-fluid rounded-circle mt-4 ml-4'>
              <div class="card-body">
                <?= $field['information'] ?>
              </div>
            </div> <!-- card-<?= $i ?> -->
            <?php
              if ($i % 2 > 0) {
            ?>
              </div>
              <div class="col-8 ml-auto d-flex justify-content-around mb-4">
            <?php } ?>
        <?php $i++; } ?>
      </div>
    </div>
  </div>
</div>

<?php
  get_template_part( 'template-parts/shared',  'request-demo' );
?>
