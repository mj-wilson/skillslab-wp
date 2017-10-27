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

    $args_skills_fellowsv2 = array(
        'public' => true,
        'menu_icon' => 'dashicons-id-alt',
        'label'  => '2017-18 Skills Fellows',
        'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'skills_fellowsv2', $args_skills_fellowsv2 );

    $args_partnership_schools = array(
      	'public' => true,
		    'menu_icon' => 'dashicons-building',
      	'label'  => 'Partnership Schools',
		    'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'partnership-school', $args_partnership_schools );

    $args_team_bio = array(
        'public' => true,
        'menu_icon' => 'dashicons-id-alt',
        'label'  => 'Team Bios',
        'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'team_bio', $args_team_bio );

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

    $args_videos = array(
      	'public' => true,
		'menu_icon' => 'dashicons-video-alt3',
      	'label'  => 'Videos',
		'supports'  => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'video', $args_videos );

} );

