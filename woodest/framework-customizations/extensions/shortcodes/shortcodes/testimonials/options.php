<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'testimonials_style' => array(
		'label' => esc_attr__('Testimonials Style', 'woodest'),
		'type'  => 'select',
		'desc' => esc_attr__('Please select the testimonial style here.', 'woodest'),
		'choices' => array(
			'normal-view' => esc_attr__('Normal View', 'woodest'),
			'advance-view' => esc_attr__('Advance View', 'woodest'),
		),
	),
	'testimonials' => array(
		'label'         => esc_attr__( 'Testimonials', 'woodest' ),
		'popup-title'   => esc_attr__( 'Add/Edit Testimonial', 'woodest' ),
		'desc'          => esc_attr__( 'Here you can add, remove and edit your Testimonials.', 'woodest' ),
		'type'          => 'addable-popup',
		'template'      => '{{=author_name}}',
		'popup-options' => array(
			'content'       => array(
				'label' => esc_attr__( 'Quote', 'woodest' ),
				'desc'  => esc_attr__( 'Enter the testimonial here', 'woodest' ),
				'type'  => 'textarea',
			),
			'author_avatar' => array(
				'label' => esc_attr__( 'Image', 'woodest' ),
				'desc'  => esc_attr__( 'Either upload a new, or choose an existing image from your media library', 'woodest' ),
				'type'  => 'upload',
			),
			'author_name'   => array(
				'label' => esc_attr__( 'Name', 'woodest' ),
				'desc'  => esc_attr__( 'Enter the Name of the Person to quote', 'woodest' ),
				'type'  => 'text'
			),
			'author_job'    => array(
				'label' => esc_attr__( 'Position', 'woodest' ),
				'desc'  => esc_attr__( 'Can be used for a job description', 'woodest' ),
				'type'  => 'text'
			)
		)
	)
);