<?php
get_header();
global $wp_query;
$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );
$ext_portfolio_settings = $ext_portfolio_instance->get_settings();

$taxonomy        = $ext_portfolio_settings['taxonomy_name'];
$term            = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy );
$term_id         = ( ! empty( $term->term_id ) ) ? $term->term_id : 0;
$categories      = fw_ext_portfolio_get_listing_categories( $term_id );

$args = array(
    'hierarchical'             => 1,
    'orderby'                  => 'id',
    'order'                    => 'DESC',
    'taxonomy'            		=> $ext_portfolio_settings['taxonomy_name'],
    'include'                  => '43,42,45',
); 

$categories = get_categories( $args );
$total = count((array)$categories);
if($total >= 3) {
	$trunggian = $categories[0];
	$categories[0] = $categories[1];
	$categories[1] = $categories[2];
	$categories[2] = $trunggian;
}
$listing_classes = fw_ext_portfolio_get_sort_classes( $wp_query->posts, $categories );
$loop_data       = array(
	'settings'        => $ext_portfolio_instance->get_settings(),
	'categories'      => $categories,
	'image_sizes'     => $ext_portfolio_instance->get_image_sizes(),
	'listing_classes' => $listing_classes
);
set_query_var( 'fw_portfolio_loop_data', $loop_data );
?>
<div class="container">
	<div class="content-area">
		<section id="primary" class="site-content portfolio-content">
			<div id="content" role="main">
				<header class="entry-header">
					<?php //fw_print($backup); fw_print($categories);fw_print($listing_classes);
					// if ( ! empty( $term ) ) {
					// 	echo '<h1 class="entry-title">' . $term->name . '</h1>';
					// } else {
					// 	echo '<h1 class="entry-title">' . esc_attr__( 'Sản phẩm', 'woodest' ) . '</h1>';
					// }
					?>

					<?php
					// if( function_exists('fw_ext_breadcrumbs') ) {
					// 	fw_ext_breadcrumbs();
					// }
					?>

				<!-- 	<?php if ( ! empty( $categories ) ) :  ?>
						<div class="wrapp-categories-portfolio">
							<ul id="categories-portfolio" class="portfolio-categories">
								<!-- <li class="filter categories-item active" data-filter="..category_43"><a
										href='#'><?php echo esc_attr__( 'Tất cả', 'woodest' ); ?></a></li> -->
								<!-- <?php foreach ( $categories as $category ) : ?>
									<span class="separator">/</span>
									<li class="filter categories-item"
									    data-showSp=".category_<?php echo esc_attr($category->term_id); ?>"><a
											href='#'><?php echo esc_attr($category->name); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div> -->
					<!-- <?php endif ?> -->

			<div class="list-category">
				<?php
				if( has_nav_menu('menu_portolio') ){
					echo '<div class="navbar-collapse collapse" id="navbar">';
					$args = array(
						'menu'=>'',
						'menu_class'=> 'nav navbar-nav',
						'menu_id'=> '',
						'container'=> 'ul',
						'container_class'=> '',
						'container_id'=> '',
						'fallback_cb'=> '',
						'before'=> '',
						'after'=> '',
						'link_before'=> '',
						'link_after'=> '',
						'echo'=> 'true',
						'depth'=> '0',
						'theme_location'=>'menu_portolio', 
						'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>', 	
						'item_spacing'=>'preserve'	 
					);
					wp_nav_menu( $args);
					echo '
				</div>
			</nav>'; // awardthemes-navigation
	}
				?>
				</header>
				<div class="entry-content">
					<section class="sanpham" id="Container-1">
						<?php if ( have_posts() ) : ?>
							<ul id="portfolio-list1" class="portfolio-list1">
								<?php
								while ( have_posts() ) : the_post();
									include(  fw()->extensions->get( 'portfolio' )->locate_view_path('loop-item') );
								endwhile;
								?>
							</ul>
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
						<div class="clear"></div>
					</section>
				</div>
		<div class="content" id="test-unit">
	<div class="container">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) { the_post();
					?>
					<div class="awardthemes-post-content">
						<?php get_template_part( 'template-parts/post/content', get_post_format()); ?>
					</div>
					<?php 
				}
				echo awardthemes_pagination($wp_query);
			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;
			?>
	</div><!-- #primary -->
</div><!-- .wrap -->
			</div>
			</div>
		</section>
	</div>
</div>
<?php
unset( $ext_portfolio_instance );
unset( $ext_portfolio_settings );
set_query_var( 'fw_portfolio_loop_data', '' );
get_sidebar( 'content' );
get_sidebar();
get_footer();