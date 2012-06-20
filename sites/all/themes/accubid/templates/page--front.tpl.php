<?php include $directory.'/includes/header.php'; ?>

<div id="wrapper">
  <?php include $directory.'/includes/right_rail.php'; ?>
  
  <div id="content">
  
    <?php echo "<h1>HELLO HOME CONTENT</h1>"; ?>
	
    <?php print render($messages); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    
  </div>
</div>

    
  <?php include $directory.'/includes/footer.php';