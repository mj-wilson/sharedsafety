<?php

/**
 * Register post types 
 */
add_action( 'init', function() {

    $args = array(
      'public' => true,
		  'menu_icon' => 'dashicons-search',
      'label'  => 'Auxilary Pages',
		  'supports'  => array( 'title', 'thumbnail' )
    );
    register_post_type( 'auxilary', $args );

} );

?>