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
	'title' => array(
		'label' => esc_attr__('Tiêu đề', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Tiêu đề giới thiệu.', 'woodest'),
	),
	'description' => array(
		'label' => esc_attr__('Giới thiệu', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Mô tả giới thiêu chung', 'woodest'),
	),
	'hotline' => array(
		'label' => esc_attr__('Số điện thoại', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Nhập danh sách số điện thoại liên hệ', 'woodest'),
	),
	'email' => array(
		'label' => esc_attr__('Email', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Địa chỉ email', 'woodest'),
	),
	'image_left' => array(
		'label' => esc_attr__('Ảnh bên trái', 'woodest'),
		'type'  => 'upload',
		'desc' => esc_attr__('Chọn ảnh hiển thị bên trái', 'woodest'),
	),
	'image_right' => array(
		'label' => esc_attr__('Ảnh bên phải', 'woodest'),
		'type'  => 'upload',
		'desc' => esc_attr__('Chọn ảnh hiển thị bên trái', 'woodest'),
	),
);
