<section class="about-project">
    <div class="container">
        <div class="about-project-inner">
            <div class="about-project-content">
                <?php if ( $pretitle_ap = get_field('pretitle_ap') ) : ?>
                    <span class="section-pretitle about-project-pretitle"><?php echo $pretitle_ap; ?></span>
                <?php endif; ?>
                <?php if ( $title_ap = get_field('title_ap') ) : ?>
                    <h2 class="section-title about-project-title"><?php echo $title_ap; ?></h2>
                <?php endif; ?>
                <?php if ( $text_ap = get_field('text_ap') ) : ?>
                    <div class="entry-content about-project-text">
                        <?php echo $text_ap; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ( get_field('video_or_image') ) : ?>
                <?php if ( $video_ap = get_field('video_ap') ) : ?>
                    <div class="about-project-video-wrapper">
                        <video controls>
                            <source src="<?php echo $video_ap['url']; ?>" type="video/mp4">
                        <video>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <?php if ( $image_ap = get_field('image_ap') ) : ?>
                    <div class="about-project-image-wrapper">
                        <img src="<?php echo $image_ap['url']; ?>" alt="image of hotel">
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>