<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * @var string $before_title
 * @var string $after_title
 * @var string $before_widget
 * @var string $after_widget
 */
	global $awardthemes_allowed_html;

	echo wp_kses($before_widget, $awardthemes_allowed_html);

		if( !empty($title) ){ 
			echo wp_kses($args['before_title'],$awardthemes_allowed_html) . esc_attr($title) . $args['after_title']; 
		}
		?>
		
		<ul class="cate office">
			<?php 
			if(isset($widget_address) && $widget_address <> ''){ ?>
				<li><i class="fa fa-map-marker"></i> <?php echo esc_attr($widget_address);?></li>			
				<?php 
			}  
			if(isset($widget_phone_one) && $widget_phone_one <> ''){ ?>
				<li><i class="fa fa-phone"></i> <?php echo esc_attr($widget_phone_one);?></li>
				<?php 
			}  
			if(isset($widget_email) && $widget_email <> ''){ ?>
				<li><a href="#"><i class="fa fa-envelope"></i> <?php echo esc_attr($widget_email);?></a></li>
				<?php 
			} ?>
		</ul>
		<?php 
	echo wp_kses($after_widget,$awardthemes_allowed_html); ?>