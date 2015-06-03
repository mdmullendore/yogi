<?php 
/**
 * template name:about
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package yogi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<section id="about-bg" style="background-image:url('<?php the_field('hero_image'); ?>');">
		<h1><?php the_field('custom_title'); ?></h1>
		<a href="#about-section"><i class="icon icon-arrow-down-thick"></i></a>
	</section>


	<section id="about-section">
		<div class="container">
			<img src="<?php the_field('company_logo'); ?>";>
			<h1><?php the_field('company_headline'); ?></h1>
			<hr>
			<p><?php the_field('company_description'); ?></p>
		</div>
	</section>

	<section id="about-icon-section">
		<div class="container">
			<article class="col-1-4">
				<i class="icon <?php the_field('icon_1'); ?>"></i>
				<h3><?php the_field('icon_headline_1'); ?></h3>
				<hr>
				<p><?php the_field('description_1'); ?></p>
			</article>
			<article class="col-1-4">
				<i class="icon <?php the_field('icon_2'); ?>"></i>
				<h3><?php the_field('icon_headline_2'); ?></h3>
				<hr>
				<p><?php the_field('description_2'); ?></p>
			</article>
			<article class="col-1-4">
				<i class="icon <?php the_field('icon_3'); ?>"></i>
				<h3><?php the_field('icon_headline_3'); ?></h3>
				<hr>
				<p><?php the_field('description_3'); ?></p>
			</article>
			<article class="col-1-4">
				<i class="icon <?php the_field('icon_4'); ?>"></i>
				<h3><?php the_field('icon_headline_4'); ?></h3>
				<hr>
				<p><?php the_field('description_4'); ?></p>
			</article>
		</div>
	</section>

	<section id="about-team">
		<article class="container">
			<h1><?php the_field('member_headline'); ?></h1>
			<div class="row">
				<div class="col-1-3 first">
					<img src="<?php the_field('member_1'); ?>";>
				</div>
				<div class="col-1-3 mid">
					<img src="<?php the_field('member_2'); ?>";>
				</div>
				<div class="col-1-3 last">
					<img src="<?php the_field('member_3'); ?>";>
				</div>
			</div>
			<div class="row">
				<div class="col-1-3 first">
					<img src="<?php the_field('member_4'); ?>";>
				</div>
				<div class="col-1-3 mid">
					<img src="<?php the_field('member_5'); ?>";>
				</div>
				<div class="col-1-3 last">
					<img src="<?php the_field('member_6'); ?>";>
				</div>
			</div>
		</article>
	</section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>