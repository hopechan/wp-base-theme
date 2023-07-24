<?php

// Add theme colors
// This should match the options in vars.scss
add_theme_support('editor-color-palette', [
  [
    'name' => 'primary',
    'slug' => '1',
    'color' => '#0183ee',
  ],
  [
    'name' => 'secondary',
    'slug' => '2',
    'color' => '#319256',
  ],
  [
    'name' => 'tertiary',
    'slug' => '3',
    'color' => '#cc6403',
  ],
]);

// Disable user-generated custom colors
add_theme_support('disable-custom-colors');

// Disable gradients
add_theme_support('disable-custom-gradients');
add_theme_support('editor-gradient-presets', []);
