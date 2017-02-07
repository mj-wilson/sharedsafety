<html>
<head>
	
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); 	?>" type="text/css" media="all" />
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	
	<div id="header">
		
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p class="dscription"><?php bloginfo( 'description' ); ?></p>
		
	</div><!-- #header -->
	

	
	<div id="content">
		

		<!-- This roughly encapsulates The Loop portion of the layout -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			
			<!-- Post Entry Begin -->
			<div <?php post_class( 'entry' ); ?>>
				
				<h2><?php the_title(); ?></h2>
				<div class="itemtext">
					<?php the_content(); ?>
				</div><!-- .itemtext -->
				
			</div>
			<!-- Post Entry End -->
			

		<?php endwhile; endif; ?>
		<!-- Close The Loop -->
		
		
		<!-- Post Comments Begin -->
		<?php comments_template(); ?>
		<!-- post Comments End -->
		

		
	</div><!-- #content -->
	
	
	
	<div id="sidebar">
		
		<?php dynamic_sidebar( 'sidebar' ); ?>
		
	</div><!-- #sidebar-->
	
	
	
	<div id="footer">
		
		
		<h3>Footer</h3>
		<p>This is some sample footer text.</p>
		
		
	</div><!-- #footer -->
	
	
	<?php wp_footer(); ?>
</body>
</html>