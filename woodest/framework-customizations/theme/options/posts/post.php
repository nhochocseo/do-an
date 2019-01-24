<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
	'post-box' => array(
		'title' => esc_attr__('Post Custom Fields', 'woodest'),
		'type' => 'box',
		'options' => array(
			'post-caption' => array(
				'type' => 'text',
				'label' => esc_attr__('Post Caption', 'woodest'),
				'desc' => esc_attr__('Please add post caption here.', 'woodest'),
			),
			'post-author-info' => array(
				'type'  => 'switch',
				'value' => 'enable',
				'label' => esc_attr__('Author Information', 'woodest'),
				'desc'  => esc_attr__('Enable or Disable Author Information for this post.', 'woodest'),
				'left-choice' => array(
					'value' => 'enable',
					'label' => esc_attr__('Enable', 'woodest'),
				),
				'right-choice' => array(
					'value' => 'disable',
					'label' => esc_attr__('Disable', 'woodest'),
				),
			),
			'post-settings' => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'gadget' => array(
						'label'   => esc_attr__( 'Post Format', 'woodest' ),
						'desc'   => esc_attr__( 'Select Post Format', 'woodest' ),
						'type'    => 'radio',
						'value'    => 'image',
						'choices' => array(
							'image' => esc_attr__('Image', 'woodest'),
							'gallery' => esc_attr__('Image Slider', 'woodest'),
							'video' => esc_attr__('Audio/Video', 'woodest'),
						),
						'inline' => true,
					)
				),
				'choices'      => array(
					'image'  => array(
						'post_image' => array(
							'type' => 'html',
							'html' => 'Featured Image',
							'desc' => esc_attr__('Please add featured image.', 'woodest'),
							'images_only' => true,
						),
					),
					'gallery'  => array(
						'post_post_gallery' => array(
							'type' => 'multi-upload',
							'label' => esc_attr__('Add Image Slider', 'woodest'),
							'desc' => esc_attr__('Add Image Slider for this post.', 'woodest'),
							'images_only' => true,
						),
					),
					'video'  => array(
						'post_video_link' => array(
							'type' => 'text',
							'label' => esc_attr__('Audio/Video Link', 'woodest'),
							'desc' => esc_attr__('Please add audio/video Link here.', 'woodest'),
						),
					),
				)
			),
		)
	), 
);