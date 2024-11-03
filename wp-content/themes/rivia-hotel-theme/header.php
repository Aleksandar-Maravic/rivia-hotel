<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <meta name="theme-color" content="#236192">
</head>

<?php
    $logo = get_template_directory_uri() . '/assets/images/logo.svg';
?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">
    <div class="contact-form-wrapper">
        <div class="contact-form-wrapper-inner">
            <div class="js-close-form">
                <span></span>
                <span></span>
            </div>
            <?php echo do_shortcode(get_field('form_shortcode')); ?>
            <a href="javascript:;" class="btn-primary js-fake-submit"><?php _e('Pošalji', 'rivia-hotel'); ?><img src="<?php echo get_template_directory_uri() . '/assets/images/cta-bg.png'; ?>" alt="cta img" class="btn-primary-img"></a>
        </div>
    </div>
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="site-header-left">
                    <div class="site-header-lng">
                        <?php echo do_action('wpml_add_language_selector'); ?>
                    </div>
                    <?php if ( $song = get_field('song', 'option') ) : ?>
                        <audio loop playsinline class="js-audio">
                            <source src="<?php echo $song['url']; ?>" type="audio/mp3">
                        </audio>
                        <div class="site-header-play-wrapper">
                            <span class="icon-volume-off js-play"></span>
                            <span class="icon-volume-on js-pause"></span>
                        </div>
                    <?php endif; ?>
                </div>
                <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" class="site-header-logo"><?php echo file_get_contents($logo); ?></a>
                <a href="javascript:;" class="js-open-contact-form btn-primary"><?php _e('Kontakt', 'rivia-hotel'); ?><img src="<?php echo get_template_directory_uri() . '/assets/images/cta-bg.png'; ?>" alt="cta img" class="btn-primary-img"></a>
            </div>
        </div>
    </header>
<!-- #masthead -->