<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Tedx
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/app.css" rel="stylesheet" media="screen">
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>-->
<!--<script src="js/bootstrap.js"></script>-->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript">
        jQuery(document).ready(function () { 
		console.log(jQuery('.dropdown-toggle').dropdown());
	});  
</script> 

</head>

<body <?php body_class(); ?>>
	<div class="container" id="headerContainer">
		<div class="row">
            <div class="col-xs-12 col-md-5" id="logoContainer">
                <h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" class="img-responsive" /></a></h1>
            </div>
			<div class="col-xs-12 col-md-7">
                <div class="row">
                	<div class="col-xs-12 col-sm-8 col-md-12 ">
                		<nav class="navbar navbar-default" role="navigation">
						  <!-- Brand and toggle get grouped for better mobile display -->
						  <div class="navbar-header">	
						<span class="menutext"> MENU </span>
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						      <span class="sr-only">Toggle navigation</span>
						      <span class="icon-bar"></span>
						      <span class="icon-bar"></span>
						      <span class="icon-bar"></span>
						    </button>
						  </div>
						
						  <!-- Collect the nav links, forms, and other content for toggling -->
						  <div class="collapse navbar-collapse navbar-ex1-collapse">
						    <?php 
								wp_nav_menu( array(
							        'menu'       => 'mainmenu',
							        'depth'      => 2,
							        'container'  => false,
							        'menu_class' => 'nav navbar-nav',
							        'fallback_cb' => 'wp_page_menu',
							        //Process nav menu using our custom nav walker
							        'walker' => new wp_bootstrap_navwalker())
							    ); 
							?>
						  </div><!-- /.navbar-collapse -->
						</nav>
                	</div>
					<!-- main menu end-->
					<div class="col-xs-12 col-sm-4 col-md-12 social-icons">
                		<?php
							dynamic_sidebar('header_socialicons');
						?>
                	</div>
					
					<script type="text/javascript">
						<!--//--><![CDATA[//><!--
							var images = new Array()
							function preload() {
								for (i = 0; i < preload.arguments.length; i++) {
									images[i] = new Image()
									images[i].src = preload.arguments[i]
								}
							}
							preload(
								"<?php bloginfo('template-url'); ?>/images/facebook-hover.png",
								"<?php bloginfo('template-url'); ?>/images/twitter-hover.png",
								"<?php bloginfo('template-url'); ?>/images/google-hover.png",
								"<?php bloginfo('template-url'); ?>/images/cam-hover.png"
							)
						//--><!]]>
					</script>
                	<!-- social icons end-->
                </div>
            </div>
        </div>
		