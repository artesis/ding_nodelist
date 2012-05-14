<div class="<?php print join(' ', $conf['classes']); ?>">
  <?php if (!empty($conf['title'])): ?>
  <h2 class="ding_nodelist-title">
    <?php print $conf['title']; ?>
  </h2>
  <?php endif; ?>

  <?php if (count($items)): ?>
    <?php foreach($items as $item): ?>
      <div class="single-story">
      	<?php	print $item->image_link;       	?>
      <span class="title"><?php print $item->title_link; ?></span>
      
    <?php endforeach; ?>

   <?php if ($conf['more']): ?>
      <?php print $conf['more']; ?>
   <?php endif; ?>
 <?php endif; ?>
 	</div>
</div>
