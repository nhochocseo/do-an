<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_attr__( 'Margin', 'woodest' ),
	'description' => esc_attr__( 'Add a Call to acction element', 'woodest' ),
	'tab'         => esc_attr__( 'Woodest', 'woodest' ),
	'popup_size'  => 'medium'
);