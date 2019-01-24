<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
	
add_action( 'widgets_init', 'awardthemes_download_brochure_widget' );
if( !function_exists('awardthemes_download_brochure_widget') ){
	function awardthemes_download_brochure_widget() {
		register_widget( 'Widget_Download_Brochure' );
	}
}	
	
class Widget_Download_Brochure extends WP_Widget {

	/**
	 * @internal
	 */
	public function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, esc_attr__( 'AwardThemes: Download Brochure', 'woodest' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$btn_link_one = isset($instance['btn_link_one'])? $instance['btn_link_one']: '';
		$btn_text_one = isset($instance['btn_text_one'])? $instance['btn_text_one']: '';
		$btn_link_sec = isset($instance['btn_link_sec'])? $instance['btn_link_sec']: '';
		$btn_text_sec = isset($instance['btn_text_sec'])? $instance['btn_text_sec']: '';
		$btn_link_third = isset($instance['btn_link_third'])? $instance['btn_link_third']: '';
		$btn_text_third = isset($instance['btn_text_third'])? $instance['btn_text_third']: '';
		
		require_once (get_template_directory() .'/inc/widgets/download-pdf/views/widget.php');
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
		$btn_text_one = isset($instance['btn_text_one'])? $instance['btn_text_one']: '';
		$btn_link_one = isset($instance['btn_link_one'])? $instance['btn_link_one']: '';
		$btn_link_sec = isset($instance['btn_link_sec'])? $instance['btn_link_sec']: '';
		$btn_text_sec = isset($instance['btn_text_sec'])? $instance['btn_text_sec']: '';
		$btn_text_third = isset($instance['btn_text_third'])? $instance['btn_text_third']: '';
		$btn_link_third = isset($instance['btn_link_third'])? $instance['btn_link_third']: '';
		?>

		<!-- Text Input -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title :', 'woodest'); ?></label> 
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<!-- First Button Text -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('btn_text_one')); ?>"><?php esc_html_e('First Brochure :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('btn_text_one')); ?>" name="<?php echo esc_attr($this->get_field_name('btn_text_one')); ?>" type="text" value="<?php echo esc_attr($btn_text_one); ?>" />
		</p>
		<!-- First Button Link -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('btn_link_one')); ?>"><?php esc_html_e('First Brochure Link :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('btn_link_one')); ?>" name="<?php echo esc_attr($this->get_field_name('btn_link_one')); ?>" type="text" value="<?php echo esc_attr($btn_link_one); ?>" />
		</p>
		<!-- Second Button Text -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('btn_text_sec')); ?>"><?php esc_html_e('Second Brochure :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('btn_text_sec')); ?>" name="<?php echo esc_attr($this->get_field_name('btn_text_sec')); ?>" type="text" value="<?php echo esc_attr($btn_text_sec); ?>" />
		</p>
		<!-- Second Button Link -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('btn_link_sec')); ?>"><?php esc_html_e('Second Brochure Link :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('btn_link_sec')); ?>" name="<?php echo esc_attr($this->get_field_name('btn_link_sec')); ?>" type="text" value="<?php echo esc_attr($btn_link_sec); ?>" />
		</p>
		<!-- Third Button Text -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('btn_text_third')); ?>"><?php esc_html_e('Third Brochure :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('btn_text_third')); ?>" name="<?php echo esc_attr($this->get_field_name('btn_text_third')); ?>" type="text" value="<?php echo esc_attr($btn_text_third); ?>" />
		</p>
		<!-- Third Button Link -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('btn_link_third')); ?>"><?php esc_html_e('Third Brochure Link :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('btn_link_third')); ?>" name="<?php echo esc_attr($this->get_field_name('btn_link_third')); ?>" type="text" value="<?php echo esc_attr($btn_link_third); ?>" />
		</p>
	<?php
	}
}