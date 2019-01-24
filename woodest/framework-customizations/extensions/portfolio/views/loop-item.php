<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$loop_data = get_query_var( 'fw_portfolio_loop_data' );

$thumbnails_params = $loop_data['image_sizes']['featured-image'];
?>
<li class="mix <?php echo ( ! empty( $loop_data['listing_classes'][ get_the_ID() ] ) ) ? $loop_data['listing_classes'][ get_the_ID() ] : ''; ?> portfolio-item">
	<div class="portfolio-img">
		<a href="<?php esc_url(the_permalink()); ?>">
			<?php
			$thumbnail_id = get_post_thumbnail_id();
			if( !empty( $thumbnail_id ) ) {
				$thumbnail    = get_post( $thumbnail_id );
				$image        = fw_resize( $thumbnail->ID, $thumbnails_params['width'], $thumbnails_params['height'], $thumbnails_params['crop'] );
				$thumbnail_title = $thumbnail->post_title;
			} else {
				$image = get_template_directory_uri()."/default.png";
				$thumbnail_title = $image;
			}
			?>
			<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($thumbnail_title); ?>"
			     width="<?php echo esc_attr($thumbnails_params['width']); ?>" height="<?php echo esc_attr($thumbnails_params['height']); ?>"/>
		</a>
		<h4 class="title-item"><a href="<?php esc_url(the_permalink()); ?>"><?php esc_attr(the_title()); ?></a></h4>

	</div>
</li>