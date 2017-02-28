	<div class="blueprint_grid">
		<div class="column_container">
			<div class="col col1">
				<div class="cell header"></div>
				<div class="cell"><span>1</span>Envision</div>
				<div class="cell"><span>2</span>Plan</div>
				<div class="cell"><span>3</span>Invest</div>
				<div class="cell"><span>4</span>Evaluate</div>
				<div class="cell"><span>5</span>Strengthen</div>
			</div>


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

									<div class="col <?php echo $color; ?>">
										<div class="cell header">
											<a href="<?php echo $link; ?>">
												<div class="icon"><span class="icon-inner"></span></div>
												<div class="title"><?php echo $array[ $color ]; ?></div>
											</a>	
										</div>
									<?php

									$args = array(
									    'post_type'      => 'page',
									    'posts_per_page' => -1,
									    'post_parent'    => $post->ID,
										'meta_key'			=> 'step',
										'orderby'			=> 'meta_value',
										'order'				=> 'ASC'
									 );

									$parent = new WP_Query( $args );

									if ( $parent->have_posts() ) : ?>

									    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
									    	<?php 
									    		$step_field = get_field_object('step'); 
									    		$value = $step_field['value'];
												$current_step = $step_field['choices'][ $value ];
									    	?>
									    	<div class="cell">
												<a href="<?php echo $link; ?>#<?php echo $current_step; ?>_step">
									    			<span class="step-name"><?php the_field('step_title'); ?></span>
									    		</a>
									    	</div>

									    <?php endwhile; ?>

									<?php endif; wp_reset_query(); ?>

									</div> <!-- close column -->

								<?php endforeach; ?>
								
								
								<?php wp_reset_postdata(); ?>

						<?php endif; 
						} 
						unset($value);
						?>


		</div><!-- close column_container -->
	</div><!-- close blueprint_grid -->
