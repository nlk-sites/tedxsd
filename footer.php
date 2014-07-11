<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Tedx
 */
?>

	</div><!-- .container1st -->
	
	<div class="wrapper footerContainer">
		<div class="container">
			<!-- START FOOTER -->
			<div class="row">
				<div class="col-xs-12 col-md-6 footerLinks">
                <?php
                	wp_nav_menu(array('menu'=>'footermenu', 'container'=>false, 'menu_class'=>'footer_nav', 'fallback_cb'=>'wp_page_menu'));
                ?>
					<div class="clearfix"></div>
					<div class="copyrightSection"><?php dynamic_sidebar('footer_copyright'); ?><p>"TEDxAmericasFinestCity is an independent TEDx event operated under license from TED."</p></div>
				</div>
				<div class="col-xs-12 col-md-6 social-icons2">
					<?php
						dynamic_sidebar('footer_socialicons');
					?>	
				</div>		
			</div>	
			<!-- END FOOTER -->
		</div>
	</div>
	
<?php wp_footer(); ?>

</body>
</html>