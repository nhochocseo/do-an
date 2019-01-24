<?php
/**
 * The template for displaying Comments.
 */
if ( post_password_required() )
	return;
?>
	<?php if(have_comments()){ ?>
		<div class="post-comments">
				<?php 
					if( get_comments_number() <= 1 ){
						$comment_text = esc_attr__('Recent Comment', 'woodest');
					}else{
						$comment_text = esc_attr__('Recent Comments', 'woodest');
					}
					echo '<h3 class="comment-title">'.esc_attr(get_comments_number()) . ' <span class="thcolor">' . esc_attr($comment_text).'</span></h3>'; 
				?>
				<ul id="awardthemes-comment" class="comment test-comments">
				<?php wp_list_comments(array('callback' => 'awardthemes_comment_list', 'style' => 'ul')); ?>
				</ul>

				<?php if (get_comment_pages_count() > 1 && get_option('page_comments')){ ?>
					<nav id="comment-nav-below" class="navigation">
						<h1 class="assistive-text section-heading"><?php echo esc_attr__( 'Comment navigation', 'woodest' ); ?></h1>
						<div class="nav-previous"><?php previous_comments_link( esc_attr__( '&larr; Older Comments', 'woodest' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_attr__( 'Newer Comments &rarr;', 'woodest' ) ); ?></div>
					</nav>
				<?php } ?>
		</div>
		<?php 
	} ?>	
	<div class="comment-form">
		<div class="row">
				<?php 
				$commenter = wp_get_current_commenter();
				$req = get_option( 'require_name_email' );
				$aria_req = ($req ? " aria-required='true'" : '');
				
				$args = array(
					'id_form'				=> 'commentform',
					'id_submit'  			=> 'submit',
					'title_reply'			=> esc_attr__('BÌNH LUẬN','woodest'),
					'title_reply_before'	=> '<div class="col-md-12"><h3>',
					'title_reply_after'		=> '</h3></div>',
					'class_form' 			=> 'function-comments',
					'submit_field'			=> '<div class="col-md-12"><p class="form-submit">%1$s %2$s</p></div>',
					'title_reply_to'    	=> esc_attr__('Để lại một trả lời %s', 'woodest'),
					'cancel_reply_link' 	=> esc_attr__('HỦY BÌNH LUẬN', 'woodest'),
					'label_submit'      	=> esc_attr__('GỬI', 'woodest'),
					'comment_notes_before' 	=> '',
					'comment_notes_after' 	=> '',

					'fields' => apply_filters('comment_form_default_fields', array(
						'author' =>
							'<div class="form-group col-md-4"><input id="awardthemes-author" placeholder="' . esc_attr__('Tên bạn*', 'woodest') . '" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
							'" /></div>',
						'url' =>
							'<div class="form-group col-md-4"><input id="awardthemes-url" placeholder="' . esc_attr__('Website', 'woodest') . '" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
							'" /></div>',	
						'email' => 
							'<div class="form-group col-md-4"><input id="awardthemes-email" class="form-control" placeholder="' . esc_attr__('Địa chỉ email *', 'woodest') . '" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
							'"/></div>',
					)),
					'comment_field' =>  '<div class="form-group col-md-12">' .
						'<textarea id="awardthemes-commentarea" class="form-control" placeholder="' . esc_attr__('Nội dung', 'woodest') . '" name="comment">' .
						'</textarea></div>'
					
				);
				comment_form($args,$post->ID); 
			?>
		</div>
	</div><!-- awardthemes-comment-area -->