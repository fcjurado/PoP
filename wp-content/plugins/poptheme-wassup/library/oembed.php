<?php

/**---------------------------------------------------------------------------------------------------------------
 *
 * oEmbed functions
 *
 * ---------------------------------------------------------------------------------------------------------------*/

// Priority 7: Just before calling in file wp-includes/class-wp-embed.php:
// `add_filter( 'the_content', array( $this, 'run_shortcode' ), 8 );`
add_filter( 'the_content', 'popwassup_oembed_unsupported', 7);
function popwassup_oembed_unsupported($content) {

	// Problem in function "shortcode" in file wp-includes/class-wp-embed.php:
	// oEmbed has no support for whenever the global $post is not set, as in a tag (it does the oEmbed logic only after the condition `if ( $post_ID ) {`)
	// however we need to still use oEmbed in this case, since using SimpleView
	// so for these cases, set an external $post_ID, where the cache will be saved
	// Can use the Homepage page
	if (is_tag() && defined('POPTHEME_WASSUP_PAGEPLACEHOLDER_TAG')) {

		$GLOBALS['wp_embed']->post_ID = POPTHEME_WASSUP_PAGEPLACEHOLDER_TAG;
	}

	return $content;
}