<?php
    /*
    Plugin Name: KG Inline Code
    Plugin URI: http://wordpress.org/extend/plugins/kg-inline-code/
    Description: Replaces any word or sentence between backquotes (`) by a &lt;code&gt; block in a StackOverflow / Markdown way.
    Version: 1.0
    Author: KG
    Author URI: http://blog.kgweb.fr
    */

	if ( ! function_exists( 'kg_display_inline_code' ) ) :
	/**
	 *
	 * @param string $text The text to replace backquotes for display as HTML.
	 * @return string The converted text
	 */
	function kg_display_inline_code( $text ) {
		$text = preg_replace('/`([^`]+)`/', '<code>\1</code>', $text);
		return $text;
	}
	add_filter( 'kg_display_inline_code', 'kg_display_inline_code' );
	endif;

	add_filter( 'comment_text', 'kg_display_inline_code', 9 );
	add_filter( 'the_content',  'kg_display_inline_code', 9 );
	add_filter( 'the_excerpt',  'kg_display_inline_code', 9 );
	
?>