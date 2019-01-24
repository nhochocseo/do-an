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
	'alignment' => array(
		'label' => esc_attr__('Alignment', 'woodest'),
		'type'  => 'select',
		'desc' => esc_attr__('Please select the heading alignment style here.', 'woodest'),
		'choices' => array(
			'left' => esc_attr__('Left', 'woodest'),
			'right' => esc_attr__('Right', 'woodest'),
			'center' => esc_attr__('Center', 'woodest'),
		),
	),
	'heading_style' => array(
		'label' => esc_attr__('Heading Style', 'woodest'),
		'type'  => 'select',
		'desc' => esc_attr__('Please select the heading style here.', 'woodest'),
		'choices' => array(
			'style_1' => esc_attr__('Style 1', 'woodest'),
			'style_2' => esc_attr__('Style 2', 'woodest'),
		),
	),
	'title' => array(
		'label' => esc_attr__('Title', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Add heading title here.', 'woodest'),
	),
	'title_color' => array(
		'label' => esc_attr__('Title Color', 'woodest'),
		'type'  => 'color-picker',
	),
	'caption' => array(
		'label' => esc_attr__('Caption', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Add caption title here.', 'woodest'),
	),
	'caption_color' => array(
		'label' => esc_attr__('caption Color', 'woodest'),
		'type'  => 'color-picker',
	),
);
