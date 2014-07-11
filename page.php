<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
							<p><?php the_post_thumbnail('post-img', array('class' => 'img-responsive')); ?></p>	
							<?php		
						}
					?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop. ?>
			</div>
			<?php get_sidebar(); ?>
		</div>	
<?php get_footer(); ?>
