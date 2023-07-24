<?php

use utils\Utils;

$AJAX_ACTION_NAME = 'ajax_query'; // Used to identify the action in the AJAX endpoint

// Provide a global JS object for the frontend to read
add_action('wp_enqueue_scripts', function () {
  global $wp_query, $AJAX_ACTION_NAME;
  wp_localize_script('theme-js', 'AJAX_QUERY', [
    'action' => $AJAX_ACTION_NAME,
    'security' => wp_create_nonce($AJAX_ACTION_NAME),
    'endpoint' => admin_url('admin-ajax.php'),
  ]);
}, 100);

// Create WP_Queries from AJAX requests
function ajax_query_handler()
{
  global $AJAX_ACTION_NAME;
  check_ajax_referer($AJAX_ACTION_NAME, 'security');

  $params = json_decode(stripslashes($_POST['query']), true); // Sanitization is handled by WP_Query
  $params['post_status'] = 'publish';
  $query = new WP_Query($params);

  $post_type = $params['post_type'] ?: 'post';
  echo get_template_part("template-parts/{$post_type}-ajax", null, ['query' => $query]);
  wp_die();
}

// Register handlers for our AJAX action
add_action('wp_ajax_nopriv_' . $AJAX_ACTION_NAME, 'ajax_query_handler');
add_action('wp_ajax_' . $AJAX_ACTION_NAME, 'ajax_query_handler');
