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
		<div class="page-content">

				<div class="page-header">
					<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'some-like-it-neat' ); ?></h1>

				</div>
				<div class="content-container">
				<p>
					<?php _e( 'It looks like nothing was found at this location.', 'some-like-it-neat' ); ?>
				</p>
				</div>


		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>