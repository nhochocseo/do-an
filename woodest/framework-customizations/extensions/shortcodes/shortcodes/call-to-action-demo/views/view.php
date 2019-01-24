<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();	
	$action_style = (isset( $atts['action_style'] ) && $atts['action_style'] !='') ? $atts['action_style'] : '';
	$title = (isset( $atts['title'] ) && $atts['title'] !='') ? $atts['title'] : '';
	$title_color = (isset( $atts['title_color'] ) && $atts['title_color'] !='') ? $atts['title_color'] : '';
	$first_btn_txt = (isset( $atts['first_btn_txt'] ) && $atts['first_btn_txt'] !='') ? $atts['first_btn_txt'] : '';
	$first_btn_link = (isset( $atts['first_btn_link'] ) && $atts['first_btn_link'] !='') ? $atts['first_btn_link'] : '';
	$second_btn_txt = (isset( $atts['second_btn_txt'] ) && $atts['second_btn_txt'] !='') ? $atts['second_btn_txt'] : '';
	$second_btn_link = (isset( $atts['second_btn_link'] ) && $atts['second_btn_link'] !='') ? $atts['second_btn_link'] : '';

	if($action_style == 'style_1'){ ?>
		
		<div class="call-out-section">
			<h3 style="color:<?php echo esc_attr($title_color) ?> "> <?php echo esc_attr($title); ?> </h3>
			<a href="<?php echo esc_url($first_btn_link); ?>" title="<?php echo esc_attr($first_btn_txt); ?>"> <?php echo esc_attr($first_btn_txt); ?></a>
		</div>
		<?php 
	} else if($action_style == 'style_2'){ ?>
		
		<div class="call-out-section2">
			<h3 style="color:<?php echo esc_attr($title_color) ?> "> <?php echo esc_attr($title); ?> </h3>
			<a href="<?php echo esc_url($first_btn_link); ?>" title="<?php echo esc_attr($first_btn_txt); ?>"> <?php echo esc_attr($first_btn_txt); ?></a>
			<a href="<?php echo esc_url($second_btn_link); ?>" class="contact-btn" title="<?php echo esc_attr($second_btn_txt); ?> "> <?php echo esc_attr($second_btn_txt); ?></a>
		</div>
		
		<?php 
	}
	else { ?>
		
		<div class="call-out-section">
			<h3 style="color:<?php echo esc_attr($title_color) ?> "> <?php echo esc_attr($title); ?> </h3>
			<a href="<?php echo esc_url($first_btn_link); ?>" title="<?php echo esc_attr($first_btn_txt); ?>"> <?php echo esc_attr($first_btn_txt); ?></a>
		</div>
		
		<?php 
	} ?>