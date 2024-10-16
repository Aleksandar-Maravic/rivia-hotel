<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rh
 */

get_header(); ?>

	<main id="primary" class="site-main">

		<div class="blog-archive">
			<div class="container">
				<div class="blog-archive-inner">
					<?php if (is_home() && !is_front_page()): ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php endif; ?>
				<div class="blog-post-items-wrapper">
				<?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
							
							
								<div class="blog-post-item">
									<div class="blog-post-item-inner">
										<div class="blog-post-item-featured-image-wrapper">
										<a href="<?php the_permalink(); ?>" class="blog-post-item-featured-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
										</div>
											<!-- <span class="icon-link blog-post-item-featured-link"></span> -->
										</a>
										<div class="blog-post-item-date">
											<span class="icon-calendar"></span>
											<span class="date"><?php echo get_the_date('M d, Y'); ?></span>
										</div>
										<h3 class="blog-post-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="entry-content blog-post-item-excerpt">
											<p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
										</div>
										
									</div>
								</div>
							
							
						<?php
        endwhile; ?>
				</div>

        <div class="pagination">
					<?php rh_post_navigation();
    else:
        get_template_part('template-parts/content', 'none');
    endif; ?>
				</div>
		
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php get_footer();
