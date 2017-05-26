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
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" type="image/x-icon">

	<meta name="google-site-verification" content="MoLu8HxoyKt_MYKd3_-ugYodhMYiK_sofTLWVwgo0ww" />	    
    
    <?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38043620-2', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>


	<header id="masthead" class="site-header">

	
			<div id="mini_logo" class="home">
				<a href="http://www.safeandjust.org" target="_blank" rel="home"></a>
			</div>
			<div id="mini_logo" class="not_home">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Blueprint <span>for</span> Shared Safety</a>
			</div>

			<?php get_template_part( 'page-templates/template-parts/main-nav' ) ?>

		

	</header><!-- #masthead -->
					
