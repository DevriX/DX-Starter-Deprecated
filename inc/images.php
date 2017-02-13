<?php
/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since DX Starter 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function dxstarter_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		  is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'dxstarter_post_thumbnail_sizes_attr', 10 , 3 );


/**
 * Prints out better responsive images. Uses the class "responsive-image"
 * 
 * $url The image address
 * $size Name of the thumbnail size
 * $class Custom image class
 * $alt Alternative text if it can't be loaded
 * 
 * @since DX Starter v1.1.0
 */
function dxstarter_featured_image( $size, $class = '', $attr = '' ) {
	if ( ! has_post_thumbnail() ) {
		return;
	}

	if ( empty( $size ) ) {
		return;
	}

	if ( empty( $class ) ) {
		$class = '';
	}

	// Print the HTML of the image
	echo "<picture class='entry-featured-image responsive-image ${class}'>";
	
	// use the standard featured image function
	the_post_thumbnail( $size, $attr );
	
	echo "</picture>";
}

/**
 * Returns better responsive images
 * 
 * @since  DX Starter v1.1.0
 */
function dxstarter_get_responsive_image() {

}
