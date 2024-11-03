<section class="home-gallery">
    <div class="container">
        <div class="home-gallery-inner">
            <?php if ( $pretitle_gallery = get_field('pretitle_gallery') ) : ?>
                <span class="section-pretitle center home-gallery-pretitle"><?php echo $pretitle_gallery; ?></span>
            <?php endif; ?>
            <?php if ( $title_gallery = get_field('title_gallery') ) : ?>
                <h2 class="section-title home-gallery-title"><?php echo $title_gallery; ?></h2>
            <?php endif; ?>
            <?php if ( $text_gallery = get_field('text_gallery') ) : ?>
                <div class="entry-content home-gallery-text">
                    <?php echo $text_gallery; ?>
                </div>
            <?php endif; ?>
            <div class="home-gallery-cta-wrapper">
                <a href="javascript:;" class="btn-primary blue js-show-slider"><?php _e('Galerija', 'rivia-hotel'); ?><img src="<?php echo get_template_directory_uri() . '/assets/images/cta-bg.png'; ?>" alt="cta img" class="btn-primary-img"></a>
            </div>
        </div>
    </div>
    <div class="home-gallery-wrapper">
        <div class="home-gallery-wrapper-footer">
            <span class="js-gallery-close"><?php _e('Zatvori', 'rivia-hotel'); ?></span>
            <div class="js-gallery-caption"></div>
            <div class="home-gallery-counter">
                <span class="js-current-slide">1</span>
                <span class="delimiter">/</span>
                <span class="js-max-slides"></span>
            </div>
            <div class="home-gallery-arrows"></div>
        </div>
        <div class="js-device-message">
            <?php _e('Molimo vas rotirajte vaš uređaj za optimalan prikaz galerije', 'rivia-hotel'); ?>
        </div>
        <div class="js-gallery">
            <?php
                $gallery = get_field('gallery');
                foreach($gallery as $img) :
            ?>
                <div class="home-gallery-item" style="background-image: url('<?php echo $img['url']; ?>');">
                    <span class="js-fake-caption"><?php echo $img['caption']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>