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
<div class="thong-tin">
	<div class="col-md-9">
		<?php
		if( !empty($title) ){
			echo wp_kses($args['before_title'], $awardthemes_allowed_html) . esc_attr($title) . $args['after_title']; 
		}
		?>
		<!--// TextWidget //-->
		<aside class="ftr-widget widget_contact">
			<?php
			if(isset($widget_phone) && $widget_phone <> ''){ ?>
				<div class="info-box">
					<span><i class="fas fa-phone-square"></i> <?php echo esc_attr($widget_phone);?></span>
				<?php 
			}

			if(isset($widget_email) && $widget_email <> ''){ ?>
					<span><i class="fas fa-envelope"></i> <!-- <a href="mailto:<?php echo esc_attr($widget_email);?>" title="<?php echo esc_attr($widget_email);?>"> --> <?php echo esc_attr($widget_email);?>
				<!-- </a>
					<a href="<?php echo esc_attr($widget_email_sec);?>" title="<?php echo esc_attr($widget_email_sec);?>"> --> 
						<!-- <?php echo esc_attr($widget_email_sec);?> -->
						
					<!-- </a>				 --></span>
				</div>
				<?php 
			} 
			if(isset($widget_address) && $widget_address <> ''){ ?>
				<div class="info-box">
					<p> <i class="fas fa-home"></i> <?php echo esc_attr($widget_address);?></p>
				</div>
				<?php 
			} ?>
		</aside>
		<!--// TextWidget //-->
		<?php		
		echo wp_kses($after_widget,$awardthemes_allowed_html);	 ?>
	</div>
	<div class="col-md-3">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="265" height="277" id="gmap_canvas" src="https://maps.google.com/maps?q=S%E1%BB%91%2082%20-%2084%2C%20%C4%91%C6%B0%E1%BB%9Dng%2030%2F4%2C%20khu%20ph%E1%BB%91%201%2C%20th%E1%BB%8B%20tr%E1%BA%A5n%20D%C6%B0%C6%A1ng%20%C4%90%C3%B4ng%2C%20huy%E1%BB%87n%20Ph%C3%BA%20Qu%E1%BB%91c%2C%20t%E1%BB%89nh%20Ki%C3%AAn%20Giang&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pure black</a></div><style>.mapouter{text-align:right;height:200px;width:265px;}.gmap_canvas {overflow:hidden;background:none!important;height:277px;width:265px;}</style></div>
	</div>
</div>