<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Woodest
 */

get_header(); ?>

	<!-- 404 -->
	<div class="tm-404">
		<h1><?php echo esc_attr__('404','woodest');?></h1>
		<h3><?php echo esc_attr__('Something went wrong','woodest');?></h3>
		<p><?php echo esc_attr__('The page you are looking for might have been removed or is temporarily unavailable.','woodest');?></p>
		<a class="tm-btn btn-blue" href="<?php echo esc_url(home_url('/'))?>"><?php esc_html_e('go home','woodest');?></a>
		<div class='clearfix'></div>
	</div>
	<!-- /404 -->

<?php get_footer(); ?>