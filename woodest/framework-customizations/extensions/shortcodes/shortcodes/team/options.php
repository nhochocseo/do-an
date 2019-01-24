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
	'team_category' => array(
        'type'       => 'multi-select',
        'label'      => esc_attr__('Category', 'woodest' ),
        'population' => 'taxonomy',
        'source'     => 'team_category',
        'desc'       => esc_attr__('Show posts by category selection.','woodest' ),
    ),
	'team_columns' => array(
		'label' => esc_attr__('Team Column Layout', 'woodest'),
		'type'  => 'select',
		'desc' => esc_attr__('Please select the team style here.', 'woodest'),
		'choices' => array(
			'col-md-6' => esc_attr__('2 Columns', 'woodest'),
			'col-md-4' => esc_attr__('3 Columns', 'woodest'),
			'col-md-3' => esc_attr__('4 Columns', 'woodest'),
		),
	),
	'team_titles' => array(
		'label' => esc_attr__('Title Fetch', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please Enter number of characters that you want to show for Team Title.', 'woodest'),
	),
	'team_fetch' => array(
		'label' => esc_attr__('Fetch Team Members', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please enter the number of team member you want to Fetch.', 'woodest'),
	),
	'team_orderby' => array(
		'label' => esc_attr__('Order By', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Select Team Order by.', 'woodest'),
		'choices' => array(
			'publish_date' => esc_attr__('Publish date', 'woodest'),
			'title' => esc_attr__('Title', 'woodest'),
			'random' => esc_attr__('Random', 'woodest'),
		),
	),
	'team_order' => array(
		'label' => esc_attr__('Team Order', 'woodest'),
		'type'  => 'select',
		'value' => array(),
		'desc' => esc_attr__('Select Team Order.', 'woodest'),
		'choices' => array(
			'descending' => esc_attr__('Descending', 'woodest'),
			'ascending' => esc_attr__('Ascending', 'woodest'),
		),
	),
	'team_pagination' => array(
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