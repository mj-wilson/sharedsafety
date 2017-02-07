<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package some_like_it_neat
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemType="http://schema.org/WebPage">
	
	<header class="entry-header">

		<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="mainContentOfPage">

	<?php the_content(); ?>

	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'some-like-it-neat' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	
</article><!-- #post-## -->

