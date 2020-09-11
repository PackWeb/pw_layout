<?php
/**
 * @file
 * Custom layout template for the PackWeb layout.
 */
?>

<div class="layout--pw-layout <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>

  <a class="skip-link element-invisible element-focusable" href="#main-content">
    <?php print t('Skip to main content'); ?>
  </a>

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

  <div class="l-wrapper <?php print implode(' ', $wrapper_classes); ?>">
    <div class="l-inner">

      <div class="l-main">
        <?php if ($messages): ?>
          <div class="l-messages"><?php print $messages; ?></div>
        <?php endif; ?>

        <div class="l-page-title">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="page-title"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
        </div>

        <?php if ($tabs): ?>
          <nav class="tabs"><?php print $tabs; ?></nav>
        <?php endif; ?>

        <?php print $action_links; ?>

        <main class="l-content" id="main-content">
          <?php print $content['content']; ?>
        </main>
      </div>

      <?php if ($content['sidebar_left']): ?>
        <div class="l-sidebar-left">
          <?php print $content['sidebar_left']; ?>
        </div>
      <?php endif; ?>

      <?php if ($content['sidebar_right']): ?>
        <div class="l-sidebar-right">
          <?php print $content['sidebar_right']; ?>
        </div>
      <?php endif; ?>

    </div>
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
