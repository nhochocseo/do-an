<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	
	$page_class = isset( $atts['page_class'] ) ? $atts['page_class'] : '';
	$team_category = isset( $atts['team_category'] ) ? $atts['team_category'] : '';
	$team_columns = isset( $atts['team_columns'] ) ? $atts['team_columns'] : '';
	$team_titles = isset( $atts['team_titles'] ) ? $atts['team_titles'] : '';
	$team_fetch = isset( $atts['team_fetch'] ) ? $atts['team_fetch'] : '';
	$team_orderby = isset( $atts['team_orderby'] ) ? $atts['team_orderby'] : '';
	$team_order = isset( $atts['team_order'] ) ? $atts['team_order'] : '';
	$team_pagination = isset( $atts['team_pagination'] ) ? $atts['team_pagination'] : '';
	
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'team',
		'posts_per_page' => $team_fetch,
		'orderby' => $team_orderby,
		'order' => $team_order,
		'paged' => $paged,
		'tax_query' => array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'team_category',
				'field'    => 'post_id',
				'terms'    => $team_category,
			),
			array(
				'taxonomy' => 'post_tag',
				'field'    => 'post_id',
				'terms'    => '',
			),
		)
	);
	
	$the_query = new WP_Query( $args );
	?>
	
	<div class="team-section">
		<?php
		$current_size = 0;
		while($the_query->have_posts()){ $the_query->the_post();
			global $post;
			
			$team_meta = fw_get_db_post_option($post->ID);
			
			if(isset($team_meta['facebook-profile-link']) && $team_meta['facebook-profile-link']!=''){
				$facebook = $team_meta['facebook-profile-link'];
			}	
			if(isset($team_meta['twitter-profile-link']) && $team_meta['twitter-profile-link']!=''){
				$twitter = $team_meta['twitter-profile-link'];
			}
			if(isset($team_meta['gplus-profile-link']) && $team_meta['gplus-profile-link']!=''){
				$gplus = $team_meta['gplus-profile-link'];
			}
			if(isset($team_meta['linkedin-profile-link']) && $team_meta['linkedin-profile-link']!=''){
				$linkedin = $team_meta['linkedin-profile-link'];
			}
			
			?>
			
			<div class="col-sm-6 <?php echo  esc_attr($team_columns); ?>">
				<div class="team-box animated flipInY">
					<div class="team-img">
						<?php echo get_the_post_thumbnail($post->ID, 'awardthemes-team-listing'); ?>
						<ul>
							<?php
							if(isset($facebook) && $facebook <> ''){ ?>
								<li><a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook"></i></a></li>
								<?php 
							}
							if(isset($twitter) && $twitter <> ''){ ?>
								<li><a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter"></i></a></li>
								<?php
							}
							if(isset($gplus) && $gplus <> ''){ ?>
								<li><a href="<?php echo esc_url($gplus); ?>"><i class="fa fa-google-plus"></i></a></li>
								<?php 
							}
							if(isset($linkedin) && $linkedin <> ''){ ?>
								<li><a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin"></i></a></li>
								<?php 
							}
							?>
						</ul>
					</div>
					<h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo substr(get_the_title(),0,$team_titles); ?></a></h3>
					<p><?php echo esc_attr($team_meta['designation']); ?></p>
				</div>
			</div>						
			<?php
			$current_size++;
		}
		if( $team_pagination == 'enable' ){
			echo awardthemes_pagination($the_query);
		}
		?>
	</div>
	<?php wp_reset_postdata(); ?>