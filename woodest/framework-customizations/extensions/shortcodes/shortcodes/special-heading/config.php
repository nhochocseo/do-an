<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_attr__( 'Special Heading', 'woodest' ),
	'description' => esc_attr__( 'Add a heading element', 'woodest' ),
	'tab'         => esc_attr__( 'Woodest', 'woodest' ),
);