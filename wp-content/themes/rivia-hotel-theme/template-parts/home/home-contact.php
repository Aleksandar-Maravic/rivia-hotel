<section class="home-contact" style="background-image: url('<?php echo get_field('bg_image_contact')['url']; ?>');">
    <div class="container">
        <div class="home-contact-inner">
            <?php if ( $pretitle_contact = get_field('pretitle_contact') ) : ?>
                <span class="section-pretitle center home-contact-pretitle"><?php echo $pretitle_contact; ?></span>
            <?php endif; ?>
            <?php if ( $title_contact = get_field('title_contact') ) : ?>
                <h2 class="section-title home-contact-title"><?php echo $title_contact; ?></h2>
            <?php endif; ?>
            <a href="javascript:;" class="js-open-contact-form home-contact-cta btn-primary"><?php _e('Kontakt', 'rivia-hotel'); ?><img src="<?php echo get_template_directory_uri() . '/assets/images/cta-bg.png'; ?>" alt="cta img" class="btn-primary-img"></a>
        </div>
    </div>
</section>