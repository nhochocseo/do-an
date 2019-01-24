<?php 
if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'general' => array(
        'title' =>  esc_attr__('General', 'woodest'),
        'type' => 'tab',
        'options' => array(
			'general-box' => array(
				'title' =>  esc_attr__('Logo Panel', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'logo' => array(
						'label' => esc_attr__('Logo', 'woodest'),
						'desc' => esc_attr__('Upload your logo from here.', 'woodest'),
						'type' => 'upload',
					),
					'favicon' => array(
						'label' => esc_attr__('Favicon', 'woodest'),
						'desc' => esc_attr__('Upload favicon Image from here.', 'woodest'),
						'type' => 'upload',
					),
					'logo_width' => array(
						'label' => esc_attr__('Logo Width', 'woodest'),
						'type'  => 'slider',
						'properties' => array(
							'min' => 0,
							'max' => 500,
							'step' => 1, // Set slider step. Always > 0. Could be fractional.
						),
						'desc' => esc_attr__('Set logo width from here.(px)', 'woodest'),
					),
					'logo_height' => array(
						'label' => esc_attr__('Logo Height', 'woodest'),
						'type'  => 'slider',
						'properties' => array(
							'min' => 0,
							'max' => 500,
							'step' => 1, // Set slider step. Always > 0. Could be fractional.
						),
						'desc' => esc_attr__('Set logo height from here.(px)', 'woodest'),
					),
					'logo_margin_top' => array(
						'label' => esc_attr__('Logo Top Margin', 'woodest'),
						'type'  => 'slider',
						'properties' => array(
							'min' => 0,
							'max' => 500,
							'step' => 1, // Set slider step. Always > 0. Could be fractional.
						),
						'desc' => esc_attr__('Set logo Top Margin from here.(px)', 'woodest'),
					),
					'logo_margin_bottom' => array(
						'label' => esc_attr__('Logo Bottom Margin', 'woodest'),
						'type'  => 'slider',
						'properties' => array(
							'min' => 0,
							'max' => 500,
							'step' => 1, // Set slider step. Always > 0. Could be fractional.
						),
						'desc' => esc_attr__('Set logo Bottom Margin from here.(px)', 'woodest'),
					),
				),
			),
			'header-box' => array(
				'title' =>  esc_attr__('Header Settings', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'header_style' => array(
						'label' => esc_attr__('Select Header Style', 'woodest'),
						'desc'  => esc_attr__('Select Header Style from the given Options', 'woodest'),
						'type'  => 'select',
						'value' => '',
						'choices' => array(
							'' => '---',
							'header-1' => esc_attr__('Header Style 1', 'woodest'),
						),
					),
					'topbar' => array(
						'type'  => 'multi-picker',
						'label' => false,
						'desc'  => false,
						'value' => array(
							'gadget' => 'enable',
							'enable' => array(
								'email_address' => '',
								'phone_number' => '',
								'may_ban' => '',
							),
							'disable' => array(),
						),
						'picker' => array(
							'gadget' => array(
								'label' => esc_attr__('TopBar', 'woodest'),
								'type'  => 'switch',
								'left-choice' => array(
									'value' => 'enable',
									'label' => esc_attr__('Enable', 'woodest'),
								),
								'right-choice' => array(
									'value' => 'disable',
									'label' => esc_attr__('Disable', 'woodest'),
								),
								'desc' => esc_attr__('Description', 'woodest'),
							)
						),
						'choices' => array(
							'enable' => array(
								'email_address' => array(
									'label' => esc_attr__('Email Address', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add TopBar Email Address from here.', 'woodest'),
								),
								'phone_number' => array(
									'label' => esc_attr__('Số di động', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add TopBar Phone Number from here.', 'woodest'),
								),
								'may_ban' => array(
									'label' => esc_attr__('Số bàn', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add TopBar Phone Number from here.', 'woodest'),
								),
							),
							'disable' => array(),
						),
						'show_borders' => false,
					),
					'contact_info' => array(
						'type'  => 'multi-picker',
						'label' => false,
						'desc'  => false,
						'value' => array(
							'gadget' => 'enable',
							'enable' => array(
								'opening_hours' => '',
								'location' => '',
							),
							'disable' => array(),
						),
						'picker' => array(
							'gadget' => array(
								'label' => esc_attr__('Contact Information Enable/Disable', 'woodest'),
								'type'  => 'switch',
								'left-choice' => array(
									'value' => 'enable',
									'label' => esc_attr__('Enable', 'woodest'),
								),
								'right-choice' => array(
									'value' => 'disable',
									'label' => esc_attr__('Disable', 'woodest'),
								),
								'desc' => esc_attr__('Enable/Disable Contact Information from here', 'woodest'),
							)
						),
						'choices' => array(
							'enable' => array(
								'opening_hours_text' => array(
									'label' => esc_attr__('Opening Hours Text', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add Opening Hours Text from here.', 'woodest'),
								),
								'opening_hours' => array(
									'label' => esc_attr__('Opening Hours', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add Opening Hours Timing from here.', 'woodest'),
								),
								'opening_hours_icon' => array(
									'label' => esc_attr__('Opening Hours Icon Class', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add Opening Hours Icon Class from here.', 'woodest'),
								),
								'location_text' => array(
									'label' => esc_attr__('Location Text', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add Location Text from here.', 'woodest'),
								),
								'location' => array(
									'label' => esc_attr__('Location', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add Location from here.', 'woodest'),
								),
								'location_icon' => array(
									'label' => esc_attr__('Location Icon Class', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add Location Icon Class from here.', 'woodest'),
								),
							),
							'disable' => array(),
						),
						'show_borders' => false,
					),
					'sticky_header' => array(
						'type'  => 'switch',
                        'value' => 'enable',
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
                        'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
						'label' => esc_attr__('Sticky Header Enable/Disable', 'woodest'),
						'desc'  => esc_attr__('Enable/Disable Sticky Header from here', 'woodest'),
					),
					'breadcrumbs' => array(
						'type'  => 'switch',
                        'value' => 'enable',
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
                        'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
						'label' => esc_attr__('Breadcrumbs Enable/Disable', 'woodest'),
						'desc'  => esc_attr__('Enable/Disable Breadcrumbs from here', 'woodest'),
					),
				),
			),
			'footer-box' => array(
				'title' =>  esc_attr__('Footer Settings', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'footer_style' => array(
						'label' => esc_attr__('Select Footer Style', 'woodest'),
						'desc'  => esc_attr__('Select Footer Style from the given Options', 'woodest'),
						'type'  => 'select',
						'value' => '',
						'choices' => array(
							'' => '---',
							'footer-1' => esc_attr__('Footer Style 1', 'woodest'),
						),
					),
					'footer_col_layout' => array(
						'label' => esc_attr__('Select Footer Columns', 'woodest'),
						'desc'  => esc_attr__('Select Footer Column Layout from the given Options', 'woodest'),
						'type'  => 'select',
						'value' => '',
						'choices' => array(
							'' => '---',
							'col-md-4' => esc_attr__('3 Columns', 'woodest'),
							'col-md-3' => esc_attr__('4 Columns', 'woodest'),
						),
					),
					'copyright_option' => array(
						'type'  => 'multi-picker',
						'label' => false,
						'desc'  => false,
						'value' => array(
							'gadget' => 'enable',
							'enable' => array(
								'copyright_text' => '',
							),
							'disable' => array(),
						),
						'picker' => array(
							'gadget' => array(
								'label' => esc_attr__('Copyrights Enable/Disable', 'woodest'),
								'type'  => 'switch',
								'left-choice' => array(
									'value' => 'enable',
									'label' => esc_attr__('Enable', 'woodest'),
								),
								'right-choice' => array(
									'value' => 'disable',
									'label' => esc_attr__('Disable', 'woodest'),
								),
								'desc'  => esc_attr__('Enable/Disable Copy Rights from here', 'woodest'),
							)
						),
						'choices' => array(
							'enable' => array(
								'copyright_text' => array(
									'label' => esc_attr__('Copyright Text', 'woodest'),
									'type'  => 'text',
									'value' => '',
									'desc' => esc_attr__('Add Copyright Text from here.', 'woodest'),
								),
							),
							'disable' => array(),
						),
						'show_borders' => false,
					),
				),
			),
			'subheader-box' => array(
				'title' =>  esc_attr__('Sub Header Settings', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'page_theme_option_background_img' => array(
						'label' => esc_attr__('Default Page Subheader Background Image', 'woodest'),
						'desc' => esc_attr__('Upload Default Page Subheader Background Image from here.', 'woodest'),
						'type' => 'upload',
					),
					'post_theme_option_background_img' => array(
						'label' => esc_attr__('Default All Posts Subheader Background Image', 'woodest'),
						'desc' => esc_attr__('Upload Default All Posts Detail Page Subheader Background Image from here.', 'woodest'),
						'type' => 'upload',
					),
					'search_theme_option_background_img' => array(
						'label' => esc_attr__('Default Search/Archive Subheader Background Image', 'woodest'),
						'desc' => esc_attr__('Upload Default Search/Archive Subheader Background Image from here.', 'woodest'),
						'type' => 'upload',
					),
					'error_theme_option_background_img' => array(
						'label' => esc_attr__('Default 404 Page Subheader Background Image', 'woodest'),
						'desc' => esc_attr__('Upload Default 404 Page Subheader Background Image from here.', 'woodest'),
						'type' => 'upload',
					),
				),
			),
			'layoutmanage-box' => array(
				'title' =>  esc_attr__('Layout Management', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'website_layout' => array(
						'label' => esc_attr__('Website Layout', 'woodest'),
						'desc'  => esc_attr__('Select Website Layout from the given Options', 'woodest'),
						'type'  => 'select',
						'value' => '',
						'choices' => array(
							'' => '---',
							'full-style' => esc_attr__('Full Style', 'woodest'),
							'boxed-style' => esc_attr__('Boxed Style', 'woodest'),
						),
					),
					'body_background_color' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Body Background Color', 'woodest'),
						'desc'  => esc_attr__('Select Body Background Color', 'woodest'),
					),
				),
			),
		)
    ),
	'color-scheme' => array(
        'title' =>  esc_attr__('Color Scheme', 'woodest'),
        'type' => 'tab',
        'options' => array(
			'colormanage-box' => array(
				'title' =>  esc_attr__('Color Management', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'main_color_scheme' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Main ColorScheme', 'woodest'),
						'desc'  => esc_attr__('Select Main Color Scheme Color', 'woodest'),
					),
				),
			),
			'navigation-box' => array(
				'title' =>  esc_attr__('Navigation Styling', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'nav_text_color' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Navigation Text Color', 'woodest'),
						'desc'  => esc_attr__('This Color Picker allows you to change the navigation text color.', 'woodest'),
					),
					'nav_text_hover_bg' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Navigation Text Hover BG', 'woodest'),
						'desc'  => esc_attr__('This Color Picker allows you to change the navigation Hover BG color.', 'woodest'),
					),
					'nav_text_hover_color' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Navigation Text Hover Color', 'woodest'),
						'desc'  => esc_attr__('This Color Picker allows you to change the navigation text Hover color.', 'woodest'),
					),
					'nav_dropdown_bg' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Navigation DropDown BG', 'woodest'),
						'desc'  => esc_attr__('This Color Picker allows you to change the navigation dropdown BG color.', 'woodest'),
					),
					'nav_dropdown_text_color' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Navigation DropDown Text Color', 'woodest'),
						'desc'  => esc_attr__('This Color Picker allows you to change the navigation Dropdown text color.', 'woodest'),
					),
					'nav_dropdown_text_hover' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Navigation DropDown Text Hover', 'woodest'),
						'desc'  => esc_attr__('This Color Picker allows you to change the navigation dropdown Hover Text color.', 'woodest'),
					),
					'nav_dropdown_hover_bg' => array(
						'type'  => 'color-picker',
						'value' => '',
						'label' => esc_attr__('Navigation DropDown on Hover Background', 'woodest'),
						'desc'  => esc_attr__('This Color Picker allows you to change the navigation dropdown Hover BG color.', 'woodest'),
					),
				),
			),
		)
    ),
	'blog-settings' => array(
        'title' =>  esc_attr__('Blog', 'woodest'),
        'type' => 'tab',
        'options' => array(
			'post-detail-single' => array(
				'title' =>  esc_attr__('Post Detail Page Setting', 'woodest'),
				'type'  => 'box',
				'options' => array(
					'post_detail_feature_image' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Feature Image', 'woodest'),
						'desc'  => esc_attr__( 'If you do not want to set a featured image (in case of sound post type : Audio player, in case of video post type : Video Player) kindly disable it here.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_detail' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Date', 'woodest'),
						'desc'  => esc_attr__( 'Using this option you can show/hide extra information about the blog or post, Date.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_author' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Author', 'woodest'),
						'desc'  => esc_attr__( 'You can enable or disable the about author box from here.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_comment' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Comments', 'woodest'),
						'desc'  => esc_attr__( 'Using this option you can show/hide extra information about the blog or post, Comments.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_meta' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Meta', 'woodest'),
						'desc'  => esc_attr__( 'Using this option you can show/hide extra information about the blog or post Meta Information.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_category' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Category', 'woodest'),
						'desc'  => esc_attr__( 'Using this option you can show/hide extra information about the blog or post, Category.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_next_prev_btn' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Next / Previous Button', 'woodest'),
						'desc'  => esc_attr__( 'Using this option you can turn on/off the navigation arrows when viewing the blog single page.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_post_btn' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Recommended Post Button', 'woodest'),
						'desc'  => esc_attr__( 'Using this option you can turn on/off the Recommended Posts on the blog single page.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'post_detail_post_btn' => array(
						'type'  => 'switch',
                        'value' => 'enable',
						'label' => esc_attr__('Post Detail Recommended Post Button', 'woodest'),
						'desc'  => esc_attr__( 'Using this option you can turn on/off the Recommended Posts on the blog single page.', 'woodest' ),
                        'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
				),
			),
		)
    ),
	'social-settings' => array(
        'title' =>  esc_attr__('Social', 'woodest'),
        'type' => 'tab',
        'options' => array(
			'social-box' => array(
				'title' =>  esc_attr__('Social Profiles', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'facebook_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Facebook Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'gplus_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Google Plus Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'linkedin_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Linkedin Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'pinterest_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Pinterest Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'skype_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Skype Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'twitter_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Twitter Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'vimeo_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Vimeo Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'youtube_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Youtube Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
					'instagram_social' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_attr__('Instagram Social', 'woodest'),
						'desc'  => esc_attr__('Enter URL of your social profile here.', 'woodest'),
					),
				),
			),
			'social-shares-box' => array(
				'title' =>  esc_attr__('Social Shares', 'woodest'),
				'type' => 'tab',
				'options' => array(
					'enable_social_share' => array(
						'type'  => 'switch',
						'value' => 'disable',
						'label' => esc_attr__('Enable Social Share', 'woodest'),
						'desc'  => esc_attr__('Enable this option to show the social shares below each post', 'woodest'),
						'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'enable_facebook' => array(
						'type'  => 'switch',
						'value' => 'enable',
						'label' => esc_attr__('Facebook', 'woodest'),
						'desc'  => esc_attr__('Enable this option to show the social Icon under post.', 'woodest'),
						'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'enable_gplus' => array(
						'type'  => 'switch',
						'value' => 'enable',
						'label' => esc_attr__('Google Plus', 'woodest'),
						'desc'  => esc_attr__('Enable this option to show the social Icon under post.', 'woodest'),
						'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'enable_linkedin' => array(
						'type'  => 'switch',
						'value' => 'enable',
						'label' => esc_attr__('Linkedin', 'woodest'),
						'desc'  => esc_attr__('Enable this option to show the social Icon under post.', 'woodest'),
						'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'enable_pinterest' => array(
						'type'  => 'switch',
						'value' => 'enable',
						'label' => esc_attr__('Pinterest', 'woodest'),
						'desc'  => esc_attr__('Enable this option to show the social Icon under post.', 'woodest'),
						'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
					'enable_twitter' => array(
						'type'  => 'switch',
						'value' => 'enable',
						'label' => esc_attr__('Twitter', 'woodest'),
						'desc'  => esc_attr__('Enable this option to show the social Icon under post.', 'woodest'),
						'left-choice' => array(
                            'value' => 'enable',
                            'label' => esc_attr__('Enable', 'woodest'),
                        ),
						'right-choice' => array(
                            'value' => 'disable',
                            'label' => esc_attr__('Disable', 'woodest'),
                        ),
					),
				),
			),
		)
    ),
	'typo' => array(
        'title'   => esc_attr__( 'Typography', 'woodest' ),
        'type'    => 'tab',
        'options' => array(
            'typo-box' => array(
                'title'   => esc_attr__( 'Typography Settings', 'woodest' ),
                'type'    => 'box',
                'options' => array(
                    'body_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                            'family' => '',
                            'size' => '',
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true,
                        ),
                        'label' => esc_attr__('Regular Font', 'woodest'),
                        'desc'  => esc_attr__('Default Font for body p ul li', 'woodest'),
                    ),
                    'h1_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                            'family' => '',
                            'size' => ''
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true,
                        ),
                        'label' => esc_attr__('H1 Heading', 'woodest'),
                        'desc'  => esc_attr__('Choose Your H1 Heading font-family, font-size, color, font-weight.', 'woodest'),
                    ),
                    'h2_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                            'family' => '',
                            'size' => ''
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true
                        ),
                        'label' => esc_attr__('H2 Heading', 'woodest'),
                        'desc'  => esc_attr__('Choose Your H2 Heading font-family, font-size, color, font-weight.', 'woodest'),
                    ),
                    'h3_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                            'family' => '',
                            'size' => ''
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true
                        ),
                        'label' => esc_attr__('H3 Heading', 'woodest'),
                        'desc'  => esc_attr__('Choose Your H3 Heading font-family, font-size, color, font-weight.', 'woodest'),
                    ),
                    'h4_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                            'family' => '',
                            'size' => ''
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true
                        ),
                        'label' => esc_attr__('H4 Heading', 'woodest'),
                        'desc'  => esc_attr__('Choose Your H4 Heading font-family, font-size, color, font-weight.', 'woodest'),
                    ),
                    'h5_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                           'family' => '',
                            'size' => ''
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true
                        ),
                        'label' => esc_attr__('H5 Heading', 'woodest'),
                        'desc'  => esc_attr__('Choose Your H5 Heading font-family, font-size, color, font-weight.', 'woodest'),
                    ),
                    'h6_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                            'family' => '',
                            'size' => ''
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true
                        ),
                        'label' => esc_attr__('H6 Heading', 'woodest'),
                        'desc'  => esc_attr__('Choose Your H6 Heading font-family, font-size, color, font-weight.', 'woodest'),
                    ),
					'nav_font' => array(
                        'type'  => 'typography',
                        'value' => array(
                            'family' => '',
                            'size' => ''
                        ),
                        'components' => array(
                            'family' => true,
                            'size'   => true
                        ),
                        'label' => esc_attr__('Navigation Font', 'woodest'),
                        'desc'  => esc_attr__('Default Font for navigation', 'woodest'),
                    ),
                )
            ),
        ),
    ),
	'api_settings' => array(
        'type' => 'tab',
        'title' => esc_attr__('Api Settings', 'woodest'),
        'options' => array(
			'mailchimp' => array(
                'title' => esc_attr__('Mail Chimp', 'woodest'),
                'type' => 'tab',
                'options' => array(
                    'mail-chimp-api' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_attr__('MailChimp Api', 'woodest'),
                        'desc' => esc_attr__('Enter your MailChimp Key Here.', 'woodest'),
                    ),
                    'mail-chimp-listid' => array(
                        'type' => 'text',
                        'label' => esc_attr__('MailChimp List ID', 'woodest'),
                        'value' => '',
                    )
                )
            ),
			'google' => array(
                'title' => esc_attr__('Google', 'woodest'),
                'type' => 'tab',
                'options' => array(
                    'google_key' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_attr__('Google Map Key', 'woodest'),
						'desc' => wp_kses( esc_attr__( 'Enter google map key here. It will be used for google maps. Get and Api key From <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank"> Get API KEY </a>', 'woodest' ),array(
							'a' => array(
								'href' => array(),
								'title' => array()
							),
							'br' => array(),
							'em' => array(),
							'strong' => array(),
						)),
                    ),
                )
            ),
        ),
    ),
);