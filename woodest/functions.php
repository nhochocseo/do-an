<?php
/**
 * Award Themes functions and definitions
 */

/**
 * Register custom fonts.
 */
	function awardthemes_fonts_url() {
		$fonts_url = '';
		$font_families = array();

		$font_families[] = 'Montserrat:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
		$font_families[] = 'Poppins:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
		$font_families[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => '',
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		

		return esc_url_raw( $fonts_url );
	}
	
	/**
	 * @Enque Google Font
	 * @return 
	 */
	if(defined('FW')){
		
		if (!function_exists('awardthemes_enqueue_google_fonts')) {
			function awardthemes_enqueue_google_fonts() {
				
				if ( !is_admin() ) {
					$fonts_url = get_option('fw_theme_google_fonts_link', '');
					wp_enqueue_style( 'awardthemes-google-fonts', esc_url_raw($fonts_url), array(), null );
				}
			}
			add_action( 'wp_enqueue_scripts', 'awardthemes_enqueue_google_fonts' );
		}
	}	

require_once get_template_directory() .'/inc/hooks.php';
require_once ( get_template_directory() . '/inc/register-sidebars.php'); 

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Chi tiết' link.
 *
 * @since Award Themes 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Chi tiết' link prepended with an ellipsis.
 */
function awardthemes_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( esc_attr__( 'Chi tiết<span class="screen-reader-text"> "%s"</span>', 'woodest' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ';
}
add_filter( 'excerpt_more', 'awardthemes_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Award Themes 1.0
 */
function awardthemes_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'awardthemes_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function awardthemes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'awardthemes_pingback_header' );

require_once ( get_template_directory() . '/inc/awardthemes-scripts/register-scripts.php'); //Theme Scripts


/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Award Themes
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function awardthemes_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'awardthemes_widget_tag_cloud_args' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
	 * @param FW_Ext_Backups_Demo[] $demos
	 * @return FW_Ext_Backups_Demo[]
	 */
	function woodsest_filter_theme_fw_ext_backups_demos($demos) {
		$demos_array = array(
			'woodest-demo' => array(
				'title' => __('Woodest', 'woodest'),
				'screenshot' => get_template_directory_uri() . '/screenshot.png',
				'preview_link' => 'http://awardthemes.com/wp/woodest'
			)
			// ...
		);

		$download_url = 'https://awardthemes.com/demo/';

		foreach ($demos_array as $id => $data) {
			$demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
				'url' => $download_url,
				'file_id' => $id,
			));
			$demo->set_title($data['title']);
			$demo->set_screenshot($data['screenshot']);
			$demo->set_preview_link($data['preview_link']);

			$demos[ $demo->get_id() ] = $demo;

			unset($demo);
		}

		return $demos;
	}
	add_filter('fw:ext:backups-demo:demos', 'woodsest_filter_theme_fw_ext_backups_demos');

?>