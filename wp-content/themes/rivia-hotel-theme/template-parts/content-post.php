<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rh
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<img class="single-post-thumbnail" src="<?php echo the_post_thumbnail_url(); ?>" alt="post thumbnail">

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
