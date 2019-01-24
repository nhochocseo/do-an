<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$testimonials_style = isset( $atts['testimonials_style'] ) && $atts['testimonials_style'] !='' ? $atts['testimonials_style'] : '';
?>

<?php
	if($testimonials_style == 'normal-view'){ ?>
		<div class="container">
			<div class="testimonial-section">
				<div class="testimonial-carousel">
					<?php 
					foreach ( fw_akg( 'testimonials', $atts, array() ) as $testimonial ){ ?>
					
					<div class="testimonial-box">
						<p><?php echo esc_attr($testimonial['content']); ?></p>
						<div class="author-box">
							<?php echo wp_get_attachment_image($testimonial['author_avatar']['attachment_id'],array(60,60) ); ?>
							<h4><?php echo esc_attr($testimonial['author_name']); ?><span><?php echo esc_attr($testimonial['author_job']); ?></span></h4>
						</div>
					</div>
					<?php 
					} ?>
				</div>
			</div>
		</div>
		<?php	
	}else{ ?>
		<div class="testimonial-section2">
			<div class="testimonial-carousel2">
				<?php 
				foreach ( fw_akg( 'testimonials', $atts, array() ) as $testimonial ){ 
					?>
					<div class="testimonial-box">
						<div class="author-box">
							<h4><?php echo esc_attr($testimonial['author_name']); ?><span><?php echo esc_attr($testimonial['author_job']); ?></span></h4>
							<i class="fa fa-quote-left"></i>
						</div>
						<?php echo wp_get_attachment_image($testimonial['author_avatar']['attachment_id'],'full' ); ?>
						<p><?php echo esc_attr($testimonial['content']); ?></p>
					</div>
					<?php
				} ?>
			</div>
		</div>
		<?php	
	}
?>