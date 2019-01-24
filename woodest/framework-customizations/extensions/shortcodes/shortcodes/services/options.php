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
	'services_category' => array(
        'type'       => 'multi-select',
        'label'      => esc_attr__( 'Category', 'woodest' ),
        'population' => 'taxonomy',
        'source'     => 'services_category',
        'desc'       => esc_attr__( 'Show posts by category selection.','woodest' ),
    ),
	'service_num_title' => array(
		'label' => esc_attr__('Title Character Fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('This is a number of characters that you want to show on the post title.', 'woodest'),
	),
	'service_description' => array(
		'label' => esc_attr__('Number of Description Fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('This is a number of Description characters that you want to show.', 'woodest'),
	),
	'service_style' => array(
		'label' => esc_attr__('Service Style', 'woodest'),
		'type'  => 'select',
		'desc' => esc_attr__('Please select the services style here.', 'woodest'),
		'choices' => array(
			'style-1' => esc_attr__('Service Style 1', 'woodest'),
			'style-2' => esc_attr__('Service Style 2', 'woodest'),
			'style-3' => esc_attr__('Service Style 3', 'woodest'),
			'style-4' => esc_attr__('Service Style 4', 'woodest'),
			'style-5' => esc_attr__('Service Style 5', 'woodest'),
		),
	),
	'service_columns' => array(
		'label' => esc_attr__('Service Columns', 'woodest'),
		'type'  => 'select',
		'choices' => array(
			'col-md-12' => esc_attr__('1 Column', 'woodest'),
			'col-md-6' => esc_attr__('2 Column', 'woodest'),
			'col-md-4' => esc_attr__('3 Column', 'woodest'),
			'col-md-3' => esc_attr__('4 Column', 'woodest'),
		),
	),
	'services_fetch' => array(
		'label' => esc_attr__('Number of Services Fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Specify the number of services you want to pull out.', 'woodest'),
	),
	'service_order_by' => array(
		'label' => esc_attr__('Order By', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Specify the number of posts you want to pull out.', 'woodest'),
		'choices' => array(
			'publish_date' => esc_attr__('Publish date', 'woodest'),
			'title' => esc_attr__('Title', 'woodest'),
			'random' => esc_attr__('Random', 'woodest'),
		),
	),
	'service_order' => array(
		'label' => esc_attr__('Order', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Specify the number of posts you want to pull out.', 'woodest'),
		'choices' => array(
			'descending' => esc_attr__('Descending', 'woodest'),
			'ascending' => esc_attr__('Ascending', 'woodest'),
		),
	),
	'service_pagination' => array(
		'label' => esc_attr__('Enable Pagination', 'woodest'),
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
);
