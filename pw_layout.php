<?php
/**
 * @file
 * Custom layout functions for the PackWeb layout.
 */

/**
 * Process variables for the PackWeb layout.
 */
function template_preprocess_layout__pw_layout(&$variables) {
  // Add classes to layout to indicate sidebars in use.
  if ($variables['content']['sidebar_left']) {
    $variables['classes'][] = 'sidebar-left';
  }
  if ($variables['content']['sidebar_right']) {
    $variables['classes'][] = 'sidebar-right';
  }
}

