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
	'blog_category' => array(
        'type'       => 'multi-select',
        'label'      => esc_attr__( 'Select Posts Categories', 'woodest' ),
        'population' => 'taxonomy',
        'source'     => 'category',
        'desc'       => esc_attr__( 'Show posts by category selection.','woodest' ),
    ),
	'blog_style' => array(
		'label' => esc_attr__('Blog Style', 'woodest'),
		'type'  => 'select',
		'choices' => array(
			'blog_full' => esc_attr__('Blog Full', 'woodest'),
			'blog_grid' => esc_attr__('Blog Grid', 'woodest'),
		),
	),
	'blog_cols' => array(
		'label' => esc_attr__('Blog Grid Columns', 'woodest'),
		'type'  => 'select',
		'choices' => array(
			'col-md-6' => esc_attr__('2 Columns', 'woodest'),
			'col-md-4' => esc_attr__('3 Columns', 'woodest'),
			'col-md-3' => esc_attr__('4 Columns', 'woodest'),
		),
	),
	'blog_num_title' => array(
		'label' => esc_attr__('Num Title (Character)', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('This is a number of characters that you want to show on the post title.', 'woodest'),
	),
	'blog_num_descrp' => array(
		'label' => esc_attr__('Num Description', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('This is a number of characters that you want to show on the post description.', 'woodest'),
	),
	'blog_num_fetch' => array(
		'label' => esc_attr__('Num Fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Specify the number of posts you want to pull out.', 'woodest'),
	),
	'blog_order_by' => array(
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
	'blog_pagination' => array(
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
