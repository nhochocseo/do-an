<?php
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function awardthemes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/woodest
		 * If you're building a theme based on Award Themes, use a find and replace
		 * to change 'woodest' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'woodest' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
			'congtrinh',
		) );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'awardthemes-featured-image', 1200, 700, true );
		add_image_size( 'awardthemes-blog-grid', 350, 436, true );
		add_image_size( 'awardthemes-team-listing', 250, 340, true );
		add_image_size( 'awardthemes-thumbnail-avatar', 100, 100, true );
		add_image_size( 'awardthemes-services-featured-image', 540, 425, true );
		add_image_size( 'awardthemes-portfolio-thumb', 480, 310, true );
		add_image_size( 'awardthemes-services-background-image', 370, 370, true );
		add_image_size( 'awardthemes-services-index2', 390, 428, true );
		add_image_size( 'awardthemes-portfolio-modern', 390, 290, true );

		// Set the default content width.
		$GLOBALS['content_width'] = 525;

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'header_menu'    => esc_attr__( 'Header Menu', 'woodest' ),
			'footer_menu'    => esc_attr__( 'Footer Menu', 'woodest' ),
			'menu_portolio'    => esc_attr__( 'menu_portolio', 'woodest' ),
		) );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, and column width.
		 */
		add_editor_style( array( 'assets/css/editor-style.css', awardthemes_fonts_url() ) );
		
	}
	add_action( 'after_setup_theme', 'awardthemes_setup' );
	
	require_once(get_template_directory() . '/inc/plugins/tgm_plugins.php');
	
	//include all widgets
	
	require_once get_template_directory() .'/inc/widgets/working-hour/class-widget-working-hour.php';
	require_once get_template_directory() .'/inc/widgets/contact/class-widget-contact.php';
	require_once get_template_directory() .'/inc/widgets/download-pdf/class-widget-download-pdf.php';
	require_once get_template_directory() .'/inc/widgets/latest-project/class-widget-latest-project.php';
	require_once get_template_directory() .'/inc/widgets/successful-project/class-widget-successful-project.php';
	require_once get_template_directory() .'/inc/widgets/newsletter/class-widget-newsletter.php';
	require_once get_template_directory() .'/inc/widgets/contact-info/class-widget-contact-info.php';
	require_once get_template_directory() .'/inc/widgets/recent-posts/class-widget-recent-posts.php';
	require_once get_template_directory() .'/inc/widgets/services-list/class-widget-services-list.php';
	
	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 * Priority 0 to make it available to lower priority callbacks.
	 *
	 * @global int $content_width
	 */
	function awardthemes_content_width() {

		$content_width = $GLOBALS['content_width'];

		// Get layout.
		$page_layout = get_theme_mod( 'page_layout' );

		// Check if layout is one column.
		if ( 'one-column' === $page_layout ) {
			if ( awardthemes_is_frontpage() ) {
				$content_width = 644;
			} elseif ( is_page() ) {
				$content_width = 740;
			}
		}

		// Check if is single post and there is no sidebar.
		if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
			$content_width = 740;
		}

		/**
		 * Filter Award Themes content width of the theme.
		 *
		 * @since Award Themes 1.0
		 *
		 * @param int $content_width Content width in pixels.
		 */
		$GLOBALS['content_width'] = apply_filters( 'awardthemes_content_width', $content_width );
	}
	add_action( 'template_redirect', 'awardthemes_content_width', 0 );
	
	//Deregister the WooCommerce Style File
	add_action('wp_enqueue_scripts','awardthemes_deregister_scripts');
	function awardthemes_deregister_scripts(){
		// WooCommerce Style
		wp_deregister_style('woocommerce-general');
	}
	
	if ( ! function_exists( 'awardthemes_edit_link' ) ) :
	/**
	 * Returns an accessibility-friendly link to edit a post or page.
	 *
	 * This also gives us a little context about what exactly we're editing
	 * (post or page?) so that users understand a bit more where they are in terms
	 * of the template hierarchy and their content. Helpful when/if the single-page
	 * layout with multiple posts/pages shown gets confusing.
	 */
	function awardthemes_edit_link() {
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_attr__( 'Edit', 'woodest' ).'<span class="screen-reader-text"> "%s"</span>',
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
	endif;

	if(class_exists('WooCommerce')){
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		
		add_action( 'wp_enqueue_scripts', 'dequeue_woocommerce_cart_fragments', 11); 
		function dequeue_woocommerce_cart_fragments() {
			if (is_front_page() ) wp_dequeue_script('wc-cart-fragments'); 
		}
	}
	
	// a comment callback function to create comment list
	if ( !function_exists('awardthemes_comment_list') ){
		function awardthemes_comment_list( $comment, $args, $depth ){
			$GLOBALS['comment'] = $comment;
			switch ( $comment->comment_type ){
				case 'pingback' :
				case 'trackback' :
				?>	
				<li <?php comment_class('pingbacks-custom'); ?> id="comment-<?php comment_ID(); ?>">
					<p>
						<?php esc_html_e( 'Pingback :', 'woodest' ); ?> 
						<?php comment_author_link(); ?>
					</p>
				<?php break; ?>

				<?php default : global $post; ?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
					<div class="media">
						<div class="media-left">
							<a href="<?php echo esc_url(get_permalink(get_current_user_id())); ?>"><?php echo get_avatar( $comment, 98,'','',array('class'=>'media-object') ); ?></a>
						</div>
						<div class="media-body">
							<div class="media-content">
								<h4 class="media-heading"><?php echo get_comment_author_link(); ?></h4>
								<span><?php echo esc_attr(get_comment_date()); ?>  --  <strong><?php comment_time( 'H:i:s a' );?></strong></span>
								<?php comment_text(); 
								if( '0' == $comment->comment_approved ){ ?>
									<p class="comment-awaiting-moderation"><?php echo esc_attr__( 'Your comment is awaiting moderation.', 'woodest' ); ?></p>
									<?php
								} ?>
								<div class="comments-edit-reply">
									<?php
									edit_comment_link( esc_attr__( 'Edit', 'woodest' ), '<div class="edit-link">', '</div>' ); 
									comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
								</div>
							</div>
						</div>
					</div>		
				<?php
				break;
			}
		}
	}
	
	//Define SSL
	
	if(is_ssl()){
		define('AWT_HTTP', 'https://');
	}else{
		define('AWT_HTTP', 'http://');
	}
	
	//Theme Options CSS
	
	function awardthemes_custom_styles_print(){
		require_once ( get_template_directory() . '/inc/color-patterns.php'); //Theme Scripts
	}

	add_action('wp_footer','awardthemes_custom_styles_print');

	
	//Header Background function
	if (!function_exists('awardthemes_header_background')){	
		function awardthemes_header_background(){
			//Custom background Support	
			$args = array(
				'color-scheme'          => '',
				'default-image'          => '',
				'wp-head-callback'       => '_custom_background_cb',
				'admin-head-callback'    => '',
				'admin-preview-callback' => ''
			);

			//Custom Header Support	
			$defaults = array(
				'default-image'          => '',
				'random-default'         => false,
				'width'                  => 950,
				'height'                 => 200,
				'flex-height'            => false,
				'flex-width'             => false,
				'default-text-color'     => '',
				'header-text'            => true,
				'uploads'                => true,
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			);
			global $wp_version;
			if ( version_compare( $wp_version, '3.4', '>=' ) ){ 
				add_theme_support( 'custom-background', $args );
				add_theme_support( 'custom-header', $defaults );
			}
		}
	}
	awardthemes_header_background();
	
	// modify a WordPress gallery style
	add_filter('gallery_style', 'awardthemes_gallery_style');
	if( !function_exists('awardthemes_gallery_style') ){
		function awardthemes_gallery_style( $style ){
			return str_replace('border: 2px solid #cfcfcf;', 'border-width: 1px; border-style: solid;', $style);
		}
	}
	
	// turn the page comment off by default
	add_filter( 'wp_insert_post_data', 'awardthemes_page_default_comments_off' );
	if( !function_exists('awardthemes_page_default_comments_off') ){
		function awardthemes_page_default_comments_off( $data ) {
			if( $data['post_type'] == 'page' && $data['post_status'] == 'auto-draft' ) {
				$data['comment_status'] = 0;
			} 

			return $data;
		}
	}
	
	function awardthemes_video_controls( $settings ) {
		$settings['l10n']['play'] = '<span class="screen-reader-text">' . esc_attr__( 'Play background video', 'woodest' ) . '</span>' . awardthemes_get_svg( array( 'icon' => 'play' ) );
		$settings['l10n']['pause'] = '<span class="screen-reader-text">' . esc_attr__( 'Pause background video', 'woodest' ) . '</span>' . awardthemes_get_svg( array( 'icon' => 'pause' ) );
		return $settings;
	}
	add_filter( 'header_video_settings', 'awardthemes_video_controls' );
	
	// rewrite permalink rule upon theme activation
	add_action( 'after_switch_theme', 'awardthemes_flush_rewrite_rules' );
	if( !function_exists('awardthemes_flush_rewrite_rules') ){
		function awardthemes_flush_rewrite_rules() {
			global $pagenow, $wp_rewrite;
			if ( 'themes.php' == $pagenow && isset( $_GET['activated'] ) ){
				$wp_rewrite->flush_rules();
			}
		}
	}
	
	// Related Posts Function
	function woodest_related_posts($post_id) {
		global $post,$woodest_theme_option;
		$tags = wp_get_post_tags( $post_id );		
		$tag_arr = '';
		if($tags) {
			foreach( $tags as $tag ) {
				$tag_arr .= $tag->slug . ',';
			}
			if( !empty($tag_arr)){
				$args['tax_query'] = array('relation' => 'OR');
				
				if( !empty($tag_arr)){
					array_push($args['tax_query'], array('terms'=>explode(',', $tag_arr), 'taxonomy'=>'post_tag', 'field'=>'slug'));
				}				
			}
			
			$args['post_type'] = 'post';
			$args['numberposts'] = '3';
			$args['post__not_in'] = array($post_id);
			
			$related_posts = get_posts( $args );			
			if($related_posts) {
				echo '<div class="related-post">';
				echo '<h5>'.esc_attr__('Recommended For You','woodest').'</h5>';
				echo '<div class="row">';
					foreach ( $related_posts as $post ) : setup_postdata( $post );
					$image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'awardthemes-portfolio-thumb');
					
					$comment_count = wp_count_comments( $post->ID );
					$comment_count = $comment_count->total_comments;
					
					if(!empty($image_src)){ ?>    
					<div class="gt_news_slider col-md-4 col-sm-4">
						<div class="item">
							<div class="gt_blog_wrap">
								<figure>
									<img alt="<?php the_title(); ?>" src="<?php echo esc_url($image_src[0])?>">
								</figure>
								<div class="gt_blog_des_wrap">
									<div class="entry-meta test">
										<div class="byline">
											<i class="fa fa-user"></i>
											<?php the_author(); ?>
										</div>
										<div class="post-comment">
											<i class="fa fa-comment-o"></i>
											<a href="<?php echo esc_url(get_permalink()); ?>#respond">
												<?php echo esc_attr($comment_count);?> 
												<?php echo esc_attr__('Comments','woodest'); ?>
											</a>
										</div>
									</div>
									<h5><a href="<?php echo esc_url(get_permalink())?>"><?php echo esc_attr(get_the_title());?></a></h5>
								</div>
							</div>
						</div>
					</div>
					<?php }else{ ?>
					<div class="gt_news_slider col-md-4 col-sm-4">
						<div class="item">
							<div class="gt_blog_wrap">
								<div class="gt_blog_des_wrap">
									<div class="entry-meta test">
										<div class="byline">
											<i class="fa fa-user"></i>
											<?php echo the_author_posts_link(); ?>
										</div>
										<div class="post-comment">
											<i class="fa fa-comment-o"></i>
											<a href="<?php echo esc_url(get_permalink()); ?>#respond">
												<?php echo esc_attr($comment_count);?> 
												<?php echo esc_attr__('Comments','woodest'); ?>
											</a>
										</div>
									</div>
									<h5><a href="<?php echo esc_url(get_permalink())?>"><?php echo esc_attr(get_the_title());?></a></h5>
								</div>
							</div>
						</div>
					</div> <?php
					}
					endforeach;
					echo '</div>';
				echo '</div>';
			} 
			
			wp_reset_postdata();
	
		}
	}
	
?>