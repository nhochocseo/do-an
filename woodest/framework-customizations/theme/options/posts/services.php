<?php 
if (!defined( 'FW' )) die('Forbidden');

$options = array(
	'services-box' => array(
		'title'   => esc_attr__( 'Service Custom Fields', 'woodest' ),
		'type'    => 'box',
		'options' => array(
			'service-caption'    => array(
				'label' => esc_attr__( 'Post Caption', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Caption for the post here.', 'woodest' ),
				'type'  => 'text'
			),
			'service-header-bg-image' => array(
				'label' => esc_attr__( 'Header Background Image', 'woodest' ),
				'desc'  => esc_attr__( 'Click here to Upload the Header Background Image.', 'woodest' ),
				'type'  => 'upload'
			),
			'icon-class'    => array(
				'label' => esc_attr__( 'Icon Class', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Icon Class here.', 'woodest' ),
				'type'  => 'text'
			),
			'coordination-text' => array(
				'label' => esc_attr__( 'Coordination Text', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the coordination description here.', 'woodest' ),
				'type'  => 'textarea'
			),
			'cost-control-info' => array(
				'label' => esc_attr__( 'Cost Control Information', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the cost control Informatio0n here.', 'woodest' ),
				'type'  => 'textarea'
			),
			'brochure-info' => array(
				'label' => esc_attr__( 'Services Brochure Information', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Services Brochure Informatio0n here.', 'woodest' ),
				'type'  => 'textarea'
			),
			'download-btn-link' => array(
				'label' => esc_attr__( 'Download Button Link', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the download pdf button link URL here.', 'woodest' ),
				'type'  => 'text'
			),
		),
	),
);