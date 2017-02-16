<?php
/**
 * The template for displaying the footer.
 *
 */
?>
		
		
		
<footer id="footer" >
	<section class="footer-content">
		<div class="content">
			<div class="footer-logo">
				<div class="logo"></div>
				<div class="sub-logo">a project of the <span>Tides Center</span></div>
			</div>
			<div class="footer-nav">
				<div class="links">
					<?php 
						wp_nav_menu(
							array(
								'menu' => 'Footer Nav'
							)
						);
					?>
				</div>
				<ul class="social">
					<li><a class="twitter" href=""></a></li>
					<li><a class="facebook" href=""></a></li>						
				</ul>
			</div>
		</div>
	</section>
	<section class="lower-footer-content">
		<div class="content">
			<div class="copy">&copy; <?php echo date('Y'); ?> Californians for Safety and Justice</div>
		</div>
	</section>
	</div>

</footer><!-- #colophon -->

		






<?php wp_footer(); ?>

</body>
</html>
