<footer class="footer" id="footer">
  <div class="footer-inner">
    <div class="copy-right"><p>&copy; <?php esc_html(date('Y'));?> <?php bloginfo('name'); ?></p></div>
    <div class="powerd-by">
      <p>
        <?php esc_html_e('Proudly powered by ');?>
        <a href="<?php echo esc_url('https://wordpress.org/');?>" target="_blank"><?php esc_html_e('WordPress');?></a>
        <?php esc_html_e('. Theme by ');?>
        <a href="<?php echo esc_url('http://test.com');?>" target="_blank"><?php esc_html_e('Gild Themes');?></a>
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

