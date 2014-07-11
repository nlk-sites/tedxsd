<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Tedx
 */

get_header(); ?>

	<div class="row contentContainer">
			<div class="col-xs-12 col-md-8 mainContent">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php
						if(has_post_thumbnail())
						{
							?>
							<p><?php the_post_thumbnail('post-img'); ?></p>	
							<?php		
						}
					?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
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
<?php get_footer(); ?>