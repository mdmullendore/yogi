<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package yogi
 */
?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer col-1" role="contentinfo">
		<div class="container">
			<div class="col-1-2">
				<a class="contact-btn" href="email@gmail.com"><i class="icon icon-mail"></i> Get in Touch</a>
			</div>
			<div class="col-1-2">
				<div class="col-1-3">
					<a class="social-icon" href="#" target="_blank"><i class="icon icon-social-facebook"></i></a>
					<a class="social-icon" href="#" target="_blank"><i class="icon icon-social-twitter"></i></a>
					<a class="social-icon" href="#" target="_blank"><i class="icon icon-social-pinterest"></i></a>
					<a class="social-icon" href="#" target="_blank"><i class="icon icon-social-vimeo"></i></a>
				</div>
				<div class="col-1-3">
					<p>1000 Red Road</p>
					<p>San Francisco, Ca 95624</p>
				</div>
				<div class="col-1-3">
					<p>(800) 560-9850</p>
					<p><a href="http://localhost/wordpress/blog/" alt="blog">Blog</a></p>
				</div>
			</div>
		</div>
		<div class="col-1 copy">
			<?php printf( esc_html__( 'Wordpress Theme %1$s created by: %2$s.', 'Yogi' ), 'Yogi', '<a href="http://www.masonmullendore.com" target="_blank" rel="designer">Mason Mullendore</a>' ); ?>		
		</div>
	</footer>

</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
