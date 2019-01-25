<?php
/**
 * Displays footer 
 */
	if(function_exists('fw_get_db_settings_option')){
		$footer_style = fw_get_db_settings_option('footer_style');
		$copyright_option = fw_get_db_settings_option('copyright_option/'. fw_get_db_settings_option('copyright_option/'. 'gadget'));
		
	} else {
		$copyright_option = '';
		$footer_style = '';
		$copyright_text = '';
	}
	
	if(isset($footer_style) && $footer_style == 'footer-1'){
		if( is_active_sidebar( 'sidebar-footer' )) {
			?>
			<div class="footer-section container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<?php dynamic_sidebar('Footer'); ?>
					</div>
				</div>
				<!-- Container /- -->
				<div class="footer-bottom container-fluid no-padding">
					<div class="container">
						<div class="row">
							<?php 
							if(isset($copyright_option) && $copyright_option <> ''){ ?>
								<div class="col-md-2 col-sm-12 col-xs-12">
									<p><?php echo esc_attr($copyright_option['copyright_text']);?></p>
								</div>
								<?php 
							} ?>
							<div class="col-md-10 col-sm-12 col-xs-12">
								<!-- nav -->
								<nav class="navbar navbar-default ow-navigation">
									<div class="navbar-collapse collapse navbar-right" id="ftr-navbar">
										<?php 
										// Menu parameters		
										$defaults = array(
											'theme_location'  => 'footer_menu',
											'menu'            => '', 
											'container'       => 'nav', 
											'container_class' => 'footer-nav', 
											'container_id'    => 'footer-navbar',
											'menu_class'      => 'nav navbar-nav', 
											'menu_id'         => 'nav',
											'echo'            => true,
											'fallback_cb'     => '',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'depth'           => 0,
											'walker'          => '',
										);				
										if(has_nav_menu('footer_menu')){
											wp_nav_menu( $defaults);
										}?>
									</div><!--/.nav-collapse -->
								</nav><!-- nav /- -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
		}	
	}else{ ?>
		
			<?php 
			if( is_active_sidebar( 'sidebar-footer' )) { ?>
				<!-- no-padding -->
				<div class="footer-section footer-default-section container-fluid ">
					<div class="container">
						<div class="row">
							<?php dynamic_sidebar('Footer'); ?>
						</div>
					</div><!-- Container /- -->
				</div>	
				<?php
			} ?>
			<div class="footer-bottom default-footer container-fluid no-padding">
				<div class="container">
					<div class="row">
						<?php 
						if( has_nav_menu('footer_menu') ){  ?>
							<div class="col-md-2 col-sm-12 col-xs-12">
								<p class="copyright-nav"><?php echo esc_attr__('© 2018 All Rights Reserved','woodest');?></p>
							</div>
							<div class="col-md-10 col-sm-12 col-xs-12">
								<!-- nav -->
								<nav class="navbar navbar-default ow-navigation">
									<div class="navbar-collapse collapse navbar-right" id="ftr-navbar">
										<?php 
										// Menu parameters		
										$defaults = array(
											'theme_location'  => 'footer_menu',
											'menu'            => '', 
											'container'       => 'nav', 
											'container_class' => 'footer-nav', 
											'container_id'    => 'footer-navbar',
											'menu_class'      => 'nav navbar-nav', 
											'menu_id'         => 'nav',
											'echo'            => true,
											'fallback_cb'     => '',
											'before'          => '',
											'after'           => '',
											'link_before'     => '',
											'link_after'      => '',
											'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'depth'           => 0,
											'walker'          => '',
										);				
										if(has_nav_menu('footer_menu')){
											wp_nav_menu( $defaults);
										}?>
									</div><!--/.nav-collapse -->
								</nav><!-- nav /- -->
							</div>
							<?php 	
						}else{ ?>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<p><?php echo esc_attr__('© 2018 All Rights Reserved by NhậtNamAcs','woodest');?>, Web By : <a href="https://www.facebook.com/caodungstore">DungNcc</a></p>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<span id="scrollup-default" class="scrollup-default">
									<i class="fa fa-angle-up"></i>
								</span>
							</div>
							<?php 	
						} ?>
					</div>
				</div>
			</div>
		<?php
	}
	 ?>