<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 */

	$fw_ext_projects_gallery_image = fw()->extensions->get( 'portfolio' )->get_config( 'image_sizes' );
	$fw_ext_projects_gallery_image = $fw_ext_projects_gallery_image['gallery-image'];

	$allowed_html = array(
		'p' => array('class' => array(),'id' => array()),
		'i' => array(),
		'em' => array(),
		'strong' => array(),
	);

get_header(); ?>
	<div class="container project-container">
		<div class="row">
			<div id="content" class="site-content project-content" role="main">
				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					global $post;
					$portfolio_meta = fw_get_db_post_option($post->ID);
					
						if(	!empty($portfolio_meta['project-client-name'])||
							!empty($portfolio_meta['project-date'])||
							!empty($portfolio_meta['project-location'])||
							!empty($portfolio_meta['project-category'])||
							!empty($portfolio_meta['project-team'])||
							!empty($portfolio_meta['project-price'])||
							!empty($portfolio_meta['project-client-requirement'])||
							!empty($portfolio_meta['project-about-team'])
						){
							$column_class = 'col-md-8';
						}else{
							$column_class = 'col-md-12';
						}
				?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<div class="entry-content">
							<div class="<?php echo esc_attr($column_class); ?> col-sm-12 col-xs-12 project-detail-img-box">
								<?php echo get_the_post_thumbnail( $post->ID, 'full');
								
								$thumbnails = fw_ext_portfolio_get_gallery_images();

								$captions = array();
								if ( ! empty( $thumbnails ) ){
									?>
									<section class="wrap-nivoslider theme-default">
									
										<div id="slider" class="nivoslider">
											<?php foreach ( $thumbnails as $thumbnail ) :
												$attachment = get_post( $thumbnail['attachment_id'] );

												$captions[ $thumbnail['attachment_id'] ] = $attachment->post_title;

												//$image = fw_resize( $thumbnail['attachment_id'], $fw_ext_projects_gallery_image['width'], $fw_ext_projects_gallery_image['height'], $fw_ext_projects_gallery_image['crop'] );
												$image = wp_get_attachment_image_src($thumbnail['attachment_id'],'full');
												?>
												
												<img src="<?php echo esc_url($image[0]); ?>"
													 class="nivoslider-image"
													 alt="<?php echo esc_attr($attachment->post_title) ?>"
													 title="#nivoslider-caption-<?php echo esc_attr($attachment->ID) ?>"
													 width="<?php echo esc_attr($fw_ext_projects_gallery_image['width']) ?>"
													 height="<?php echo esc_attr($fw_ext_projects_gallery_image['height']) ?>"
													/>
											<?php endforeach ?>
										</div>
									</section>
									<?php 
								} ?>
							</div>
							<?php
							if(	!empty($portfolio_meta['project-client-name'])||
								!empty($portfolio_meta['project-date'])||
								!empty($portfolio_meta['project-location'])||
								!empty($portfolio_meta['project-category'])||
								!empty($portfolio_meta['project-team'])||
								!empty($portfolio_meta['project-price'])||
								!empty($portfolio_meta['project-client-requirement'])||
								!empty($portfolio_meta['project-about-team'])
							){ ?>
								<div class="col-md-4 col-sm-12 col-xs-12 project-detail-sidebar">
									<div class="project-detail-box">
										<h3><?php echo esc_attr__('Thông tin sản phẩm','woodest'); ?></h3>
										<?php 
										if(!empty($portfolio_meta['project-client-name'])){ ?>
											<p><b><?php echo esc_attr__('Client','woodest'); ?></b> : <?php echo esc_attr($portfolio_meta['project-client-name']); ?></p>
											<?php 
										} 
										if(!empty($portfolio_meta['project-date'])){ ?>
											<p><b><?php echo esc_attr__('Date','woodest'); ?></b> : <?php echo esc_attr($portfolio_meta['project-date']); ?></p>
											<?php 
										} 
										if(!empty($portfolio_meta['project-location'])){ ?>
											<p><b><?php echo esc_attr__('Place','woodest'); ?></b> : <?php echo esc_attr($portfolio_meta['project-location']); ?></p>
											<?php 
										}  
										if(!empty($portfolio_meta['project-category'])){ ?>
											<p><b><?php echo esc_attr__('Category','woodest'); ?></b> : <?php echo esc_attr($portfolio_meta['project-category']); ?></p>
											<?php 
										} 
										if(!empty($portfolio_meta['project-team'])){ ?>
											<p><b><?php echo esc_attr__('Team','woodest'); ?></b> : <?php echo esc_attr($portfolio_meta['project-team']); ?></p>
											<?php 
										} 
										if(!empty($portfolio_meta['project-price'])){ ?>
											<p><b><?php echo esc_attr__('Budget','woodest'); ?></b> : <?php echo esc_attr($portfolio_meta['project-price']); ?></p>
											<?php 
										} ?>
									</div>
									<?php 
									if(!empty($portfolio_meta['project-client-requirement'])){ ?>
										<div class="project-content">
											<h3><?php echo esc_attr__('Client Requiremnt','woodest'); ?></h3>
											<?php echo wp_kses($portfolio_meta['project-client-requirement'],$allowed_html); ?>
										</div>
										<?php 
									}
									
									if(!empty($portfolio_meta['project-about-team'])){ ?>
										<div class="project-content">
											<h3><?php echo esc_attr__('About Our Team','woodest'); ?></h3>
											<p><?php echo esc_attr($portfolio_meta['project-about-team']); ?></p>
										</div>
										<?php 
									} ?>
								</div>	
								<?php 
							}
							?>
							<div class="col-md-12">
								<h3><?php echo esc_attr__('Mô tả','woodest'); ?></h3>
								<?php
								the_content();
								?>
							</div>
						</div>
						<!-- .entry-content -->
					</article><!-- #post-## -->
				<?php endwhile; ?>
			</div>
			<!-- #content -->
		</div>
		<!-- #primary -->
		<?php get_sidebar( 'content' ); ?>
	</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
?>