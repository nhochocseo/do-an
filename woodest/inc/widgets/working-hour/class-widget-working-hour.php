<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
	
add_action( 'widgets_init', 'awardthemes_working_hour_widget' );
if( !function_exists('awardthemes_working_hour_widget') ){
	function awardthemes_working_hour_widget() {
		register_widget( 'Widget_Working_Hour' );
	}
}	
	
class Widget_Working_Hour extends WP_Widget {

	/**
	 * @internal
	 */
	public function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, esc_attr__( 'AwardThemes: Working Hour', 'woodest' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$time_one = $instance['time_one'];
		$address_company = $instance['address_company'];
		
		require_once (get_template_directory() .'/inc/widgets/working-hour/views/widget.php');
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
		$time_one = isset($instance['time_one'])? $instance['time_one']: '';
		$address_company = isset($instance['address_company'])? $instance['address_company']: '';
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title :', 'woodest'); ?></label> 
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<!-- Time One -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('time_one')); ?>"><?php esc_html_e('Thời gian làm việc:', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('time_one')); ?>" name="<?php echo esc_attr($this->get_field_name('time_one')); ?>" type="text" value="<?php echo esc_attr($time_one); ?>" />
		</p>
		<!-- Time Second -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('address_company')); ?>"><?php esc_html_e('Địa chỉ:', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address_company')); ?>" name="<?php echo esc_attr($this->get_field_name('address_company')); ?>" type="text" value="<?php echo esc_attr($address_company); ?>" />
		</p>
	<?php
	}
}