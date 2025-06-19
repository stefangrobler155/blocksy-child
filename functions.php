<?php
/**
 * Functions for the Blocksy Child Theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
function blocksy_child_enqueue_styles() {
    wp_enqueue_style(
        'blocksy-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'blocksy_child_enqueue_styles', 100 );

/**
 * Enqueue GSAP and custom animation scripts
 */
function blocksy_child_enqueue_scripts() {
    // GSAP Core
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        null,
        true
    );

    // GSAP ScrollTrigger plugin
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        array('gsap'),
        null,
        true
    );

    // Your custom animation script
    wp_enqueue_script(
        'gsap-home',
        get_stylesheet_directory_uri() . '/js/gsap-home.js',
        array('gsap', 'gsap-scrolltrigger'),
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'blocksy_child_enqueue_scripts' );

function blocksy_child_register_menus() {
  register_nav_menus( array(
    'main-menu' => __( 'Main Menu', 'blocksy-child' )
  ));
}
add_action( 'after_setup_theme', 'blocksy_child_register_menus' );
