<?php
// $Id$

/**
 * @file
 * Outputs contents of nodes
 *
 * @see template_preprocess_node(), preprocess/preprocess-node.inc
 * http://api.drupal.org/api/function/template_preprocess_node/6
 */
?>
<div<?php print $node_attributes; ?>>
<?php if ($teaser): ?>
    <div class="meta">
      <?php if (!$page && $title): ?>
        <h2><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
<?php endif; ?>
  <div class="content clearfix">
    <?php print $content; ?>
  </div>
<?php if ($teaser): ?>
    </div>
<?php endif; ?>
<?php if (!$teaser): ?>
  <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>
</div>
