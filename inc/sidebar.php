<?php
//  Add a sidebar.
function halim_sidebar()
{
   register_sidebar(array(
      'name'          => __('Main Sidebar', 'halim'),
      'id'            => 'sidebar-1',
      'description'   => __('Widgets in this area will be shown on all posts and pages.', 'halim'),
      'before_widget' => '<div class="single-sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
   ));
   register_sidebar(array(
      'name'          => __('Footer-1', 'halim'),
      'id'            => 'footer-1',
      'description'   => __('Widgets in this area will be shown on all posts and pages.', 'halim'),
      'before_widget' => '<div class="single-footer footer-logo">',
      'after_widget'  => '</div>',
   ));
   register_sidebar(array(
      'name'          => __('Footer-2', 'halim'),
      'id'            => 'footer-2',
      'description'   => __('Widgets in this area will be shown on all posts and pages.', 'halim'),
      'before_widget' => '<div class="single-footer">',
      'after_widget'  => '</div>',
   ));
   register_sidebar(array(
      'name'          => __('Footer-3', 'halim'),
      'id'            => 'footer-3',
      'description'   => __('Widgets in this area will be shown on all posts and pages.', 'halim'),
      'before_widget' => '<div class="single-footer">',
      'after_widget'  => '</div>',
   ));
}
add_action('widgets_init', 'halim_sidebar');
