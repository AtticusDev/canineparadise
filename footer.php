<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Canine
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-3 justify-content-center">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-4 uppercaseText">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div><!--  .col-md-4 -->
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div><!--  .col-md-4 -->
			</div><!--  .row -->
 
			<div class="site-info text-center">
				&copy; <?php bloginfo( 'name' );
						echo ' - ';
						echo date("Y"); ?>
						<p>Brand and Website design by <a href="https://www.atticuscreative.co.uk">Atticus</a></p>
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
