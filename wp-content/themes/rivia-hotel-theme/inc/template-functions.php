<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rh
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rh_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'rh_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rh_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'rh_pingback_header' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/logo-admin.png'; ?>);
			height: 43px;
			width: 169px;
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
          	padding-bottom: 30px;
        }
 
		.login #nav a {
			color: #010302 !important;
		}

		.login #nav {
			display: none;
		}

		.login .wpml-login-ls {
			display: none;
		}

		.login #backtoblog {
			display: none;
		}

		body.login {
			background-color: #236192;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function digwp_disable_gutenberg($is_enabled, $post_type) {
	
	if ($post_type === 'post') return false;
	
	return $is_enabled;
	
}
add_filter('use_block_editor_for_post_type', 'digwp_disable_gutenberg', 10, 2);


// Numbered Pagination
if ( ! function_exists( 'rh_post_navigation' ) ) :
	/**
	 * Lf Post Navigation
	 */
	function rh_post_navigation() {
		?>
		<div class="nav-links">
		<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'prev_text'          => __('<i class="icon-angle-left" aria-hidden="true"></i>'),
				'next_text'          => __('<i class="icon-angle-right" aria-hidden="true"></i>')
		) );
		?>
	</div>
	<?php 
	}
endif;

function digwp_disable_gutenberg_for_homepage($is_enabled, $post) {
    // Check if the current post uses the 'homepage' template
    if ($post && (get_page_template_slug($post->ID) === 'templates/page-home.php' )) {
        return false; // Disable Gutenberg
    }
    
    return $is_enabled; // Enable Gutenberg for other templates
}

add_filter('use_block_editor_for_post', 'digwp_disable_gutenberg_for_homepage', 10, 2);

add_action('wp_dashboard_setup', 'wpse_73561_remove_all_dashboard_meta_boxes', 9999 );

function wpse_73561_remove_all_dashboard_meta_boxes() {
    global $wp_meta_boxes;
    $wp_meta_boxes['dashboard']['normal']['core'] = array();
    $wp_meta_boxes['dashboard']['side']['core'] = array();
}

function remove_dashboard_meta() {
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	remove_meta_box( 'wpa_dashboard_widget', 'dashboard', 'side');
}
	
add_action('wp_dashboard_setup', 'remove_dashboard_meta');

?>