<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'page_class' => array(
        'type' => 'text',
        'label' => esc_attr__('Page Custom Class', 'woodest'),
        'desc' => esc_attr__('Please add the page custom class.', 'woodest'),
    ),
	'action_style' => array(
		'label' => esc_attr__('Call to action Style', 'woodest'),
		'type'  => 'select',
		'choices' => array(
			'style_1' => esc_attr__('Style 1', 'woodest'),
			'style_2' => esc_attr__('Style 2', 'woodest'),
		),
	),
	'title' => array(
		'label' => esc_attr__('Title', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please add the font awesome / SVG icon code here.', 'woodest'),
	),
	'title_color' => array(
		'label' => esc_attr__('Title Color', 'woodest'),
		'type'  => 'color-picker',
		'desc' => esc_attr__('Please select the title color from the color picker here.', 'woodest'),
	),
	'first_btn_txt' => array(
		'label' => esc_attr__('First Button Text', 'woodest'),
		'type'  => 'text',
	),
	'first_btn_link' => array(
		'label' => esc_attr__('First Button Link', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Enter the first button link here.', 'woodest'),
	),
	'second_btn_txt' => array(
		'label' => esc_attr__('Second Button Text', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Enter the second button text here', 'woodest'),
	),
	'second_btn_link' => array(
		'label' => esc_attr__('Second Button Link', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the second button link here.', 'woodest'),
	),
);
