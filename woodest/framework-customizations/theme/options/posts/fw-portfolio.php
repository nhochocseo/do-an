<?php 
if (!defined( 'FW' )) die('Forbidden');

$options = array(
	'project-box' => array(
		'title'   => esc_attr__( 'Project Custom Fields', 'woodest' ),
		'type'    => 'box',
		'options' => array(
			'project-caption'    => array(
				'label' => esc_attr__( 'Post Caption', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Caption for the post here.', 'woodest' ),
				'type'  => 'text'
			),
			'project-header-bg-image' => array(
				'label' => esc_attr__( 'Header Background Image', 'woodest' ),
				'desc'  => esc_attr__( 'Click here to Upload the Header Background Image.', 'woodest' ),
				'type'  => 'upload'
			),
			'project-client-name'    => array(
				'label' => esc_attr__( 'Project Client Name', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the name of the project client. Leave blank to hide this field.', 'woodest' ),
				'type'  => 'text'
			),
			'project-date' => array(
				'label' => esc_attr__( 'Project Date', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the date of the project. Leave blank to hide this field.', 'woodest' ),
				'type'  => 'text'
			),
			'project-location' => array(
				'label' => esc_attr__( 'Project Location', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the location of the project. Leave blank to hide this field.', 'woodest' ),
				'type'  => 'text'
			),
			'project-category' => array(
				'label' => esc_attr__( 'Project Category', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the category of the project. Leave blank to hide this field.', 'woodest' ),
				'type'  => 'text'
			),
			'project-team' => array(
				'label' => esc_attr__( 'Project Team', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Team of the project. Leave blank to hide this field.', 'woodest' ),
				'type'  => 'text'
			),
			'project-price' => array(
				'label' => esc_attr__( 'Project Price', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the cost of this project. Leave blank to hide this field.', 'woodest' ),
				'type'  => 'text'
			),
			'project-client-requirement' => array(
				'label' => esc_attr__( 'Client Requirement', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Client Requirement of the project. Leave blank to hide this field.', 'woodest' ),
				'type'  => 'textarea'
			),
			'project-about-team' => array(
				'label' => esc_attr__( 'About Team', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the description about the taem working on this project. Leave blank to hide this field..', 'woodest' ),
				'type'  => 'textarea'
			),
			'project-detail-page' => array(
				'label' => esc_attr__( 'Enable/Disable Detail Page', 'woodest' ),
				'desc'  => esc_attr__( 'Disabling this will remove detail page link from all project listing for this Project.', 'woodest' ),
				'type'  => 'switch',
				'left-choice' => array(
					'value' => 'enable',
					'label' => esc_attr__('Enable', 'woodest'),
				),
				'right-choice' => array(
					'value' => 'disable',
					'label' => esc_attr__('Disable', 'woodest'),
				),
			),
		),
	),
);