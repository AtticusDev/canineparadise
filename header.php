<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Canine
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/9d3b6f5b-736e-4081-a581-b6315cc740ee.css"/>





<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<div class="container">
			<div class="row justify-content-center">

			    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			    	<div class="container">
						<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
				   		<div class="collapse navbar-collapse" id="navbarNav">
			            <?php
			            $args = array(
			              'theme_location' => 'primary',
			              'depth'      => 2,
			              'container'  => false,
			              'menu_class'     => 'navbar-nav',
			              'walker'     => new Bootstrap_Walker_Nav_Menu()
			              );
			            if (has_nav_menu('primary')) {
			              wp_nav_menu($args);
			            }
			            ?>
			          </div>

			        </div>
				</nav>



			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
