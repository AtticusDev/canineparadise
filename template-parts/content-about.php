<?php
/**
 * Template part for displaying page content in About.php
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

				<?php the_field('about_us'); ?>

			</div>
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

				<?php the_field('viewing'); ?>

			</div>
		</div>
	</div>




</article><!-- #post-## -->
