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
	if($query->have_posts()){ ?>
		
		<ul class="cate archive">
			<?php
			while($query->have_posts()){ $query->the_post();
				global $post;
				?>
				<li><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_attr(substr(get_the_title(),0,22)); ?></a></li>
				<?php
			}
		?>
		</ul>
		<?php
	}
	wp_reset_postdata();
	echo wp_kses($after_widget,$awardthemes_allowed_html); ?>