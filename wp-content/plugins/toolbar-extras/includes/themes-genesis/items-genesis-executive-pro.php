<?php

// includes/themes-genesis/items-genesis-executive-pro

/**
 * Prevent direct access to this file.
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


add_filter( 'tbex_filter_items_theme_customizer_deep', 'ddw_tbex_themeitems_executive_pro_customize', 90 );
/**
 * Customize items for Genesis Child Theme:
 *   Executive Pro (Premium, by StudioPress)
 *
 * @since 1.3.2
 * @since 1.4.8 Refactored using filter/array declaration.
 *
 * @param array $items Existing array of params for creating Toolbar nodes.
 * @return array Tweaked array of params for creating Toolbar nodes.
 */
function ddw_tbex_themeitems_executive_pro_customize( array $items ) {

	/** Declare child theme's items */
	$executivepro_items = array(
		'colors' => array(
			'type'  => 'section',
			'title' => __( 'Colors', 'toolbar-extras' ),
			'id'    => 'executivepro-colors',
		),
		'header_image' => array(
			'type'  => 'section',
			'title' => __( 'Header Image', 'toolbar-extras' ),
			'id'    => 'executivepro-header-image',
		),
		'background_image' => array(
			'type'  => 'section',
			'title' => __( 'Background Image', 'toolbar-extras' ),
			'id'    => 'executivepro-background-image',
		),
	);

	/** Merge and return with all items */
	return array_merge( $items, $executivepro_items );

}  // end function
