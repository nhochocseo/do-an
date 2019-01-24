<?php
/**
 *@ headers
 */
	if(!function_exists('awardthemes_social_icons')){
		function awardthemes_social_icons(){ 
			
			$facebook_social = fw_get_db_settings_option('facebook_social');
			$gplus_social = fw_get_db_settings_option('gplus_social');
			$linkedin_social = fw_get_db_settings_option('linkedin_social');
			$pinterest_social = fw_get_db_settings_option('pinterest_social');
			$skype_social = fw_get_db_settings_option('skype_social');
			$twitter_social = fw_get_db_settings_option('twitter_social');
			$vimeo_social = fw_get_db_settings_option('vimeo_social');
			$youtube_social = fw_get_db_settings_option('youtube_social');
			$instagram_social = fw_get_db_settings_option('instagram_social');
			
			?>
			<div class="  col-md-5 col-sm-12 social-menu">
				<ul class="menu">
					<?php
					if(isset($facebook_social) && $facebook_social <> ''){ ?>
						<li><a href="<?php echo esc_url($facebook_social); ?>"><i class="fa fa-facebook"></i></a></li>
						<?php	
					}
					
					if(isset($gplus_social) && $gplus_social <> ''){ ?>
						<li><a href="<?php echo esc_url($gplus_social); ?>"><i class="fa fa-google-plus"></i></a></li>
						<?php	
					}
					
					if(isset($linkedin_social) && $linkedin_social <> ''){ ?>
						<li><a href="<?php echo esc_url($linkedin_social); ?>"><i class="fa fa-linkedin"></i></a></li>
						<?php	
					}
					
					if(isset($pinterest_social) && $pinterest_social <> ''){ ?>
						<li><a href="<?php echo esc_url($pinterest_social); ?>"><i class="fa fa-pinterest"></i></a></li>
						<?php	
					}
					
					if(isset($skype_social) && $skype_social <> ''){ ?>
						<li><a href="<?php echo esc_url($skype_social); ?>"><i class="fa fa-skype"></i></a></li>
						<?php	
					}
					
					if(isset($twitter_social) && $twitter_social <> ''){ ?>
						<li><a href="<?php echo esc_url($twitter_social); ?>"><i class="fa fa-twitter"></i></a></li>
						<?php	
					}
					
					if(isset($vimeo_social) && $vimeo_social <> ''){ ?>
						<li><a href="<?php echo esc_url($vimeo_social); ?>"><i class="fa fa-vimeo-square"></i></a></li>
						<?php	
					}
					
					if(isset($youtube_social) && $youtube_social <> ''){ ?>
						<li><a href="<?php echo esc_url($youtube_social); ?>"><i class="fa fa-youtube"></i></a></li>
						<?php	
					}
					
					if(isset($instagram_social) && $instagram_social <> ''){ ?>
						<li><a href="<?php echo esc_url($instagram_social); ?>"><i class="fa fa-instagram"></i></a></li>
						<?php	
					}
					?>
				</ul>
			</div>
			<?php
		}
	}

	if(function_exists('fw_get_db_settings_option')){
		$header_style = fw_get_db_settings_option('header_style');
		$awardthemes_logo = fw_get_db_settings_option('logo');
		$topbar_option = fw_get_db_settings_option('topbar');
		$topbar = fw_get_db_settings_option('topbar/'. fw_get_db_settings_option('topbar/'. 'gadget'));
		$contact_info_option = fw_get_db_settings_option('contact_info');
		$contact_info = fw_get_db_settings_option('contact_info/'. fw_get_db_settings_option('contact_info/'. 'gadget'));
		
	} else {
		$header_style = '';
		$awardthemes_logo = '';
		$topbar = '';
		$topbar_option = '';
		$contact_info_option = '';
		$contact_info = '';
	}
	if(isset($header_style) && $header_style == 'header-1'){ ?>
		<header id="header" class="header-section container-fluid no-padding">
			<!-- SidePanel -->
			<div id="slidepanel">
				<?php 
				if(isset($topbar_option) && $topbar_option['gadget'] == 'enable'){ ?>
					<!-- Top Header -->
					<div class="top-header container-fluid no-padding">
						<!-- Container -->
						<!-- <div class="container">
							<div class="row">
								<?php echo awardthemes_social_icons(); ?>
								<div class="col-md-7 col-sm-12 info_topbar">
									<?php 
									if(isset($topbar['email_address'])){ ?>
										href="<?php echo esc_attr($topbar['email_address']); ?>
										<a title="<?php echo esc_attr($topbar['email_address']); ?>"><i class="fa fa-envelope"></i> <?php echo esc_attr($topbar['email_address']); ?></a>
										<?php 
									} ?>
									<?php
									if(isset($topbar['phone_number'])){ ?>
										<a href="tel:<?php echo esc_attr($topbar['phone_number']); ?>" title="<?php echo esc_attr($topbar['phone_number']); ?>"><i class="fa fa-phone"></i> <?php echo esc_attr($topbar['phone_number']); ?></a>
										<?php 
									} ?>
									<?php
									if(isset($topbar['may_ban'])){ ?>
										<a href="tel:<?php echo esc_attr($topbar['may_ban']); ?>" title="<?php echo esc_attr($topbar['may_ban']); ?>"><i class="fa fa-phone"></i> <?php echo esc_attr($topbar['may_ban']); ?></a>
										<?php 
									} ?>
								</div>
							</div>
						</div> -->
						<!-- Container -->
					</div>
					<!-- Top Header /- -->
					<?php 
				} ?>
				<!-- Middel Header /- -->
				<!-- <div class="middle-header container-fluid no-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<?php 
								if (isset($awardthemes_logo['url']) && !empty($awardthemes_logo['url'])) {
									$logo_url = $awardthemes_logo['url'];
								} else {
									$logo_url = get_template_directory_uri() . '/assets/images/logo.png';
								} ?>
								<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
									<img class="logo-img" src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo()); ?>">
								</a>
							</div>
							<?php 
							if(isset($contact_info_option) && $contact_info_option['gadget'] == 'enable'){ ?>
								<div class="col-md-8 col-sm-12 header-content">
									<?php 
									if(isset($contact_info['opening_hours']) && $contact_info['opening_hours'] <> ''){ ?>
										<div class="header-cnt-box">
											<i class="icon <?php echo esc_attr($contact_info['opening_hours_icon']);?>"></i>
											<h4><?php echo esc_attr($contact_info['opening_hours_text']);?></h4>
											<a href="mailto:<?php echo esc_attr($contact_info['opening_hours']);?>"><p><?php echo esc_attr($contact_info['opening_hours']);?></p></a>
										</div>
										<?php 
									} ?>
									<?php 
									if(isset($contact_info['location']) && $contact_info['location'] <> ''){ ?>
										<div class="header-cnt-box">
											<i class="icon <?php echo esc_attr($contact_info['location_icon']);?>"></i>
											<h4><?php echo esc_attr($contact_info['location_text']);?></h4>
											<p><?php echo esc_attr($contact_info['location']); ?></p>
										</div>
										<?php 
									} ?>
								</div>
								<?php 
							} ?>
						</div>
					</div>
				</div> -->
			</div><!-- SidePanel /- -->

			<div class="bg-nav">						
			<div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon">
				   <a href="tel:<?php echo esc_attr($topbar['phone_number']); ?>" title="Liên hệ nhanh">
				      <div class="quick-alo-ph-circle"></div>
				      <div class="quick-alo-ph-circle-fill"></div>
				      <div class="quick-alo-ph-img-circle"></div>
				   </a>
			</div>
			<!-- Container -->
				<div class="container">
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
					</div>
					<div class="header-menu">
						<?php get_template_part( 'template-parts/navigation/navigation', 'header' ); ?>
					<!--DL Menu Start-->
					<?php 
						// mobile navigation
							echo '<div class="awardthemes-responsive-navigation dl-menuwrapper" id="awardthemes-responsive-navigation" >';
							echo '<button class="dl-trigger">Open Menu</button>';
							wp_nav_menu( array(
								'theme_location'=>'header_menu', 
								'container'=> '', 
								'menu_class'=> 'dl-menu awardthemes-main-mobile-menu',
								'walker'=> '' 
							) );						
							echo '</div>';
						
					?>
					</div>
					<!--DL Menu END-->
				</div><!-- Container /- -->
			</div>
		</header>
		<?php
	}else{ ?>
		<header id="header" class="header-section container-fluid no-padding">
			<!-- SidePanel -->
			<!-- <div id="slidepanel"> -->
				<!-- Middel Header /- -->
				<!-- <div class="middle-header container-fluid no-padding">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<?php 
								if (isset($awardthemes_logo['url']) && !empty($awardthemes_logo['url'])) {
									$logo_url = $awardthemes_logo['url'];
								} else {
									$logo_url = get_template_directory_uri() . '/assets/images/logo.png';
								} ?>
								<a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><img class="logo-img" src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo()); ?>"></a>
							</div>
						</div>
					</div>
				</div> -->
			<!-- </div> -->
			<!-- SidePanel /- -->

			<div class="bg-nav">
			<!-- Container -->
				<div class="container">
					<div class="col-md-5">
						<?php get_template_part( 'template-parts/navigation/navigation', 'header' ); ?>
					</div>
					<!--DL Menu Start-->
					<div class="col-md-7">
						<?php 
						// mobile navigation
						echo '<div class="awardthemes-responsive-navigation dl-menuwrapper" id="awardthemes-responsive-navigation" >';
						echo '<button class="dl-trigger">Open Menu</button>';
						wp_nav_menu( array(
							'theme_location'=>'header_menu', 
							'container'=> '', 
							'menu_class'=> 'dl-menu awardthemes-main-mobile-menu',
							'walker'=> ''
						) );						
						echo '</div>';
					?>
					</div>
					<!--DL Menu END-->
				</div><!-- Container /- -->
			</div>
		</header>
		<?php 
	}