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
	'main_heading' => array(
		'label' => esc_attr__('Main Heading', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the main heading here.', 'woodest'),
	),
	'heading_caption' => array(
		'label' => esc_attr__('Heading Caption', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the main heading caption here.', 'woodest'),
	),
	'icon_one' => array(
		'label' => esc_attr__('Icon One', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the first icon code here.', 'woodest'),
	),
	'title_one' => array(
		'label' => esc_attr__('Title One', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the first title here.', 'woodest'),
	),
	'description_one' => array(
		'label' => esc_attr__('Description One', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the first description here.', 'woodest'),
	),
	'second_icon' => array(
		'label' => esc_attr__('Second Icon', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the second icon code here.', 'woodest'),
	),
	'title_second' => array(
		'label' => esc_attr__('Title Second', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the second title here.', 'woodest'),
	),
	'description_second' => array(
		'label' => esc_attr__('Description Second', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the second description here.', 'woodest'),
	),
	'third_icon' => array(
		'label' => esc_attr__('Third Icon', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the third icon code here.', 'woodest'),
	),
	'title_third' => array(
		'label' => esc_attr__('Title Third', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the third title here.', 'woodest'),
	),
	'description_third' => array(
		'label' => esc_attr__('Description Third', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the third description here', 'woodest'),
	),
	'left_image' => array(
		'label' => esc_attr__( 'Left Image', 'woodest' ),
		'desc'  => esc_attr__( 'Upload Left Side Image from here', 'woodest' ),
		'type'  => 'upload',
	),
	'introduction_text' => array(
		'label' => esc_attr__('Introduction Text', 'woodest'),
		'type'  => 'textarea',
		'desc' => esc_attr__('Please enter the introduction text here.', 'woodest'),
	),
);
