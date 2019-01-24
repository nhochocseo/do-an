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
<div class="blogfullwidth">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<div class="entry-meta">
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
				<div class="post-like">
					<i class="fa fa-list"></i>
					<?php 
					if(isset($post_categories) && $post_categories <> ''){
						foreach($post_categories as $c){
							$cat = get_category( $c ); ?>
							<a href="<?php echo esc_url(get_category_link($c)); ?>"><?php echo esc_attr($cat->name); ?></a><?php echo ' '; ?>
							<?php
						}	
					}
					?>
				</div>
			</div>
			<h3 class="entry-title">
				<a href="<?php echo esc_url(get_permalink()); ?>">
					<span class="post-sticky-label">
						<i class="fa fa-bookmark"></i>
					</span>
					<?php the_title(); ?>
				</a>
			</h3>
		</div>
		<?php 
		if(has_post_thumbnail()){ ?>
			<div class="entry-cover">
				<a href="<?php echo esc_url(get_permalink()); ?>">
					<div class="col-md-1 text-center date-category">
					   <i class="fa fa-file-text fa-4x"></i>           
					   <p><?php echo esc_attr(get_the_date(get_option('date_format'))); ?></p>
					</div>
					<?php the_post_thumbnail('full' ); ?>
				</a>
			</div>
			<?php 
		} ?>
		<div class="entry-content">
			<div class="awardthemes-blog-content">
				<?php the_excerpt(); ?>
			</div>	
			<a class="blogbtn" href="<?php echo esc_url(get_permalink());?>" title="<?php echo esc_attr__('Chi tiết','woodest'); ?>"><?php echo esc_attr__('Chi tiết','woodest'); ?> <i class="fa fa-arrow-circle-o-right"></i></a>
		</div>
	</article>
</div>