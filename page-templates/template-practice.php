<?php
/**
 * Template Name: Practice
 *
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php $color = get_field('practice_name'); ?>
	<?php $previous_practice = get_field('previous_practice', false, false); ?>
	<?php $next_practice = get_field('next_practice', false, false); ?>

<div class="page-wrapper <?php echo $color; ?>">		

	<div class="hero-panel <?php echo $color; ?>">
		
		<div class="hero-panel-nav">

			<?php if ( get_the_permalink($previous_practice) != '' ) : ?>
				<div class="previous_practice"><a href="<?php echo get_the_permalink($previous_practice); ?>"><?php echo get_the_title($previous_practice); ?> <span class="arrow"><?php get_template_part( 'page-templates/template-parts/svg/left_arrow.svg' ) ?></span></a></div>
			<?php endif; ?>
			<div class="home_link">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">blueprint <span>for</span> shared safety</a>
			</div>
			<?php if ( get_the_permalink($next_practice) != '' ) : ?>
				<div class="next_practice"><a href="<?php echo get_the_permalink($next_practice); ?>"><?php echo get_the_title($next_practice); ?> <span class="arrow"><?php get_template_part( 'page-templates/template-parts/svg/right_arrow.svg' ) ?></span></a></div>
			<?php endif; ?>

		</div>

		<div class="panel_content">
			<div class="practice_title"><?php the_title(); ?></div>
			<div class="hero_text"><?php the_content(); ?></div>
		</div>

		<div class="down_arrow">
			<div class="link_to_section" data-target="envision_step">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/down-circle-arrow.svg">
			</div>
		</div>

	</div>

	<header id="secondary" class="site-header">


		<div id="text_logo_short">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">shared safety</a>
		</div>

		<div class="page-header"><?php the_title(); ?></div>

		<?php get_template_part( 'page-templates/template-parts/main-nav' ) ?>

	</header><!-- #masthead -->
	
	<?php

	$args = array(
	    'post_type'      => 'page',
	    'posts_per_page' => -1,
	    'post_parent'    => $post->ID,
		'meta_key'			=> 'step',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC'
	 );


	$parent = new WP_Query( $args );

	if ( $parent->have_posts() ) : ?>

	    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
	    	<?php 
	    		$step_field = get_field_object('step'); 
	    		$value = $step_field['value'];
				$current_step = $step_field['choices'][ $value ];
	    	?>

		
			<div class="step_panel" id="<?php echo $current_step; ?>_step">

				<div class="sticky_subnav">
					<?php if ( get_the_permalink($previous_practice) != '' ) : ?>
						<div class="previous_practice"><a href="<?php echo get_the_permalink($previous_practice); ?>#<?php echo $current_step; ?>_step""><?php echo get_the_title($previous_practice); ?> <span class="arrow"><?php get_template_part( 'page-templates/template-parts/svg/left_arrow.svg' ) ?></span></a></div>
					<?php endif; ?>
					<div class="section_header"><?php echo $current_step; ?> <span>
					<?php if ($current_step == 'invest') : echo 'in '; endif; ?>safety</span></div>
					<?php if ( get_the_permalink($next_practice) != '' ) : ?>
						<div class="next_practice"><a href="<?php echo get_the_permalink($next_practice); ?>#<?php echo $current_step; ?>_step""><?php echo get_the_title($next_practice); ?> <span class="arrow"><?php get_template_part( 'page-templates/template-parts/svg/right_arrow.svg' ) ?></span></a></div>
					<?php endif; ?>
				</div>

				<div class="step_nav">
					<ul>
						<li <?php if ($current_step == 'envision') { echo 'class="active"'; } ?> ><div class="link_to_section" data-target="envision_step">1</div><div class="step_label">envision</div></li>
						<li <?php if ($current_step == 'plan') { echo 'class="active"'; } ?> ><div class="link_to_section" data-target="plan_step">2</div><div class="step_label">plan</div></li>
						<li <?php if ($current_step == 'invest') { echo 'class="active"'; } ?> ><div class="link_to_section" data-target="invest_step">3</div><div class="step_label">invest</div></li>
						<li <?php if ($current_step == 'restore') { echo 'class="active"'; } ?> ><div class="link_to_section" data-target="restore_step">4</div><div class="step_label">restore</div></li>
						<li <?php if ($current_step == 'strengthen') { echo 'class="active"'; } ?> ><div class="link_to_section" data-target="strengthen_step">5</div><div class="step_label">strengthen</div></li>
					</ul>
				</div>

				<div class="content">
					<div class="step_content">
						<h1><?php the_field('step_title'); ?></h1>
						<div class="intro_paragraph <?php echo $color; ?>">
							<div class="icon "></div>
							<?php the_field('intro_paragraph'); ?>
						</div>
						<h2>What is it?</h2>
						<?php the_field('what_is_it'); ?>
						<h2>How does it help?</h2>
						<?php the_field('how_does_it_help'); ?>
						<div class="cols">
							<div class="col left">
								<div class="questions">
									<h3>Questions To Ask</h3>
									<?php the_field('questions_to_ask'); ?>
								</div>
								<div class="stats"><?php the_field('callout_statistic'); ?></div>
							</div>
							<div class="col right">
								<h4>What does it take to implement?</h4>
								<?php the_field('what_does_it_take_to_implement'); ?>
								<h4>Outcome Measures</h4>
								<?php the_field('outcome_measures'); ?>
								<?php $examples = get_field('examples');  
								if ($examples != '') : ?>
									<div class="btn open_modal" >Examples</div>
									<div class="modal">
										<div class="modal-backdrop"></div>
										<div class="modal-container">
											<div class="modal-content">
												<h3>EXAMPLES</h3>
												<?php echo $examples; ?>
												
											</div>
											<div class="close-modal"></div>
										</div>
									</div>
								<?php endif; ?>
								<a class="btn" target="_blank" href="/resources">Resources</a>
							</div>
						</div>
					</div>
					



		        </div>

		    </div>

	    <?php endwhile; ?>

	<?php endif; wp_reset_query(); ?>

</div>

<div class="fixed_footer_nav">
	<a target="_blank" class="mini-btn" href="/contact-us">get involved</a>
	<div class="mini-btn open-bp-overview">blueprint overview </div>
</div>
<div class="grid-overlay">
	<div class="overlay-header">
		<div class="close-overlay"></div>
		<div class="header">Blueprint Overview</div>
		<div class="download-btn"><a href="">download</a></div>
	</div>
	<div class="overlay-content">
					<?php get_template_part( 'page-templates/template-parts/grid-overview' ) ?>
	</div>
</div>
	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
