<?php
/**
 * Template part for displaying page content in DayCare.php
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
		<div class="row justify-content-md-center bg-white pt-5 pb-5">
			<div class="col-md-8">

				<?php the_field('overview'); ?>

			</div>
		</div>
	</div>
	<div class="container mt-0">
		<div class="row">


		<?php
		$booking_panel = get_field( 'booking_panel' );

		if( $booking_panel ): ?>
	
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperB" style="background-image: url('<?php echo $booking_panel['booking_image']['url']; ?>')">
			</div>
			<div class="col-sm-12 col-md-6 info_container bg-ltgray">
				<?php echo $booking_panel['booking_text']; ?>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/gold-dog.png" class="mb-0"/>
			</div>
		<?php endif; ?>
		</div>
	</div>
	<div class="container mt-0">
		<div class="row justify-content-md-center">
			<div class="col-md-12 info_container">


				<div class="uppercaseText"><?php the_field('prices_title'); ?>
				</div>

				<?php
				// check if the repeater field has rows of data
				if( have_rows('prices') ):
				 	// loop through the rows of data
				    while ( have_rows('prices') ) : the_row();
				    	$col1 = get_sub_field('col1');
				    	$col2 = get_sub_field('col2');
				    	$col3 = get_sub_field('col3');
				    	$col4 = get_sub_field('col4');
				    	$color = get_sub_field('colour');
				?>

				<div class="row justify-content-md-center">
					<div class="col col-md-4 pricing text-white" style="background-color:<?php echo $color; ?>;">
						<?php echo $col1; ?></div>
					<div class="col col-md-2 pricing text-white" style="background-color:<?php echo $color; ?>;">
						<?php echo $col2; ?></div>
					<div class="col col-md-2 pricing text-white" style="background-color:<?php echo $color; ?>;">
						<?php echo $col3; ?></div>
					<div class="col col-md-2 pricing text-white" style="background-color:<?php echo $color; ?>;">
						<?php echo $col4; ?></div>
				</div>


				<?php
					endwhile;
				endif;
				?>
				<p>Prices are per day and include VAT</p>
		
			</div>
		</div>
	</div>



	<div class="container mt-0">
		<div class="row uppercaseText">
			<?php
			$packages = get_field( 'packages' );

			if( $packages ): ?>
		
				<div class="col-sm-12 col-md-6 info_container bg-dkgray">
					<?php echo $packages['package_text']; ?>
				</div>
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperB" style="background-image: url('<?php echo $packages['package_image']['url']; ?>')">
			</div>
			<?php endif; ?>
		</div>
		<div class="row uppercaseText">
			<?php
			$viewing_panel = get_field( 'viewing' );

			if( $viewing_panel ): ?>
		
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperB" style="background-image: url('<?php echo $viewing_panel['viewing_image']['url']; ?>')">
			</div>
				<div class="col-sm-12 col-md-6 info_container bg-dkgray">
					<?php echo $viewing_panel['viewing_text']; ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="row justify-content-md-center bg-white pt-5 pb-5">
			<div class="col-md-8">

				<?php the_field('instructions'); ?>

			</div>
		</div>
	</div>
	<div class="container mt-0">
		<div class="row justify-content-md-center bg-ltgray pt-5 pb-5">
			<div class="col-md-8">

<?php the_field('booking'); ?>
	    		<p><a href="/contact" class="btn btn-dark button text-white mb-4 mt-4" role="button"> - MAKE A BOOKING - </a></p>

			</div>
		</div>
	</div>




</article><!-- #post-## -->
