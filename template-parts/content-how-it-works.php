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
      <h1 class="text-large">
        <strong>A platform that fills gaps in
          college mental health care.</strong>
      </h1>
      <p class="text-large mt-3 m-b-1rem font-weight-light">
        Branded uniquely for your school or organization.
      </p>
    </div>
    <div class="row justify-content-between mt-5 pt-5">
      <div class="col-12 col-md-4 mb-md-0 mb-5">
        <div class="col-11 benefits-column">
          <img src="<?= get_template_directory_uri() ?>/images/proffessor.png" class="" alt="">
          <h2 class="font-weight-normal mt-4">
            Meet the growing demand for services.
          </h2>
          <p class="font-weight-light">
            Maintain continuity of care by allowing students to connect with their counselors from home, freeing space for more students to access services on campus.
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-md-0 mb-5">
        <div class="col-11 benefits-column">
          <img src="<?= get_template_directory_uri() ?>/images/proffessor.png" class="" alt="">
          <h2 class="font-weight-normal mt-4">
            Offer extended hours visits.
          </h2>
          <p class="font-weight-light">
            Allow your counselors to meet with students after-hours. They can hop online from the comfort of their own homes.
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="col-11 benefits-column">
          <img src="<?= get_template_directory_uri() ?>/images/proffessor.png" class="" alt="">
          <h2 class="font-weight-normal mt-4">
            Bring in outside specialists as needed.
          </h2>
          <p class="font-weight-light">
            Enable your students to access specialty care for concerns like eating disorders and substance use.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="cta">
  <div class="container">
    <div class="row">
      <div class="overlay">
        <div class="col-12 text-center">
          <h1 class="text-large">
            Ready to get started?
          </h1>
          <p class="text-large mt-3 font-weight-light">
            An online mental health platform branded uniquely for your school or organization. Find out more below.
          </p>
          <a href="<?= get_site_url() . "/index.php/" . get_page_uri("168") ?>" class="btn btn-lg btn-outline-light mt-5">
            <strong>Request a demo</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
