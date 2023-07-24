<?php
use utils\Utils;

global $wp_query;
$json_vars = wp_json_encode($wp_query->query_vars);
$blog_page = get_post(get_option('page_for_posts'));

?>

<?php get_header(); ?>

<?= get_template_part('template-parts/masthead') ?>

<div class="section-wrapper">
  <div class="container">
    <div class="row">
      <main id="main" class="col-md-9">
        <div data-ajax-query-container='<?= esc_attr($json_vars) ?>'>
          <?= get_template_part('template-parts/post-ajax', null, ['query' => $wp_query]) ?>
        </div>

        <?php if (paginate_links()): ?>
          <p class="_text-center">
            <button data-ajax-query-more class="button">Load More</button>
          </p>
        <?php endif ?>
      </main>

      <aside class="col-md-3">
        <h3>Categories</h3>
        <ul>
          <?= wp_list_categories(['title_li' => '']) ?>
        </ul>

        <h3>Archives</h3>
        <ul>
          <?= wp_get_archives(['type' => 'monthly']) ?>
        </ul>
      </aside>
    </div>
  </div>
</div>

<?php get_footer(); ?>
