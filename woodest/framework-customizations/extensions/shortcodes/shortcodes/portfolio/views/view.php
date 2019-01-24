<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	global $post_builder_options;
	
	$page_class = isset( $atts['page_class'] ) ? $atts['page_class'] : '';
	$portfolio_category = isset( $atts['portfolio_category'] ) ? $atts['portfolio_category'] : '';
	$portfolio_layout = isset( $atts['portfolio_layout'] ) ? $atts['portfolio_layout'] : '';
	$portfolio_title_ch = isset( $atts['portfolio_title_ch'] ) ? $atts['portfolio_title_ch'] : '';
	$portfolio_fetch = isset( $atts['portfolio_fetch'] ) ? $atts['portfolio_fetch'] : '';
	$portfolio_orderby = isset( $atts['portfolio_orderby'] ) ? $atts['portfolio_orderby'] : '';
	$portfolio_order = isset( $atts['portfolio_order'] ) ? $atts['portfolio_order'] : '';
	
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'fw-portfolio',
		'posts_per_page' => $portfolio_fetch,
		'orderby' => $portfolio_orderby,
		'paged' => $paged,
		'tax_query' => array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'fw-portfolio-category',
				'field'    => 'post_id',
				'terms'    => $portfolio_category,
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
	<div id="portfolio-section" class="portfolio-section portfolio-4-column">
		<div class="filter-button-group button-group portfolio-categories no-left-padding sorting-menu" style="display: none;">
			<button class="button is-checked" data-filter="*">Tất cả</button>
			<?php 
			foreach($portfolio_category as $category){
				$term = get_term_by('id', $category, 'fw-portfolio-category');
				?>
				<button class="button" data-filter=".goto-<?php echo esc_attr($term->term_id); ?>"><?php echo esc_attr($term->name); ?></button>
				<?php 
			}  ?>
		</div>
		<div class=" row grid isotope items">
				<?php 
				while($the_query->have_posts()){ 
					$the_query->the_post();
					global $post;
					
					$portfolio_meta = fw_get_db_post_option($post->ID);
					
					$image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'awardthemes-portfolio-thumb');
					
					$categories = wp_get_post_terms( $post->ID, 'fw-portfolio-category' );
					$cats = '';
					$cat_name = '';
					if($categories <> ''){
						foreach ( $categories as $category ) {
							$cats .= 'goto-'.esc_attr($category->term_id).' ';
							$cat_name .= esc_attr($category->name).' ';
						}
					}else{
						$cats = '';
					}
					$tags_terms = wp_get_post_terms( $post->ID, 'fw-portfolio-tag' );
					$tags = '';
					$tag_name = '';
					if($tags_terms <> ''){
						foreach ( $tags_terms as $tags_term ) {
							$tags .= esc_attr($tags_term->term_id).' ';
							$tag_name .= '<a href="'.esc_url(get_permalink($tags_term->term_id)).'" title="'.esc_attr($tags_term->name).'">'.esc_attr($tags_term->name).'</a> ';
						}
					}else{
						$tag_name = '';
					}
					$allowed_html = array(
						'a'=>array('href'=>array(),'title'=>array(),'class'=>array(),)
					);
					?>
					
					<div class="element-item <?php echo esc_attr($portfolio_layout); ?> col-sm-4 col-xs-6 no-padding portfolio-box <?php echo esc_attr($cats); ?>">				
						<?php echo get_the_post_thumbnail($post->ID, 'awardthemes-portfolio-thumb'); ?>
						<div class="hover-detail">
							<div class="links">
								<a href="<?php echo esc_url($image_src[0]); ?>" class="zoom" title="Zoom"><i class="fa fa-search"></i></a>
								<?php 
								if(isset($portfolio_meta['project-detail-page']) && $portfolio_meta['project-detail-page'] == 'disable'){
									
								}else{ ?>
									<a href="<?php echo esc_url(get_permalink()); ?>" title="Link"><i class="fa fa-link"></i></a>
									<?php 
								} ?>
							</div>
							<div class="project-title">
								<h3><?php echo esc_attr(substr(get_the_title(),0,$portfolio_title_ch)); ?></h3>
								<div class="categories-link">
									<?php echo  sprintf($tag_name,$allowed_html); ?>
								</div>
							</div>
						</div>
					</div>
					<?php
					$cats = '';
					$tag_name = '';
				}
				?>
		</div>			
	</div>
	<?php wp_reset_postdata(); ?>