<?php
/**
 * The template for displaying all single posts.
 *
 * @package yogi
 */

get_header(); ?>
<div id="bg-grey">
	<div class="container single-post">
		<div id="primary" class="content-area col-3-4">
			<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php the_post_navigation(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
