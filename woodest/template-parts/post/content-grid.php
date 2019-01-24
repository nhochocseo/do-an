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

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
		<?php 
		if(has_post_thumbnail()){ ?>
			<div class="entry-cover">
				<a href="<?php echo esc_url(get_permalink()); ?>">
					<figure>
						<?php the_post_thumbnail('full' ); ?>
					</figure>
				</a>
			</div>
			<?php 
		} ?>
<!-- 		<div class="entry-content grid-entry-content">
			<h3 class="entry-title">
				<a href="<?php echo esc_url(get_permalink())?>"><?php echo substr(get_the_title(),0,$post_builder_options['blog_num_title']); ?></a>
			</h3>
			<div class="post-date">
				<span><?php echo esc_attr(get_the_date('d'))?></span><?php echo esc_attr(get_the_date('M'))?>, <?php echo esc_attr(get_the_date('Y'))?>
			</div> 
			<div class="entry-meta test">
				<?php echo esc_attr__('By ','woodest'); ?>
				<div class="byline">
					<i class="fa fa-user"></i>
					<?php echo the_author_posts_link(); ?>
				</div>
				<div class="post-comment">
					<i class="fa fa-comment-o"></i>
					<a href="<?php echo esc_url(get_permalink()); ?>#respond">
						<?php echo esc_attr($comment_count);?> 
						<?php echo esc_attr__('Comments','woodest'); ?>
					</a>
				</div>
			</div>
			<p><?php echo substr(get_the_content(),0,$post_builder_options['blog_num_descrp']); ?></p>
			<a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_attr__('Chi tiết','woodest'); ?><i class="fa fa-long-arrow-right"></i></a>
		</div> -->
	</article>