<?php
/**
 * @file
 * Custom layout functions for the PackWeb layout.
 */

/**
 * Process variables for the PackWeb layout.
 */
function template_preprocess_layout__pw_layout(&$variables) {
  // Add class if sidebars are in use.
  if ($variables['content']['sidebar_left'] || $variables['content']['sidebar_right']) {
    $variables['main_classes'][] = 'has-sidebar';
  }
}

