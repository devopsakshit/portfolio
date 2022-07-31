<?php 
 /*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Noble Band
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="featured-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- .featured-image -->
    <?php endif; ?>
    
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'noble-band' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php noble_band_posts_tags(); ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'noble-band' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>	

	<div class="entry-meta">
		<?php noble_band_posted_on();
		noble_band_entry_meta(); ?>
	</div><!-- .entry-meta -->	
</article><!-- #post-## -->