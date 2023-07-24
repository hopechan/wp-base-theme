<?php

namespace utils;

class Utils
{

  // Render an inline SVG
  public static function svg($icon, $class = 'inline-svg')
  {
    if (strpos($icon, 'http') !== false) {
      $path = $icon;
    } else {
      $path = get_template_directory() . "/assets/svg/$icon.svg";
    }
    $content = @file_get_contents($path);
    if (!$content) {
      return '';
    }
    return str_replace('<svg ', "<svg class='$class' ", $content);
  }

  // Extract social platform name from a URL
  public static function get_service_from_url($url)
  {
    $names = [
      'facebook' => 'facebook',
      'twitter' => 'twitter',
      'instagram' => 'instagram',
      'pinterest' => 'pinterest',
      'youtube' => 'youtube',
      'linkedin' => 'linkedin',
      'mailto:' => 'email',
    ];
    foreach ($names as $key => $platform) {
      if (strpos($url, $key) !== false) {
        return $platform;
      }
    }
    return null;
  }

  // Generate an array of social links for a given url
  // https://github.com/bradvin/social-share-urls/blob/master/code/php/SocialMedia.php#L121
  public static function social_share_urls($url = false, $content = false)
  {
    $url = urlencode($url ?: get_permalink(get_the_ID()));
    $content = urlencode(trim($content ?: wp_title('', false)));
    return [
      'facebook' => "https://www.facebook.com/sharer.php?u=$url",
      'twitter' => "https://twitter.com/intent/tweet?url=$url&text=$content",
      'pinterest' => "https://pinterest.com/pin/create/link/?url=$url&description=$content",
      'linkedin' => "https://www.linkedin.com/sharing/share-offsite/?url=$url",
      'email' => "mailto:?&subject=$content&body=$url",
    ];
  }

  // Build a navigation tree from a parent page
  public static function build_tree($items, $parent = 0, $branch = [])
  {
    foreach ($items as $item) {
      if ($item->menu_item_parent == $parent) {
        // Add attributes to indicate if the item is currently active
        $item->is_ancestor = in_array('current-menu-ancestor', $item->classes);
        $item->is_current = in_array('current-menu-item', $item->classes);

        // Append children
        $item->children = self::build_tree($items, $item->ID);

        // Append current item to the branch, keyed by its ID
        $branch[$item->ID] = $item;
      }
    }
    return $branch;
  }

  /*
  Create a nested array of posts representing a WP navigation menu
  $location_name: Name of the menu to render
  */
  public static function menu_tree($location_name)
  {
    $menu = wp_get_nav_menu_items($location_name);
    if (!$menu) {
      return []; // Menu not found, bail
    }
    _wp_menu_item_classes_by_context($menu); // Apply current and current ancestor classes
    return self::build_tree($menu);
  }

  // Get the current branch (the branch that holds the currently active item)
  // from a menu location. Useful to build sidebar page navigation links
  public static function menu_current_branch($menu_location)
  {
    $branch_found = true;
    $branch = self::menu_tree($menu_location);

    while ($branch_found) {
      $branch_found = false;
      foreach ($branch as $item) {
        if ($item->is_current) {
          return $branch;
        }
        if ($item->is_ancestor) {
          $branch_found = true;
          $branch = $item->children;
          break;
        }
      }
    }
  }

  // Get a list of parent elements of the currently active page
  public static function menu_breadcrumbs($menu_location)
  {
    $ancestors = [];
    $branch_found = true;
    $branch = self::menu_tree($menu_location);

    while ($branch_found) {
      $branch_found = false;
      foreach ($branch as $item) {
        if ($item->is_current) {
          return $ancestors;
        }
        if ($item->is_ancestor) {
          $branch_found = true;
          $ancestors[] = $item;
          $branch = $item->children;
          break;
        }
      }
    }
  }
}
