<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_attr__( 'Sản phẩm', 'woodest' ),
	'description' => esc_attr__( 'Thêm một sản phẩm', 'woodest' ),
	'tab'         => esc_attr__( 'Woodest', 'woodest' ),
	'popup_size'  => 'medium'
);