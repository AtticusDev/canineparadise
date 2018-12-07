<?php
/**
 * Template part for displaying page content in home.php
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
			<div class="intro-banner text-center" style="background-image: url('<?php the_field('home_introduction_image'); ?>')">
				<h1 class="text-white"><?php the_field('home_introduction_text'); ?></h1>
			</div>
		</div>
	</div>
	<div class="container mt-0">
		<?php
		$service_boxes1 = get_field( 'home_service_box_1' );
		$service_boxes2 = get_field( 'home_service_box_2' );
		$service_boxes3 = get_field( 'home_service_box_3' );
		$service_boxes4 = get_field( 'home_service_box_4' );
		$service_boxes5 = get_field( 'home_service_box_5' );
		?>

		<div class="row">
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperA" style="background-image: url('<?php echo $service_boxes1['image']['url']; ?>')">
		    	<a href="<?php echo $service_boxes1['link']['url']; ?>" class="btn button">- <?php echo $service_boxes1['text']; ?> -</a>
			</div>
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperA" style="background-image: url('<?php echo $service_boxes2['image']['url']; ?>')">
		    	<a href="<?php echo $service_boxes2['link']['url']; ?>" class="btn button">- <?php echo $service_boxes2['text']; ?> -</a>
			</div>

		</div>
	</div>

	<div class="container mt-0">
		<div class="row">
			<div class="col-sm-12 col-md-12 pl-0 pr-0 image-wrapperE" style="background-image: url('<?php echo $service_boxes5['image']['url']; ?>')">
				<h1><?php echo $service_boxes5['title']; ?><br />
					<span class="subHead"><?php echo $service_boxes5['sub_title']; ?></span></h1>


		    	<a href="<?php echo $service_boxes5['link']['url']; ?>" target="_blank" class="btn button">- <?php echo $service_boxes5['text']; ?> -</a>
			</div>
		</div>
	</div>

	<div class="container mt-0">
		<div class="row">
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperA" style="background-image: url('<?php echo $service_boxes3['image']['url']; ?>')">
		    	<a href="<?php echo $service_boxes3['link']['url']; ?>" class="btn button">- <?php echo $service_boxes3['text']; ?> -</a>
			</div>
			<div class="col-sm-12 col-md-6 pl-0 pr-0 image-wrapperA" style="background-image: url('<?php echo $service_boxes4['image']['url']; ?>')">
		    	<a href="<?php echo $service_boxes4['link']['url']; ?>" class="btn button">- <?php echo $service_boxes4['text']; ?> -</a>
			</div>
		</div>
	</div>




</article><!-- #post-## -->
