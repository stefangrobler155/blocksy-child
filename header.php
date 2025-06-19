<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container header-inner">
    <div class="site-branding">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        <?php bloginfo('name'); ?>
      </a>
    </div>

    <nav class="main-navigation">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'main-menu',
          'menu_class'     => 'nav-menu',
          'container'      => false,
        ) );
      ?>
    </nav>

    <button class="mobile-toggle" aria-label="Toggle Menu">
      ☰
    </button>
  </div>
</header>
