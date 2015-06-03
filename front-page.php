<?php
/**
 * The front page template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package yogi
 */

get_header(); ?>


<div id="slides">
	<div class="slides-container">
		<img src="<?php the_field('bg_1'); ?>" width="1024" height="682" alt="Surly">
		<img src="<?php the_field('bg_2'); ?>" width="1024" height="683" alt="Cinelli">
		<img src="<?php the_field('bg_3'); ?>" width="1024" height="685" alt="Affinity">
	</div>
	
	<h1><?php the_field('custom_title'); ?></h1>
	<p><?php the_field('custom_description'); ?></p>

	<nav class="slides-navigation">
		<a href="#" class="next"><i class="icon icon-chevron-right2"></i></a>
		<a href="#" class="prev"><i class="icon icon-chevron-left2"></i></a>
	</nav>
</div>

<section id="front-about">
	<div class="container">
		<div class="black-box">
			<h1><?php the_field('title_about'); ?></h1>
			<hr>
			<p><?php the_field('custom_about'); ?></p>
		</div>
	</div>
</section>

<section class="parallax-section">
	<p><?php the_field('bg_p'); ?></p>
	<div class="parallax" data-velocity="-.3" style="background-image:url('<?php the_field('bg_4'); ?>');"></div>
</section>

<section id="front-more-info">
	<div class="container">
		<div class="row">
			<div class="col-1-3 first">
				<h3><?php the_field('headline_1'); ?></h3>
				<hr>
				<p><?php the_field('description_1'); ?></p>
			</div>
			<div class="col-1-3 mid">
				<h3><?php the_field('headline_2'); ?></h3>
				<hr>
				<p><?php the_field('description_2'); ?></p>
			</div>
			<div class="col-1-3 last">
				<h3><?php the_field('headline_3'); ?></h3>
				<hr>
				<p><?php the_field('description_3'); ?></p>
			</div>
		</div>
	</div>
</section>

<section id="front-clients">
	<div class="container">
		<div class="row">
			<div class="col-1-4 first">
				<img src="<?php the_field('client_1'); ?>";>
			</div>
			<div class="col-1-4 mid">
				<img src="<?php the_field('client_2'); ?>";>
			</div>
			<div class="col-1-4 mid">
				<img src="<?php the_field('client_3'); ?>";>
			</div>
			<div class="col-1-4 last">
				<img src="<?php the_field('client_4'); ?>";>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<!-- top slider js -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.animate-enhanced.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.superslides.js" type="text/javascript"></script>
<script>
    $(function() {
      $('#slides').superslides();
    });
</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/parallax.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
       $('.parallax').scrolly({bgParallax: true});
    });
</script>