<?php
// Get the "Introduction" post
$intro = get_page_by_title('Introduction', OBJECT, 'learn');

if ($intro) {
    wp_redirect(get_permalink($intro));
    exit;
}

get_header(); ?>

<div class="container">
  <h1>Learn</h1>
  <p>No "Introduction" post found. Please add one under Learn Sections.</p>
</div>

<?php get_footer(); ?>
