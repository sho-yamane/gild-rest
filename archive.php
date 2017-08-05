<?php get_header(); ?>

<main class="main main-archive" id="js-main-archive">
  <section class="section">
    <div class="section-inner">
      <div class="section-archives-title" id="js-section-title">
        <?php get_template_part('template-parts/common/archive-title') ?>
      </div>
      <div class="section-content">
        <?php if ( have_posts() ) : ?>
          <div class="articles">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part('template-parts/common/articles-normal'); ?>
            <?php endwhile; ?>
          </div>
          <?php the_posts_pagination( array(
            'format' => '/page/%#%#js-main-index',
            'prev_text' => '<i class="fa fa-caret-left" aria-hidden="true"></i>',
            'next_text' => '<i class="fa fa-caret-right" aria-hidden="true"></i>',
          )); ?>
        <?php else : ?>
            <?php get_template_part('template-parts/common/articles-none'); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
