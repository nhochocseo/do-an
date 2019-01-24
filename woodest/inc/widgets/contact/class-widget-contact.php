<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
	
add_action( 'widgets_init', 'awardthemes_contact_widget' );
if( !function_exists('awardthemes_contact_widget') ){
	function awardthemes_contact_widget() {
		register_widget( 'Widget_Contact' );
	}
}	
	
class Widget_Contact extends WP_Widget {

	/**
	 * @internal
	 */
	public function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, esc_attr__( 'AwardThemes: Contact Widget', 'woodest' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );	
		$widget_address = $instance['widget_address'];
		$widget_phone = $instance['widget_phone'];	
		$widget_phone_sec = $instance['widget_phone_sec'];	
		$widget_email = $instance['widget_email'];	
		$widget_email_sec = $instance['widget_email_sec'];
	
		require_once (get_template_directory() .'/inc/widgets/contact/views/widget.php');

	}

	/**
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	/**
	 * @param array $instance
	 *
	 * @return string|void
	 */
	public function form( $instance ) {
		$title = isset($instance['title'])? $instance['title']: '';
		$widget_address = isset($instance['widget_address'])? $instance['widget_address']: '';
		$widget_phone = isset($instance['widget_phone'])? $instance['widget_phone']: '';
		$widget_phone_sec = isset($instance['widget_phone_sec'])? $instance['widget_phone_sec']: '';
		$widget_email = isset($instance['widget_email'])? $instance['widget_email']: '';
		$widget_email_sec = isset($instance['widget_email_sec'])? $instance['widget_email_sec']: '';
			
		?>
		<!-- Widget title --> 
			
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title :', 'woodest'); ?></label> 
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		
		<!-- Widget address --> 
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_address')); ?>"><?php esc_html_e('Address:', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_address')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_address')); ?>" type="text" value="<?php echo esc_attr($widget_address); ?>" />
		</p>
		
		<!-- Widget first email --> 
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_email')); ?>"><?php esc_html_e('First Email address:', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_email')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_email')); ?>" type="text" value="<?php echo esc_attr($widget_email); ?>" />
		</p>
		
		<!-- Widget second email --> 
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_email_sec')); ?>"><?php esc_html_e('Second Email Address:', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_email_sec')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_email_sec')); ?>" type="text" value="<?php echo esc_attr($widget_email_sec); ?>" />
		</p>
		
		<!-- Widget first phone --> 
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_phone')); ?>"><?php esc_html_e('First Phone Number:', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_phone')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_phone')); ?>" type="text" value="<?php echo esc_attr($widget_phone); ?>" />
		</p>
		
		<!-- Widget second phone --> 
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_phone_sec')); ?>"><?php esc_html_e('Second Phone Number:', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_phone_sec')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_phone_sec')); ?>" type="text" value="<?php echo esc_attr($widget_phone_sec); ?>" />
		</p>
	<?php
	}
}