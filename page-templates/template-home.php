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
						A guide for building a safer California. <br>
						A vision for community wellbeing. <br>
						A voice for crime survivors. <br>
						A commitment to breaking the cycle of harm.
					</div>
					<div class="down_arrow">
						<div class="link_to_section" data-target="home_panel2">
							<?php get_template_part( 'page-templates/template-parts/svg/down_circle_arrow.svg' ) ?>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>
	</div>
</section>


<section id="home_panel2" class="home_panel">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="panel_content">

				<div class="explainer_slider">
					<div id="slick_arrow_left" class="left_arrow">
						<?php get_template_part( 'page-templates/template-parts/svg/left_arrow.svg' ) ?>
					</div>
					<div class="slides_holder">
						<div class="slide">
							<div class="slide-inner">
								<h1>WHAT IS SHARED SAFETY?</h1>
								<p>A community is safest when everyone plays a role in building and restoring community wellbeing. Shared Safety means tackling the drivers of crime, elevating the voices of crime survivors, and breaking the cycle of harm through more effective decision-making. Shared Safety is the pioneering work of community-wide stakeholders who are rethinking their approach to public safety using the lens of wellbeing and public health. <a hre="">Be part of the movement.</a></p>
							</div>
						</div>
						<div class="slide">
							<div class="slide-inner">
								<h1>WHAT WE INVEST IN GROWS</h1>
								<p><a hre="">Spending on incarceration skyrocketed in the ‘80s and ‘90s at the expense of public health and social services.</a> The result has left low-income communities of color—including crime survivors—increasingly vulnerable to crime, poverty and poor health. To disrupt this cycle of harm, local officials must work together to rethink public safety priorities—starting with defining and investing in shared safety.</p>

							</div>
						</div>
						<div class="slide">
							<div class="slide-inner">
								<h1>DESIGNING THE BLUEPRINT: <span>A Collaborative Effort</span></h1>
								<p>This Blueprint is the product of more than a year of research, policy analysis and outreach to stakeholders and practitioners across California. By shifting the focus from over-incarceration to investments that will truly make our communities safer, they are re-envisioning the field of public safety.</p>
								<div class="partner-list">
									<p>the following partners helped shape and support this blueprint for shared safety:</p>
									<ul>
										<li>Cerum aut veliam elis vendae</li>
										<li>Cerum aut veliam elis vendae</li>
										<li>Cerum aut veliam elis vendae</li>
										<li>Cerum aut veliam elis vendae</li>
										<li>Cerum aut veliam elis vendae</li>
										<li>Cerum aut veliam elis vendae</li>
									</ul>
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
			<?php endwhile; // end of the loop. ?>

</section>

<section id="home_panel3" class="home_panel">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="panel_content">

				<div class="blueprint_principles">
					<h1>5 blueprint principles</h1>
					<p>These guiding principles are the foundation for achieving Shared Safety communities.
Each principle has a set of <a href="">practices</a> that support an integrated system.</p>
					<ul class="principals">
						<li class="green">
							<div class="icon"></div>
							<h2>shifting to a <span>Public Health Frame</span></h2>
						</li>
						<li class="purple">
							<div class="icon"></div>
							<h2><span>Wellbeing</span> is safety</h2>
						</li>
						<li class="navy">
							<div class="icon"></div>
							<h2><span>Crime Survivors </span> at the center</h2>
						</li>
						<li class="gold">
							<div class="icon"></div>
							<h2><span>Breaking the Cycle</span> of harm</h2>
						</li>
						<li class="teal">
							<div class="icon"></div>
							<h2>making the  <span>System Work</span></h2>
						</li>
					</ul>
				</div>
				<div class="down_arrow">
					<div class="link_to_section" data-target="home_panel4">
						<?php get_template_part( 'page-templates/template-parts/svg/down_circle_arrow.svg' ) ?>
					</div>
				</div>
			</div>
			<div  class="right_arrow">
				<?php get_template_part( 'page-templates/template-parts/svg/right_arrow.svg' ) ?>
			</div>
			
			<?php endwhile; // end of the loop. ?>
</section><!-- #primary -->

<section id="home_panel4" class="home_panel">
	<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="panel_content">

				<div class="blueprint_steps">
					<h1>5 blueprint steps</h1>
					<p>Each Blueprint principle is supported by five action steps and <a href="">practices</a> the building blocks for a responsive and restorative safety infrastructure.</p>
					<ul class="steps">
						<li>
							<a href="">
								<h2>envision <span>Safety</span></h2>
								<p>Developing a shared understanding of what safety means for your community and how to get there.</p>
							</a>
						</li>
						<li>
							<a href="">
								<h2>plan <span>Safety</span></h2>
								<p>Establishing a foundation and roadmap for advancing your community’s new safety priorities.</p>
							</a>
						</li>
						<li>
							<a href="">
								<h2>invest in <span>Safety</span></h2>
								<p>Making smart, cost-effective investments in safety policies, programs and practices.</p>
							</a>
						</li>
						<li>
							<a href="">
								<h2>restore <span>Safety</span></h2>
								<p>Repairing breaks and building trust so that the community can move forward together.</p>
							</a>
						</li>
						<li>
							<a href="">
								<h2>strengthen <span>Safety</span></h2>
								<p>Building on what works to improve safety in your community, learning from others, and sharing your successes.</p>
							</a>
						</li>
					</ul>
				</div>
				<div class="down_arrow">
					<div class="link_to_section" data-target="home_panel4">
						<?php get_template_part( 'page-templates/template-parts/svg/down_circle_arrow.svg' ) ?>
					</div>
				</div>
			</div>
			
			<?php endwhile; // end of the loop. ?>
	</div>
</section><!-- #primary -->


<?php get_footer(); ?>
