<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="content">
			<section class="secondary-page">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-header">
					<h1><?php the_title(); ?></h1>
				</div>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
