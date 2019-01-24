<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * @var string $before_title
 * @var string $after_title
 * @var string $before_widget
 * @var string $after_widget
 */
	global $awardthemes_allowed_html;
	// Opening of widget
	echo wp_kses($before_widget,$awardthemes_allowed_html);
	
	// Open of title tag
	?>
	
	<?php
	if( !empty($title) ){
		echo wp_kses($args['before_title'], $awardthemes_allowed_html) . esc_attr($title) . $args['after_title']; 
	}
	?>
	
	<!--// TextWidget //-->
	
	<aside class="ftr-widget widget_contact">
		<?php 
		if(isset($widget_address) && $widget_address <> ''){ ?>
			<div class="info-box">
				<h5><?php echo esc_attr__('Dirección','woodest'); ?></h5>
				<p><?php echo esc_attr($widget_address);?></p>
			</div>
			<?php 
		} 
		if(isset($widget_email) && $widget_email <> ''){ ?>
			<div class="info-box">
				<h5><?php echo esc_attr__('E-mail','woodest'); ?></h5>
				<a href="mailto:<?php echo esc_attr($widget_email);?>" title="<?php echo esc_attr($widget_email);?>"> <?php echo esc_attr($widget_email);?></a>
				<a href="<?php echo esc_attr($widget_email_sec);?>" title="<?php echo esc_attr($widget_email_sec);?>"> <?php echo esc_attr($widget_email_sec);?></a>
			</div>
			<?php 
		} 
		if(isset($widget_phone) && $widget_phone <> ''){ ?>
			<div class="info-box">
				<h5><?php echo esc_attr__('Số điện thoại','woodest'); ?></h5>
				<a href="#"> <?php echo esc_attr($widget_phone);?></a>
				<a href="#"> <?php echo esc_attr($widget_phone_sec);?></a>
			</div>
			<?php 
		} ?>
	</aside>
	<!--// TextWidget //-->
	<?php
	
	echo wp_kses($after_widget,$awardthemes_allowed_html);	 ?>
