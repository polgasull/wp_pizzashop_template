<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
  <div class="container">
    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="site-logo">
      </a>
    </div>
    <div class="info-header">
      <div class="social-media">
        <?php
          $args = array(
            'theme_location' => 'social-media',
            'container' => 'nav',
            'container_class' => 'social-media-nav',
            'link_before' => '<span class="sr-text">',
            'link_after' => '</span>'
          );
          wp_nav_menu($args);
        ?>
      </div>
      <div class="address">
        <p> 685 Woodstock Drive, 91731, California </p>
        <p> Telephone: 626-456-0865 </p>
      </div>
    </div>
  </div>
</header>

<div class="main-menu">
  <div class="container">
    <?php 
      $args = array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class' => 'site-menu',
        'container_id' => 'menu'
      );
      wp_nav_menu($args);
    ?>
  </div>
</div>
