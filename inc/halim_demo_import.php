<?php
function halim_import_files()
{
   return array(
      array(
         'import_file_name'             => 'Demo Import 1',
         'categories'                   => array('Category 1', 'Category 2'),
         'local_import_file'            => trailingslashit(get_template_directory()) . '/demo-data/data.xml',
         'local_import_widget_file'     => trailingslashit(get_template_directory()) . '/demo-data/widgets.wie',

         'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
         'import_notice'                => __('After you import this demo, you will have to setup the slider separately.', 'your-textdomain'),
         'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
      )
   );
}
add_filter('ocdi/import_files', 'halim_import_files');
