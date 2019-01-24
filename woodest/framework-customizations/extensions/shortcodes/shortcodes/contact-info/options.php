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
	'first_title' => array(
		'label' => esc_attr__('First Title', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the first title here.', 'woodest'),
	),
	'address_info' => array(
		'label' => esc_attr__('Address Info', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the address information here.', 'woodest'),
	),
	'second_title' => array(
		'label' => esc_attr__('Second Title', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the second title here.', 'woodest'),
	),
	'ph_num_one' => array(
		'label' => esc_attr__('Phone Number One', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the first phone number here.', 'woodest'),
	),
	'ph_num_second' => array(
		'label' => esc_attr__('Phone Number Second', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the second phone number here.', 'woodest'),
	),
	'third_title' => array(
		'label' => esc_attr__('Third Title', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the third title here.', 'woodest'),
	),
	'email_one' => array(
		'label' => esc_attr__('Email One', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the first email here.', 'woodest'),
	),
	'email_two' => array(
		'label' => esc_attr__('Email Two', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the second email address here.', 'woodest'),
	),
);
