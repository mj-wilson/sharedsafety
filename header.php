<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package some_like_it_neat
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header">

	
			<div id="mini_logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
			</div>

			<nav id="primary-nav" role="navigation">
				<div class="nav-toggle-button">
					<span class="nav-toggle-icon"></span>
				</div>
				<div class="sidenav">
					<ul>
						<li class="header">5 principles</li>
						<li><a href="">shifting to a public health frame</a></li>
						<li><a href="">wellbeing is safety</a></li>
						<li><a href="">crime survivors at the center</a></li>
						<li><a href="">breaking the cycle of harm</a></li>
						<li><a href="">making the system work</a></li>
					</ul>
				</div>
			</nav><!-- #site-navigation -->
		

	</header><!-- #masthead -->
					
