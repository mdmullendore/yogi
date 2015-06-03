<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package yogi
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function muse_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'muse_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function muse_jetpack_setup
add_action( 'after_setup_theme', 'muse_jetpack_setup' );

function muse_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function muse_infinite_scroll_render