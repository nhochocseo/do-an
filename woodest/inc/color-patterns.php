<?php
/**
 * Award Themes: Color Schemes
 *
 * @package WordPress
 * @subpackage Woodest
 * @since 1.0
 */

/**
 * Generate the CSS for the current custom color scheme.
 */
	if(function_exists('fw_get_db_settings_option')){
		
		if (!function_exists('awardthemes_google_font_arrays')) {
			function awardthemes_google_font_arrays($awardthemes_google_font) {
				$fonts_url = '';
				/**
				 * Get remote fonts
				 * @param array $awardthemes_google_font
				 */
				if ( ! sizeof( $awardthemes_google_font ) ) {
					return '';
				}

				$font_families	= array();
				foreach ( $awardthemes_google_font as $font_family ) {
					
					$variants_string = implode( ',', $font_family['variants'] );
					
					$font_families[] = $font_family['family'].':'.$variants_string	;
				}
				
				$query_args = array(
					'family' => urlencode( implode( '|', $font_families ) ),
					'subset' => '',
				);

				$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
				
				return esc_url_raw( $fonts_url );
			}
		}
			
		$dynamic_color_css = '';
		
		$logo_width = fw_get_db_settings_option('logo_width');
		$logo_height = fw_get_db_settings_option('logo_height');
		$logo_margin_top = fw_get_db_settings_option('logo_margin_top');
		$logo_margin_bottom = fw_get_db_settings_option('logo_margin_bottom');
		$body_background_color = fw_get_db_settings_option('body_background_color');
		$nav_text_color = fw_get_db_settings_option('nav_text_color');
		$nav_text_hover_bg = fw_get_db_settings_option('nav_text_hover_bg');
		$nav_text_hover_color = fw_get_db_settings_option('nav_text_hover_color');
		$nav_dropdown_bg = fw_get_db_settings_option('nav_dropdown_bg');
		$nav_dropdown_text_color = fw_get_db_settings_option('nav_dropdown_text_color');
		$nav_dropdown_text_hover = fw_get_db_settings_option('nav_dropdown_text_hover');
		$nav_dropdown_hover_bg = fw_get_db_settings_option('nav_dropdown_hover_bg');
		$body_font = fw_get_db_settings_option('body_font');
		$h1_font = fw_get_db_settings_option('h1_font');
		$h2_font = fw_get_db_settings_option('h2_font');
		$h3_font = fw_get_db_settings_option('h3_font');
		$h4_font = fw_get_db_settings_option('h4_font');
		$h5_font = fw_get_db_settings_option('h5_font');
		$h6_font = fw_get_db_settings_option('h6_font');
		$nav_font = fw_get_db_settings_option('nav_font');
		$main_color_scheme = fw_get_db_settings_option('main_color_scheme');
		
		if(isset($logo_width) && $logo_width <> ''){
			$dynamic_color_css .= 'a.logo img{width:'.esc_attr($logo_width) .'px;}';
		}
		
		if(isset($logo_height) && $logo_height <> ''){
			$dynamic_color_css .= 'a.logo img{height:'.esc_attr($logo_height) .'px;}';	
		}			
					
		if(isset($logo_margin_top) && $logo_margin_top <> ''){
			$dynamic_color_css .= 'a.logo img{margin-top:'.esc_attr($logo_margin_top) .'px;}';	
		}
		
		if(isset($logo_margin_bottom) && $logo_margin_bottom <> ''){
			$dynamic_color_css .= 'a.logo img{margin-bottom:'.esc_attr($logo_margin_bottom) .'px;}';	
		}	
		if(isset($body_background_color) && $body_background_color <> ''){
			$dynamic_color_css .= 'body{background-color:'.esc_attr($body_background_color) .';}';	
		}
		
		if(isset($nav_text_color) && $nav_text_color <> ''){
			$dynamic_color_css .= '.ow-navigation .nav.navbar-nav li > a{color:'.esc_attr($nav_text_color) .';}';	
		}
		
		if(isset($nav_text_hover_bg) && $nav_text_hover_bg <> ''){
			$dynamic_color_css .= '.ow-navigation .nav.navbar-nav > li:hover > a,.ow-navigation .nav.navbar-nav > li.current-menu-item > a{background-color:'.esc_attr($nav_text_hover_bg) .';}';	
		}
		
		if(isset($nav_text_hover_color) && $nav_text_hover_color <> ''){
			$dynamic_color_css .= '.ow-navigation .nav.navbar-nav li > a:hover,.ow-navigation .nav.navbar-nav li.current-menu-item > a{color:'.esc_attr($nav_text_hover_color) .';}';	
		}
		
		if(isset($nav_dropdown_bg) && $nav_dropdown_bg <> ''){
			$dynamic_color_css .= '.ow-navigation ul li > .sub-menu{background-color:'.esc_attr($nav_dropdown_bg) .';}';	
		}
		
		if(isset($nav_dropdown_text_color) && $nav_dropdown_text_color <> ''){
			$dynamic_color_css .= '.ow-navigation .nav.navbar-nav .sub-menu li > a{color:'.esc_attr($nav_dropdown_text_color) .';}';	
		}
		
		if(isset($nav_dropdown_text_hover) && $nav_dropdown_text_hover <> ''){
			$dynamic_color_css .= '.ow-navigation .nav.navbar-nav .sub-menu li > a:hover{color:'.esc_attr($nav_dropdown_text_hover) .';}';	
		}
		
		if(isset($nav_dropdown_hover_bg) && $nav_dropdown_hover_bg <> ''){
			$dynamic_color_css .= '.ow-navigation .sub-menu>li>a:hover{background-color:'.esc_attr($nav_dropdown_hover_bg) .';}';	
		}
		
		if(isset($body_font['family']) && $body_font['family'] <> ''){
			$dynamic_color_css .= 'body, p,ul,li{font-family:'.esc_attr($body_font['family']) .';}';	
		}
		
		if(isset($body_font['size']) && $body_font['size'] <> ''){
			$dynamic_color_css .= 'body p , p{font-size:'.esc_attr($body_font['size']) .'px;}';	
		}
		
		if(isset($h1_font['family']) && $h1_font['family'] <> ''){
			$dynamic_color_css .= 'body h1, h1{font-family:'.esc_attr($h1_font['family']) .';}';	
		}
		
		if(isset($h1_font['size']) && $h1_font['size'] <> ''){
			$dynamic_color_css .= 'body h1, h1{font-size:'.esc_attr($h1_font['size']) .'px;}';	
		}
		
		if(isset($h2_font['family']) && $h2_font['family'] <> ''){
			$dynamic_color_css .= 'body h2, h2{font-family:'.esc_attr($h2_font['family']) .';}';	
		}
		
		if(isset($h2_font['size']) && $h2_font['size'] <> ''){
			$dynamic_color_css .= 'body h2, h2{font-size:'.esc_attr($h2_font['size']) .'px;}';	
		}
		
		if(isset($h3_font['family']) && $h3_font['family'] <> ''){
			$dynamic_color_css .= 'body h3, h3{font-family:'.esc_attr($h3_font['family']) .';}';	
		}
		
		if(isset($h3_font['size']) && $h3_font['size'] <> ''){
			$dynamic_color_css .= 'body h3, h3{font-size:'.esc_attr($h3_font['size']) .'px;}';	
		}
		
		if(isset($h4_font['family']) && $h4_font['family'] <> ''){
			$dynamic_color_css .= 'body h4, h4{font-family:'.esc_attr($h4_font['family']) .';}';	
		}
		
		if(isset($h4_font['size']) && $h4_font['size'] <> ''){
			$dynamic_color_css .= 'body h4, h4{font-size:'.esc_attr($h4_font['size']) .'px;}';	
		}	

		if(isset($h5_font['family']) && $h5_font['family'] <> ''){
			$dynamic_color_css .= 'body h5, h5{font-family:'.esc_attr($h5_font['family']) .';}';	
		}
		
		if(isset($h5_font['size']) && $h5_font['size'] <> ''){
			$dynamic_color_css .= 'body h5, h5{font-size:'.esc_attr($h5_font['size']) .'px;}';	
		}	

		if(isset($h6_font['family']) && $h6_font['family'] <> ''){
			$dynamic_color_css .= 'body h6, h6{font-family:'.esc_attr($h6_font['family']) .';}';	
		}
		
		if(isset($h6_font['size']) && $h6_font['size'] <> ''){
			$dynamic_color_css .= 'body h6, h6{font-size:'.esc_attr($h6_font['size']) .'px;}';	
		}
		
		if(isset($nav_font['family']) && $nav_font['family'] <> ''){
			$dynamic_color_css .= '.ow-navigation .nav.navbar-nav li > a{font-family:'.esc_attr($nav_font['family']) .';}';	
		}
		
		if(isset($nav_font['size']) && $nav_font['size'] <> ''){
			$dynamic_color_css .= '.ow-navigation .nav.navbar-nav li > a{font-size:'.esc_attr($nav_font['size']) .'px;}';	
		}
		
		if(isset($main_color_scheme) && $main_color_scheme <> ''){
			$dynamic_color_css .= '
			/* Test Unit Default Classes */
			a.rsswidget:hover,
			.widget_meta li:hover > a,
			.recentcomments a:hover,
			.widget_recent_entries li a:hover,
			.widget_text ul li:hover p,
			.widget_text ul li:hover i,
			.mill_recent:hover .overflow_text h6 a,
			.widget_pages li a:hover,
			.mill-user-comment-content p.edit-link:hover a,
			p.logged-in-as a:hover,
			.widget_categories li:hover,.widget_categories li:hover > a,
			.widget_text .contact_list li:hover p, 
			.widget_text .contact_list li:hover i,	
			.widget_text .contact_list li i, 
			.tags li a:hover,
			span.wpcf7-not-valid-tip,
			#breadcrumbs > li a:hover, 
			.widget_nav_menu li a:hover, 
			.widget_archive ul li a:hover,
			.widget_categories ul li a:hover,
			.sidebar-archives ul li a:hover, .sidebar-posts .title:hover,
			.sidebar-categories ul li a:hover,
			/* Woocommerce Default Classes */
			.woocommerce.mill-widget.widget_product_categories ul li a:hover,
			.woocommerce.mill-widget.widget_products a:hover,
			.woocommerce ul.products li.product .price, 
			.woocommerce p.stars a, 
			.woocommerce a.remove, 
			.woocommerce-info .showcoupon,
			.woocommerce-MyAccount-content p a,
			.woocommerce-message::before, 
			.product_meta a:hover,
			.woocommerce div.product p.price, 
			.woocommerce div.product span.price, 
			.woocommerce .woocommerce-info::before,
			/* Theme Colors Classes */
			#cancel-comment-reply-link:hover,
			.logged-in-as a:hover,
			.social-menu .menu li a:hover,
			.top-header .info_topbar:hover,
			.footer-section .footer-callout h4 span b,
			.footer-section .footer-callout a:hover ,
			.widget_contact .info-box a:hover ,
			.widget_links ul li a:hover ,
			.widget_subscribe .form-group input[type="submit"]:hover ,
			.ow-navigation .dropdown-menu > li:hover > a.btn-default,
			.ow-navigation .dropdown-menu > li:focus > a.btn-default,
			.ow-navigation .dropdown-menu > li > a.btn-default:hover,
			.ow-navigation .dropdown-menu > li > a.btn-default:focus,
			.ow-navigation .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
			.ow-navigation .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus,
			.slider-section .item .carousel-caption a:hover,
			.welcome-hover > a:hover,
			.call-out-section a:hover,
			.call-out-section2 a:hover,
			.testimonial-section2 .testimonial-box .author-box h4 span,
			.counter-detail h4 span,
			.type-post .entry-content .entry-title a:hover,
			.type-post .entry-content > a:hover,
			.entry-meta div,
			.entry-meta div a,
			.widget-area .widget_categories li a:hover,
			.widget-area .widget_categories li:hover span,
			.widget_posts .latest-content a:hover,
			.post-social ul li a:hover,
			.tm-four-0-four h1,
			.tm-four-0-four h2,
			.tm-product-box:hover .product-title a,
			.post-nav .prev .mill-prev>a:hover,
			.post-nav .next .mill-next>a:hover,
			.blog-single .about-author ul li a:hover,
			.widget_posts .latest-content span,
			.tags-inline a:hover,
			.post-comments .media-body  span,
			.contact-form  input[type="submit"]:hover,
			.portfolio-categories button,
			.why-choose-box i,
			.why-choose-box h6,
			.type-post .entry-content .entry-title a,
			.type-post .entry-content > a,
			.related-post h5,
			.comment-form h3,
			.comment-form input[type="submit"]:hover,
			.project-content h3{
				color: '. esc_attr($main_color_scheme) .' !important;
			}';
		
			$dynamic_color_css .= '
			/* Test Unit Default Classes */
			thead tr,
			.footer-section tr td:hover
			.tag-sticky-2 .blog-info-feature,
			.page-links a span:hover,
			.sticky:after,
			.footer-section .twitter-feeds ul li .icon-twitter-logo,
			.footer-section .twitter-feeds ul li a:hover,
			.eco_pagination_1 .current,
			.post-password-form input[type="submit"],
			.tm-pagination .page-numbers.current,
			.tm-pagination ul li a:hover,
			.tagcloud a:hover, 
			.form-submit input[type="submit"],
			.page-links a:hover span, 
			.sticky .blog-info-feature,
			/* Woocommerce Default Classes */
			.widget_product_search form input[type="submit"],
			.woocommerce div.product form.cart .button,
			.woocommerce-content ul.products li .added_to_cart,
			.woocommerce #review_form #respond .form-submit input:hover,
			.woocommerce span.onsale,
			.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button,
			.woocommerce .woocommerce-message .button:hover,
			.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
			.woocommerce ul.products li.product .button,
			.woocommerce .cart .button, .woocommerce .cart input.button,
			.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
			.shop_table.shop_table_responsive.cart thead tr,
			.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
			.woocommerce ul.products li.product span.onsale,
			.woocommerce ul.products li.product .button,
			.woocommerce span.onsale,
			.shop_table thead tr th,
			.woocommerce .cart .button,
			.woocommerce .cart input.button,
			.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
			.woocommerce-Button.button,
			.woocommerce ul.products li .button:hover,
			.button.alt,
			.woocommerce-content ul.products li .added_to_cart,
			.woocommerce-checkout #payment div.payment_box,
			.woocommerce-MyAccount-content  fieldset legend:before,
			.woocommerce-account .mill-title > h2:before,
			.cart_totals > h2:before,
			.woocommerce-cart .mill-title h2:before,
			.woocommerce span.onsale,
			.related.products h2:before,
			.woocommerce-Tabs-panel h2::before,
			.woocommerce div.product .product_title::before,
			.woocommerce-MyAccount-content  fieldset legend:after,
			.woocommerce-account .mill-title > h2:after,
			.cart_totals > h2:after,
			.woocommerce-cart .mill-title h2:after,
			.woocommerce-Tabs-panel h2::after,
			.woocommerce div.product .product_title::after,
			.woocommerce-Reviews #reply-title a,
			.woocommerce div.product form.cart .button,
			.woocommerce-MyAccount-navigation ul li.is-active a,
			.woocommerce-MyAccount-navigation ul li:hover a,
			.woocommerce a.remove:hover,
			a.added_to_cart.wc-forward,
			.woocommerce #respond input#submit, 
			.woocommerce a.button, 
			.woocommerce button.button, 
			.woocommerce input.button,
			/* Theme Default Classes */
			.middle-header .header-content .header-cnt-box i,
			.footer-section .footer-callout a ,
			.ftr-widget .widget-title::before ,
			.widget_subscribe .form-group input[type="submit"],
			.ow-pagination .pagination > li a:hover,
			.ow-pagination .pagination > li a:focus ,
			.welcome-section .welcome-box i,
			.bg-nav ,
			.header-section.navbar-fixed-top ,
			.ow-navigation ul li > .dropdown-menu ,
			.navbar-default .navbar-toggle:focus, 
			.navbar-default .navbar-toggle:hover,
			.navbar-fixed-top .ow-navigation .navbar-toggle .icon-bar,
			.ow-navigation .navbar-toggle .icon-bar,
			.navbar-fixed-top .ow-navigation .navbar-toggle:focus,
			.navbar-fixed-top .ow-navigation .navbar-toggle:hover,
			.ow-navigation .navbar-default .navbar-toggle:focus, 
			.ow-navigation .navbar-default .navbar-toggle:hover,
			.ow-navigation .navbar-toggle:hover ,
			.slider-section .item .carousel-caption h3::before ,
			.slider-section .item .carousel-caption a ,
			.slider-section .carousel-indicators li.active::before,
			.slider-section .carousel-indicators li:hover::before ,
			.welcome-section .welcome-box i ,
			.welcome-section2 .welcome-box i ,
			.srv-box i ,
			.srv-box .srv-box-hover a ,
			.srv-tabs .nav-tabs > li > a:focus, 
			.srv-tabs .nav-tabs > li > a:hover,
			.srv-tabs .nav-tabs > li.active > a, 
			.srv-tabs .nav-tabs > li.active > a:focus, 
			.srv-tabs .nav-tabs > li.active > a:hover,
			.portfolio-3-column .portfolio-categories li a:hover,
			.portfolio-3-column .portfolio-categories li a.active,
			.portfolio-box .links a:hover,
			.call-out-section a,
			.call-out-section2 a,
			.testimonial-carousel2.owl-theme .owl-dots .owl-dot.active,
			.testimonial-section2 .testimonial-box .author-box i,
			.counter-section .contact-form ,
			.team-box .team-img ul,
			.type-post .entry-content .post-date,
			.widget-title::before,
			.widget_tags .tags > a:hover,
			.comment-form  input[type="submit"],
			.client-section,
			.red-btn,
			.btn-blue,
			#good-comment .comment-edit-link,
			#good-comment .comment-reply-link,
			.ow-navigation,
			.contact-info i,
			.contact-form  input[type="submit"],
			.project-detail-box h3::before,
			.ow-navigation ul li > .dropdown-menu, 
			.welcome-section2 .welcome-box::before, 
			.srv-box::before, 
			.portfolio-box::before, 
			.tm-product-box .product-image:before,
			.featured-image .post-like a{
				background-color: '. esc_attr($main_color_scheme) .' !important; 
			}
			.welcome-section2 .welcome-box::before,
			.srv-box::before, 
			.portfolio-box::before, 
			.tm-product-box .product-image:before{
				opacity:0.92;
			}
			.footer-bottom .nav.navbar-nav > li:hover > a, 
			.footer-bottom .nav.navbar-nav > li:focus > a, 
			.footer-bottom .nav.navbar-nav > li > a:hover{
				color:#fff !important;
			}';
			
			$dynamic_color_css .= '
			/* Test Unit Default Classes */
			.form-control:focus,
			input[type="date"]:focus,
			#good-comment.form-control:focus,
			.good_side_tags ul li a:hover, 
			.good_pagination ul li.active a,
			.good_pagination ul li a:hover,
			.tags-cloud ul li a:hover,
			/* Woocommerce Default Classes */
			.woocommerce input[type="tel"]:focus,
			.woocommerce input[type="email"]:focus,
			.woocommerce-MyAccount-navigation ul li:hover a,
			.woocommerce-message,
			.woocommerce input[type="text"]:focus,
			.woocommerce #review_form #respond .form-submit input:hover,
			.white-login-form.mill_login_social-account .login_registor-style span,
			.white-login-form input[type="checkbox"]:checked ~ span,
			.white-login-form input[type="checkbox"]:checked ~ span::before,
			.woocommerce form .form-row.woocommerce-invalid .select2-container, 
			.woocommerce form .form-row.woocommerce-invalid input.input-text, 
			.woocommerce form .form-row.woocommerce-invalid select,
			.woocommerce-MyAccount-navigation ul li.is-active a,
			.woocommerce form .form-row.woocommerce-validated .select2-container,
			.woocommerce form .form-row.woocommerce-validated input.input-text,
			.woocommerce form .form-row.woocommerce-validated select,
			/* Theme Default Classes */
			.ow-pagination .pagination > li a:hover,
			.ow-pagination .pagination > li a:focus,
			.slider-section .carousel-indicators li.active,
			.slider-section .carousel-indicators li:hover ,
			.welcome-section .welcome-content::before ,
			.srv-box .srv-box-hover a ,
			.srv-tabs .nav li a ,
			.portfolio-categories li a.active,
			.portfolio-categories li a:hover,
			.portfolio-3-column .portfolio-categories li a:hover,
			.portfolio-3-column .portfolio-categories li a.active,
			.portfolio-box .links a:hover,
			.call-out-section2 a,
			.why-choose-box i ,
			.testimonial-carousel2.owl-theme .owl-dots .owl-dot.active,
			.team-box .team-img::before,
			.post-social ul li a:hover,
			.widget_tags .tags > a:hover,
			.four-o-four-text.borderright,
			.blog-single .about-author ul li a:hover,
			.comment-form  input[type="submit"],
			.contact-form  input[type="submit"],
			.portfolio-categories button.is-checked,
			.portfolio-categories button:hover{
				border-color: '. esc_attr($main_color_scheme) . ' !important;  
			}';
		}
		wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
		wp_add_inline_style( 'awardthemes-inline-style', $dynamic_color_css);
		
		$awardthemes_google_font = array();
		$fw_google_fonts = fw_get_google_fonts();
		if( !empty($body_font['family']) && isset($fw_google_fonts[$body_font['family']] ) ){
			$awardthemes_google_font[$body_font['family']] = $fw_google_fonts[$body_font['family']];
		}
		
		if( !empty($h1_font['family']) && isset($fw_google_fonts[$h1_font['family']] ) ){
			$awardthemes_google_font[$h1_font['family']] = $fw_google_fonts[$h1_font['family']];
		}
		
		if( !empty($h2_font['family']) && isset($fw_google_fonts[$h2_font['family']] ) ){
			$awardthemes_google_font[$h2_font['family']] = $fw_google_fonts[$h2_font['family']];
		}
		
		if( !empty($h3_font['family']) && isset($fw_google_fonts[$h3_font['family']] ) ){
			$awardthemes_google_font[$h3_font['family']] = $fw_google_fonts[$h3_font['family']];
		}
		
		if( !empty($h4_font['family']) && isset($fw_google_fonts[$h4_font['family']] ) ){
			$awardthemes_google_font[$h4_font['family']] = $fw_google_fonts[$h4_font['family']];
		}
		
		if( !empty($h5_font['family']) && isset($fw_google_fonts[$h5_font['family']] ) ){
			$awardthemes_google_font[$h5_font['family']] = $fw_google_fonts[$h5_font['family']];
		}
		
		if( !empty($h6_font['family']) && isset($fw_google_fonts[$h6_font['family']] ) ){
			$awardthemes_google_font[$h6_font['family']] = $fw_google_fonts[$h6_font['family']];
		}
		
		if( !empty($nav_font['family']) && isset($fw_google_fonts[$nav_font['family']] ) ){
			$awardthemes_google_font[$nav_font['family']] = $fw_google_fonts[$nav_font['family']];
		}
			
		$awardthemes_google_font_arrays = awardthemes_google_font_arrays($awardthemes_google_font);
		update_option( 'fw_theme_google_fonts_link', $awardthemes_google_font_arrays );
	}
	