<?php
/**
 * The template for displaying all single posts
 */

	get_header();
	
	if (function_exists('fw_get_db_settings_option')) {
		$enable_social_share = fw_get_db_settings_option('enable_social_share');	
	} else{
		$enable_social_share = '';
	}

 ?>

<div class="content">
	<div class="container">
		<div class="blog-full-single single-detail">
			<?php 
			while ( have_posts() ){ the_post();
				global $post;
				
				$comment_count = wp_count_comments( $post->ID );
				$comment_count = $comment_count->total_comments;

				$post_categories = wp_get_post_categories( $post->ID );
				$custom_count_cats = 0;
				$count_post_categories = count($post_categories);
				$post_tags = wp_get_post_tags( $post->ID );
				$custom_count_tags = 0;
				$count_post_tags = count($post_tags);
				$term_list = get_the_term_list($post->ID,'category');
				?>
				<!--Blog Detail Start-->
				<div class="post-content-parent">	
					<!-- <div class="featured-image">
						<?php 
						if(has_post_thumbnail()){
							echo get_the_post_thumbnail($post->ID,'full'); ?>
							<div class="post-like">
								<?php 
								if(isset($post_categories) && $post_categories <> ''){
									foreach($post_categories as $c){
										$custom_count_cats++;
										if($custom_count_cats == $count_post_categories){
											$sep_format_cat = '';
										}else{
											$sep_format_cat = ', ';
										}
										$cat = get_category( $c ); ?>
										<a href="<?php echo get_category_link($c); ?>"><?php echo esc_attr($cat->name); ?></a><?php echo ' '; ?>
										<?php
									}	
								}
								?>
							</div>
							<?php
						} ?>
					</div> -->
					<div class="container">
						<div class="main-single">
							<h1 class="entry-title"><?php echo the_title(); ?></h1>
							<div class="post-meta">
								<span class="posted-on"><?php echo esc_attr__('Ngày đăng','woodest'); ?>
									<a href="#"><?php echo esc_attr(get_the_date(get_option( 'date_format' ))); ?></a>
								</span>
								<span class="byline"> <?php echo esc_attr__('bởi','woodest'); ?> <span class="author">
									<?php echo get_the_author_link(); ?></span>
								</span>
								<?php
								if(function_exists('woodest_get_post_views')){ ?>
									<span class="seperator">|</span>
									<span class="post-views">  <?php echo woodest_get_post_views($post->ID); ?> <?php echo esc_attr__('Lượt xem','woodest'); ?> </span>	
									<?php 
								}
								?>
								
							</div>
							<div class="post-content">
								<?php 
								the_content(); 
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Trang:', 'woodest' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text"></span>%',
									'separator'   => '<span class="screen-reader-text"></span>',
									) );
								?>
							</div>
							<?php 
							if(has_tag()){ ?>
								<div class="tags-inline">
									<span class="cat-links"><?php echo esc_attr__('Đăng trong','woodest'); ?> 
										<?php
										if(isset($post_tags) && $post_tags <> ''){ ?>
											<?php
											foreach($post_tags as $t){
												$custom_count_tags++;
												if($custom_count_tags == $count_post_tags){
													$sep_format = ' ';
												}else{
													$sep_format = ' ';
												}
												
												$tag = get_category( $t ); ?>
												<a href="<?php echo get_term_link($t); ?>"><?php echo esc_attr($tag->name); ?></a><?php echo esc_attr($sep_format); ?>
												<?php
											}
										}
										?>
									</span> 
								</div>
								<?php 
							}
							
							if(isset($enable_social_share) && $enable_social_share == 'enable' ){ ?>
								<div class="share-wrapper">
									<div class="woodest-social-share">
										<a href="#" class="post-share"><i class="fa fa-share fa-fw"></i></a>
										<?php echo awardthemes_get_social_shares();?>
									</div>
									<div class="comments-wrapper">
										<a href="#">
										<i class="fa fa-comments"></i>
										<span><?php echo esc_attr($comment_count); ?></span>
										</a>
									</div>
								</div>
								<?php 
							}
								
							if(get_next_post() || get_previous_post()){
								$prevPost = get_previous_post(); 
								if(!empty($prevPost)){
									
									if(has_post_thumbnail($prevPost->ID)){
										$prev_thumbnail_id = get_post_thumbnail_id( $prevPost->ID );
										$prev_image = wp_get_attachment_image($prev_thumbnail_id, array(480, 310));
										$prev_title_only = 'next-prev-title';
									}else{
										$prev_image = '';
										$prev_title_only = 'no-image-present';
									}
									
								}else{
									$prev_image = '';
									$prev_title_only = 'no-image-present';
								}
								$nextPost = get_next_post(); 
								if(!empty($nextPost)){
									
									if(has_post_thumbnail($nextPost->ID)){
										$next_thumbnail_id = get_post_thumbnail_id( $nextPost->ID );
										$next_image = wp_get_attachment_image($next_thumbnail_id, array(480, 310));
										
									}else{
										$next_image = '';
									}
								}else{
									$next_image = '';
								}
								?>
								<div class="woodest-post-blocks">
									<div class="post-nav">
										<div class="prev"><!-- </span><strong>%title</strong> -->
											<?php previous_post_link('<div class="prev-post">%link</div>', '<span> '.esc_attr__('Tin trước', 'woodest').'', true); ?>
										</div>
										<div class="next">
											<?php next_post_link('<div class="next-post">%link</div>', '<span>'.esc_attr__('Tin sau', 'woodest').' ', true); ?>
										</div>
									</div>
								</div>						

							<?php	
							}
							?>
						</div>
					</div>
					<?php
						/*
						 * Code hiển thị bài viết liên quan trong cùng 1 category
						 */
						$categories = get_the_category(get_the_ID());
						if ($categories){
						    echo '<div class="relatedcat">';
						    $category_ids = array();
						    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
						    $args=array(
						        'category__in' => $category_ids,
						        'post__not_in' => array(get_the_ID()),
						        'posts_per_page' => 5, // So bai viet dc hien thi
						    );
						    $my_query = new wp_query($args);
						    if( $my_query->have_posts() ):
						        echo '<h3>CÁC TIN KHÁC</h3><ul>';
						        while ($my_query->have_posts()):$my_query->the_post();
						            ?>
						            <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
						            <?php
						        endwhile;
						        echo '</ul>';
						    endif; wp_reset_query();
						    echo '</div>';
						}
						?>
				</div>
				<?php 
				if(get_the_author_meta('description') <> ''){ ?>
					<div class="post-author-detail">
						<figure>
						   <?php echo get_avatar(get_the_author_meta('ID'), 99); ?>
						</figure>
						<div class="author_meta">
							<h5><?php the_author_posts_link(); ?></h5>
							<p><?php echo esc_attr(get_the_author_meta('description')); ?></p>
						</div>
					</div>
					<?php 
				} ?>
				<?php echo woodest_related_posts(get_the_ID()); ?>
				<div class="comments-custom-wrapper">
					<?php comments_template( '', true ); ?>
				</div>
				<?php 
			} ?>
		</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>