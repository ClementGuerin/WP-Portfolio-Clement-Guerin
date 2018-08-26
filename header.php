<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <title>
    <?php if(is_front_page() || is_home()){
      echo 'Portfolio - ' . get_bloginfo('name');
    } else{
      echo wp_title('') . ' - ' . get_bloginfo('name');
    }?>
  </title>
  <meta name="description" content="Portfolio de Clément Guérin, UX/UI Designer - Fullstack Developer">

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content=" Portfolio - Clément Guérin ">
  <meta itemprop="description" content="Portfolio de Clément Guérin, UX/UI Designer - Fullstack Developer">
  <meta itemprop="image" content="https://www.clement-guerin.fr/wp-content/uploads/2018/08/screenshot.png">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://www.clement-guerin.fr/">
  <meta property="og:type" content="website">
  <meta property="og:title" content=" Portfolio - Clément Guérin ">
  <meta property="og:description" content="Portfolio de Clément Guérin, UX/UI Designer - Fullstack Developer">
  <meta property="og:image" content="https://www.clement-guerin.fr/wp-content/uploads/2018/08/screenshot.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content=" Portfolio - Clément Guérin ">
  <meta name="twitter:description" content="Portfolio de Clément Guérin, UX/UI Designer - Fullstack Developer">
  <meta name="twitter:image" content="https://www.clement-guerin.fr/wp-content/uploads/2018/08/screenshot.png">

  <!-- Meta Tags Generated via http://heymeta.com -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <section class="header">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand" href="<?= home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'=> '',
            'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>'
          ));
        ?>
      </div>
    </nav>
  </section>
