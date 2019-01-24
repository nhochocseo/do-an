<?php
/**
 * Template part for displaying a message that posts cannot be found
 */

?>
<section class="no-results not-found">
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( esc_attr__( 'Bạn đã sẵn sàng để đăng bài viết đầu tiên của bạn? <a href="%1$s"> Bắt đầu tại đây </a>.', 'woodest' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p><?php _e( 'Hiện tại chưa có nội dung ! xin vui lòng quay lại sau !', 'woodest' ); ?></p>
			<?php
				// get_search_form();
		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->