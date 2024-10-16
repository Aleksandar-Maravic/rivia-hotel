<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rh
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-block">
			<div class="container">
				<div class="error-block-inner">
					<?php if ( $image = get_field('404_image', 'option') ) : ?>
						<img src="<?php echo $image['url']; ?>" alt="404 image">
					<?php endif; ?>
					<?php if ( $title = get_field('404_title', 'option') ) : ?>
						<h2 class="error-block-title"><?php echo $title; ?></h2>
					<?php endif; ?>
					<?php if ( $text = get_field('404_text', 'option') ) : ?>
						<p class="error-block-title"><?php echo $text; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
