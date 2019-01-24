<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'clients' => array(
		'label'         => esc_attr__( 'Our Client', 'woodest' ),
		'popup-title'   => esc_attr__( 'Add/Edit Client', 'woodest' ),
		'desc'          => esc_attr__( 'Here you can add, remove and edit Clients.', 'woodest' ),
		'type'          => 'addable-popup',
		'template'      => '{{=image_title}}',
		'popup-options' => array(
			'client_image' => array(
				'label' => esc_attr__( 'Client Image', 'woodest' ),
				'desc'  => esc_attr__( 'Either upload a new, or choose an existing image from your media library', 'woodest' ),
				'type'  => 'upload',
			),
			'image_title'   => array(
				'label' => esc_attr__( 'Image Title', 'woodest' ),
				'desc'  => esc_attr__( 'Enter the Title for image', 'woodest' ),
				'type'  => 'text'
			),
			'external_link'    => array(
				'label' => esc_attr__( 'Enter External Link Url', 'woodest' ),
				'desc'  => esc_attr__( 'Please Enter Url for the client', 'woodest' ),
				'type'  => 'text'
			),
			'image_target' => array(
				'label' => esc_attr__('Open In new Window', 'woodest'),
				'type'  => 'switch',
				'default'	=>	'disable',
				'left-choice' => array(
					'value' => 'enable',
					'label' => esc_attr__('Enable', 'woodest'),
				),
				'right-choice' => array(
					'value' => 'disable',
					'label' => esc_attr__('Disable', 'woodest'),
				),
			),
		)
	)
);