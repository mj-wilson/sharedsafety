<?php
/**
 * Template Name: Contact
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="page-content get-involved">
			<div class="breadcrumb">
				<span onclick="window.history.back()">back to practice</span>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-header">
					<h1>Get Involved</h1>
				</div>
				<section class="divider newsletter">
					<?php the_field('newsletter_intro'); ?>
				</section>
				<section class="divider email">
					<?php the_field('we_want_to_learn_from_you'); ?>
				</section>
				<section class="divider host">
					<?php the_field('host_a_blueprint_event_text'); ?>

				</section>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>

