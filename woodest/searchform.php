<?php
/**
 * Template for displaying search forms in Award Themes
 */

?>

<form class="search-area" method="get" id="searchform" action="<?php  echo esc_url(home_url('/')); ?>">
	<div class="input-group">
		<?php
			$search_val = get_search_query();
			if( empty($search_val) ){
				$search_val = esc_attr__('Search Here' , 'woodest');
			}
		?>
		<input type="text" class="form-control" name="s" id="s" placeholder="<?php echo esc_attr($search_val); ?>" value="<?php echo esc_attr($search_val); ?>" />
		<span class="input-group-btn">
			<button type="button" class="btn btn-default"><i class="icon icon-Search"></i></button>
		</span>
	</div>
</form>