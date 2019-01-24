<?php
/**
 * Additional features to allow styling of the templates
 */

	function awardthemes_pagination($the_query, $range = 4){		
		/* Don't print empty markup if there's only one page. */
		
		if ( $the_query->max_num_pages < 2 ) {
			return;
		}
		
		$paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
					
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts    = explode( '?', $pagenum_link );

		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}

		$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

		$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
		
		/* Set up paginated links.*/
		$links = paginate_links( array(
			'base'     => $pagenum_link,
			'format'   => $format,
			'total'    => $the_query->max_num_pages,
			'current'  => $paged,
			'mid_size' => 1,
			'add_args' => array_map( 'urlencode', $query_args ),
			'prev_text' => '<i class="fa fa-angle-double-left"></i>',
			'next_text' => '<i class="fa fa-angle-double-right"></i>',
			'before_page_number' => '',
			'after_page_number'  => ''
		) );

		html_entity_decode($links);
		
		if ( $links ) :
			return '<div class="ow-pagination"><ul class="pagination"><li>'. $links . '</li></ul></div>';
		endif;
	}
	global $awardthemes_allowed_html;
	$awardthemes_allowed_html = 
		array(
		'a' => array('href' => array(),'title' => array()),
		'div' => array('id' => array(),'class' => array()),
		'h1' => array('id' => array(),'class' => array()),
		'h2' => array('id' => array(),'class' => array()),
		'h3' => array('id' => array(),'class' => array()),
		'h4' => array('id' => array(),'class' => array()),
		'h5' => array('id' => array(),'class' => array()),
		'h6' => array('id' => array(),'class' => array()),
		'br' => array(),
		'em' => array(),
		'strong' => array(),
	);
	
	function woodest_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
 
	add_filter( 'comment_form_fields', 'woodest_move_comment_field_to_bottom' );