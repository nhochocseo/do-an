<?php
if (!defined('FW')) {
    die('Forbidden');
}


	$awardthemes_sidebar = 'full';
	$content_col = 'col-md-12';
	$content_position = '';
	$sidebar_position = '';
	if (function_exists('fw_ext_sidebars_get_current_position')) {
		$current_position = fw_ext_sidebars_get_current_position();
		if ($current_position != 'full' && ( $current_position == 'left' || $current_position == 'right' )) {
			$awardthemes_sidebar = $current_position;
			$content_col = 'col-md-8';
		}
	}
	
	if (isset($awardthemes_sidebar) && $awardthemes_sidebar == 'right') {
		$sidebar_position = 'pull-right';
		$content_position = 'pull-left';
	} else if (isset($awardthemes_sidebar) && $awardthemes_sidebar == 'left') {
		$sidebar_position = 'pull-left';
		$content_position = 'pull-right';
	}

/**
 * @var $atts
 */
	$bg_video_data_attr  = '';
	$custom_classes = '';
	$custom_id = '';
	$section_css = '';
	
	$custom_css = '';
	$custom_unique_id = rand();
	
	if (isset($atts['custom_id']) && $atts['custom_id'] <> '' ){
		$custom_id = 'id = '. $atts['custom_id'];
	} 

	if (isset($atts['custom_classes'])){
		$custom_classes .= $atts['custom_classes'];
	} 
	
	if($atts['background_settings']['gadget'] == 'background-color'){
		$background_color = $atts['background_settings']['background-color'];
		
		if (!empty($background_color['background_color'])) {
			$section_css .= 'background-color:' .esc_attr($background_color['background_color']) . ';';
		}
		
	}else if($atts['background_settings']['gadget'] == 'background-image'){
		$background_img = $atts['background_settings']['background-image'];
		
		if (isset($background_img['background_image']['data']['icon']) && !empty($background_img['background_image']['data']['icon'])) {
			$section_css .= 'background-image:url(' . esc_url($background_img['background_image']['data']['icon']) . '); position:relative;';
		}
		
		if (isset($background_img['background_repeat'])){
			$section_css .= 'background-repeat:' . $background_img['background_repeat'] . ';';
		}
		if (isset($background_img['background_size'])){
			$section_css .= 'background-size:' . $background_img['background_size'] . ';';
		}
		
		if (isset($background_img['background_opacity'])){
			$custom_css.= '.awardthemes-elements.section-css-'. esc_attr($custom_unique_id).':before{
					background-color: '. $background_img['background_color'] .';
					opacity: '. $background_img['background_opacity'] .';
					content: "";
					position: absolute;
					left: 0;
					top: 0;
					right:0;
					bottom:0;
				}';
		}
		
	}else if($atts['background_settings']['gadget'] == 'background-video'){
		$background_video = $atts['background_settings']['background-video'];
		
		if ( ! empty( $background_video['video'] ) ) {
			$filetype           = wp_check_filetype( $background_video['video'] );
			$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
			$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
			$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
			$bg_video_data_attr = $data_name_attr.'="' . fw_htmlspecialchars( json_encode( array( 'source' => array( $filetype => $background_video['video'] ) ) ) ) . '"';
			$custom_classes .= ' background-video';
		}
	}
	
	if(isset($atts['padding_top']) && $atts['padding_top'] != ''){
		$section_css .= 'padding-top:' . $atts['padding_top'] . 'px;';
	}
	
	if(isset($atts['padding_right']) && $atts['padding_right'] != ''){
		$section_css .= 'padding-right:' . $atts['padding_right'] . 'px;';
	}
	
	if (isset($atts['padding_bottom']) && $atts['padding_bottom'] != ''){
		$section_css .= 'padding-bottom:' . $atts['padding_bottom'] . 'px;';
	}

	if (isset($atts['padding_left']) && $atts['padding_left'] != ''){
		$section_css .= 'padding-left:' . $atts['padding_left'] . 'px;';
	}
	
	if(isset($atts['margin_top']) && $atts['margin_top'] != ''){
		$section_css .= 'margin-top:' . $atts['margin_top'] . 'px;';
	}
	
	if(isset($atts['margin_right']) && $atts['margin_right'] != ''){
		$section_css .= 'margin-right:' . $atts['margin_right'] . 'px;';
	}
	
	if (isset($atts['margin_bottom']) && $atts['margin_bottom'] != ''){
		$section_css .= 'margin-bottom:' . $atts['margin_bottom'] . 'px;';
	}

	if (isset($atts['margin_left']) && $atts['margin_left'] != ''){
		$section_css .= 'margin-left:' . $atts['margin_left'] . 'px;';
	}
	
	$custom_css.= '.awardthemes-elements.section-css-'. esc_attr($custom_unique_id).'{
		'.esc_attr($section_css).'
	}';
	
	wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
	wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
	
	$container_class = ( isset( $atts['fullwidth'] ) && $atts['fullwidth'] == 'yes' ) ? 'container-fluid' : 'container';

?>
<section <?php echo ($custom_id); ?> class="fw-main-row <?php echo ' '; ?> awardthemes-elements section-css-<?php echo esc_attr($custom_unique_id); echo ' '; ?>  <?php echo ($custom_classes); ?>" <?php echo esc_attr($bg_video_data_attr); ?>>
	<div class="<?php echo esc_attr($container_class); ?>">		
		<div class="row">
			<div class="<?php echo esc_attr($content_col); echo ' '; echo esc_attr($content_position); ?>">
				<?php echo do_shortcode( $content ); ?>
			</div>
			<?php 
			if(function_exists('fw_ext_sidebars_get_current_position')) {
				if(isset($sidebar_position) && $sidebar_position <> ''){ ?>
					<div class="col-md-4 <?php echo esc_attr($sidebar_position); ?>">
						<?php echo fw_ext_sidebars_show('blue'); ?>
					</div>
					<?php 
				}
				
			} ?>
		</div>
	</div>	
</section>
<div class="clear"></div>