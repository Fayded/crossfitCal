<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package crossfit
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function crossfit_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'crossfit_jetpack_setup' );
