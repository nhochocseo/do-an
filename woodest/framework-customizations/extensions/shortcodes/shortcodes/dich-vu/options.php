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
		'label' => esc_attr__('Tiêu đề chức năng', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('Nội dung tiêu đề.', 'woodest'),
	),
	'desscription' => array(
		'label' => esc_attr__('Nội dung mô tả', 'woodest'),
		'type'  => 'textarea',
		'desc' => esc_attr__('', 'woodest'),
	),
	'title_1' => array(
		'label' => esc_attr__('Tiêu đề 1', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('', 'woodest'),
	),
	'content_1' => array(
		'label' => esc_attr__('Nội dung 1', 'woodest'),
		'type'  => 'textarea',
		'desc' => esc_attr__('', 'woodest'),
	),
	'title_2' => array(
		'label' => esc_attr__('Tiêu đề 2', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('', 'woodest'),
	),
	'content_2' => array(
		'label' => esc_attr__('Nội dung 2', 'woodest'),
		'type'  => 'textarea',
		'desc' => esc_attr__('', 'woodest'),
	),
	'title_3' => array(
		'label' => esc_attr__('Tiêu đề 3', 'woodest'),
		'type'  => 'text',
		'desc' => esc_attr__('', 'woodest'),
	),
	'content_3' => array(
		'label' => esc_attr__('Nội dung 3', 'woodest'),
		'type'  => 'textarea',
		'desc' => esc_attr__('', 'woodest'),
	),
	'image_1' => array(
		'label' => esc_attr__( 'Ảnh nền 1', 'woodest' ),
		'desc'  => esc_attr__( 'Ảnh ở vị trí bên trái', 'woodest' ),
		'type'  => 'upload',
	),
	'image_2' => array(
		'label' => esc_attr__( 'Ảnh nền 2', 'woodest' ),
		'desc'  => esc_attr__( 'Ảnh ở vị trí bên phải ở trên', 'woodest' ),
		'type'  => 'upload',
	),
	'image_3' => array(
		'label' => esc_attr__( 'Ảnh nền 3', 'woodest' ),
		'desc'  => esc_attr__( 'Ảnh ở vị trí bên phải ở dưới', 'woodest' ),
		'type'  => 'upload',
	),
	'image_4' => array(
		'label' => esc_attr__( 'Ảnh nền 4', 'woodest' ),
		'desc'  => esc_attr__( 'Ảnh ở vị trí bên ở giữa dưới cuối', 'woodest' ),
		'type'  => 'upload',
	),
	'image_5' => array(
		'label' => esc_attr__( 'Ảnh nền 5', 'woodest' ),
		'desc'  => esc_attr__( 'Ảnh ở vị trí bên ở giữa dưới cuối', 'woodest' ),
		'type'  => 'upload',
	),
	'image_6' => array(
		'label' => esc_attr__( 'Ảnh nền 6', 'woodest' ),
		'desc'  => esc_attr__( 'Ảnh ở vị trí bên trên ở giữa', 'woodest' ),
		'type'  => 'upload',
	),
	'thumb_1' => array(
		'label' => esc_attr__( 'Ảnh giới thiệu 1', 'woodest' ),
		'desc'  => esc_attr__( '', 'woodest' ),
		'type'  => 'upload',
	),
	'thumb_2' => array(
		'label' => esc_attr__( 'Ảnh giới thiệu 2', 'woodest' ),
		'desc'  => esc_attr__( '', 'woodest' ),
		'type'  => 'upload',
	),
	'thumb_3' => array(
		'label' => esc_attr__( 'Ảnh giới thiệu 3', 'woodest' ),
		'desc'  => esc_attr__( '', 'woodest' ),
		'type'  => 'upload',
	),
);
