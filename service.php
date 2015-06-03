<?php 
/**
 * template name:service
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package yogi
 */

get_header(); ?>
	<section id="service-bg" style="background-image:url('<?php the_field('hero_image'); ?>');">
		<h1><?php the_field('custom_title'); ?></h1>
		<a href="#process-service"><i class="icon icon-arrow-down-thick"></i></a>
	</section>
	<section id="process-service">
		<div class="container">
			<article class="row top-row">
				<h1><?php the_field('process_headline'); ?></h1>
				<hr>
				<p><?php the_field('process_description'); ?></p>
			</article>
			<div class="row process-service-icons">
				<article class="col-1-4">
					<i class="icon <?php the_field('icon_1'); ?>"></i>
					<h3><?php the_field('icon_headline_1'); ?></h3>
					<p><?php the_field('description_1'); ?></p>
				</article>
				<article class="col-1-4">
					<i class="icon <?php the_field('icon_2'); ?>"></i>
					<h3><?php the_field('icon_headline_2'); ?></h3>
					<p><?php the_field('description_2'); ?></p>
				</article>
				<article class="col-1-4">
					<i class="icon <?php the_field('icon_3'); ?>"></i>
					<h3><?php the_field('icon_headline_3'); ?></h3>
					<p><?php the_field('description_3'); ?></p>
				</article>
				<article class="col-1-4">
					<i class="icon <?php the_field('icon_4'); ?>"></i>
					<h3><?php the_field('icon_headline_4'); ?></h3>
					<p><?php the_field('description_4'); ?></p>
				</article>
			</div>
		</div>
	</section>
	<section id="about-service">
		<div class="container">
			<article class="row top-row">
				<h1><?php the_field('service_headline'); ?></h1>
				<hr>
				<p><?php the_field('service_description'); ?></p>
			</article>
			<div class="row">
				<article class="col-1-3 first">
					<i class="icon <?php the_field('service_icon_1'); ?>"></i>
					<h3><?php the_field('service_icon_headline_1'); ?></h3>
					<p><?php the_field('service_description_1'); ?></p>
					<p><?php the_field('service_1'); ?></p>
					<p><?php the_field('service_2'); ?></p>
					<p><?php the_field('service_3'); ?></p>
				</article>
				<article class="col-1-3 mid">
					<i class="icon <?php the_field('service_icon_2'); ?>"></i>
					<h3><?php the_field('service_icon_headline_2'); ?></h3>
					<p><?php the_field('service_description_2'); ?></p>
					<p><?php the_field('service_4'); ?></p>
					<p><?php the_field('service_5'); ?></p>
					<p><?php the_field('service_6'); ?></p>
				</article>
				<article class="col-1-3 last">
					<i class="icon <?php the_field('service_icon_3'); ?>"></i>
					<h3><?php the_field('service_icon_headline_3'); ?></h3>
					<p><?php the_field('service_description_3'); ?></p>
					<p><?php the_field('service_7'); ?></p>
					<p><?php the_field('service_8'); ?></p>
					<p><?php the_field('service_9'); ?></p>
				</article>
			</div>
		</div>
	</section>	
<?php get_footer(); ?>