<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	$page_class = isset( $atts['page_class'] ) && $atts['page_class'] !='' ? $atts['page_class'] : '';
	$alignment = isset( $atts['alignment'] ) && $atts['alignment'] !='' ? $atts['alignment'] : '';
	$heading_style = isset( $atts['heading_style'] ) && $atts['heading_style'] !='' ? $atts['heading_style'] : '';
	$title = isset( $atts['title'] ) && $atts['title'] !='' ? $atts['title'] : '';
	$title_color = isset( $atts['title_color'] ) && $atts['title_color'] !='' ? $atts['title_color'] : '';
	$caption = isset( $atts['caption'] ) && $atts['caption'] !='' ? $atts['caption'] : '';
	$caption_color = isset( $atts['caption_color'] ) && $atts['caption_color'] !='' ? $atts['caption_color'] : '';
?>
	<div class="awardthemes-simple-heading text-<?php echo esc_attr($alignment); ?> <?php echo esc_attr($page_class); ?>">
		<?php 
		if($heading_style == 'style_1'){
			
			$custom_css ='#awardthemes-heading-'. esc_attr($uni_flag).' h3{color:'.esc_attr($title_color).';}
				#awardthemes-heading-'. esc_attr($uni_flag).' p{color:'.esc_attr($caption_color).';}
			';
			wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
			wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
			?>
			<div id="awardthemes-heading-<?php echo esc_attr($uni_flag); ?>" class="section-header-<?php echo esc_attr($uni_flag); ?> section-header">
				<h3><strong class="title"><?php echo esc_attr($title); ?></strong></h3>
				<p> <?php echo esc_attr($caption); ?></p>
			</div>
			<?php	
		}else if($heading_style == 'style_2'){
			$custom_css ='#awardthemes-heading-'. esc_attr($uni_flag).' h4{color:'.esc_attr($title_color).';}
				#awardthemes-heading-'. esc_attr($uni_flag).' p{color:'.esc_attr($caption_color).';}
			';
			wp_enqueue_style('awardthemes-inline-style',get_template_directory_uri() . '/assets/css/inline-style.css');
			wp_add_inline_style( 'awardthemes-inline-style', $custom_css);
		?>
			<div id="awardthemes-heading-<?php echo esc_attr($uni_flag); ?>" class="counter-detail">
				<h4><?php echo esc_attr($title); ?></h4>
				<p><?php echo esc_attr($caption); ?></p>
			</div>
			<?php	
		}else{ ?>
			<div id="awardthemes-heading-<?php echo esc_attr($uni_flag); ?>" class="section-header-<?php echo esc_attr($uni_flag); ?> section-header">
				<h3><?php echo esc_attr($title); ?></h3>
				<p> <?php echo esc_attr($caption); ?></p>
			</div>
			<?php 
		} ?>
	</div>