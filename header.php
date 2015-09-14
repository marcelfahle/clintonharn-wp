<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Clinton_Harn
 * @since Clinton Harn 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="me" href="https://twitter.com/clintonharn">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div class="menu-icon">
    <a href="#menu-expand"><i class="fa fa-bars"></i> Menu</a>
  </div>
	<?php wp_nav_menu( array( 'menu' => 'main-menu', 
															'container' => 'nav',
															'container_class' => 'main-menu'
															 ) ); ?>	
	<header id="masthead" class="site-header" role="banner">
		<div class="aspect"></div>
		
		<div class="feature">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					/*
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
					*/
				?>
				<!--<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>//-->
			</div><!-- .site-branding -->
			
				
			<?php
				if ( is_front_page() && is_home() ) : ?>
				<div class="reel-feature">
					<?php
						$page = get_page_by_title( 'Reel Feature' );
						$content = apply_filters('the_content', $page->post_content); 
						echo $content;
					?>
				</div>

			
					<a href="#" class="scroll-down">Scroll down</a>
				<?php endif;
				?>
			
		</div><!-- .feature //-->
			

	</header><!-- .site-header -->

	
	

	<div id="content" class="site-content">
		
