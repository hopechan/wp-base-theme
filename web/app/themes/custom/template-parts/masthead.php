<?php
$image = get_field('masthead_image') ?: get_field('fallback_masthead_image', 'option');
$title = get_field('masthead_title') ?: wp_title('', false);
?>

<section
  class="<?= $args['class'] ?: 'site-masthead' ?>"
  style="background-image: url(<?= esc_url($image); ?>)"
>
  <div class="container">
    <h1 class="tribe-events-page-title _text-caps">
      <?= esc_html($title); ?>
    </h1>
  </div>
</section>
