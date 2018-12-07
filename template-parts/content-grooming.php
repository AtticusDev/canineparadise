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
		<div class="row">


		<?php
		$overview = get_field( 'overview' );

		if( $overview ): ?>
	
			<div class="col-sm-12 col-md-6 info_container bg-ltgray uppercaseText">
				<?php echo $overview['overview_text']; ?>

			</div>
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperB" style="background-image: url('<?php echo $overview['overview_image']['url']; ?>')">
			</div>
		<?php endif; ?>
		</div>
	</div>

	<div class="container mt-0">
		<div class="row">
			<div class="col-sm-12 pt-5 pb-3 bg-white">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('prices') ):
				 	// loop through the rows of data
				    while ( have_rows('prices') ) : the_row();
				    	$dog = get_sub_field('text');
				    	$cost = get_sub_field('cost');
				    	$color = get_sub_field('colour');
				 		?>
				<div class="row justify-content-md-center">
					<div class="col col-md-2 pricing text-white" style="background-color:<?php echo $color; ?>;"><?php echo $dog; ?></div>
					<div class="col col-md-2 pricing text-white" style="background-color:<?php echo $color; ?>;"><?php echo $cost; ?></div>
				</div>
				<?php
					endwhile;
				endif;
				?>
				<p>We are not currently offering a full grooming service.</p>

			</div>
		</div>
		<div class="row justify-content-md-center bg-white">
			<div class="col-md-8 mb-3">
	    		<p><a href="/contact" class="btn btn-dark button text-white mb-4" role="button"> - MAKE A BOOKING - </a></p>

			</div>
		</div>
	</div>

	<div class="container mt-0">
		<div class="row justify-content-md-center bg-ltgray pt-5 pb-5">
			<div class="col-md-8">
				<?php the_field('notice'); ?>

			</div>
		</div>
	</div>




</article><!-- #post-## -->
