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

  <div class="container  mt-sm-0">
    <div class="row">
      <div class="col-12 mx-auto text-center">
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
            <div class="col-12 mx-auto text-center">
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
	    <?= get_field('vision_text_content') ?>
        <?= get_field('vision_title') ?>
        
      </div>
    </div>
  </div>
</div>

<?php
  get_template_part( 'template-parts/shared',  'the-team' );
  get_template_part( 'template-parts/shared',  'advisors' );
  get_template_part( 'template-parts/shared',  'request-demo' );
?>
