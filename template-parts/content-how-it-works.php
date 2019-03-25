<div class="how-it-works">
  <div class="container">
      <?php
        $fields = CFS()->get( 'how_it_works_content' );
        foreach ( $fields as $field ) {
          if ($field['left_or_right']['right'] == 'Right Image') { ?>
            <div class="row flex-wrap-reverse pt-5 pb-5">
              <div class="col-sm-12 col-md-5 mt-md-5 mb-md-5">
                <?= $field['title'] ?>
                <div class="text-large mt-2 m-b-1rem font-weight-light">
                  <?= $field['content'] ?>
                </div>
                <div class="btn-container row mt-5">
                  <div class="col-md-6">
                    <a href="<?= $field['cta']['url'] ?>" class="btn btn-lg btn-outline-primary" target="<?= $field['cta']['target'] ?>">
                      <strong><?= $field['cta']['text'] ?></strong>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-sm-12 col-md-6 mt-5 mb-5">
                <img src="<?= $field['image'] ?>" alt="" class='img-fluid shadow-1'>
              </div>
            </div>
          <?php
          } else {
          ?>
            <div class="row pt-5 pb-5">
              <div class="col-sm-12 col-md-6 mt-5 mb-5">
                <img src="<?= $field['image'] ?>" alt="" class='img-fluid shadow-1'>
              </div>
              <div class="col-md-1"></div>
              <div class="col-sm-12 col-md-5 mt-md-5 mb-md-5">
                <?= $field['title'] ?>
                <div class="text-large mt-2 m-b-1rem font-weight-light">
                  <?= $field['content'] ?>
                </div>
                <div class="btn-container row mt-5">
                  <div class="col-md-6">
                    <a href="<?= $field['cta']['url'] ?>" class="btn btn-lg btn-outline-primary" target="<?= $field['cta']['target'] ?>">
                      <strong><?= $field['cta']['text'] ?></strong>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        <?php
        }
      ?>
  </div>
</div>
<div class="benefits">
  <div class="container">
    <div class="row">
      <div class="text-large text-center">
        <?= get_field('benefits_title') ?>
      </div>
      <div class="text-large mt-3 m-b-1rem font-weight-light m-auto">
        <?= get_field('benefits_text_content') ?>
      </div>
    </div>
    <div class="row justify-content-between mt-5 pt-5">
      <?php
        $fields = CFS()->get( 'benefits' );
        foreach ( $fields as $field ) {
          ?>
          <div class="col-12 col-md-4 mb-md-0 mb-5">
            <div class="col-11 benefits-column">
              <img src="<?= $field['icon'] ?>" alt="">
              <div class="font-weight-normal mt-4">
                <?= $field['title'] ?>
              </div>
              <div class="font-weight-light">
                <?= $field['content'] ?>
              </div>
            </div>
          </div>
          <?php
        }
      ?>
    </div>
  </div>
</div>
<div class="cta">
  <div class="container">
    <div class="row">
      <div class="overlay">
        <div class="col-12 text-center">
          <div class="text-large text-center">
            <?= get_field('cta_title') ?>
          </div>
          <div class="text-large mt-3 font-weight-light">
            <?= get_field('cta_text_content') ?>
          </div>
          <a href="<?= get_field('cta_link')["url"] ?>" class="btn btn-lg btn-outline-light mt-5"><strong><?= get_field('cta_link')['title']?></strong></a>
        </div>
      </div>
    </div>
  </div>
</div>
