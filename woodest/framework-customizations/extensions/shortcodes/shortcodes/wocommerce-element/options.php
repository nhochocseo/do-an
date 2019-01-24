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
	'woo_category' => array(
        'type'       => 'multi-select',
        'label'      => esc_attr__( 'Category', 'woodest' ),
        'population' => 'taxonomy',
        'source'     => 'product_cat',
        'desc'       => esc_attr__( 'Show posts by category selection.','woodest' ),
    ),
	'woo_size' => array(
		'label' => esc_attr__('Woo Column Size', 'woodest'),
		'type'  => 'select',
		'choices' => array(
			'col-md-6' => esc_attr__('2 Column', 'woodest'),
			'col-md-4' => esc_attr__('3 Column', 'woodest'),
			'col-md-3' => esc_attr__('4 Column', 'woodest'),
		),
	),
	'woo_titles' => array(
		'label' => esc_attr__('Title Fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please Enter number of characters that you want to show for Product title.', 'woodest'),
	),
	'woo_fetch' => array(
		'label' => esc_attr__('Fetch Products', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter number of Products you want to Fetch.', 'woodest'),
	),
	'woo_orderby' => array(
		'label' => esc_attr__('Order By', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Select Products Order By.', 'woodest'),
		'choices' => array(
			'publish_date' => esc_attr__('Publish date', 'woodest'),
			'title' => esc_attr__('Title', 'woodest'),
			'random' => esc_attr__('Random', 'woodest'),
		),
	),
	'woo_order' => array(
		'label' => esc_attr__('Order', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Select Products Order.', 'woodest'),
		'choices' => array(
			'publish_date' => esc_attr__('Publish date', 'woodest'),
			'title' => esc_attr__('Title', 'woodest'),
			'random' => esc_attr__('Random', 'woodest'),
		),
	),
	'woo_pagination' => array(
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