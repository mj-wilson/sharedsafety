<?php
/**
 * The Template for displaying all single auxilary pages.
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="page-content">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="pre-header">
					<h1><span>In Depth:</span> <?php the_field('in_depth_header_text'); ?></h1>
				</div>
				<div class="callout"><?php the_content(); ?></div>
				<h2><?php the_field('above_columns_header'); ?></h2>
				<div class="cols">
					<?php the_field('small_print'); ?>
				</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
