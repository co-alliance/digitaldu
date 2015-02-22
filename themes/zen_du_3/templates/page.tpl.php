<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

<script src="../sites/all/themes/zen_du_3/js/jquery.min.js"></script>
<script src="../sites/all/themes/zen_du_3/js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>

<!-- DU Header -->
  <header class="header" id="du-header">
    <div id="du-red-header-inner">
      <span id="du-logo">
        <a href="http://www.du.edu/index.html" title="University of Denver Home Page" target="_blank"><img src="http://www.du.edu/_resources/images/nav/logo2.gif" alt="University of Denver" width="140" height="40" /></a>
      </div> 
    </div>

    <div id="du-title-header-inner">
      <span id="site-title">Digital DU<?php echo getcwd(); ?></span>
      <span id="upper-header"><?php print render($page['upper_header']); ?></span>
    </div>
  </header>

<div id="page">

  <header class="header" id="header" role="banner">
      <?php print render($page['header']); ?>
  </header>

  <div id="main">
    <div id="content" class="column" role="main">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <!-- Upper content sections -->
      <div id="upper-content-left" class="upper-content">
        <?php print render($page['upper_content_left']); ?>
      </div>
      <div id="upper-content-right" class="upper-content">
        <?php print render($page['upper_content_right']); ?>
      </div>
      <?php print render($page['content']); ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print $feed_icons; ?>
      <?php print render($tabs); ?>
      <?php print $messages; ?>
    </div>

    <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['highlighted']); ?>
  <?php print $breadcrumb; ?>
  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
