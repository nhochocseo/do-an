<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'slides' => array(
		'label'         => esc_attr__( 'Slider', 'woodest' ),
		'popup-title'   => esc_attr__( 'Add/Edit Slider', 'woodest' ),
		'desc'          => esc_attr__( 'Here you can add, remove and edit your Sliders.', 'woodest' ),
		'type'          => 'addable-popup',
		'template'      => '{{=slide_title}}',
		'popup-options' => array(
			'slide_image' => array(
				'label' => esc_attr__( 'Slide Image', 'woodest' ),
				'desc'  => esc_attr__( 'Either upload a new, or choose an existing image from your media library', 'woodest' ),
				'type'  => 'upload',
			),
			'slide_title'   => array(
				'label' => esc_attr__( 'Slide Title', 'woodest' ),
				'desc'  => esc_attr__( 'Enter the Title of the Slide', 'woodest' ),
				'type'  => 'text'
			),
			'content'       => array(
				'label' => esc_attr__( 'Description', 'woodest' ),
				'desc'  => esc_attr__( 'Enter the Slide Description here', 'woodest' ),
				'type'  => 'textarea',
			),
			'get_in_touch_text'    => array(
				'label' => esc_attr__( 'Get In Touch Button Text', 'woodest' ),
				'desc'  => esc_attr__( 'Please Enter First Button Text', 'woodest' ),
				'type'  => 'text'
			),
			'get_in_touch_url'    => array(
				'label' => esc_attr__( 'Get In Touch Button Url', 'woodest' ),
				'desc'  => esc_attr__( 'Please Enter First Button Url', 'woodest' ),
				'type'  => 'text'
			),
			'purchase_now_text'    => array(
				'label' => esc_attr__( 'Purchase Now Button Text', 'woodest' ),
				'desc'  => esc_attr__( 'Please Enter Second Button Text', 'woodest' ),
				'type'  => 'text'
			),
			'purchase_now_url'    => array(
				'label' => esc_attr__( 'Purchase Now Url', 'woodest' ),
				'desc'  => esc_attr__( 'Please Enter Second Button Url', 'woodest' ),
				'type'  => 'text'
			),
		)
	),
	'image-icon' => array(
		'label' => esc_attr__('Chọn ảnh', 'woodest'),
		'type'  => 'upload',
		'desc' => esc_attr__('Please select the heading style here.', 'woodest'),
	),
);