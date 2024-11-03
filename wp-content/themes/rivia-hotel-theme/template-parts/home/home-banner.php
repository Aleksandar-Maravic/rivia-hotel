<section class="home-banner">
    <?php if ( $video = get_field('video') ) : ?>
        <div class="home-banner-video-wrapper">
            <video playsinline muted autoplay loop class="home-banner-video">
                <source src="<?php echo $video['url']; ?>" type="video/mp4">
            </video>
        </div>
    <?php endif; ?>
    <div class="home-banner-inner">
        <?php if ( $title = get_field('title') ) : ?>
            <h1 class="home-banner-title"><?php echo $title; ?></h1>
        <?php endif; ?>
    </div>
</section>