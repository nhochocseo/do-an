<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
	<div class="row">
		<div id="slider-section" class="slider-section slider-section2 no-padding">
			<div id="photo_slider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php
					$slide_to = 0;
					
					foreach ( fw_akg( 'slides', $atts, array() ) as $slide ){ ?>
						<li data-target="#photo_slider" data-slide-to="<?php echo esc_attr($slide_to); ?>"></li>
						<?php
						$slide_to++;
					}
					?>
				</ol>
				<div class="carousel-inner" role="listbox">
					<?php
					$slide_count = 0;
					
					foreach ( fw_akg( 'slides', $atts, array() ) as $slide ){
						if($slide_count == 0){ $slide_class = 'active'; }else { $slide_class = '';}
						$slide_count++;
						?>
						<div class="item <?php echo esc_attr($slide_class); ?>">
							<div class="carousel-caption">
								<div class="container">
									<div class="col-md-10 col-sm-10 col-xs-12">
										<h2><?php echo esc_attr($slide['slide_title']); ?></h2>
										<p><?php echo esc_attr($slide['content']); ?></p>
										<?php 
										if(isset($slide['get_in_touch_text']) && $slide['get_in_touch_text'] <> ''){ ?>
											<a href="<?php echo esc_url($slide['get_in_touch_url']); ?>"><?php echo esc_attr($slide['get_in_touch_text']); ?></a>
											<?php
										} 
										if(isset($slide['purchase_now_text']) && $slide['purchase_now_text'] <> ''){	?>
											<a class="purchase" href="<?php echo esc_url($slide['purchase_now_url']); ?>"><?php echo esc_attr($slide['purchase_now_text']); ?></a>
											<?php
										} 
										?>
									</div>
								</div>
							</div>
							<?php
							echo wp_get_attachment_image($slide['slide_image']['attachment_id'],'full' );
							?>
						</div>
						<?php
					}
					?>
				</div>				
				<a class="left carousel-control" href="#photo_slider" role="button" data-slide="prev">
					<!-- <span class="fa fa-angle-left" aria-hidden="true"></span> -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/back.png">
				</a>
				<a class="right carousel-control" href="#photo_slider" role="button" data-slide="next">
					<!-- <span class="fa fa-angle-right" aria-hidden="true"></span> -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/login_next_icon_544837.png">
				</a>
				<span class="image-icon">
					<?php echo wp_get_attachment_image($atts['image_icon']['attachment_id'],'full' ); ?>
				</span>
			</div>		
		</div>
	</div>