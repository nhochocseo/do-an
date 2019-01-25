<?php
/**
 * Register widget area.
*/

	function awardthemes_widgets_init() {
		
		if(function_exists('fw_get_db_settings_option')){
			$footer_col_layout = fw_get_db_settings_option('footer_col_layout');
			if($footer_col_layout == ''){
				$footer_col_layout = 'col-md-4';
			}
		} else {
			$footer_col_layout = 'col-md-4';
		}
		
		register_sidebar( array(
			'name'          => esc_attr__( 'Blog Sidebar', 'woodest' ),
			'id'            => 'default-sidebar',
			'description'   => esc_attr__( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'woodest' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-widget awardthemes-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_attr__( 'Footer', 'woodest' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_attr__( 'Add widgets here to appear in your footer.', 'woodest' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<div class="ftr-widget"><h3 class="widget-title">',
			'after_title'   => '</h3></div>',
		) );
	}
	add_action( 'widgets_init', 'awardthemes_widgets_init' );
?>