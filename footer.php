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
				<a href="http://www.safeandjust.org" target="_blank">
					<div class="logo"></div>
					<div class="sub-logo">a project of the <span>Tides Center</span></div>
				</a>	
			</div>
			<div class="footer-nav no_shadow">
				<div class="links">
					<?php 
						wp_nav_menu(
							array(
								'menu' => 'Footer Nav'
							)
						);
					?>
				</div>
				<ul class="social no_shadow">
					<li><a class="twitter" target="_blank" href="https://twitter.com/safeandjust"></a></li>
					<li><a class="facebook" target="_blank"  href="https://www.facebook.com/safeandjust"></a></li>						
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
