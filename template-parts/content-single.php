<?php
/**
 * @package yogi
 */
?>

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<img src="<?php the_field('top_image'); ?>"/>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php yogi_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yogi' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php yogi_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
