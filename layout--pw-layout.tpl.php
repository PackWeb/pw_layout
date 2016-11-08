<?php
/**
 * @file
 * Custom layout template for PackWeb.
 */
?>

<div class="layout--packweb <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php if ($content['header_top'] || $content['header_bottom']): ?>
    <header class="l-header" role="banner">
      <div class="l-header-top">
        <div class="l-inner"><?php print $content['header_top']; ?></div>
      </div>
      <div class="l-header-bottom">
        <div class="l-inner"><?php print $content['header_bottom']; ?></div>
      </div>
    </header>
  <?php endif; ?>

  <?php if ($content['above']): ?>
    <div class="l-above">
      <div class="l-inner"><?php print $content['above']; ?></div>
    </div>
  <?php endif; ?>

  <?php if ($messages): ?>
    <div class="l-messages" role="status">
      <div class="l-inner"><?php print $messages; ?></div>
    </div>
  <?php endif; ?>

  <div class="l-container">
    <div class="l-inner">
      <main class="l-content" role="main">
        <header class="l-page-header">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="l-page-title" role="heading"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if ($tabs): ?>
            <div class="l-tabs" role="tablist"><?php print $tabs; ?></div>
          <?php endif; ?>
          <?php print $action_links; ?>
        </header>

        <?php print $content['content']; ?>
      </main>

      <?php if ($content['sidebar_left']): ?>
        <aside class="l-sidebar-left" role="complementary"><?php print $content['sidebar_left']; ?></aside>
      <?php endif; ?>

      <?php if ($content['sidebar_right']): ?>
        <aside class="l-sidebar-right" role="complementary"><?php print $content['sidebar_right']; ?></aside>
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
        <div class="l-footer-bottom" role="contentinfo">
          <div class="l-inner"><?php print $content['footer_bottom']; ?></div>
        </div>
      <?php endif; ?>
    </footer>
  <?php endif; ?>
</div>

