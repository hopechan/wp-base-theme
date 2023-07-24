<?php

/**
 * Serve a hashed file created by Webpack.
 *
 * Checks for a hashed filename as a value in a JSON object.
 * If it exists: the hashed filename is enqueued in place of the original asset.
 * Fallback: the default asset path will be passed through.
 *
 * @param string $path is WordPress' required location for a static asset
 */
function get_from_manifest($path)
{
  $base_uri = get_template_directory_uri() . '/assets/dist/';
  $file = get_template_directory() . '/assets/dist/assets-manifest.json';
  $manifest = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

  if (array_key_exists($path, $manifest)) {
    return $base_uri . $manifest[$path];
  }
  return $base_uri . $path;
}

add_action('wp_enqueue_scripts', function () {
  // Styles
  wp_register_style('theme-css', get_from_manifest('theme.css'), [], null);
  wp_enqueue_style('theme-css');

  // Scripts
  wp_register_script('theme-js', get_from_manifest('theme.js'), [], null, true);
  wp_enqueue_script('theme-js');
});
