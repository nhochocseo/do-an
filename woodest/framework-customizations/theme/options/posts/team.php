<?php 
if (!defined( 'FW' )) die('Forbidden');

$options = array(
	'team-box' => array(
		'title'   => esc_attr__( 'Team Custom Fields', 'woodest' ),
		'type'    => 'box',
		'options' => array(
			'team-caption'    => array(
				'label' => esc_attr__( 'Post Caption', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Caption for the post here.', 'woodest' ),
				'type'  => 'text'
			),
			'team-header-bg-image' => array(
				'label' => esc_attr__( 'Header Background Image', 'woodest' ),
				'desc'  => esc_attr__( 'Click here to Upload the Header Background Image.', 'woodest' ),
				'type'  => 'upload'
			),
			'designation'    => array(
				'label' => esc_attr__( 'Designation', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Designation of team member here.', 'woodest' ),
				'type'  => 'text'
			),
			'facebook-profile-link' => array(
				'label' => esc_attr__( 'Facebook Profile Link', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Facebook Profile URL here.', 'woodest' ),
				'type'  => 'text'
			),
			'twitter-profile-link' => array(
				'label' => esc_attr__( 'Twitter Profile Link', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Twitter Profile URL here.', 'woodest' ),
				'type'  => 'text'
			),
			'gplus-profile-link' => array(
				'label' => esc_attr__( 'Goofle plus Profile Link', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Google PLus Profile URL here.', 'woodest' ),
				'type'  => 'text'
			),
			'linkedin-profile-link' => array(
				'label' => esc_attr__( 'Linkedin Profile Link', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the linkedin Profile URL here.', 'woodest' ),
				'type'  => 'text'
			),
			'instagram-profile-link' => array(
				'label' => esc_attr__( 'Instagram Profile Link', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the Instagram Profile URL here.', 'woodest' ),
				'type'  => 'text'
			),
			'dribbble-profile-link' => array(
				'label' => esc_attr__( 'Dribbble Profile Link', 'woodest' ),
				'desc'  => esc_attr__( 'Please enter the dribbble Profile URL here.', 'woodest' ),
				'type'  => 'text'
			),
		),
	),
);