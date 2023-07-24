<?php
use utils\Utils;

get_header();
get_template_part('template-parts/masthead');

?>

<div class="section-wrapper">
  <div class="container">

    <main id="main" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>

          <header>
            <strong><?php the_time('d M') ?></strong>
            <h2><?php the_title() ?></h2>
          </header>

          <?php the_content(); ?>

          <ul class="list-inline">
            <?php foreach (Utils::social_share_urls() as $platform => $url): ?>
              <li><a href="<?= $url ?>" target="_blank">
                <?= Utils::svg($platform) ?>
                <span class="_visually-hidden">Share to <?= $platform ?></span>
              </a></li>
            <?php endforeach ?>
          </ul>

        </article>
      <?php endwhile; endif; ?>
    </main>

  </div>
</div>

<?php get_footer(); ?>
