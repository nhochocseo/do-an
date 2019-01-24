<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	$page_class = isset( $atts['page_class'] ) && $atts['page_class'] !='' ? $atts['page_class'] : '';
	$main_heading = isset( $atts['main_heading'] ) && $atts['main_heading'] !='' ? $atts['main_heading'] : '';
	$heading_caption = isset( $atts['heading_caption'] ) && $atts['heading_caption'] !='' ? $atts['heading_caption'] : '';
	$icon_one = isset( $atts['icon_one'] ) && $atts['icon_one'] !='' ? $atts['icon_one'] : '';
	$title_one = isset( $atts['title_one'] ) && $atts['title_one'] !='' ? $atts['title_one'] : '';
	$description_one = isset( $atts['description_one'] ) && $atts['description_one'] !='' ? $atts['description_one'] : '';
	$second_icon = isset( $atts['second_icon'] ) && $atts['second_icon'] !='' ? $atts['second_icon'] : '';
	$title_second = isset($atts['title_second']) && $atts['title_second'] !='' ? $atts['title_second'] : '';
	$description_second = isset( $atts['description_second'] ) && $atts['description_second'] !='' ? $atts['description_second'] : '';
	$third_icon = isset( $atts['third_icon'] ) && $atts['third_icon'] !='' ? $atts['third_icon'] : '';
	$title_third = isset( $atts['title_third'] ) && $atts['title_third'] !='' ? $atts['title_third'] : '';
	$description_third = isset( $atts['description_third'] ) && $atts['description_third'] !='' ? $atts['description_third'] : '';
	$left_image = isset( $atts['left_image']['url']) && $atts['left_image']['url'] !='' ? $atts['left_image']['url'] : '';
	$introduction_text = isset( $atts['introduction_text'] ) && $atts['introduction_text'] !='' ? $atts['introduction_text'] : '';
?>
	<div class="<?php esc_attr($page_class);?>">
		<div class="why-choose-section2 container-fluid no-padding">
			<!-- Container -->
			<div class="col-md-5">
			<div class="why-choose-bg-img animated fadeInUp">
				<img src="<?php echo esc_url($left_image); ?>" width="564" height="792" alt="<?php echo esc_attr__('img','woodest'); ?>">
			</div>
			</div>
			<div class="col-md-7">
			<div class="animated fadeInDown">
				<div class="no-padding pull-right">
					<!-- Section Header -->
					<div class="section-header">
						<h3><?php echo esc_attr($main_heading);?></h3>
						<p><?php echo esc_attr($heading_caption);?></p>
					</div><!-- Section Header /- -->
					<div class="why-choose-box col-md-4 col-sm-4 col-xs-4">
						<i class="<?php echo esc_attr($icon_one);?>"></i>
						<h6><?php echo esc_attr($title_one);?></h6>
						<span><?php echo esc_attr($description_one);?></span>
					</div>
					<div class="why-choose-box col-md-4 col-sm-4 col-xs-4">
						<i class="<?php echo esc_attr($second_icon);?>"></i>
						<h6><?php echo esc_attr($title_second);?></h6>
						<span><?php echo esc_attr($description_second);?></span>
					</div>
					<div class="why-choose-box col-md-4 col-sm-4 col-xs-4">
						<i class="<?php echo esc_attr($third_icon);?>"></i>
						<h6><?php echo esc_attr($title_third);?></h6>
						<span><?php echo esc_attr($description_third);?></span>
					</div>
					<p><?php echo esc_attr($introduction_text);?></p>
				</div>
			</div><!-- Container -->
			</div>
			<div class="choose-section-padding"></div>
		</div>

	</div>