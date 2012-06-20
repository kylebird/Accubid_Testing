<div class="head_wrapped">
  <div id="header">
    	<h1 class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">Accubid - A Division of Trimble</a></h1>

     <?php if ($site_slogan): ?>
          <h2 class="slogan">
            <?php print $site_slogan; ?>
          </h2>
        <?php endif; ?>
        
    <?php if ($main_menu): ?>
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#main-menu -->
    <?php endif; ?>
    
    <div class="admin">
        <div class="search-block">
        <?php
            $block = module_invoke('search', 'block_view', 'search');
            print render($block);
        ?>
        </div>
        
        
        <?php print theme('links',
		      array('links' => menu_navigation_links('menu-courtesy'),
			    'attributes' => array('class'=> array('menu-courtesy')) ));
	?>
        <?php 
			//print theme('links',
		      //array('links' => menu_navigation_links('user-menu'),
			    //'attributes' => array('class'=> array('user-menu')) ));
		?>
      
    
      
    <ul class="user-menu">
    	<li><a href="demo-center">Demo Center</a></li>
	<?php
		global $user;
		if($user->uid){
    
	
	 //echo '<li>'.$user->name.'</li>'; 
	 
	 ?>
    	<li><a href="<?php print $front_page; ?>user">My Account</a></li>
    	<li><a href="<?php print $front_page; ?>user/logout">Sign out</a></li>
    <?php
		}else{
	?>
    	<li><a href="<?php print $front_page; ?>user">Sign in</a></li>
	<?php } ?>
    </ul>
      
    <div id="login">
    <?php
		global $user;
		if(!$user->uid){
			print render($page['top_login_bar']); 
		}else{
	?>
    	<a href="<?php print $front_page; ?>user/logout">Sign out</a>
	<?php } ?>
   	</div>
      
    </div>
    
    
    
    </div>
</div>