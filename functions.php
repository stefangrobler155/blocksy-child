<?php
function crescent_law_enqueue_styles() {
  // Load parent theme CSS first
  wp_enqueue_style(
    'blocksy-parent-style',
    get_template_directory_uri() . '/style.css'
  );

  // Then load child theme CSS
  wp_enqueue_style(
    'crescent-law-child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('blocksy-parent-style'),
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'crescent_law_enqueue_styles');
