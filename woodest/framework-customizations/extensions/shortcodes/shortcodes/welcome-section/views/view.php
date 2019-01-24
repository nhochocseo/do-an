<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	$page_class = isset( $atts['page_class'] ) && $atts['page_class'] !='' ? $atts['page_class'] : '';
	$title = isset( $atts['title'] ) && $atts['title'] !='' ? $atts['title'] : '';
	$description = isset( $atts['description'] ) && $atts['description'] !='' ? $atts['description'] : '';
	$hotline = isset( $atts['hotline'] ) && $atts['hotline'] !='' ? $atts['hotline'] : '';
	$email = isset( $atts['email'] ) && $atts['email'] !='' ? $atts['email'] : '';
	$image_left = isset( $atts['image_left'] ) && $atts['image_left'] !='' ? $atts['image_left'] : '';
	$image_right = isset( $atts['image_right'] ) && $atts['image_right'] !='' ? $atts['image_right'] : '';
?>

	<div class="<?php esc_attr($page_class);?>">	
		<div class="welcome-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="col-md-6 col-sm-6 welcome-img no-padding counter-section welcome2">
					<?php echo wp_get_attachment_image($atts['image_left']['attachment_id'],'full' ); ?>
				</div>
				<div class="col-md-6 col-sm-6 welcome-content">					
					<div class="header">
						<span class="title"><?php echo esc_attr($title); ?></span>
					</div>
					<div class="welcome-description">
						<?php echo esc_attr($description); ?>
					</div>
					<div class="welcome-contact">
						<div class="title">Liên hệ đặt bàn</div>
						<p>Hotline: <?php echo esc_attr($hotline); ?></p>
						<p>Email: <?php echo esc_attr($email); ?></p></p>
					</div>
				</div>
			</div><!-- Container /- -->
		</div>
	</div>
