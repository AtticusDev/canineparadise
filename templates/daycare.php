<?php
/**
 * Template Name: DayCare

 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.

 Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Canine
 */

get_header(); ?>

<!--	<div class="container pl-0 pr-0">
		<div class="row justify-content-center">
-->			<div id="primary" class="content-area text-center">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'daycare' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
<!--		</div>
	</div>
-->
<?php
get_footer();
