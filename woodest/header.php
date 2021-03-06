<?php
/**
 * The header for our theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="Referrer" content="no-referrer" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!-- <script src='https://www.google.com/recaptcha/api.js?render=6LcEIH8UAAAAAIl0GG602F3Uy9rdKel0ci1tEGQN'></script> -->
		<?php 
		
		wp_head(); 
		?>
	</head>
	<body <?php body_class(); ?>>
		<div class="body-wrapper" data-home="<?php echo esc_url(home_url('/')); ?>">
			<?php get_template_part( 'template-parts/header/header', 'functions' ); ?>
			<?php get_template_part( 'template-parts/header/sub', 'headers' ); ?>
			<div class="awardthemes-content">