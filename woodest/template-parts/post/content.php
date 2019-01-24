<?php
/**
 * Template part for excerpt
 */
	global $post;
	$comment_count = wp_count_comments( $post->ID );
	$comment_count = $comment_count->total_comments;

	$post_categories = wp_get_post_categories( $post->ID );
	$custom_count_cats = 0;
	$count_post_categories = count($post_categories);
	$cats = array();
?>
<div class="blog-cong-trinh">
	<article id="post-<?php the_ID(); ?>" <?php post_class('type-post'); ?>>
		<div class="row">
			<div class="col-md-3">
				<?php 
				if(has_post_thumbnail()){ ?>
						<a href="<?php echo esc_url(get_permalink()); ?>">
							<?php the_post_thumbnail('full' ); ?>
						</a>
					<?php 
				} ?>
			</div>
			<div class="col-md-9">
				<a href="<?php echo esc_url(get_permalink());?>"><?php the_title(); ?></a>
			<div class="blog-content">
				<?php the_excerpt(); ?>
				<!-- <a href="<?php echo esc_url(get_permalink());?>" title="<?php echo esc_attr__('Chi tiết','woodest'); ?>"><?php echo esc_attr__('Chi tiết','woodest'); ?> <i class="fa fa-arrow-circle-o-right"></i></a> -->
				</div>
			</div>
		</div>
		
	</article>
</div>