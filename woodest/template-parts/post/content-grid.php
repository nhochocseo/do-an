<?php
/**
 * Template part for displaying posts with excerpts
 */
	global $post;
	global $post_builder_options;
	$comment_count = wp_count_comments( $post->ID );
	$comment_count = $comment_count->total_comments;

	$post_categories = wp_get_post_categories( $post->ID );
	$cats = array();
?>

	<article class="main-post" id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
		<?php 
		if(has_post_thumbnail()){ ?>
			<div class="entry-cover row">
				<a href="<?php echo esc_url(get_permalink()); ?>">
					<figure>
						<?php the_post_thumbnail('full' ); ?>
					</figure>
				</a>
			</div>
			<?php 
		} ?>
		<div class="main-content">
			<div class="title">
				<a href="<?php echo esc_url(get_permalink())?>"><?php echo substr(get_the_title(),0,100); ?></a>
			</div>
			<div class="content">
				<?php echo substr(get_the_content(),0,200); ?>
			</div>
		</div>

		</div> -->
	</article>