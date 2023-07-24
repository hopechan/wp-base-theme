<?php
  $query = $args['query'];
  while ($query->have_posts()):
  $query->the_post();
  $terms = wp_get_object_terms(get_the_ID(), 'category', ['fields' => 'names']);
?>

  <article class="_bb _mb-2 _pb-1">
    <?php if (has_post_thumbnail()): ?>
      <p class="image">
        <a href="<?= the_permalink() ?>">
          <?= the_post_thumbnail('large') ?>
        </a>
      </p>
    <?php endif ?>

    <div class="content">
      <?php if ($terms): ?>
        <span><?= join(', ', $terms) ?></span>
      <?php endif ?>
      <h2>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
      </h2>
      <?php the_excerpt() ?>
      <p>
        <a href="<?= the_permalink() ?>" class="button">
          Read More
        </a>
      </p>
    </div>
  </article>

<?php
  endwhile;
  wp_reset_postdata();
?>
