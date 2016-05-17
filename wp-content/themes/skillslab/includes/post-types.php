<?php

/**
 * Register post types 
 */
add_action( 'init', function() {

    $args = array(
      	'public' => true,
		'menu_icon' => 'dashicons-groups',
      	'label'  => 'Partners',
		'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'partner', $args );

    $args_schools = array(
      	'public' => true,
		'menu_icon' => 'dashicons-building',
      	'label'  => 'Schools',
		'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'school', $args_schools );

    $args_performance_tasks = array(
      	'public' => true,
      	'label'  => 'Performance Tasks',
		'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'performance_task', $args_performance_tasks );

	register_taxonomy(
		'partner_type',
		'partner',
		array(
			'label' => __( 'Partner Type' ),
			'rewrite' => array( 'slug' => 'partner-type' ),
			'hierarchical' => true,
		)
	);
	
	register_taxonomy(
		'task_type',
		'performance_task',
		array(
			'label' => __( 'Performance Task Category' ),
			'rewrite' => array( 'slug' => 'task-type' ),
			'hierarchical' => true,
		)
	);



} );

