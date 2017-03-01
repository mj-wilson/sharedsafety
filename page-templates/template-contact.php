<?php
/**
 * Template Name: Contact
 *
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<div class="page-content get-involved">
			<div class="breadcrumb">
				<a href="">back to principle</a>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="page-header">
					<h1>Get Involved</h1>
				</div>
				<section class="divider newsletter">
					<?php the_field('newsletter_intro'); ?>
						
					<script type="text/javascript">
						jQuery( document ).ready(function() {
							jQuery("#headerform").validate();
						});
					</script>
					<div class="signup_form">
						<form action="http://salsa4.salsalabs.com/save" id="headerform" method="post" novalidate="">
						    <input type="hidden" name="organization_KEY" value="50859">
						    <input type="hidden" name="object" value="supporter">
						    <input type="hidden" name="redirect" value="<?php echo get_current_page_url(); ?>">
						    <input type="hidden" name="tag" value="Email signup, Member- general">
						    <input type="hidden" name="signup_page_KEY" value="7494">
						    <input name="Email" class="email placeholder required" placeholder="Email Address" type="text">
						    <input type="submit" class="" alt="submit" title="submit"  value="submit">
						</form>
					</div>
					<div class="signup_form_thanks" style="display: none;">
						Thank you for joining!
					</div>

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

