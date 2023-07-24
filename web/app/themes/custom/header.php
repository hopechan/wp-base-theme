<?php

use utils\Utils;

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php wp_head(); ?>
  </head>

  <body id="top" <?php body_class(); ?>>

    <!-- Skip to main -->
    <a href="#main" class="skip-to-main">Skip to main content</a>

    <!-- Main navigation -->
    <div class="container">
      <nav>
        <ul class="site-nav">
          <?php foreach (Utils::menu_tree('Main Menu') as $id => $item) : ?>
            <?= get_template_part('template-parts/site-nav-item', null, ['item' => $item]) ?>
          <?php endforeach ?>
        </ul>
      </nav>
    </div>
