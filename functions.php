<?php
//? tgm
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
//?demo import
require_once get_template_directory() . '/inc/halim_demo_import.php';

//? theme supports

include_once('inc/theme_supports.php');

//? enqueue  files

include_once('inc/enqueue_assets.php');

//? sidebar

include_once('inc/sidebar.php');


// ?ACF page options

include_once('inc/acf_page_options.php');

//?  comment field change

include_once('inc/halim_comments.php');

//?  tgm plugin function

include_once('inc/halim_tgm.php');
