<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
		'general-box' => array(
			'title' =>  esc_attr__('General', 'woodest'),
			'type' => 'tab',
			'options' => array(
				'custom_id' => array(
					'label' => esc_attr__('Custom ID', 'woodest'),
					'desc' => esc_attr__('Add Custom ID', 'woodest'),
					'type' => 'text',
				),
				'custom_classes' => array(
					'label' => esc_attr__('Custom Classes', 'woodest'),
					'desc' => esc_attr__('Add Custom Classes', 'woodest'),
					'type' => 'text',
				),
				'fullwidth' => array(
					'type'  => 'switch',
					'value' => 'no',
					'left-choice' => array(
						'value' => 'no',
						'label' => esc_attr__('No', 'woodest'),
					),
					'right-choice' => array(
						'value' => 'yes',
						'label' => esc_attr__('Yes', 'woodest'),
					),
					'label' => esc_attr__('Full Width', 'woodest'),
					'desc'  => esc_attr__('Select Section Width', 'woodest'),
				),
			),
		),
		'background-box' => array(
			'title' =>  esc_attr__('Background', 'woodest'),
			'type' => 'tab',
			'options' => array(
				'background-settings' => array(
					'type'  => 'multi-picker',
					'label' => false,
					'desc'  => false,
					'picker' => array(
						'gadget' => array(
							'label'   => __('Background Type', 'woodest'),
							'type'    => 'select', // or 'short-select'
							'choices' => array(
								'background-color'  => __('Background Color', 'woodest'),
								'background-image' => __('Background Image', 'woodest'),
								'background-video' => __('Background Video', 'woodest')
							),
							'desc'    => __('Description', 'woodest'),
							'help'    => __('Help tip', 'woodest'),
						)
					),
					'choices'      => array(
						'background-color'  => array(
							'background_color' => array(
								'label' => esc_attr__('Background Color', 'woodest'),
								'desc' => esc_attr__('Please select the background color', 'woodest'),
								'type' => 'rgba-color-picker',
							),
						),
						'background-image'  => array(
							'background_image' => array(
								'label' => esc_attr__('Background Image', 'woodest'),
								'desc' => esc_attr__('Please select the background image', 'woodest'),
								'type' => 'background-image'
							),
							'background_color' => array(
								'label' => esc_attr__('Background Color', 'woodest'),
								'desc' => esc_attr__('Please select the background color', 'woodest'),
								'type' => 'rgba-color-picker',
							),
							'background_opacity' => array(
								'label' => esc_attr__('Background Opacity', 'woodest'),
								'type'  => 'slider',
								'properties' => array(
									'min' => 0,
									'max' => 1,
									'step' => 0.1, // Set slider step. Always > 0. Could be fractional.
								),
								'desc' => esc_attr__('Set Background Opacity from here', 'woodest'),
							),
							'background_repeat' => array(
								'type' => 'select',
								'value' => 'no-repeat',
								'attr' => array(),
								'label' => esc_attr__('Background Repeat', 'woodest'),
								'desc' => esc_attr__('Repeat Background', 'woodest'),
								'choices' => array(
									'no-repeat' => esc_attr__('No Repeat', 'woodest'),
									'repeat' => esc_attr__('Repeat', 'woodest'),
									'repeat-x' => esc_attr__('Repeat X', 'woodest'),
									'repeat-y' => esc_attr__('Repeat Y', 'woodest'),
								),
							),
							'background_size' => array(
								'type' => 'select',
								'value' => 'initial',
								'attr' => array(),
								'label' => esc_attr__('Background Size', 'woodest'),
								'desc' => esc_attr__('Background Size', 'woodest'),
								'choices' => array(
									'auto' => esc_attr__('Auto', 'woodest'),
									'initial' => esc_attr__('Initial', 'woodest'),
									'cover' => esc_attr__('Cover', 'woodest'),
									'contain' => esc_attr__('Contain', 'woodest'),
								),
							),
						),
						'background-video'  => array(
							'video' => array(
								'label' => esc_attr__('Background Video', 'woodest'),
								'desc' => esc_attr__('Insert Video URL to embed this video', 'woodest'),
								'type' => 'text',
							),
						),
					),
				),	
			),
		),
		'padding-box' => array(
			'title' =>  esc_attr__('Padding', 'woodest'),
			'type' => 'tab',
			'options' => array(
				'padding_top' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Padding Top', 'woodest'),
					'desc' => esc_attr__('add padding top (ie:50)', 'woodest'),
				),
				'padding_right' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Padding Right', 'woodest'),
					'desc' => esc_attr__('add padding right (ie:50)', 'woodest'),
				),
				'padding_bottom' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Padding Bottom', 'woodest'),
					'desc' => esc_attr__('add padding bottom (ie:50)', 'woodest'),
				),
				'padding_left' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Padding Left', 'woodest'),
					'desc' => esc_attr__('add padding left (ie:50)', 'woodest'),
				),
			),
		),
		'margin-box' => array(
			'title' =>  esc_attr__('Margin', 'woodest'),
			'type' => 'tab',
			'options' => array(
				'margin_top' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Margin Top', 'woodest'),
					'desc' => esc_attr__('add margin top (ie:50)', 'woodest'),
				),
				'margin_right' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Margin Right', 'woodest'),
					'desc' => esc_attr__('add margin right (ie:50)', 'woodest'),
				),
				'margin_bottom' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Margin Bottom', 'woodest'),
					'desc' => esc_attr__('add margin bottom (ie:50)', 'woodest'),
				),
				'margin_left' => array(
					'type' => 'text',
					'value' => '',
					'label' => esc_attr__('Margin Left', 'woodest'),
					'desc' => esc_attr__('add margin left (ie:50)', 'woodest'),
				),
			),
		),
);
