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
	'portfolio_category' => array(
        'type'       => 'multi-select',
        'label'      => esc_attr__( 'Category', 'woodest' ),
        'population' => 'taxonomy',
        'source'     => 'fw-portfolio-category',
        'desc'       => esc_attr__( 'Show posts by category selection.','woodest' ),
    ),
	'portfolio_layout' => array(
		'label' => esc_attr__('Portfolio Layout', 'woodest'),
		'type'  => 'select',
		'desc' => esc_attr__('Please select the portfolio style here.', 'woodest'),
		'choices' => array(
			'col-md-6' => esc_attr__('Portfolio 2 Column', 'woodest'),
			'col-md-4' => esc_attr__('Portfolio 3 Column', 'woodest'),
			'col-md-3' => esc_attr__('Portfolio 4 Column', 'woodest'),
		),
	),
	'portfolio_title_ch' => array(
		'label' => esc_attr__('Title Chracters To Fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('This is a number of characters that you want to show on the post title.', 'woodest'),
	),
	'portfolio_fetch' => array(
		'label' => esc_attr__('Portfolio to fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Specify the number of portfolios you want to pull out.', 'woodest'),
	),
	'portfolio_orderby' => array(
		'label' => esc_attr__('Order By', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Select Porfolio orderby.', 'woodest'),
		'choices' => array(
			'publish_date' => esc_attr__('Publish date', 'woodest'),
			'title' => esc_attr__('Title', 'woodest'),
			'random' => esc_attr__('Random', 'woodest'),
		),
	),
	'portfolio_order' => array(
		'label' => esc_attr__('Order', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Select Portfolio Order.', 'woodest'),
		'choices' => array(
			'descending' => esc_attr__('Descending', 'woodest'),
			'ascending' => esc_attr__('Ascending', 'woodest'),
		),
	),
);
