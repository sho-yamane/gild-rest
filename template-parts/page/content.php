<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <?php if(has_post_thumbnail()) : ?>
	  <header class="post-header has-thumbnail">
      <div class="post-thumbnail">
      	<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
      </div>
  <?php else : ?>
    <header class="post-header">
  <?php endif; ?>
      <div class="post-meta">
        <time class="post-time" datetime="<?php the_time('c'); ?>"><?php the_time(get_option('date_format')); ?></time>
        <div class="post-author">
          <span class="avatar"><?php echo get_avatar(get_the_author_meta('ID'), 16); ?></span>
          <span class="name">
            <?php the_author_posts_link(); ?>
          </span>
        </div>
      </div>
      <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
  	</header>

	<div class="post-content">

		<?php the_content(); ?>

	</div>

</article>
