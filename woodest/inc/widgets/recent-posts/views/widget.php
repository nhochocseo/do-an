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
		<aside class="widget_posts">
			<?php
			while($query->have_posts()){ $query->the_post();
				
				$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), array(80,80));
				?>
				
				<div class="latest-content">
					<a title="<?php echo esc_attr__('Post Cover','woodest'); ?>" href="<?php echo esc_url(get_permalink()); ?>"><img src="<?php echo esc_url($thumbnail[0]); ?>" alt="<?php echo esc_attr__('img','woodest'); ?>" width="80" height="80" /></a>
					<h3><a title="<?php echo esc_attr(substr(get_the_content(),0,40)); ?>" href="<?php echo esc_url(get_permalink());?> "><?php echo esc_attr(substr(get_the_content(),0,42)); ?></a></h3>
					<span><?php echo esc_attr(get_the_date(get_option('date_format'))); ?></span>
				</div>
				<?php
			}
		?>
		</aside>
		<?php
	}
	wp_reset_postdata();
	echo wp_kses($after_widget,$awardthemes_allowed_html); ?>