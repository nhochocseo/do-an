<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	$page_class = isset( $atts['page_class'] ) && $atts['page_class'] !='' ? $atts['page_class'] : '';
	$first_title = isset( $atts['first_title'] ) && $atts['first_title'] !='' ? $atts['first_title'] : '';
	$address_info = isset( $atts['address_info'] ) && $atts['address_info'] !='' ? $atts['address_info'] : '';
	$second_title = isset( $atts['second_title'] ) && $atts['second_title'] !='' ? $atts['second_title'] : '';
	$ph_num_one = isset( $atts['ph_num_one'] ) && $atts['ph_num_one'] !='' ? $atts['ph_num_one'] : '';
	$ph_num_second = isset( $atts['ph_num_second'] ) && $atts['ph_num_second'] !='' ? $atts['ph_num_second'] : '';
	$third_title = isset( $atts['third_title'] ) && $atts['third_title'] !='' ? $atts['third_title'] : '';
	$email_one = isset( $atts['email_one'] ) && $atts['email_one'] !='' ? $atts['email_one'] : '';
	$email_two = isset( $atts['email_two'] ) && $atts['email_two'] !='' ? $atts['email_two'] : '';
?>
	<!--Contact Info Wrap Start-->
	<div class="<?php $page_class;?>">
		
		<div class="row contact-detail">
			<div class="col-md-4 col-sm-4 col-xs-6">
				<div class="contact-info">
					<i class="icon icon-Pointer"></i>
					<h5><?php echo esc_attr($first_title);?></h5>
					<p><?php echo esc_attr($address_info);?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<div class="contact-info">
					<i class="icon icon-Phone2"></i>
					<h5><?php echo esc_attr($second_title);?></h5>
					<a href="#" title="<?php echo esc_attr($ph_num_one);?>"><?php echo esc_attr($ph_num_one);?></a>
					<a href="#" title="<?php echo esc_attr($ph_num_second);?>"><?php echo esc_attr($ph_num_second);?></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<div class="contact-info">
					<i class="icon icon-Mail"></i>
					<h5><?php echo esc_attr($third_title);?></h5>
					<a href="mailto:<?php echo esc_attr($email_one);?>" title="<?php echo esc_attr($email_one);?>"><?php echo esc_attr($email_one);?></a>
					<a href="mailto:<?php echo esc_attr($email_two);?>" title="<?php echo esc_attr($email_two);?>"><?php echo esc_attr($email_two);?></a>
				</div>
			</div>
		</div>
	</div>
