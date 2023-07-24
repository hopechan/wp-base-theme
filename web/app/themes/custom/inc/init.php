<?php

// Base configuration
add_action('init', function () {

  /*********************
    Remove Actions
  *********************/

  // Welcome Panel
  remove_action('welcome_panel', 'wp_welcome_panel');
  // EditURI link
  remove_action('wp_head', 'rsd_link');
  // windows live writer
  remove_action('wp_head', 'wlwmanifest_link');
  // index link
  remove_action('wp_head', 'index_rel_link');
  // previous link
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  // start link
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  // links for adjacent posts
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  // WP version
  remove_action('wp_head', 'wp_generator');
  // Remove the REST API endpoint.
  remove_action('rest_api_init', 'wp_oembed_register_route');
  // Turn off oEmbed auto discovery.
  // Don't filter oEmbed results.
  remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
  // Remove oEmbed discovery links.
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action('wp_head', 'wp_oembed_add_host_js');
  // Remove wp-emoji-release.min.js
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');

  /*********************
    Theme Support
  *********************/

  // Thumbnails
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(585, 365, true);
  add_image_size('square', 225, 225, true);

  add_theme_support('menus');
  add_theme_support('title-tag');
});

// Navigation menu
add_action('after_setup_theme', function () {
  register_nav_menus(
    [
      'main-nav' => __('The Main Menu', 'basetheme'),
    ]
  );
});

// Advanced Custom Fields Options Page
add_action('acf/init', function () {
  if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
      'page_title' => 'Theme Settings',
      'menu_title' => 'Theme Settings',
      'menu_slug' => 'theme-settings',
      'capability' => 'edit_posts',
      'redirect' => false
    ]);
  }
});
