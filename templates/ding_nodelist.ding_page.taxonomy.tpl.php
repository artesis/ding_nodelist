<?php
/**
 * @file
 *
 * Template file for taxonomy-like layout.
 */

$title = $item->title;
$body = field_view_field('node', $item, 'field_ding_body', 'teaser');
$body[0]['#markup'] = strip_tags($body['#items'][0]['safe_summary'], '<a><p><br>');
$body = drupal_render($body);
$image = _ding_nodelist_get_dams_image_info($item, 'field_page_list_image');

/**
 * Available variables:
 *
 * $title
 *   Node title.
 * $body
 *   Node body teaser.
 * $image
 *   Node list image html tag.
 */
?>
<div class="item">
  <div class="item-list-image"><?php print $image ? theme('image_style', array_merge($image, array('style_name' => $conf['image_style']))) : ''; ?></div>
  <div class="item-details">
    <h2 class="item-title"><?php print l($title, 'node/' . $item->nid); ?></h2>
    <div class="item-body"><?php print $body ?></div>
  </div>
</div>
