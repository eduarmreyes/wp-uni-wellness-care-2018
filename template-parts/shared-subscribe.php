<div class="lp-section lp-section-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 offset-md-2 text-center">
        <?= the_field('subscribe_title') ?>
        <form action="https://app.hatchbuck.com/onlineForm/submit.php" method="post" name="form_90203652666" accept-charset="utf-8" class="form justify-conten-center alig-items-center">
          <input type="hidden" name="formID" value="90203652666">
          <input type="hidden" name="enableServerValidation" value="1">
          <input type="hidden" name="enable303Redirect" value="0">
          <div class="form-row">
            <div class="col-md-7">
              <input type="email" class="far form-control bw-0 no-focus h-100" placeholder="&#xf0e0;  Your email" aria-label="Your email" aria-describedby="basic-addon1" name="q4_email" size="51" required>
            </div>
            <div class="col-md-5">
              <button class="btn btn-outline-white btn-lg btn-block bw-2">
                <?= the_field('subscribe_cta') ?>
              </button>
            </div>
          </div>
          <li style="display:none">Should be Empty: <input type="hidden" name="website" value=""></li>
          <input type="hidden" id="simple_spc" name="simple_spc" value="90203652666-90203652666">
        </form>
      </div>
    </div>
  </div>
</div>
