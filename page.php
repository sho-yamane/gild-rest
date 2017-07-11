<?php get_header(); ?>

<main class="page-single-main" id="js-main-page-single">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/page/content'); ?>

    <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    ?>

  <?php endwhile; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
