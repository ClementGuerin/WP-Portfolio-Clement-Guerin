<section class="footer">
  <div class="container">
    <?php if (!is_page('qui-suis-je') && function_exists('get_field')) : ?>
      <div class="footer-sentence wow fadeIn">
          <?php the_field('footer_text', 31); ?>
      </div>
      <div class="footer-contact wow fadeIn">
        <a href="<?php the_field('footer_btn_href', 31); ?>" class="btn btn-custom btn-primary">
          <?php the_field('footer_btn_text', 31); ?>
        </a>
      </div>
    <?php endif; ?>
    <?php
      wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu_class' => 'footer-menu wow fadeIn'
      ));
    ?>
  </div>
</section>

<?php wp_footer(); ?>
</body>
</html>