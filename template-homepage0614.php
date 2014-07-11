<?php
/*
 * 
 * Template Name: Homepage 0614 
 * 
 */
	get_header();
?>
	<div class="row">
	    <div class="col-xs-12 col-md-12 bannerContainer" style="background:none; max-width:none">
	    	<?php // Removed the caption section to text widget to allow for Rev Slider ?>
         	<?php dynamic_sidebar('banner_slider'); ?>
	    </div>
	</div>
	<div class="row">
	    <div class="col-xs-12 col-md-12 homeHeading">
	    	<?php while ( have_posts() ) : the_post(); ?>
		        <?php the_content(); ?>
			<?php endwhile; ?>
	    </div>
	</div>
	<div class="row contentContainer">
			<div class="col-xs-12 col-md-8 mainContent">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php
						if(has_post_thumbnail())
						{
							?>
							<p><?php the_post_thumbnail('post-img', array('class' => 'img-responsive')); ?></p>	
							<?php		
						}
					?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop. ?>
			
				<div class="homeBottomText">
					<?php echo types_render_field('homepage-bottom-text', array()); ?>
				</div>	
		</div>
			<?php get_sidebar(); ?>
		</div>	
<?php
	get_footer();	
?>