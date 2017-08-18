<div class="fixed-copy-right">
  <p>&copy; <?php esc_html(date('Y'));?> <?php bloginfo('name'); ?></p>
</div>

<footer class="footer" id="footer">
  <div class="footer-inner">
    <div class="copy-right"><p>&copy; <?php esc_html(date('Y'));?> <?php bloginfo('name'); ?></p></div>
    <div class="powerd-by">
      <p>
        <?php
        printf( esc_html__( 'Proudly powered by %1$s. Theme by %2$s', 'gildrest' ),
          '<a href="'. esc_html__( 'https://wordpress.org/', 'gildrest' ) .'" target="_blank">'. esc_html__( 'WordPress', 'gildrest' ) .'</a>',
          '<a href="'. esc_html__('https://profiles.wordpress.org/shoyamane', 'gildrest' ) .'" target="_blank">'. esc_html__( 'Gild Themes', 'gildrest' ) .'</a>'
        ); ?>
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
