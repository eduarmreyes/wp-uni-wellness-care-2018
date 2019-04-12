<div class="lp-section lp-section-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 offset-md-2 text-center">
        <?= get_field('cta_section_text'); ?>
        <?php $cta = get_field('cta_request_demo') ?>
        <a href="<?= $cta['url']; ?>" class="btn btn-outline-light btn-lg mt-2" target="<?= $cta['target']; ?>"><b><?= $cta['title']; ?></b></a>
      </div>
    </div>
  </div>
</div>
