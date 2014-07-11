<?php
	get_header();
?>
	<div class="row contentContainer">
			<div class="col-xs-12 col-md-8 mainContent">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<p><?php the_post_thumbnail(); ?></p>	
					<h1 class="entry-title" style="margin-bottom: 0;"><?php the_title(); ?></h1>
					<h3 class="entry-subtitle" style="margin-bottom: 0;"><?php echo types_render_field('position-1', array()); ?>&nbsp;</h3>
					<h3 class="entry-subtitle"><?php echo types_render_field('position-2', array()); ?>&nbsp;</h3>	
					<?php the_content(); ?>
					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>
				<?php endwhile; // end of the loop. ?>
			</div>
			<?php get_sidebar(); ?>
		</div>	
<?php
	get_footer();	
?>