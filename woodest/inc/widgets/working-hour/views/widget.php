<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * @var string $before_title
 * @var string $after_title
 * @var string $before_widget
 * @var string $after_widget
 * @var array $recent_posts
 * @var array $popular_posts
 */
	global $awardthemes_allowed_html;

	echo wp_kses($before_widget,$awardthemes_allowed_html);

	if( !empty($title) ){ 
		echo wp_kses($args['before_title'],$awardthemes_allowed_html) . esc_attr($title) . $args['after_title']; 
	} ?>	
	<aside class="ftr-widget widget_opening widget_contact">
		<?php 
			if(isset($address_company) && $address_company <> ''){ ?>
				<div class="info-box">
					<h5><?php echo esc_attr__('Địa chỉ','woodest'); ?> </h5>
					<p><?php echo esc_attr($address_company);?><p>
				</div>
			<?php 
			} ?>
		<?php 
		if(isset($time_one) && $time_one <> ''){ ?>
			<div class="info-box">
				<h5> Lịch làm </h5>
				<p><span><?php echo esc_attr__('Thứ 2 - Thứ 7','woodest'); ?> </span>: <?php echo esc_attr($time_one);?></p>
			</div>
			<?php 
		} ?>
	</aside>
	<?php 
	echo wp_kses($after_widget,$awardthemes_allowed_html); ?>
