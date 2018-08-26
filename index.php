<?php get_header(); ?>

<section class="homepage">
  <div class="container">
    <div class="homepage-primary-articles row">
        <?php while ( have_posts() ) : the_post(); ?>  
          <?php if ( in_category('primary-articles') ) : ?>  
            <div class="homepage-article col-md-6 wow fadeIn">
              <div class="homepage-article-thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?> miniature">
                </a>
              </div>
              <h3 class="homepage-article-title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>
              <?php the_excerpt(); ?>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
    </div>
    <div class="homepage-secondary-articles row">
      <?php while ( have_posts() ) : the_post(); ?>  
      <?php if ( in_category('secondary-articles') && !in_category('primary-articles') ) : ?>  
      <div class="homepage-article col-md-4 wow fadeIn">
          <div class="homepage-article-thumbnail">
            <a href="<?php the_permalink(); ?>">
              <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?> miniature">
            </a>
          </div>
          <h3 class="homepage-article-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <?php the_excerpt(); ?>
        </div>
        <?php endif; ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
