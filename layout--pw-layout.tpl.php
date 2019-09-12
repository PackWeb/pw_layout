<?php
/**
 * @file
 * Custom layout template for the PackWeb layout.
 */
?>

<div class="layout--pw-layout <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>

  <a class="skip-link element-invisible element-focusable" href="#main-content"><?php print t('Skip to main content'); ?></a>

  <?php if ($content['header_top'] || $content['header_bottom']): ?>
    <header class="l-header">
      <?php if ($content['header_top']): ?>
        <div class="l-header-top">
          <div class="l-inner"><?php print $content['header_top']; ?></div>
        </div>
      <?php endif; ?>

      <?php if ($content['header_bottom']): ?>
        <div class="l-header-bottom">
          <div class="l-inner"><?php print $content['header_bottom']; ?></div>
        </div>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php if ($content['above']): ?>
    <div class="l-above">
      <div class="l-inner"><?php print $content['above']; ?></div>
    </div>
  <?php endif; ?>

  <div class="l-main <?php print implode(' ', $main_classes); ?>">
    <main class="l-content" id="main-content">
      <div class="l-inner"><?php print $content['content']; ?></div>
    </main>

    <?php if ($content['sidebar_left']): ?>
      <div class="l-sidebar-left">
        <div class="l-inner"><?php print $content['sidebar_left']; ?></div>
      </div>
    <?php endif; ?>

    <?php if ($content['sidebar_right']): ?>
      <div class="l-sidebar-right">
        <div class="l-inner"><?php print $content['sidebar_right']; ?></div>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($content['below']): ?>
    <div class="l-below">
      <div class="l-inner"><?php print $content['below']; ?></div>
    </div>
  <?php endif; ?>

  <?php if ($content['footer_top'] || $content['footer_bottom']): ?>
    <footer class="l-footer">
      <?php if ($content['footer_top']): ?>
        <div class="l-footer-top">
          <div class="l-inner"><?php print $content['footer_top']; ?></div>
        </div>
      <?php endif; ?>

      <?php if ($content['footer_bottom']): ?>
        <div class="l-footer-bottom">
          <div class="l-inner"><?php print $content['footer_bottom']; ?></div>
        </div>
      <?php endif; ?>
    </footer>
  <?php endif; ?>

</div>

