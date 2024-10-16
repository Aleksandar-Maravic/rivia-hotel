<section class="home-banner">
    <?php if ( $video = get_field('video') ) : ?>
        <video playsinline muted autoplay loop class="home-banner-video">
            <source src="<?php echo $video['url']; ?>" type="video/mp4">
        </video>
    <?php endif; ?>
    <div class="container">
        <div class="home-banner-inner">
            
        </div>
    </div>
</section>