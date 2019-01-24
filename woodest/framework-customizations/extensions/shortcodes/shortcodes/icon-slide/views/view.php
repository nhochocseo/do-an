<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="image-slide">
	<?php echo wp_get_attachment_image($atts['image']['attachment_id'],'full' ); ?>
</div>