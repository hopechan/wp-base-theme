<?php

use utils\Utils;

?>

<footer class="site-footer">
  <div class="container">
    <!-- Social links -->
    <ul class="list-inline">
      <?php if (function_exists('get_field')): ?>
        <?php foreach (get_field('social_links', 'options') as $item): ?>
          <?php $link = $item['link'] ?>
          <li><a href="<?= $link['url'] ?>" target="<?= $link['target'] ?: '_self' ?>">
            <span class="_visually-hidden"><?= $link['title'] ?></span>
            <?= Utils::svg(Utils::get_service_from_url($link['url'])) ?>
          </a></li>
        <?php endforeach ?>
      <?php endif ?>
    </ul>

    <!-- Copyright -->
    <p>&copy; <?= date('Y') ?> <?= get_option('blogname') ?>.</p>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
