<?php

/**
 * Register post types 
 */
add_action( 'init', function() {

    $args = array(
      'public' => true,
		  'menu_icon' => 'dashicons-money',
      'label'  => 'Coupons',
		  'supports'  => array( 'title', 'thumbnail' )
    );
    register_post_type( 'coupon', $args );

} );

?>