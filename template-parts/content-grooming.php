<?php
/**
 * Template part for displaying page content in grooming.php
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
		<div class="row justify-content-md-center bg-white pt-5 pb-5">
			<div class="col-md-8">
				<?php the_field('overview'); ?>
			</div>
		</div>
	</div>
	<div class="container mt-0">
		<div class="row">

				<?php
				$grooming = get_field( 'grooming_services' );

				if( $grooming ): ?>

					<div class="col-sm-12 col-md-6 pl-0 pr-0">
						<div class="image-wrapperC" style="background-image: url('<?php echo $grooming['image1']['url']; ?>')">
						</div>
						<div class="image-wrapperD" style="background-image: url('<?php echo $grooming['image2']['url']; ?>')">
						</div>
						<div class="image-wrapperD" style="background-image: url('<?php echo $grooming['image3']['url']; ?>')">
						</div>
					</div>
					<div class="col-sm-12 col-md-6 info_container bg-ltgray">
						<?php echo $grooming['description']; ?>
					</div>

					<?php
				endif;
				?>

		</div>
	</div>

	<div class="container mt-0">
		<div class="row justify-content-md-center bg-white pt-5 pb-5">
			<div class="col-md-8">
				<?php the_field('prices'); ?>
			</div>
		</div>
	</div>
	<div class="container mt-0">
		<div class="row justify-content-md-center bg-ltgray pt-5 pb-5">
			<div class="col-md-8">
				<?php the_field('booking'); ?>

			</div>
		</div>
	</div>



	<div class="container mt-0">
		<div class="row">
			<?php
			$viewing_panel = get_field( 'viewing' );

			if( $viewing_panel ): ?>
		
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperB" style="background-image: url('<?php echo $viewing_panel['viewing_image']['url']; ?>')">
			</div>
				<div class="col-sm-12 col-md-6 info_container bg-dkgray uppercaseText text-black">
					<?php echo $viewing_panel['viewing_text']; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>




</article><!-- #post-## -->
