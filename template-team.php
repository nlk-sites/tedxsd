<?php
/*
 * 
 * Template Name: Team Page Template 
 * 
 */
	get_header();
?>
	<div class="row contentContainer">
			<div class="col-xs-12 col-md-12 mainContent">
				<?php while ( have_posts() ) : the_post(); ?>
				        <h1 class="entry-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<div class="row">
					<?php
						$args = array('post_type' => 'team-member', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'asc');
						$the_query = new WP_Query( $args );
					?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="teamBlock">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('team-thumb'); ?></a>
								<div class="titleFields">
									<h2><?php the_title(); ?></h2>
									<h3><?php echo types_render_field('position-1', array()); ?>&nbsp;</h3>
									<h3><?php echo types_render_field('position-2', array()); ?>&nbsp;</h3>	
								</div>
								
							</div>
						</div>
		            <?php endwhile;  wp_reset_postdata(); ?>
				</div>	
			</div>
		</div>	
<?php
	get_footer();	
?>