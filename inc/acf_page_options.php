<?php
if (function_exists('acf_add_options_page')) {

   acf_add_options_page(array(
      'page_title'    => 'Halim Options', 'halim',
      'menu_title'    => 'Halim Options', 'halim',
      'menu_slug'     => 'halim-options',
      'capability'    => 'edit_posts',
      'redirect'      => false
   ));

   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'halim-options',
   ));

   // acf_add_options_sub_page(array(
   //    'page_title'    => 'Halim Footer Settings',
   //    'menu_title'    => 'Footer',
   //    'parent_slug'   => 'halim-options',
   // ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim About Settings', 'halim',
      'menu_title'    => 'About', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Service', 'halim',
      'menu_title'    => 'Service', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Team', 'halim',
      'menu_title'    => 'Team', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Testimonial', 'halim',
      'menu_title'    => 'Testimonial', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim News', 'halim',
      'menu_title'    => 'News', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Faq and Skills', 'halim',
      'menu_title'    => 'Halim Faq and Skills', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Cta settings', 'halim',
      'menu_title'    => 'Halim Cta settings', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Footer settings', 'halim',
      'menu_title'    => 'Halim Footer', 'halim',
      'parent_slug'   => 'halim-options',
   ));
   acf_add_options_sub_page(array(
      'page_title'    => 'Halim Contact link', 'halim',
      'menu_title'    => 'contact link', 'halim',
      'parent_slug'   => 'halim-options',
   ));
}
?>
<?php
function acf_css()
{

?>
   <style>
      .header-top {
         background-color: <?php the_field('header_color', 'option'); ?>;
      }
   </style>
<?php
}
add_action('wp_head', 'acf_css');

?>