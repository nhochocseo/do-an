<?php
/**
 * Enqueue scripts and styles.
 */
	function awardthemes_scripts() {
		// Add custom fonts, used in the main stylesheet.
		wp_enqueue_style( 'awardthemes-fonts', awardthemes_fonts_url(), array(), null );

		// Theme stylesheet.
		wp_enqueue_style( 'awardthemes-default', get_template_directory_uri() . '/assets/css/default.css' );  //Default WordPress Styling
		wp_enqueue_style( 'component', get_template_directory_uri() . '/assets/css/dl-menu/component.css' );  //Responsive Menu
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css' );  //Font Awesome
		wp_enqueue_style( 'awardthemes-loader', get_template_directory_uri() . '/assets/css/loader.css' );  //Loader CSS
		wp_enqueue_style( 'awardthemes-library', get_template_directory_uri() . '/assets/css/lib.css' );  //Lib CSS
		wp_enqueue_style( 'awardthemes-typography', get_template_directory_uri() . '/assets/css/themetypo.css' );  //Typography File
		wp_enqueue_style( 'awardthemes-shortcode', get_template_directory_uri() . '/assets/css/shortcode.css' );  //Shortcodes
		wp_enqueue_style( 'awardthemes-navigation-menu', get_template_directory_uri() . '/assets/css/navigation-menu.css' );  //Navigation menu css
		wp_enqueue_style( 'awardthemes-color', get_template_directory_uri() . '/assets/css/color.css' );  //Color CSS
		wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/css/dl-menu/modernizr.custom.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('dlmenu', get_template_directory_uri().'/assets/css/dl-menu/jquery.dlmenu.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_style( 'awardthemes-widget', get_template_directory_uri() . '/assets/css/widget.css' );  //Custom Widgets	
		wp_enqueue_style( 'awardthemes-style', get_stylesheet_uri() );
		wp_enqueue_style( 'awardthemes-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );  //Responsive CSS
		
		// add woocommerce style
		if(class_exists('WooCommerce')){
			wp_enqueue_style( 'awardthemes-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css' );  //WooCommerce CSS
		}
		
		// Load the html5 shiv.
		wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
		wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/jquery.waypoints.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('modernizer', get_template_directory_uri().'/assets/js/modernizer.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('pricefilter', get_template_directory_uri().'/assets/js/pricefilter.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('easing', get_template_directory_uri().'/assets/js/easing.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('appear', get_template_directory_uri().'/assets/js/appear.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl-carousel.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('animate', get_template_directory_uri().'/assets/js/animate.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('magnific-popup', get_template_directory_uri().'/assets/js/magnificpopup.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/jquery.counterup.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array( 'jquery' ), '1.0', true);
		wp_enqueue_script('awardthemes-functions', get_template_directory_uri().'/assets/js/functions.js', array( 'jquery' ), '1.0', true);
		
	}
	add_action( 'wp_enqueue_scripts', 'awardthemes_scripts' );
?>