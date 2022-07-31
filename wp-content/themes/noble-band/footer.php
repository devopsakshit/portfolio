<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Noble Band
 */

/**
 *
 * @hooked noble_band_footer_start
 */
do_action( 'noble_band_action_before_footer' );

/**
 * Hooked - noble_band_footer_top_section -10
 * Hooked - noble_band_footer_section -20
 */
do_action( 'noble_band_action_footer' );

/**
 * Hooked - noble_band_footer_end. 
 */
do_action( 'noble_band_action_after_footer' );

wp_footer(); ?>

</body>  
</html>