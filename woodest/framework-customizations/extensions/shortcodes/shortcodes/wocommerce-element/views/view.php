<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	
	$page_class = isset( $atts['page_class'] ) ? $atts['page_class'] : '';
	$woo_category = isset( $atts['woo_category'] ) ? $atts['woo_category'] : '';
	$woo_size = isset( $atts['woo_size'] ) ? $atts['woo_size'] : '';
	$woo_titles = isset( $atts['woo_titles'] ) ? $atts['woo_titles'] : '';
	$woo_fetch = isset( $atts['woo_fetch'] ) ? $atts['woo_fetch'] : '';
	$woo_orderby = isset( $atts['woo_orderby'] ) ? $atts['woo_orderby'] : '';
	$woo_order = isset( $atts['woo_order'] ) ? $atts['woo_order'] : '';
	$woo_pagination = isset( $atts['woo_pagination'] ) ? $atts['woo_pagination'] : '';
	
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'product',
		'posts_per_page' => $woo_fetch,
		'orderby' => $woo_orderby,
		'order' => $woo_order,
		'paged' => $paged,
		'tax_query' => array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'product_cat',
				'field'    => 'post_id',
				'terms'    => $woo_category,
			),
			array(
				'taxonomy' => 'post_tag',
				'field'    => 'post_id',
				'terms'    => '',
			),
		)
	);
	
	$the_query = new WP_Query( $args );
	?>
	
	<div class="tm-shop-list">
		<?php
		$get_currency = get_woocommerce_currency_symbol('');
		if($get_currency == ''){
			$get_currency = get_option('woocommerce_currency');
		}	
			
		$current_size = 0;
		while($the_query->have_posts()){ $the_query->the_post();
			global $post,$product;

			$prices_precision = wc_get_price_decimals();
			$price = wc_format_decimal( $product->get_price(), $prices_precision );
			$price_regular = wc_format_decimal( $product->get_regular_price(), $prices_precision );
			$price_sale = $product->get_sale_price() ? floatval(wc_format_decimal( $product->get_sale_price(), $prices_precision )) : null;
			if(empty($price_sale)){
				$price_sale = $price_regular;
			}
			$rating_count = $product->get_rating_count();
			$review_count = $product->get_review_count();
			$average      = $product->get_average_rating();
		
		
			?>	
			
			<div class="col-sm-6 col-xs-6 <?php echo esc_attr($woo_size); ?>">
				<div class="tm-product-box">
					<div class="product-image">
						<div class="image-hover">
							<figure>
							<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
							</figure>
						</div>
					</div>
					<div class="product-details">
						<h4 class="product-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_attr(substr(get_the_title(),0,$woo_titles)); ?></a></h4>
						<div class="col-sm-6 nopadding">
							<div class="product-price">
								<span class="old"><?php echo esc_attr($get_currency); ?> <?php echo esc_attr($price_sale); ?></span> <span class="new"><?php echo esc_attr($get_currency); ?> <?php echo esc_attr($price); ?></span>
							</div>
						</div>
						<div class="col-sm-6 nopadding">
							<?php
							if ( $product ) {
								$quantity = 1;
								$class = implode( ' ', array_filter( array(
									'button',
									'product_type_' . $product->get_type(),
									$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
									$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
								) ) );
								echo
								apply_filters( 'woocommerce_loop_add_to_cart_link',
								sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s tm-btn btn-blue">%s Add To Cart</a>',
									esc_url( $product->add_to_cart_url() ),
									esc_attr( isset( $quantity ) ? $quantity : 1 ),
									esc_attr( $product->get_id() ),
									esc_attr( $product->get_sku() ),
									esc_attr( isset( $class ) ? $class : 'button' ),
									'<i class="fa fa-shopping-cart"></i>'
								),
								$product );
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<?php
			$current_size++;
		}
		?>
	</div>
	<?php
	if(isset($woo_pagination) && $woo_pagination == 'enable'){
		echo awardthemes_pagination($the_query);
	}
	
	wp_reset_postdata(); ?>