<?php

function pizzashop_setup() {
  add_theme_support('post-thumbnails');

  /** Custom image sizes */
  add_image_size('about_us', 437, 291, true);
  add_image_size('specialties', 768, 515, true);
  add_image_size('portrait_specialties', 435, 526, true);
}
add_action('after_setup_theme', 'pizzashop_setup');

/** CSS & JS */

function pizzashop_menus() {
  register_nav_menus(array(
    'header-menu' => 'Header Menu',
    'social-media' => 'Social Media'
  ));
}

add_action('init', 'pizzashop_menus');

function pizzashop_styles() {
  // sheet styles
  wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
  wp_enqueue_style('slicknavCSS', get_template_directory_uri().'/css/slicknav.css', array(), '1.0.1');
  wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
  wp_enqueue_style('header', get_template_directory_uri().'/css/header.css', array(), '1.0.1');
  wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css', array(), '1.0.1');
  wp_enqueue_style('menus', get_template_directory_uri().'/css/menus.css', array(), '1.0.1');
  wp_enqueue_style('pages', get_template_directory_uri().'/css/pages.css', array(), '1.0.1');
  wp_enqueue_style('blog', get_template_directory_uri().'/css/blog.css', array(), '1.0.1');
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
  wp_enqueue_script('slicknavJS', get_template_directory_uri().'/js/jquery.slicknav.js', array('jquery'), '1.0.10', true);
  wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'pizzashop_styles');