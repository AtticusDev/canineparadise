<?php
/**
 * Template part for displaying page content in training.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Canine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center'); ?>>
	<div class="container mb-0">
		<div class="row">
			<div class="home-content">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-logo.png"></a>



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
		<div class="row justify-content-md-center bg-dkgray pt-5 pb-5">
			<div class="col-md-8">
				<?php the_field('overview'); ?>
			</div>
		</div>
	</div>
	<div class="container mt-0">
		<div class="row">
					<div class="col-sm-12 col-md-6 bg-white p-5">
						<?php the_field('board_and_train'); ?>
					</div>
					<div class="col-sm-12 col-md-6 bg-ltgray pl-0 pr-0 pb-0">
						<div style="height: 66%;" class="p-5">
							<?php the_field('puppy_classes'); ?>
						</div>
						<div class="image-wrapperC" style="background-image: url('<?php the_field('puppy_class_image'); ?>')">
						</div>
					</div>

		</div>
	</div>

	<div class="container mt-0">
		<div class="row justify-content-md-center bg-ltgray pt-5 pb-5">
			<div class="col-sm-12 col-md-8">
	    		<p><a href="/contact" class="btn btn-dark button text-white mb-4 mt-4" role="button"> - MAKE A BOOKING - </a></p>
			</div>
		</div>
	</div>




</article><!-- #post-## -->
