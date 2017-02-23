<?php

/**
 * Register post types 
 */
add_action( 'init', function() {

    $args = array(
      'public' => true,
			'menu_icon' => 'dashicons-search',
      		'label'  => 'Auxiliary Pages',
		  	'supports'  => array( 'title', 'thumbnail', 'editor' )
    );
    register_post_type( 'auxiliary', $args );

} );

?>