<?php

error_reporting(E_ALL);

show_admin_bar(false);

if(!defined('THEME_URL'))
	define('THEME_URL', get_bloginfo('template_directory'));

//	fix db after server move
//require_once( TEMPLATEPATH.'/library/includes/mysql-replace.php' );
//MySQL_Replace::replace('old', 'new');

//	dependicies
require_once( TEMPLATEPATH.'/library/includes/wp-header-remove.php' );

//	menus
register_nav_menus( array(
	'main-nav' => 'Main Navigation'
) );

//	post thumbnails
add_theme_support( 'post-thumbnails' );

//GForms Dropbox SSL Filter
add_filter( 'gform_dropbox_ssl_compatibility', '__return_true' );

/* Google Analytics Settings Code */
$google_analytics_setting = new google_analytics_setting();
class google_analytics_setting {

    function google_analytics_setting() {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }

    function register_fields() {
        register_setting( 'general', 'google_analytics_code', '' );
        add_settings_field( 'fav_color', '<label for="google_analytics_code">' . __( 'Google Analytics Code' , 'google_analytics_code' ).'</label>' , array( &$this, 'fields_html' ) , 'general' );
    }

    function fields_html() {
        $value = get_option( 'google_analytics_code', '' );
        echo '<textarea rows="7" id="google_analytics_code" name="google_analytics_code" style="width: 100%;">' . $value . '</textarea>';
    }

}

/* Print Within WP Head */
add_action( 'wp_head', 'google_head' );
function google_head() {
	/* Google Analytics */ 
	if ( get_option( 'google_analytics_code' ) != FALSE ) { 
		echo get_option( 'google_analytics_code', '' );
	}
}

#	UCF Scripts
########################################################

/**
 * Is login or register page
 * @author umbrovskis
 * @authorlink http://umbrovskis.com 
 */
function smc_is_login_page() {
    return in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) );
}

#	Scripts
########################################################
add_action( 'wp_print_scripts', 'spry_print_scripts' );

function spry_print_scripts() {
	
	if( is_admin() )
		return false;
	
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'lib', THEME_URL.'/library/js/lib.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'lib' );
	wp_register_script( 'infobubble', THEME_URL.'/library/js/infobubble.js', array( 'jquery' ), '' );

	/* Localize */
	wp_localize_script( 'lib', 'SPRY', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'siteurl' => get_option('siteurl'),
		'themeUrl' => THEME_URL
	) );

	if ( !smc_is_login_page() ) {
		wp_enqueue_script( 'ucfhb', '//universityheader.ucf.edu/bar/js/university-header.js', array( 'jquery' ) );
	}

}

#	General Functions
########################################################

//custom length excerpt
function my_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
  } else {
	$excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// Add Shortcode
function links_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'a' => '#',
			'b' => '',
			'c' => '#',
			'd' => ''
		), $atts )
	);
	
	return '<div class="cm-job-links"><a class="first-link" href="'.$a.'">'.$b.'<span>VIEW JOB OPENINGS IN</span></a><a class="second-link" href="'.$c.'">'.$d.'<span>VIEW JOB OPENINGS IN</span></a></div>';
	
}
add_shortcode( 'job_links', 'links_shortcode' );