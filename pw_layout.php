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
  $variables['wrapper_classes'] = array();
  if ($variables['content']['sidebar_left'] || $variables['content']['sidebar_right']) {
    $variables['wrapper_classes'][] = 'has-sidebar';
  }
}

