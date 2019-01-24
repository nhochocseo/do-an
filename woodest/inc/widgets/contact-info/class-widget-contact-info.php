<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
	
add_action( 'widgets_init', 'awardthemes_contact_info_widget' );
if( !function_exists('awardthemes_contact_info_widget') ){
	function awardthemes_contact_info_widget() {
		register_widget( 'Widget_Contact_Info' );
	}
}	
	
class Widget_Contact_Info extends WP_Widget {

	/**
	 * @internal
	 */
	public function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, esc_attr__( 'AwardThemes: Contact Info', 'woodest' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters( 'widget_title', $instance['title'] );
			
		$widget_phone_one = isset($instance['widget_phone_one'])? $instance['widget_phone_one']: '';
		$widget_address = isset($instance['widget_address'])? $instance['widget_address']: '';
		$widget_email = isset($instance['widget_email'])? $instance['widget_email']: '';
		
		require_once (get_template_directory() .'/inc/widgets/contact-info/views/widget.php');
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
		$widget_phone_one = isset($instance['widget_phone_one'])? $instance['widget_phone_one']: '';
		$widget_email = isset($instance['widget_email'])? $instance['widget_email']: '';
		?>

		<!-- Title -->
			
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title :', 'woodest'); ?></label> 
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>	
		
		<!-- Address -->
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_address')); ?>"><?php esc_html_e('Location Address :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_address')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_address')); ?>" type="text" value="<?php echo esc_attr($widget_address); ?>" />
		</p>
		
		<!-- Phone -->
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_phone_one')); ?>"><?php esc_html_e('Enter Phone :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_phone_one')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_phone_one')); ?>" type="text" value="<?php echo esc_attr($widget_phone_one); ?>" />
		</p>
		
		<!-- Email Address -->
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('widget_email')); ?>"><?php esc_html_e('Email Address :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('widget_email')); ?>" name="<?php echo esc_attr($this->get_field_name('widget_email')); ?>" type="text" value="<?php echo esc_attr($widget_email); ?>" />
		</p>
	<?php
	}
}