<section class="about-project-reverse">
    <div class="container">
        <div class="about-project-inner-reverse">
            <div class="about-project-content-reverse">
                <?php if ( $pretitle_apr = get_field('pretitle_apr') ) : ?>
                    <span class="section-pretitle about-project-pretitle"><?php echo $pretitle_apr; ?></span>
                <?php endif; ?>
                <?php if ( $title_apr = get_field('title_apr') ) : ?>
                    <h2 class="section-title about-project-title"><?php echo $title_apr; ?></h2>
                <?php endif; ?>
                <?php if ( $text_apr = get_field('text_apr') ) : ?>
                    <div class="entry-content about-project-text">
                        <?php echo $text_apr; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ( get_field('video_or_image_apr') ) : ?>
                <?php if ( $video_ap = get_field('video_apr') ) : ?>
                    <div class="about-project-video-wrapper-reverse">
                        <video controls>
                            <source src="<?php echo $video_apr['url']; ?>" type="video/mp4">
                        <video>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <?php if ( $image_apr = get_field('image_apr') ) : ?>
                    <div class="about-project-image-wrapper-reverse">
                        <img src="<?php echo $image_apr['url']; ?>" alt="image of hotel">
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>