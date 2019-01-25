<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();	
	$margin_number = (isset( $atts['margin_number'] ) && $atts['margin_number'] !='') ? $atts['margin_number'] : '';
?>
<div style="margin-bottom:<?php echo esc_attr($margin_number) ?>px "></div>
	