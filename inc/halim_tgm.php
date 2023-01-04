<?php
function halim_plugin_activation()
{
   $plugins = array(
      array(
         'name' => 'Contact Form 7',
         'slug' => 'contact-form-7',
         'required'           => true,
      ),
      array(
         'name' => 'Advance Custom Fields Font Awesome',
         'slug' => 'advanced-custom-fields-font-awesome',
         'required'           => true,
      ),
      array(
         'name' => 'Advanced Custom Fields PRO',
         'slug' => 'advanced-custom-fields-pro',
         'source' => get_template_directory() . '/plugins/advanced-custom-fields-pro.zip',
         'required'  => true,
      ),
      array(
         'name' => 'Halim Custom Post',
         'slug' => 'halim-custom-post',
         'source' => get_template_directory() . '/plugins/halim_custom_post.zip',
         'required'  => true,
      ),
   );
   $config = array(
      'id' => 'halim-plugin-active ',
      'menu' => 'Halim Plugin Activation',
      'parent_slug'  => 'themes.php',
      'has_notices'  => true,
      'dismissable'  => true,
   );
   tgmpa($plugins,   $config);
}
add_action('tgmpa_register', 'halim_plugin_activation');
