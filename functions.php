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
    // Load parent theme style
    wp_enqueue_style(
        'blocksy-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Load child theme style
    wp_enqueue_style(
        'blocksy-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('blocksy-parent-style')
    );
}
add_action( 'wp_enqueue_scripts', 'blocksy_child_enqueue_styles' );

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
