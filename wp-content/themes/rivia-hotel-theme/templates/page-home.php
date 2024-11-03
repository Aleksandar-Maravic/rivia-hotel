<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php get_template_part( 'template-parts/home/home', 'banner' ); ?>
		<?php get_template_part( 'template-parts/home/home', 'about-project' ); ?>
		<?php // get_template_part( 'template-parts/home/home', 'about-project-reverse' ); ?>
		<?php get_template_part( 'template-parts/home/home', 'about-us' ); ?>
		<?php get_template_part( 'template-parts/home/home', 'gallery' ); ?>
		<?php get_template_part( 'template-parts/home/home', 'contact' ); ?>

	</main><!-- #main -->

<?php
get_footer();
