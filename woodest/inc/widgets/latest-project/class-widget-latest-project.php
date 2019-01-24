<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
	
add_action( 'widgets_init', 'awardthemes_latest_project_widget' );
if( !function_exists('awardthemes_latest_project_widget') ){
	function awardthemes_latest_project_widget() {
		register_widget( 'Widget_Latest_Project' );
	}
}	
	
class Widget_Latest_Project extends WP_Widget {

	/**
	 * @internal
	 */
	public function __construct() {
		$widget_ops = array( 'description' => '' );
		parent::__construct( false, esc_attr__( 'AwardThemes: Latest Project', 'woodest' ), $widget_ops );
	}

	/**
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$category = $instance['category'];
		$num_fetch = $instance['num_fetch'];
		
		$current_post = array(get_the_ID());		
		$query_args = array('post_type' => 'fw-portfolio', 'suppress_filters' => false);
		$query_args['posts_per_page'] = $num_fetch;
		$query_args['orderby'] = 'comment_count';
		$query_args['order'] = 'desc';
		$query_args['paged'] = 1;
		$query_args['fw-portfolio-category'] = $category;
		$query_args['ignore_sticky_posts'] = 1;
		$query_args['post__not_in'] = array(get_the_ID());
		$query = new WP_Query( $query_args );
		
		require_once (get_template_directory() .'/inc/widgets/latest-project/views/widget.php');
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
		$category = isset($instance['category'])? $instance['category']: '';
		$num_fetch = isset($instance['num_fetch'])? $instance['num_fetch']: 3;
		?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title :', 'woodest'); ?></label> 
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>		

		<!-- Post Category -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('category')); ?>"><?php esc_html_e('Category :', 'woodest'); ?></label>		
			<select class="widefat" name="<?php echo esc_attr($this->get_field_name('category')); ?>" id="<?php echo esc_attr($this->get_field_id('category')); ?>">
				<option value="" <?php if(empty($category)) echo esc_attr__(' selected ','woodest'); ?>><?php esc_html_e('All', 'woodest') ?></option>
				<?php 	
				$category_list = get_terms('fw-portfolio-category');
				foreach($category_list as $term){ ?>
					<option value="<?php echo esc_attr($term->slug); ?>" <?php if ($category == $term->slug){ echo esc_attr__(' selected ','woodest');} ?>><?php echo esc_attr($term->name); ?></option>				
					<?php 
				} ?>	
			</select> 
		</p>
			
		<!-- Show Num --> 
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('num_fetch')); ?>"><?php esc_html_e('Num Fetch :', 'woodest'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('num_fetch')); ?>" name="<?php echo esc_attr($this->get_field_name('num_fetch')); ?>" type="text" value="<?php echo esc_attr($num_fetch); ?>" />
		</p>
		<?php
	}
}