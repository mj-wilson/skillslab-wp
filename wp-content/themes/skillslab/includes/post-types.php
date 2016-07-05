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
    
    $args_project_leads = array(
      	'public' => true,
		'menu_icon' => 'dashicons-id-alt',
      	'label'  => 'Project Leads',
		'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'project_lead', $args_project_leads );

    $args_skills_fellows = array(
      	'public' => true,
		'menu_icon' => 'dashicons-id-alt',
      	'label'  => 'Skills Fellows',
		'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'skills_fellows', $args_skills_fellows );

    $args_partnership_schools = array(
      	'public' => true,
		'menu_icon' => 'dashicons-building',
      	'label'  => 'Partnership Schools',
		'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'partnership-school', $args_partnership_schools );

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

