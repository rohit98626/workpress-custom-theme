<?php get_header(); ?>

<section class="section">
  <div class="container">
    <h2><?php the_title(); ?></h2>
    <?php
      while (have_posts()) {
        the_post();
        the_content();
      }
    ?>
  </div>
</section>

<?php get_footer(); ?>
