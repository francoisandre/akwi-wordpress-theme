<?php
/** 
 * ForM@Ter child theme of aeris-wordpress-theme
 * @author epointal
 */
// if ( ! defined( 'ABSPATH' ) ) exit;
add_action ( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style ( 'parent-style', get_template_directory_uri () . '/style.css' );
}

?>