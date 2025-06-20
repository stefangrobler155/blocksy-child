<?php
// ✅ Enqueue child theme CSS
function blocksy_child_enqueue_styles() {
  wp_enqueue_style(
    'blocksy-child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array(),
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'blocksy_child_enqueue_styles', 100);


// Register custom post type: Learn
function blocksy_child_register_learn_cpt() {
  register_post_type('learn', array(
    'labels' => array(
      'name' => 'Learn Sections',
      'singular_name' => 'Learn Section',
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'learn'),
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'page-attributes'),
    'menu_icon' => 'dashicons-welcome-learn-more',
  ));
}
add_action('init', 'blocksy_child_register_learn_cpt');

// ACF starter field registration (optional)
if (function_exists('acf_add_local_field_group')) {
  acf_add_local_field_group(array(
    'key' => 'group_learn_extra',
    'title' => 'Learn Section Extras',
    'fields' => array(
      array(
        'key' => 'field_learn_summary',
        'label' => 'Summary',
        'name' => 'summary',
        'type' => 'textarea',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'learn',
        ),
      ),
    ),
  ));
}
?>
