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
<!-- <div class="blogfullwidth">
	<article id="post-<?php the_ID(); ?>" <?php post_class('type-post'); ?>>
		<div class="entry-content">
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
					   <p><?php echo esc_attr(get_the_date(get_option('date_format'))); ?></p>
					</div>
					<?php the_post_thumbnail('full' ); ?>
				</a>
			</div>
			<?php 
		} ?>
	</article>
</div> -->

<div class="item-video">
   <div class="item_inner">
      <div>
         <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title(); ?>" rel="nofollow" class="item-img">
         	<?php 
				if(has_post_thumbnail()){
					the_post_thumbnail('full' );
				}
				else {
					$image = get_template_directory_uri()."/default.png";
				?>
         			<img src="<?php echo esc_url($image); ?>" alt=" ">
			<?php
				}
			?>
         </a>
      </div>
      <a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title(); ?>" class="name"><span><?php the_title(); ?></span></a>
      <div class="clear"></div>
   </div>
</div>