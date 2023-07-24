<?php
use utils\Utils;

get_header();
get_template_part('template-parts/masthead');

$breadcrumbs = Utils::menu_breadcrumbs('Main Menu');
$current_branch = Utils::menu_current_branch('Main Menu');
?>

<div class="section-wrapper">
  <div class="container">

    <?php if ($breadcrumbs) : ?>
      <ul class="list-inline">
        <?php foreach ($breadcrumbs as $item) : ?>
          <li><?= $item->title ?></li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

    <div class="row">
      <main id="main" role="main" class="col-md-9">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </main>

      <aside class="col-md-3">
        <ul>
          <?php foreach ($current_branch as $item) : ?>
            <li><a
              href="<?= $item->url ?>"
              <?php if ($item->is_current) : ?>aria-current="page"<?php endif ?>
            >
              <?= $item->title ?>
            </a></li>
          <?php endforeach ?>
        </ul>
      </aside>
    </div>

  </div>
</div>

<?php get_footer(); ?>
