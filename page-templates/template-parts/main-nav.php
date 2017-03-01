<nav id="primary-nav" role="navigation">
	<div class="nav-toggle-button">
		<span class="nav-toggle-icon"></span>
		<span class="menu-label">MENU</span>
	</div>
	<div class="sidenav">
		<ul class="no_shadow">
			<li class="header">5 principles</li>
			<li><a href="/shifting-to-a-public-health-frame/">shifting to a public health frame</a></li>
			<li><a href="/wellbeing-is-safety/">well-being is safety</a></li>
			<li><a href="/crime-survivors-at-the-center/">crime survivors at the center</a></li>
			<li><a href="/breaking-the-cycle-of-harm/">breaking the cycle of harm</a></li>
			<li><a href="/making-the-system-work/">making the system work</a></li>
		</ul>
		<?php  
		$args = array(
		    'post_type' => 'page',
		    'pagename' => 'home'
		);
		$query = new WP_Query( $args );

		if ( $query->have_posts() ) : 

			while ($query -> have_posts()) : $query -> the_post();
			
				$download_link = get_field( 'blueprint_overview_pdf' ); ?>
				<div class="download-pdf"><a target="_blank" href="<?php echo $download_link; ?>">download blueprint pdf</a></div>

	    	<?php endwhile; ?>

		<?php endif; wp_reset_query(); ?>
	</div>
</nav><!-- #site-navigation -->
		
