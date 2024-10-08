<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/android-chrome-192x192.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon/safari-pinned-tab.svg" color="#5d5bd5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  
  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://linkyway.scandicweb.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<? bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description');?>">
  <meta property="og:image" content="">
  
  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="linkyway.scandicweb.com">
  <meta property="twitter:url" content="https://linkyway.scandicweb.com/">
  <meta name="twitter:title" content="<? bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php bloginfo('description');?>">
  <meta name="twitter:image" content="">

  <meta name="description" content="<?php bloginfo('description');?>">

  <?php wp_head(); ?>

  <title><? bloginfo('name'); ?></title>

</head>
<body>
<div class="wrapper">
  <header class="header">
    <div class="container">
      <div class="header__wrap">
        <div class="header__logo" href="#">
          <?php the_custom_logo(); ?>
        </div>
        <nav class="header__nav_list">
        <?php 
          wp_nav_menu( [
            'theme_location'  => 'header',
            'container'       => false,
            'menu_class'      => 'nav_list__ul',
            'menu_id'         => false,
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ] );
        ?>
        </nav>
        <button class="header__menu">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/menu.svg" alt="<?php echo get_template_directory_uri(); ?>/img-menu">
        </button>
        <nav class="header__nav_list_mob">
          <div class="nav_list_mob__head">
            <div class="nav_list_mob__logo">
              <?php dynamic_sidebar( 'footer_area_one' ); ?>
            </div>
            <button class="nav_list_mob__close_btn">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/icon/close-menu-white.svg" alt="<?php echo get_template_directory_uri(); ?>/img-close">
            </button>
          </div>
          <?php 
            wp_nav_menu( [
              'theme_location'  => 'header',
              'container'       => false,
              'menu_class'      => '',
              'menu_id'         => false,
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ] );
          ?>
        </nav>
      </div>
    </div>
  </header>