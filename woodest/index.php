<?php
/**
 * The main template file
 */

get_header(); ?> 

<div class="content" id="test-unit">
	<div class="container">
			<div class="col-md-8 pull-left">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) { the_post();
					get_template_part( 'template-parts/post/content', 'excerpt');	
				}
				echo awardthemes_pagination($wp_query);
			else :
				get_template_part( 'template-parts/post/content', get_post_format() );
			endif;
			?>
			</div>
			<div class="col-md-4 pull-right">
				<?php dynamic_sidebar('Blog Sidebar'); ?>
			</div>
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer(); ?>