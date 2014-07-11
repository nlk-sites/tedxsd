<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Tedx
 */

get_header(); ?>

<div class="row contentContainer">
			<div class="col-xs-12 col-md-8 mainContent">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'tedx' ); ?></h1>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links above?', 'tedx' ); ?></p>

			</div>
			<?php get_sidebar(); ?>
		</div>	
	
<?php get_footer(); ?>