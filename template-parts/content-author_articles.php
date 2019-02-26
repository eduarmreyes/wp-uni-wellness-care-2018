<div class="col-sm-12 col-md-6 mb-4">

  <div class="panel-wrap panel-decor-one">
    <div class="article__icon text-mid f-bold">
      <i class="far fa-newspaper"></i>
      article
    </div>

    <div class="mb-3">
      <?= the_post_thumbnail(); ?>
    </div>

    <h2>
      <?= get_the_title(); ?>
    </h2>
    <div class="entry-meta author-entry-meta mb-2">
      <?php
        uni_wellness_care_posted_on();
        uni_wellness_care_posted_by();
      ?>
    </div><!-- .entry-meta -->

    <div class="article__tag-meta mb-2">
      <?php
        $post_tags = get_the_tags();
        foreach ($post_tags as $tag ) {
          ?>
            <span class="mr-2">
              <?= print_r($tag->name); ?>
            </span>
          <?php
        }
      ?>
    </div>

    <?= the_excerpt(); ?>

    <div class="flex text-center">
      <a href="<?= get_permalink(); ?>" class="btn btn-primary btn-lg">Read</a>
    </div>

  </div>
</div>