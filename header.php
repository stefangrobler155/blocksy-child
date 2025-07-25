<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="site-header">
    <h1><a href="<?php echo home_url(); ?>">Crescent Law Firm</a></h1>
    <nav>
      <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
    </nav>
  </div>
</header>
