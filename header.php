<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-lg navbar-light container">
    <a class="navbar-brand" href="<?php home_url(); ?>">
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
