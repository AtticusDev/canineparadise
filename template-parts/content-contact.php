<?php
/**
 * Template part for displaying page content in Contact.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Canine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>
	<div class="container mb-3">
		<div class="row justify-content-center">
			<div class="home-content">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-logo.png">



			<?php the_post_thumbnail('full', array('class' => 'mb-0')); ?>	
	
			</div><!-- .home-content -->
		</div>
	</div>
	<div class="container mt-0">
		<div class="row">
			<div class="intro-banner text-center" style="background-image: url('<?php the_field('intro_image'); ?>')">
				<h1 class="text-white"><?php the_field('intro_text'); ?></h1>
			</div>
		</div>
	</div>
	<div class="container mt-0">
		<div class="row justify-content-md-center bg-white">
			<div class="col-md-12 pl-0 pr-0">
				<?php echo do_shortcode('[wpgmza id="1"]'); ?>
			</div>
		</div>
	</div>
	<div class="container mt-0 bg-white">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-6 info_container bg-white text-uppercase">
				<?php the_field('address_panel'); ?>
			</div>
			<div class="col-sm-12 col-md-6 info_container bg-dkgray">

				<?php the_field('enquiry_form'); ?>

			</div>
		</div>
	</div>



</article><!-- #post-## -->
