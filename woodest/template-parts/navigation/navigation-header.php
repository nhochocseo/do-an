<?php
/**
 * Displays Header navigation
 */
	// navigation
	if( has_nav_menu('header_menu') ){
		
		if(function_exists('fw_get_db_settings_option')){
			$awardthemes_logo = fw_get_db_settings_option('logo');
		} else {
			$awardthemes_logo = '';
		}
		
			echo '
			<nav class="navbar navbar-default ow-navigation">';
				if(function_exists('fw_get_db_settings_option')){
					$topbar_option = fw_get_db_settings_option('topbar');
					if(isset($topbar_option) && $topbar_option['gadget'] == 'enable'){
						echo '
						<div id="loginpanel" class="desktop-hide">
							<div class="right" id="toggle">
								<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
								<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
							</div>
						</div>';	
					}
				}
				echo '
				<div class="navbar-header">';
				 
					if (isset($awardthemes_logo['url']) && !empty($awardthemes_logo['url'])) {
						$logo_url = $awardthemes_logo['url'];
					} else {
						$logo_url = get_template_directory_uri() . '/assets/images/logo.png';
					}
					echo '
					<a class="navbar-brand logo" href="'. esc_url(home_url('/')).'">
						<img class="logo-img" src="'.esc_url($logo_url).'" alt="'.esc_attr(get_bloginfo()).'">
					</a>';
					echo '
				</div>
				<div class="navbar-collapse collapse" id="navbar">';
					$args = array(
						'menu'=>'',
						'menu_class'=> 'nav navbar-nav',
						'menu_id'=> '',
						'container'=> 'ul',
						'container_class'=> '',
						'container_id'=> '',
						'fallback_cb'=> '',
						'before'=> '',
						'after'=> '',
						'link_before'=> '',
						'link_after'=> '',
						'echo'=> 'true',
						'depth'=> '0',
						'theme_location'=>'header_menu', 
						'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>', 	
						'item_spacing'=>'preserve'	 
					);
					wp_nav_menu( $args);
					echo '
				</div>
			</nav>'; // awardthemes-navigation
	}else{
		
		$logo_url = get_template_directory_uri() . '/assets/images/logo.png';
		
		echo '
		<nav class="navbar navbar-default ow-navigation">
			<div class="navbar-header">
				<a class="navbar-brand logo default" href="'. esc_url(home_url('/')).'">
					<img class="logo-img" src="'.esc_url($logo_url).'" alt="'.esc_attr(get_bloginfo()).'">
				</a>
			</div>
			<div class="navbar-collapse collapse" id="navbar">';
				$args = array(
					'menu'=>'',
					'menu_class'=> 'nav navbar-nav',
					'menu_id'=> '',
					'container'=> 'ul',
					'container_class'=> '',
					'container_id'=> '',
					'fallback_cb'=> '',
					'echo'        => true,
					'show_home'   => true,
					'before'=> '',
					'after'=> '',
					'link_before'=> '',
					'link_after'=> '',
					'depth'=> '0',
					'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>', 	
					'item_spacing'=>'preserve'
				);
				wp_nav_menu( $args);
				echo '
			</div>
		</nav>'; // awardthemes-navigation
	}
?>