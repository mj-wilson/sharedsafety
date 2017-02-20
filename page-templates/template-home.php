<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

<section id="home_panel1" class="home_panel">
	<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="panel_content">
					<div class="bp_intro">
						<h1>Blueprint <span>for</span> Shared Safety</h1>
					</div>
					<div class="bp_sub_intro">
						<?php the_content(); ?>
					</div>
					<div class="down_arrow">
						<div class="link_to_section" data-target="home_panel2">
							<?php get_template_part( 'page-templates/template-parts/svg/down_circle_arrow.svg' ) ?>
						</div>
					</div>
				</div>
	</div>
</section>


<section id="home_panel2" class="home_panel">
			<div class="panel_content">

				<div class="explainer_slider">
					<div id="slick_arrow_left" class="left_arrow">
						<?php get_template_part( 'page-templates/template-parts/svg/left_arrow.svg' ) ?>
					</div>
					<div class="slides_holder">
						<div class="slide">
							<div class="slide-inner">
								<?php the_field('slide_1'); ?>
							</div>
						</div>
						<div class="slide">
							<div class="slide-inner">
								<?php the_field('slide_2'); ?>

							</div>
						</div>
						<div class="slide">
							<div class="slide-inner">
								<?php the_field('slide_3'); ?>
								<div class="partner-list">
									<?php the_field('slide_3_partners'); ?>
								</div>

							</div>
						</div>




					</div>
					<div id="slick_arrow_right" class="right_arrow">
						<?php get_template_part( 'page-templates/template-parts/svg/right_arrow.svg' ) ?>
					</div>
				</div>
				<div class="down_arrow">
					<div class="link_to_section" data-target="home_panel3">
						<?php get_template_part( 'page-templates/template-parts/svg/down_circle_arrow.svg' ) ?>
					</div>
				</div>
			
			</div>

</section>

<section id="home_panel3" class="home_panel">
			<div class="panel_content">

				<div class="blueprint_principles">
					<h1>5 blueprint principles</h1>
					
					<?php the_field('blueprint_principals_intro_paragraph'); ?>

					<ul class="principals">

		<?php
			$colors = array('green', 'purple', 'navy', 'gold', 'teal');
			foreach ($colors as &$value) {
			// setup up loop of colors

			// query for each pratice page by color:

				$posts = get_posts(array(
					'numberposts'	=> -1,
					'post_type'		=> 'page',
					'meta_key'		=> 'practice_name',
					'meta_value'	=> $value
				));

				if( $posts ): ?>
	
					<?php foreach( $posts as $post ): 
						
						setup_postdata( $post );?>
						<?php $color = get_field('practice_name'); ?>
						<?php $link = get_the_permalink(); ?>
						
						<?php 
						$array = [
						    "green" => "<span>shifting to a</span> Public Health Frame",
						    "purple" => "Wellbeing <span>is safety</span>",
						    "navy" => "Crime Survivors <span>at the center</span>",
						    "gold" => "Breaking the Cycle<span> of harm</span>",
						    "teal" => "<span>making the</span> System Work",
						];

						?>

							<li class="<?php echo $color; ?>">
								<a href="<?php echo $link; ?>">
									<div class="icon"></div>
									<h2><?php echo $array[ $color ]; ?></h2>
								</a>
							</li>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>

				<?php endif; wp_reset_query(); 
			} 
			unset($value);
			?>
						
					</ul>
				</div>
				<div class="down_arrow">
					<div class="link_to_section" data-target="home_panel4">
						<?php get_template_part( 'page-templates/template-parts/svg/down_circle_arrow.svg' ) ?>
					</div>
				</div>
			</div>
			<div  class="right_arrow">
				<a href="/shifting-to-a-public-health-frame/"><?php get_template_part( 'page-templates/template-parts/svg/right_arrow.svg' ) ?></a>
			</div>
			
</section><!-- #primary -->

<section id="home_panel4" class="home_panel">
	<div class="content">
			<div class="panel_content">

				<div class="blueprint_steps">
					<h1>5 blueprint steps</h1>
					<?php the_field('blueprint_steps_intro_paragraph'); ?>

					<ul class="steps">
						<li>
							<a href="/shifting-to-a-public-health-frame/#envision_step">
								<h2>envision <span>Safety</span></h2>
								<p><?php the_field('blueprint_step_short_description_envision'); ?></p>
							</a>
						</li>
						<li>
							<a href="/shifting-to-a-public-health-frame/#plan_step">
								<h2>plan <span>Safety</span></h2>
								<p><?php the_field('blueprint_step_short_description_plan'); ?></p>
							</a>
						</li>
						<li>
							<a href="/shifting-to-a-public-health-frame/#invest_step">
								<h2>invest in <span>Safety</span></h2>
								<p><?php the_field('blueprint_step_short_description_invest'); ?></p>
							</a>
						</li>
						<li>
							<a href="/shifting-to-a-public-health-frame/#restore_step">
								<h2>restore <span>Safety</span></h2>
								<p><?php the_field('blueprint_step_short_description_restore'); ?></p>
							</a>
						</li>
						<li>
							<a href="/shifting-to-a-public-health-frame/#strengthen_step">
								<h2>strengthen <span>Safety</span></h2>
								<p><?php the_field('blueprint_step_short_description_strengthen'); ?></p>
							</a>
						</li>
					</ul>
				</div>
				<div class="down_arrow">
					<div class="link_to_section" data-target="home_panel5">
						<?php get_template_part( 'page-templates/template-parts/svg/down_circle_arrow.svg' ) ?>
					</div>
				</div>
			</div>
			
	</div>
</section><!-- #primary -->

<section id="home_panel5" class="home_panel">
	<div class="content">
			<div class="panel_content">
				<div class="blueprint_overview">
					<h1>Blueprint Overview</h1>
					<?php get_template_part( 'page-templates/template-parts/grid-overview' ) ?>
				</div>
			</div>
			
			<?php endwhile; // end of the loop. ?>
	</div>
</section><!-- #primary -->


<?php get_footer(); ?>
