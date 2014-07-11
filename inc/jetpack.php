<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Tedx
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function tedx_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'tedx_jetpack_setup' );
