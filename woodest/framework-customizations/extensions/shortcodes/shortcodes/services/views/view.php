<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var $atts
 */
	$uni_flag = fw_unique_increment();
	
	$page_class = isset( $atts['page_class'] ) ? $atts['page_class'] : '';
	$services_category = isset( $atts['services_category'] ) ? $atts['services_category'] : '';
	$service_num_title = isset( $atts['service_num_title'] ) ? $atts['service_num_title'] : '';
	$service_description = isset( $atts['service_description'] ) ? $atts['service_description'] : '';
	$service_style = isset( $atts['service_style'] ) ? $atts['service_style'] : '';
	$service_columns = isset( $atts['service_columns'] ) ? $atts['service_columns'] : '';
	$services_fetch = isset( $atts['services_fetch'] ) ? $atts['services_fetch'] : '';
	$service_order_by = isset( $atts['service_order_by'] ) ? $atts['service_order_by'] : '';
	$service_order = isset( $atts['service_order'] ) ? $atts['service_order'] : '';
	$service_pagination = isset( $atts['service_pagination'] ) ? $atts['service_pagination'] : '';
	
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	$args = array(
		'post_type' => 'services',
		'posts_per_page' => $services_fetch,
		'orderby' => $service_order_by,
		'order' => $service_order,
		'paged' => $paged,
		'tax_query' => array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'services_category',
				'field'    => 'post_id',
				'terms'    => $services_category,
			),
			array(
				'taxonomy' => 'post_tag',
				'field'    => 'post_id',
				'terms'    => '',
			),
		)
	);
	
	$the_query = new WP_Query( $args );

	if($service_style == 'style-1'){ ?>
		<div class="services-section2">
			<div class="srv-tabs">
				<ul class="nav nav-tabs" role="tablist">
					<?php
					$current_size = 0;
					while($the_query->have_posts()){ $the_query->the_post();
						global $post;
						$services_meta = fw_get_db_post_option($post->ID);
						
						if($current_size == 0){$active_class = 'active';}else{$active_class = '';}
							?>
						<li role="presentation" class="<?php echo esc_attr($active_class); ?>">
							<a href="#service-<?php echo esc_attr($post->ID); ?>" role="tab" data-toggle="tab">
								<i class="<?php echo esc_attr($services_meta['icon-class']); ?>"></i>
							</a>
						</li>
						<?php
						$current_size++;
					}
					?>
				</ul>
			</div>
			<div class="tab-content">
				<?php
				$current_size1 = 0;
				while($the_query->have_posts()){ $the_query->the_post();
					global $post;
					if($current_size1 == 0){$active_class = 'active';}else{$active_class = '';}
						?>
					<div role="tabpanel" class="tab-pane <?php echo esc_attr($active_class); ?>" id="service-<?php echo esc_attr($post->ID); ?>">
						<div class="col-md-6 col-sm-6 col-xs-12 srv-content">
							<h4><?php echo substr(esc_attr(get_the_title()),0,$service_num_title); ?></h4>
							<p><?php echo substr(esc_attr(get_the_content()),0,$service_description); ?></p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<?php echo get_the_post_thumbnail($post->ID, 'awardthemes-services-featured-image'); ?>
						</div>
					</div>
					<?php
					$current_size1++;
				}
				?>
			</div>
		</div>
		<?php
	}else if($service_style == 'style-2'){ ?>
		<div class="welcome-section welcome-section2 no-padding">
			<?php
			$current_size = 0;
			$service = '' ;	
			while($the_query->have_posts()){ $the_query->the_post();
				global $post;
				$services_meta = fw_get_db_post_option($post->ID);
				if($current_size == 0){$active_class = 'active';}else{$active_class = '';}
					?>
					<div class="<?php echo esc_attr($service_columns); ?> no-padding">
						<div class="welcome-box">
							<?php echo get_the_post_thumbnail($post->ID, 'awardthemes-services-index2'); ?>
							<div class="welcome-hover">
								<i class="icon <?php echo esc_attr($services_meta['icon-class']); ?>"></i>
								<h3><?php echo substr(esc_attr(get_the_title()),0,$service_num_title); ?></h3>
								<p><?php echo substr(esc_attr(get_the_content()),0,$service_description); ?></p>
								<a href="<?php echo esc_url(get_permalink()); ?>" ><?php echo esc_attr__('know more','woodest'); ?></a>
							</div>
						</div>
					</div>
					<?php
				$current_size++;
			} ?>
		</div>
		<?php
	}else if($service_style == 'style-3'){
		$current_size = 0;
		$service = '' ;	
		while($the_query->have_posts()){ $the_query->the_post();
			global $post;
			$services_meta = fw_get_db_post_option($post->ID);
			if($current_size == 0){$active_class = 'active';}else{$active_class = '';}
			?>
			<div class="<?php echo esc_attr($service_columns); ?>">
				<div class="srv-box">
					<?php echo get_the_post_thumbnail($post->ID, 'awardthemes-services-background-image'); ?>
					<i class="<?php echo esc_attr($services_meta['icon-class']); ?>"></i>
					<div class="srv-box-hover">
						<h3><?php echo substr(esc_attr(get_the_title()),0,$service_num_title); ?></h3>
						<p><?php echo substr(esc_attr(get_the_content()),0,$service_description); ?></p>
						<a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_attr__('learn more','woodest'); ?></a>
					</div>
				</div>
			</div>
			<?php
			$current_size++;
		}
	}else if($service_style == 'style-4'){
		global $post;
		$service = '' ;	
		$current_size = 0;
		while($the_query->have_posts()){ $the_query->the_post();
			$services_meta = fw_get_db_post_option($post->ID);
			?>
			<div class="<?php echo esc_attr($service_columns); ?>">
				<div class="welcome-section">
					<div class="welcome-box">
						<i class="<?php echo esc_attr($services_meta['icon-class']); ?>"></i>
						<h4><?php echo substr(esc_attr(get_the_title()),0,$service_num_title); ?></h4>
						<p><?php echo substr(esc_attr(get_the_content()),0,$service_description); ?></p>
					</div>
				</div>
			</div>
			<?php
			$current_size++;
		}
	}else if($service_style == 'style-5'){
		global $post;
		$service = '' ;	
		$current_size = 0;
		while($the_query->have_posts()){ $the_query->the_post();
			$services_meta = fw_get_db_post_option($post->ID);
			?>
			<div class="<?php echo esc_attr($service_columns); ?>">
				<div class="why-choose-section">
					<div class="why-choose-box">
						<?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
						<h6><?php echo substr(esc_attr(get_the_title()),0,$service_num_title); ?></h6>
						<span><?php echo esc_attr__('Our awesome features','woodest'); ?></span>
						<p><?php echo substr(esc_attr(get_the_content()),0,$service_description); ?></p>
					</div>
				</div>
			</div>
		<?php
		$current_size++;
		}
	}else{
		
	}
	if(isset($service_pagination) && $service_pagination == 'enable'){
		echo awardthemes_pagination($the_query);
	}
	 wp_reset_postdata(); ?>