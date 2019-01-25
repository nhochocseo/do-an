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
	$desscription = isset( $atts['desscription'] ) && $atts['desscription'] !='' ? $atts['desscription'] : '';
	$title_1 = isset( $atts['title_1'] ) && $atts['title_1'] !='' ? $atts['title_1'] : '';
	$content_1 = isset( $atts['content_1'] ) && $atts['content_1'] !='' ? $atts['content_1'] : '';
	$title_2 = isset( $atts['title_2'] ) && $atts['title_2'] !='' ? $atts['title_2'] : '';
	$content_2 = isset( $atts['content_2'] ) && $atts['content_2'] !='' ? $atts['content_2'] : '';
	$title_3 = isset($atts['title_3']) && $atts['title_3'] !='' ? $atts['title_3'] : '';
	$content_3 = isset( $atts['content_3'] ) && $atts['content_3'] !='' ? $atts['content_3'] : '';
?>
	<div class="<?php esc_attr($page_class);?>">
		<div class="dich-vu container-fluid no-padding">
			<div class="image_1">
				<?php echo wp_get_attachment_image($atts['image_1']['attachment_id'],'full' ); ?>
			</div>
			<div class="image_2">
				<?php echo wp_get_attachment_image($atts['image_2']['attachment_id'],'full' ); ?>
			</div>
			<div class="image_3">
				<?php echo wp_get_attachment_image($atts['image_3']['attachment_id'],'full' ); ?>
			</div>
			<div class="image_4">
				<?php echo wp_get_attachment_image($atts['image_4']['attachment_id'],'full' ); ?>
			</div>
			<div class="image_5">
				<?php echo wp_get_attachment_image($atts['image_5']['attachment_id'],'full' ); ?>
			</div>
			<div class="image_6">
				<?php echo wp_get_attachment_image($atts['image_6']['attachment_id'],'full' ); ?>
			</div>
			<div class="container">
				<div class="main-container">
					<div class="header-dich-vu">
						<div class="header">
							<span class="title"><?php echo esc_attr($title); ?></span>
						</div>
						<div class="content">
							<?php echo esc_attr($desscription); ?>
						</div>
					</div>
					<div class="content-dich-vu row">
						<div class="item1">
							<div class="thumb">
								<?php echo wp_get_attachment_image($atts['thumb_1']['attachment_id'],'full' ); ?>
							</div>
							<div class="content">
								<div class="title">
									<?php echo esc_attr($title_1); ?>
								</div>
								<div class="content">
									<?php echo esc_attr($content_1); ?>
								</div>
							<div class="dotred"></div>
							</div>
						</div>
						<div class="item2">
							<div class="content">
								<div class="title">
									<?php echo esc_attr($title_2); ?>
								</div>
								<div class="content">
									<?php echo esc_attr($content_2); ?>
								</div>
								<div class="dotred"></div>
							</div>
							<div class="thumb">
								<?php echo wp_get_attachment_image($atts['thumb_2']['attachment_id'],'full' ); ?>
							</div>
						</div>
						<div class="item3">
							<div class="thumb">
								<?php echo wp_get_attachment_image($atts['thumb_3']['attachment_id'],'full' ); ?>
							</div>
							<div class="content">
								<div class="title">
									<?php echo esc_attr($title_3); ?>
								</div>
								<div class="content">
									<?php echo esc_attr($content_3); ?>
								</div>
								<div class="dotred2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>