<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * @var string $before_title
 * @var string $after_title
 * @var string $before_widget
 * @var string $after_widget
 */
	global $awardthemes_allowed_html;
	
	echo wp_kses($before_widget,$awardthemes_allowed_html);

		if( !empty($title) ){ 
			echo wp_kses($args['before_title'],$awardthemes_allowed_html) . esc_attr($title) . $args['after_title']; 
		}
		?>
		
		<ul class="cate brochures">
			<?php 
			if(isset($btn_text_one) && $btn_text_one <> ''){ ?>
				<li><a href="<?php echo esc_url($btn_link_one); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo esc_attr($btn_text_one); ?></a></li>
				<?php 
			}
			if(isset($btn_text_sec) && $btn_text_sec <> ''){ ?>
				<li><a href="<?php echo esc_url($btn_link_sec); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo esc_attr($btn_text_sec); ?></a></li>
				<?php 
			} 
			if(isset($btn_text_third) && $btn_text_third <> ''){ ?>
				<li><a href="<?php echo esc_url($btn_link_third); ?>"><i class="fa fa-file-pdf-o"></i> <?php echo esc_attr($btn_text_third); ?></a></li>
				<?php 
			} ?>
		</ul>
		<?php 
	echo wp_kses($after_widget,$awardthemes_allowed_html); ?>