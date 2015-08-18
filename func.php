<?php





add_filter( 'template_include', 'woo_custom_maybe_load_bbpress_tpl', 99 );
 
function woo_custom_maybe_load_bbpress_tpl ( $tpl ) {
	if ( function_exists( 'is_bbpress' ) && is_bbpress() ) {
		$tpl = locate_template( 'bbpress.php' );
	}
	return $tpl;
} // End woo_custom_maybe_load_bbpress_tpl()
 
add_filter( 'bbp_get_template_stack', 'woo_custom_deregister_bbpress_template_stack' );
 
function woo_custom_deregister_bbpress_template_stack ( $stack ) {
	if ( 0 < count( $stack ) ) {
		$stylesheet_dir = get_stylesheet_directory();
		$template_dir = get_template_directory();
		foreach ( $stack as $k => $v ) {
			if ( $stylesheet_dir == $v || $template_dir == $v ) {
				unset( $stack[$k] );
			}
		}
	}
	return $stack;
} // End woo_custom_deregister_bbpress_template_stack()










?>