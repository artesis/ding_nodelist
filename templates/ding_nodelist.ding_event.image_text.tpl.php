<?php
/**
 * @file
 * Ding event image and text template.
 * Avaialable fields are:
 * ding_content_tags
 * field_address
 * field_ding_body
 * field_list_image
 * field_main_image
 * field_materials
 * group_audience 
 */

$image = field_view_field('node', $item, 'field_list_image', 'teaser');
$event_date = field_get_items('node', $item, 'field_event_date');
$event_date = strtotime($event_date[0]['value']);
?>
<li class="event">
  <div class="expand">Expand</div>
  <div class="event-date">
    <div class="event-day"><?php echo date('d', $event_date);?></div>
    <div class="event-month"><?php echo date('M', $event_date);?></div>
  </div>
  <div class="event-image"><?php print theme('image_style', array('style_name' => 'node_list_accordeon', 'path' => $image[0]['#item']['uri']));?></div>
  <div class="data">
    <div class="event-time">
      Kl. <?php echo date('H:i', $event_date);?>
    </div>
    <div class="library">
      <?php print drupal_render(field_view_field('node', $item, 'group_audience', 'teaser')); ?>
    </div>
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid); ?>
      </h3>
    </div>
  </div>
</li>