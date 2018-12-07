<?php
/**
 * Template part for displaying page content in hotel.php
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
			<div class="col-sm-12 info_container">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('prices') ):
				 	// loop through the rows of data
				    while ( have_rows('prices') ) : the_row();
				    	$dog = get_sub_field('dog_number');
				    	$cost = get_sub_field('cost');
				    	$color = get_sub_field('color');
				 		?>
				<div class="row justify-content-md-center">
					<div class="col col-md-2 pricing text-white" style="background-color:<?php echo $color; ?>;"><?php echo $dog; ?></div>
					<div class="col col-md-2 pricing text-white" style="background-color:<?php echo $color; ?>;"><?php echo $cost; ?></div>
				</div>
				<?php
					endwhile;
				endif;
				?>
				<p>Prices are per day and include VAT</p>

			</div>
		</div>
		<div class="row justify-content-md-center bg-white">
			<div class="col-md-8 mb-5">

				<?php the_field('description'); ?>

	    		<p><a href="/contact" class="btn btn-dark button text-white mb-4 mt-4" role="button"> - MAKE A BOOKING - </a></p>

	    		<p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gold-dog.png" /><p/>




			</div>
		</div>
	</div>







	<div class="container mt-0">
		<div class="row">
			<!-- Carousel section -->

			<div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" role="listbox">

				<?php

				// check if the repeater field has rows of data
				if( have_rows('slider') ):
					$row = 1;
				 	// loop through the rows of data
				    while ( have_rows('slider') ) : the_row();
				    	$image = get_sub_field('image');
				 		
				 		if($row == 1){
				 		?>
        			    <div class="carousel-item active">
					      <img class="d-block img-fluid w-100" src="<?php echo $image[url]; ?>" alt="<?php echo $image[alt]; ?>">
					    </div>
				 		<?php
				 		}
				 		else
				 		{
				 		?>
        			    <div class="carousel-item">
					      <img class="d-block img-fluid w-100" src="<?php echo $image[url]; ?>" alt="<?php echo $image[alt]; ?>">
					    </div>
				 		<?php
				 		}
				 		
				 		++$row;

					    endwhile;
				endif;

				?>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

			<!-- End Carousel section -->
		</div>
	</div>


	<div class="container mt-0">
		<div class="row">
		<?php
		$top_panels = get_field( 'top_panels' );

		if( $top_panels ): ?>
	
			<div class="col-sm-12 col-md-6 info_container bg-white uppercaseText">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/gold-dog.png" class="mb-4"/>
				<?php echo $top_panels['left_panel']; ?>
			</div>
			<div class="col-sm-12 col-md-6 info_container bg-ltgray">
				<?php echo $top_panels['right_panel']; ?>
			</div>
		<?php endif; ?>
		</div>
	</div>







	<div class="container mt-0">
		<div class="row">
				<?php 
				$args = array( 'post_type' => 'quote', 'posts_per_page' => '1', 'orderby' => 'rand' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				 $quotename = get_field( "quote_by" );
				 $image = get_field("image");
				?>
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperB" style="background-image: url('<?php echo $image['url']; ?>')">
			</div>

			<div class="col-sm-12 col-md-6 info_container bg-dkgray uppercaseText text-white quote-panel">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/quotes.png" style="margin-bottom: 2rem;"/>

				<?php the_content(); ?>
				<?php the_title( '<h3>', '</h3>' ); ?>

			</div>
				<?php 
				endwhile;
				wp_reset_query();
				?>
		</div>
	</div>
		<div class="container mt-0">
		<div class="row justify-content-md-center bg-white pt-5 pb-5">
			<div class="col-md-8">
				<?php the_field('catering'); ?>
			</div>
		</div>
	</div>




</article><!-- #post-## -->
