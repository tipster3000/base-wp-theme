<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Oyova Blank Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function oyova_blank_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'oyova_blank_theme_jetpack_setup' );
