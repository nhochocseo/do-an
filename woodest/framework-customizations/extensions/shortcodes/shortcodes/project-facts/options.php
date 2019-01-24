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
	'icon' => array(
		'label' => esc_attr__('Icon', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Please add the font awesome / SVG icon code here.', 'woodest'),
	),
	'value' => array(
		'label' => esc_attr__('Value', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Add value here.', 'woodest'),
	),
	'sub_text' => array(
		'label' => esc_attr__('Sub Text', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Add sub text of project facts here.', 'woodest'),
	),
);
