<?php
/**
 * The template for displaying home page.
 * @package Noble Band
 */

if ( 'posts' != get_option( 'show_on_front' ) ) { 
    get_header(); ?>
    <div id="content-wrapper" class="wrapper">
        <div class="section-gap clear">
            <?php include( get_page_template() ); ?>
        </div><!-- .section-gap -->
    </div><!-- #content-wrapper -->
    <?php
    get_footer();
} 
elseif ('posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}