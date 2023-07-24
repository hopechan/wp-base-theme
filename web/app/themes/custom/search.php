<?php get_header(); ?>

<?php get_template_part('template-parts/masthead') ?>

<div class="section-wrapper">
  <div class="container">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_excerpt() ?>
        <hr>
      <?php endwhile; else : ?>
        <h2>No search results found</h2>
        <p>Try adjusting your search terms</p>
      <?php endif; ?>

  </div>
</div>

<?php the_posts_pagination(); ?>

<?php get_footer(); ?>
