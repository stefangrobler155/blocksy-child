<?php
/**
 * Template Name: Learn Page
 * Template Post Type: page
 */

get_header();

// Enqueue the Learn stylesheet only for this template
wp_enqueue_style(
  'learn-style',
  get_stylesheet_directory_uri() . '/template-learn/learn-style.css',
  array(),
  wp_get_theme()->get('Version')
);
?>

<main class="learn-layout">
  <aside class="learn-sidebar">
    <?php get_template_part('template-learn/section', 'sidebar'); ?>
  </aside>

  <section class="learn-content">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="learn-body">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
