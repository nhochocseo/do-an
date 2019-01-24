<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * @var string $before_title
 * @var string $after_title
 * @var string $before_widget
 * @var string $after_widget
 */

	global $awardthemes_allowed_html;
	
	echo wp_kses($before_widget,$awardthemes_allowed_html);
	?>
		
	<aside class="ftr-widget widget_subscribe">
	<?php	if( !empty($title) ){
			echo wp_kses($args['before_title'],$awardthemes_allowed_html) . $title . $args['after_title']; 
		}
	?>	
		<form method="post" id="awardthemes-submit-form" data-ajax="" data-security="<?php wp_create_nonce('awardthemes-create-nonce'); ?>" data-action="newsletter_mailchimp">
			<div class="form-group">
				<i class="icon icon-User"></i>
				<input id="name" name="name" class="form-control" placeholder="<?php echo esc_attr__('Your Name*','woodest');?>" type="text">
			</div>
			<div class="form-group">
				<i class="icon icon-Mail"></i>
				<input id="email" name="email" class="form-control" placeholder="<?php echo esc_attr__('Your Email*','woodest');?>" type="text">
			</div>
			<div class="form-group">
				<input value=" <?php echo esc_attr__('Subscribe','woodest');?>" type="Submit">
				<p class="status"></p>
			</div>
		</form>
	</aside>
	<?php 
	echo wp_kses($after_widget,$awardthemes_allowed_html); ?>