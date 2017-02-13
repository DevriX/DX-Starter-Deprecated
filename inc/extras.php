<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package DevriX_Starter
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dxstarter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'dxstarter_body_classes' );

function dxdump( $var, $text = '' ) {
	echo "<strong style='background: #ff0; display: block; margin-top: 10px; margin-bottom: -20px; padding: 0 10px; border: 2px solid #f00'>dxdump: $text</strong>";
	echo "<pre style='background: #f0f0f0; padding: 10px; overflow: scroll; border: 2px solid #f00;'>";
	var_dump( $var );
	echo "</pre>";
}
