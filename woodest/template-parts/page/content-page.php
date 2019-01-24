<?php
/**
 * Template part for displaying page content in page.php
 */
	if (defined('FW')){
		$page_builder_check = fw_get_db_post_option(get_the_ID(), 'page-builder/builder_active', false);
		
		if($page_builder_check == 'true'){ ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'woodest' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text"></span>%',
							'separator'   => '<span class="screen-reader-text"></span>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		}else{ ?>
			<div class="container">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content default-page-content">
						<?php
							the_content();

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'woodest' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text"></span>%',
								'separator'   => '<span class="screen-reader-text"></span>',
							) );
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
			</div>
			<?php
		}
	}else{ ?>
		<div class="container">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content default-page-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'woodest' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text"></span>%',
							'separator'   => '<span class="screen-reader-text"></span>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
			<div class="edit-link">
				<?php awardthemes_edit_link( get_the_ID() ); ?>
			</div>
		</div>	
		<?php 
	}
?>
