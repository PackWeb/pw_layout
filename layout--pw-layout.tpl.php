<?php
/**
 * @file
 * Custom layout template for the PackWeb layout.
 */
?>

<div class="layout--pw-layout <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>

  <div class="skip-link element-invisible element-focusable">
    <a href="#main-content"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header_top']): ?>
    <header class="l-header-top"><div class="l-inner">
      <?php print $content['header_top']; ?>
    </div></header>
  <?php endif; ?>

  <?php if ($content['header_bottom']): ?>
    <div class="l-header-bottom"><div class="l-inner">
      <?php print $content['header_bottom']; ?>
    </div></div>
  <?php endif; ?>

  <?php if ($content['above']): ?>
    <div class="l-above"><div class="l-inner">
      <?php print $content['above']; ?>
    </div></div>
  <?php endif; ?>

  <main id="main-content" class="l-content"><div class="l-inner">
    <?php print $content['content']; ?>
  </div></main>

  <?php if ($content['sidebar_left']): ?>
    <aside class="l-sidebar-left"><div class="l-inner">
      <?php print $content['sidebar_left']; ?>
    </div></aside>
  <?php endif; ?>

  <?php if ($content['sidebar_right']): ?>
    <aside class="l-sidebar-right"><div class="l-inner">
      <?php print $content['sidebar_right']; ?>
    </div></aside>
  <?php endif; ?>

  <?php if ($content['below']): ?>
    <div class="l-below"><div class="l-inner">
      <?php print $content['below']; ?>
    </div></div>
  <?php endif; ?>

  <?php if ($content['footer_top']): ?>
    <div class="l-footer-top"><div class="l-inner">
      <?php print $content['footer_top']; ?>
    </div></div>
  <?php endif; ?>

  <?php if ($content['footer_bottom']): ?>
    <footer class="l-footer-bottom"><div class="l-inner">
      <?php print $content['footer_bottom']; ?>
    </div></footer>
  <?php endif; ?>

</div>

