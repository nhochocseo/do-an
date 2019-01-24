<?php
/**
 * The search results file
 */

get_header(); ?> 

<div id="test-unit" class="content">
	<div class="container">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) { the_post();
					?>
				
					<div class="awardthemes-post-content">
						<?php
						get_template_part( 'template-parts/post/content', 'excerpt');
						?>
					</div>
					<?php 
				}
				echo awardthemes_pagination($wp_query);
			else : ?>
				<div class="tm-content-box nothing-found">
					<h2><?php echo esc_attr__('Search results for: Keyword','woodest');?></h2>
					<p><?php echo esc_attr__('Sorry, but no result for your search: keyword','woodest');?></p>
					<hr>
					<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-colored"><?php echo esc_attr__('back to home page','woodest');?></a>
					<strong><?php echo esc_attr__('Or Search Again','woodest'); ?></strong>
					<form method="get" id="searchform" class="form-group" action="<?php echo esc_url(home_url('/')); ?>/">
						<input type="text" class="search-field" placeholder="<?php esc_html_e('Enter your words for search again','woodest');?>" value="<?php the_search_query(); ?>" name="s" />
						<div class="search-btn">
							<input class="btn btn-dark" value="submit" type="submit"> <span class="icon-magnifier icn"></span>
						</div>
					</form>
				</div>
				<?php
			endif;
			?>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();