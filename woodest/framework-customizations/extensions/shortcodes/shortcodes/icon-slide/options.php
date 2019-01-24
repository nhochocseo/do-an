<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
	'image' => array(
		'label' => esc_attr__('Chọn ảnh', 'woodest'),
		'type'  => 'upload',
		'desc' => esc_attr__('Please select the heading style here.', 'woodest'),
	),
	'title' => array(
		'label' => esc_attr__('Title', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Add heading title here.', 'woodest'),
	),
);
