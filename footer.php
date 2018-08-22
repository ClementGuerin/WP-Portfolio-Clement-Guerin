<section class="footer">
  <div class="container">
    <div class="footer-sentence">
      Vous avez une question ou vous êtes intéressé pour qu’on travaille ensemble sur un projet ?
      <br>
      Alors n’hésitez pas à me contacter !
    </div>
    <div class="footer-contact">
      <a href="#" class="btn btn-custom btn-primary">
        Me contacter
      </a>
    </div>
    <?php
      wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu_class' => 'footer-menu'
      ));
    ?>
  </div>
</section>

<?php wp_footer(); ?>
</body>
</html>