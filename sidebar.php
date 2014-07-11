<?php 
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Tedx
 */
?>
<div class="col-xs-12 col-md-4 sidebarContent">
    <div class="row eachWidget">
		<?php dynamic_sidebar('sidebar-1'); ?>	
	</div>
	<div class="row eachWidget">
		<?php dynamic_sidebar('sidebar-2'); ?>
	</div>	
</div>
