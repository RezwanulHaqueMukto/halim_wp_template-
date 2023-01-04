<?php
function halim_setups()
{
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails', array('post', 'sliders', 'services', 'teams', 'testimonials', 'portfolios', 'gallery'));
   load_theme_textdomain('halim', get_template_directory() . '/languages');
   // register menu
   register_nav_menus(array(
      'primary-menu' => __('Primary Menu', 'halim')

   ));
   // 	$defaults = array(
   // 	'height'               => 100,
   // 	'width'                => 400,
   // 	'flex-height'          => true,
   // 	'flex-width'           => true,
   // 	'header-text'          => array( 'site-title', 'site-description' ),
   // 	'unlink-homepage-logo' => true, 
   // );
   // add_theme_support( 'custom-logo', $defaults );
   add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'halim_setups');
