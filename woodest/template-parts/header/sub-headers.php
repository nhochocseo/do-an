<?php
// Sub headers

	if( is_home() ){
		$page_id = '';
	} else{
		$page_id = get_the_ID();
	}
	
	if( is_page()){
		if(function_exists('fw_get_db_post_option')){
			$subheader_status = fw_get_db_post_option($page_id, 'subheader_status', true);
			if(!empty($subheader_status['gadget']) && $subheader_status['gadget'] == 'enable'){
				//theme settings
				$page_theme_option_background_img = '';
				
				//page settings
				$page_caption = '';
				$page_background_img = '';	
				
				//theme settings
				
				$page_default_bg = fw_get_db_settings_option('page_theme_option_background_img');
				if(isset($page_default_bg) && $page_default_bg <> ''){
					$page_theme_option_background_img = $page_default_bg['url'];
				}
				
				//page settings
				$page_caption = $subheader_status['enable']['page_caption'];
				$page_bg = $subheader_status['enable']['subheader_image'];
				if(isset($page_bg) && $page_bg <> ''){
					$page_background_img = $page_bg['url'];
				}
				
				if($page_background_img <> ''){
					$custom_css ='.page-banner.blog-banner{background:url('.esc_url($page_background_img).');}';
				}else if($page_theme_option_background_img <> ''){
					$custom_css ='.page-banner.blog-banner{background:url('.esc_url($page_theme_option_background_img).');}';
				}else{
					$custom_css ='.page-banner.blog-banner{background:url('.get_template_directory_uri().'/assets/images/inner-banner.jpg);}';
				}
				
				wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
				wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
			
				$page_title = get_the_title(); 
			
				if(!empty($page_caption)){
					$page_caption = $page_caption;
				} ?>
				<div class="page-banner blog-banner cde">
					<h2><?php echo esc_attr($page_title); ?></h2>
				</div>	
				<?php	
			} 	
		} else{
			$page_title = get_the_title(); 
			
			$custom_css ='.page-banner.blog-banner{background:url('.get_template_directory_uri().'/assets/images/inner-banner.jpg);}';

			wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
			wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
			?>
			<div class="page-banner blog-banner abc">
				<h2><?php echo esc_attr($page_title); ?></h2>
			</div>
			<?php 
		}
	}else if( is_single() && $post->post_type == 'post' ){
		
		if(has_post_thumbnail($page_id)){
			$image_src = wp_get_attachment_image_src(get_post_thumbnail_id($page_id),'full');
			$custom_css ='
			.page-banner.blog-banner{
				background:url('.esc_url($image_src[0]).'); 
				background-size: 100%;
				background-position: center;
			}';
			  
			wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
			wp_add_inline_style( 'awardthemes-inline-style', $custom_css);	
		}
		
		$page_title = get_the_title();
		?>
		  
		
		
		<?php 
	}else if( is_single()){
		
		//theme settings
	
		$post_theme_option_background_img = '';
		
		//page settings
		$page_caption = '';
		
		if(function_exists('fw_get_db_post_option')){
			
			//theme settings
			
			$post_default_bg = fw_get_db_settings_option('post_theme_option_background_img');
			if(isset($post_default_bg) && $post_default_bg <> ''){
				$post_theme_option_background_img = $post_default_bg['url'];
			}
			
			//post settings
			$post_caption = fw_get_db_post_option($page_id, 'post-caption', true);
		}
		
		if($post_theme_option_background_img <> ''){
			$custom_css ='.page-banner.blog-banner{background:url('.esc_url($post_theme_option_background_img).');}';
		}else{
			$custom_css ='.page-banner.blog-banner{background:url('.get_template_directory_uri().'/assets/images/inner-banner.jpg);}';
		}
		
		wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
		wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
		
		$page_title = get_the_title();
		?>
		
		<div class="page-banner blog-banner">
			<h2><?php echo esc_attr($page_title); ?></h2>
		</div>
		
		<?php 
	}else if( is_404() ){

		//theme settings
	
		$error_theme_option_background_img = '';
		
		if(function_exists('fw_get_db_post_option')){
			
			$error_default_bg = fw_get_db_settings_option('error_theme_option_background_img');
			if(isset($error_default_bg) && $error_default_bg <> ''){
				$error_theme_option_background_img = $error_default_bg['url'];
			}
		}

		if($error_theme_option_background_img <> ''){
			$custom_css ='.page-banner.blog-banner{background:url('.esc_url($error_theme_option_background_img).');}';
		}else{
			$custom_css ='.page-banner.blog-banner{background:url('.get_template_directory_uri().'/assets/images/inner-banner.jpg);}';
		}
		
		wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
		wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
	
		$page_title = esc_attr__('404 Error Page','woodest');
		?>	
		
		<div class="page-banner blog-banner">
			<h2><?php echo esc_attr($page_title); ?></h2>
		</div>
		
		<?php 
	}else if( is_archive() || is_search() || is_author() ){
		
		//theme settings
	
		$search_theme_option_background_img = '';
		
		if(function_exists('fw_get_db_post_option')){
			
			$search_default_bg = fw_get_db_settings_option('search_theme_option_background_img');
			if(isset($search_default_bg) && $search_default_bg <> ''){
				$search_theme_option_background_img = $search_default_bg['url'];
			}
		}

		if($search_theme_option_background_img <> ''){
			$custom_css ='.page-banner.blog-banner{background:url('.esc_url($search_theme_option_background_img).');}';
		}else{
			$custom_css ='.page-banner.blog-banner{background:url('.get_template_directory_uri().'/assets/images/inner-banner.jpg);}';
		}
		
		wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
		wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
		
		if( is_search() ){
			$page_title = esc_attr__('Search Results', 'woodest');
			$caption = get_search_query();
		}else if( is_category() || is_tax('work_category') || is_tax('product_cat') ){
			$page_title = single_cat_title('',false);
			$caption = single_cat_title('', false);
		}else if( is_tag() || is_tax('work_tag') || is_tax('product_tag') ){
			$page_title = esc_attr__('Tag','woodest');
			$caption = single_cat_title('', false);
		}else if( is_day() ){
			$page_title = get_the_archive_title();
			$caption = get_the_date('F j, Y');
		}else if( is_month() ){
			$page_title = get_the_archive_title();
			$caption = get_the_date('F Y');
		}else if( is_year() ){
			$page_title = get_the_archive_title();
			$caption = get_the_date('Y');
		}else if( is_author() ){
			$page_title = esc_attr__('By','woodest');
			$author_id = get_query_var('author');
			$author = get_user_by('id', $author_id);
			$caption = $author->display_name;	
			$page_title = $page_title .' '. $caption;
		}else if( is_post_type_archive('product') ){
			$page_title = esc_attr__('Shop', 'woodest');
			$caption = '';
		}else{
			global $wp_query;
			$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );
			$ext_portfolio_settings = $ext_portfolio_instance->get_settings();

			$taxonomy        = $ext_portfolio_settings['taxonomy_name'];
			$term            = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy );
			$term_id         = ( ! empty( $term->term_id ) ) ? $term->term_id : 0;
			$categories      = fw_ext_portfolio_get_listing_categories( $term_id );

			$listing_classes = fw_ext_portfolio_get_sort_classes( $wp_query->posts, $categories );
			$loop_data       = array(
				'settings'        => $ext_portfolio_instance->get_settings(),
				'categories'      => $categories,
				'image_sizes'     => $ext_portfolio_instance->get_image_sizes(),
				'listing_classes' => $listing_classes
			);
			set_query_var( 'fw_portfolio_loop_data', $loop_data );
			if ( ! empty( $term ) ) {
				$page_title = $term->name;
			} else {
				$page_title = 'Sản Phẩm';
			}			
			$caption = '';
		}
		?>
		<div class="page-banner blog-banner test1">
			<h2><?php echo esc_attr($page_title); ?></h2>
		</div>
		<?php 
	} else{ ?>
		<div class="page-banner blog-banner awardthemes-posts">
			<h2><?php echo esc_attr__('Blog Posts','woodest'); ?></h2>
		</div>
		<?php 
	} ?>