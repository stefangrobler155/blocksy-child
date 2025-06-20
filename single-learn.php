<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-learn/learn-style.css">

<div class="learn-layout">
  <?php get_template_part('template-learn/section', 'sidebar'); ?>

  <div class="learn-content">
    <div class="learn-body">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

      <?php if (function_exists('get_field')) : ?>
        <div class="learn-summary">
          <h3>Summary</h3>
          <p><?php the_field('summary'); ?></p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
