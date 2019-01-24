<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
	<div class="client-section">
		<div class="client-carousel">
			<?php
			foreach ( fw_akg( 'clients', $atts, array() ) as $client ){ ?>
				<a target="<?php echo esc_attr($client['image_target']); ?>" href="<?php echo esc_attr($client['external_link']); ?>">
					<?php echo wp_get_attachment_image($client['client_image']['attachment_id'],'full' ); ?>
				</a>
				<?php
			}
			?>
		</div>
	</div>