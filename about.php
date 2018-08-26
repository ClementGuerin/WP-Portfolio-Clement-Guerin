<?php
/*
Template Name: Qui suis-je ?
*/
?>

<?php get_header(); ?>

<div class="container">
  <section class="about">
    <?php if (function_exists('get_field')) : ?>
      <h2 class="about-title">
        <?php the_field('about_baseline'); ?>
      </h2>
      <div class="about-text">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
        endwhile; endif; ?>
      </div>
      <div class="about-buttons">
        <a href="<?php the_field('footer_btn_href', 31); ?>" class="btn btn-custom btn-primary">
          <?php the_field('footer_btn_text', 31); ?>
        </a>
        <a href="<?php the_field('about_btn_href'); ?>" class="btn btn-custom btn-secondary">
          <?php the_field('about_btn_text'); ?>
        </a>
      </div>
    <?php else : ?>
      <div class="alert alert-danger" role="alert">
        Advanced Custom Fields isn't installed or actived.
      </div>
    <?php endif; ?>
  </section>
</div>

<?php get_footer(); ?>