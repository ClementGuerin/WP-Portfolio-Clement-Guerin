<?php get_header(); ?>
<section class="single">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php if (function_exists('get_field')) : ?>
  <div class="single-header">
    <div class="container">
      <div class="col-md-5">
        <h1 class="single-title">
          <?php the_title(); ?>
        </h1>
        <?php the_excerpt(); ?>
      </div>
      <div class="single-cover">
        <img src="<?php the_field('projects_cover'); ?>" alt="cover">
      </div>
    </div>
  </div>
  <div class="single-content">
    <div class="container">
      <ul class="single-infos">
        <li><?php the_field('projects_type'); ?></li>
        <li><?php the_field('projects_date'); ?></li>
        <li><?php the_field('projects_authors'); ?></li>
      </ul>
      <div class="single-content-editor">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php else : ?>
    <div class="alert alert-danger" role="alert">
      Advanced Custom Fields isn't installed or actived.
    </div>
  <?php endif; ?>
  <?php endwhile; ?>
  <?php endif; ?>
</section>
<?php get_footer(); ?>
