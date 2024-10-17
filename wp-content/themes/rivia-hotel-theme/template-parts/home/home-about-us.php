<section class="about-us">
    <div class="container">
        <div class="about-us-inner">
            <?php if ( $pretitle_au = get_field('pretitle_au') ) : ?>
                <span class="section-pretitle center about-us-pretitle"><?php echo $pretitle_au; ?></span>
            <?php endif; ?>
            <?php if ( $title_au = get_field('title_au') ) : ?>
                <h2 class="section-title about-us-title"><?php echo $title_au; ?></h2>
            <?php endif; ?>
            <?php if ( $text_au = get_field('text_au') ) : ?>
                <div class="entry-content about-us-text">
                    <?php echo $text_au; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>