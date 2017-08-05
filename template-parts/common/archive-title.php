<?php if ( is_category() ): ?>

  <div class="title-container">
    <h1><?php single_cat_title(); ?></h1>
    <div class="title-description"><?php esc_html_e('Category', 'gildrest'); ?></div>
  </div>
  <?php if (! empty(term_description())) : ?>
    <div class="taxonomy-description">
      <?php echo term_description(); ?>
    </div>
  <?php endif; ?>

<?php elseif ( is_tag() ): ?>

  <div class="title-container">
    <h1><?php echo single_tag_title();; ?></h1>
    <div class="title-description"><?php esc_html_e('Tag', 'gildrest'); ?></div>
  </div>
  <?php if (! empty(term_description())) : ?>
    <div class="taxonomy-description">
      <?php echo term_description(); ?>
    </div>
  <?php endif; ?>

<?php elseif ( is_search() ): ?>

  <div class="title-container">
    <h1><?php the_search_query(); ?></h1>
    <div class="title-description"><?php esc_html_e('Search Results', 'gildrest'); ?></div>
  </div>
  <div class="taxonomy-description">
    <?php get_search_form(); ?>
  </div>

<?php elseif ( is_day() ): ?>

  <div class="title-container">
    <h1><?php the_time(__('jS F, Y', 'gildrest')); ?></h1>
    <div class="title-description"><?php esc_html_e('Daily Archives', 'gildrest'); ?></div>
  </div>

<?php elseif ( is_month() ): ?>

  <div class="title-container">
    <h1><?php the_time(__('F, Y', 'gildrest')); ?></h1>
    <div class="title-description"><?php esc_html_e('Monthly Archives', 'gildrest'); ?></div>
  </div>

<?php elseif ( is_year() ): ?>

  <div class="title-container">
    <h1><?php the_time(__('Y', 'gildrest')); ?></h1>
    <div class="title-description"><?php esc_html_e('Yearly Archives', 'gildrest'); ?></div>
  </div>

<?php elseif ( is_author() ): ?>

  <div class="title-container title-container-author">
    <div class="title"><?php esc_html_e('Archives', 'gildrest'); ?></div>
    <div class="title-description"><?php esc_html_e('Author Archives', 'gildrest'); ?></div>
  </div>

<?php elseif ( is_404() ): ?>

  <div class="title-container">
    <h1><?php esc_html_e('404 NOT FOUND', 'gildrest'); ?></h1>
    <div class="title-description"><?php esc_html_e('Sorry, Page Not Found.', 'gildrest'); ?></div>
  </div>
  <div class="taxonomy-description">
    <?php get_search_form(); ?>
  </div>

<?php endif; ?>
