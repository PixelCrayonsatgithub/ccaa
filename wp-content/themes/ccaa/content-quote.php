<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage Ccaa
 * @since Ccaa 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ccaa' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ccaa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php ccaa_entry_meta(); ?>

		<?php if ( comments_open() && ! is_single() ) : ?>
		<span class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'ccaa' ) . '</span>', __( 'One comment so far', 'ccaa' ), __( 'View all % comments', 'ccaa' ) ); ?>
		</span><!-- .comments-link -->
		<?php endif; // comments_open() ?>
		<?php edit_post_link( __( 'Edit', 'ccaa' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
