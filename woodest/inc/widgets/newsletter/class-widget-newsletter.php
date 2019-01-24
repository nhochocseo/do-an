<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

add_action( 'widgets_init', 'awardthemes_newsletter_widget' );
if( !function_exists('awardthemes_newsletter_widget') ){
	function awardthemes_newsletter_widget() {
		register_widget( 'Widget_Newsletter' );
	}
}	
	
class Widget_Newsletter extends WP_Widget {

	/**
	 * @internal
	 */
	public function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, esc_attr__( 'AwardThemes: Newsletter Widget', 'woodest' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		require_once (get_template_directory() .'/inc/widgets/newsletter/views/widget.php');
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
		?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title :', 'woodest'); ?></label> 
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
	<?php
	}
}