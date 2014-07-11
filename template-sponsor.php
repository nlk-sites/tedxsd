<?php
/*
 * 
 * Template Name: Sponsor Page Template 
 * 
 */
	get_header();
?>
	<div class="row contentContainer">
			<div class="col-xs-12 col-md-12 mainContent">
				<?php while ( have_posts() ) : the_post(); ?>
				        <h1 class="entry-title"><?php the_title(); ?></h1>
					<?php endwhile; ?>
				<div class="row">
					<?php
						$args = array('post_type' => 'sponsor', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'asc');
						$the_query = new WP_Query( $args );
						$count = 0;
					?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-xs-12 col-sm-6 col-md-3" style="margin-bottom: 1.5em;">
							<a href="#<?php //the_permalink(); ?>"><?php the_post_thumbnail('team-thumb', array('class' => 'img-responsive')); ?></a>
						</div>
					<?php
						$count += 1;
						if($count%4 == 0)
						{
							echo '<div class="clearfix"></div>';
						}
					?>	
		            <?php endwhile;  wp_reset_postdata(); ?>
				</div>	
			</div>
		</div>	
<?php
	get_footer();	
?>