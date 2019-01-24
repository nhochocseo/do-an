<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'page-box' => array(
		'title'   => esc_attr__( 'Page Settings', 'woodest' ),
		'type'    => 'box',
		'options' => array(
			'subheader_status' => array(
				'type'  => 'multi-picker',
				'label' => false,
				'desc'  => false,
				'value' => array(
					'gadget' => 'enable',
					'enable' => array(
						'page_caption' => '',
						'subheader_image' => '',
					),
					'disable' => array(),
				),
				'picker' => array(
					'gadget' => array(
						'label' => esc_attr__('Sub Header', 'woodest'),
						'type'  => 'switch',
						'left-choice' => array(
							'value' => 'enable',
							'label' => esc_attr__('Enable', 'woodest'),
						),
						'right-choice' => array(
							'value' => 'disable',
							'label' => esc_attr__('Disable', 'woodest'),
						),
						'desc' => esc_attr__('Enable/Disable Sub Header From here.', 'woodest'),
					)
				),
				'choices' => array(
					'enable' => array(
						'page_caption' => array(
							'label' => esc_attr__('Page Caption', 'woodest'),
							'type'  => 'text',
							'value' => '',
							'desc' => esc_attr__('Add Page Caption from here.', 'woodest'),
						),
						'subheader_image' => array(
							'label' => esc_attr__('Sub Header Image', 'woodest'),
							'type'  => 'upload',
							'value' => '',
							'desc' => esc_attr__('Upload Subheader Image from here.', 'woodest'),
						),
					),
					'disable' => array(),
				),
				'show_borders' => false,
			),
		)
	),
);