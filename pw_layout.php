<?php
/**
 * @file
 * Custom layout functions for the PackWeb layout.
 */

/**
 * Process variables for the PackWeb layout.
 */
function template_preprocess_layout__pw_layout(&$variables) {
  $left = $variables['content']['sidebar_left'];
  $right = $variables['content']['sidebar_right'];

  // Add classes to the layout to indicate which (if any) sidebars are in use.
  if ($left && $right) {
    $variables['classes'][] = 'sidebar-both';
  }
  elseif ($left) {
    $variables['classes'][] = 'sidebar-left';
  }
  elseif ($right) {
    $variables['classes'][] = 'sidebar-right';
  }
}

