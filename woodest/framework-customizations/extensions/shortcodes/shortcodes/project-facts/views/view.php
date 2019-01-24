<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	$page_class = isset( $atts['page_class'] ) && $atts['page_class'] !='' ? $atts['page_class'] : '';
	$icon = isset( $atts['icon'] ) && $atts['icon'] !='' ? $atts['icon'] : '';
	$value = isset( $atts['value'] ) && $atts['value'] !='' ? $atts['value'] : '';
	$sub_text = isset( $atts['sub_text'] ) && $atts['sub_text'] !='' ? $atts['sub_text'] : '';
?>
	<?php $custom_js ='
		jQuery(document).ready(function($){
			/* ---------------------------------------------------------------------- */
			/*	Counter Functions
			/* ---------------------------------------------------------------------- */
			if($("#old-count-'.esc_js($uni_flag).'").length){
				$("#old-count-'.esc_js($uni_flag).'").counterUp({
					delay: 10,
					time: 1000
				});
			}
			
			/* ---------------------------------------------------------------------- */
			/*	Counter Functions
			/* ---------------------------------------------------------------------- */
			if($("#new-count-'.esc_js($uni_flag).'").length){
				$("#new-count-'.esc_js($uni_flag).'").counterUp({
					delay: 10,
					time: 1000
				});
			}
		})';
		wp_enqueue_script( 'awardthemes-functions', get_template_directory_uri() . '/js/functions.js', array(), '1.0' );
		wp_add_inline_script( 'awardthemes-functions', $custom_js); ?>
	
	<div class="<?php echo esc_attr($page_class); ?>">
		<div class="statistics-box">
			<i class="icon <?php echo esc_attr($icon); ?>"></i>
			<h2 id="new-count-<?php echo esc_attr($uni_flag); ?>" class="counter"><?php echo esc_attr($value);?></h2>
			<h6><?php echo esc_attr($sub_text); ?></h6>
		</div>
	</div>
