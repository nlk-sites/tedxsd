<?php
/**
 * The template for displaying posts.
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
				
					<h1 class="entry-title">Blog</h1>
					<?php while ( have_posts() ) : the_post(); ?>
					
					<?php
						if(has_post_thumbnail())
						{
							?>
							<p><?php the_post_thumbnail('post-img', array('class' => 'img-responsive')); ?></p>	
							<?php		
						}
					?>
					<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<div class="text-right"><p><a href="<?php the_permalink(); ?>" class="btn btn-primary redbutton">READ MORE</a></p></div>
				<?php endwhile; // end of the loop. ?>
				<p>&nbsp;</p>
				<?php wp_pagenavi(); ?>	
			</div>
			<?php get_sidebar(); ?>
		</div>	
<?php get_footer(); ?>
