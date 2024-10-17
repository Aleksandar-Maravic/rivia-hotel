<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <meta name="theme-color" content="#f32b2d">
</head>

<?php
    $logo = get_template_directory_uri() . '/assets/images/logo.svg';
?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <?php if ( $song = get_field('song', 'option') ) : ?>
                    <audio loop playsinline class="js-audio">
                        <source src="<?php echo $song['url']; ?>" type="audio/mp3">
                    </audio>
                    <div class="site-header-play-wrapper">
                        <span class="icon-volume-off js-play"></span>
                        <span class="icon-volume-on js-pause"></span>
                    </div>
                <?php endif; ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" class="site-header-logo"><?php echo file_get_contents($logo); ?></a>
                <a href="javascript:;" class="btn-primary">Contact Us</a>
            </div>
        </div>
    </header>
<!-- #masthead -->