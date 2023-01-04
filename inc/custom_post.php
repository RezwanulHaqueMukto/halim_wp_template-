 <?php

// function halim_custom_post()
// {
//    //?home slider
//    $labels_slider = array(
//       'name' => __('Sliders', 'halim'),
//       'singular_name' => __('Slider', 'halim'),
//    );
//    $arg_sliders = array(
//       'labels' => $labels_slider,
//       'public' => true,
//       'show_ui' => true,
//       'show_in_rest' => true,
//       'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'author'),
//       // 'taxonomies' => array('category', 'post_tag'),
//       'menu_icon' => 'dashicons-analytics',
//    );
//    //?services
//    $labels_services = array(
//       'name' => __('Services', 'halim'),
//       'singular_name' => __('Service', 'halim'),
//    );
//    $arg_services = array(
//       'labels' => $labels_services,
//       'public' => true,
//       'show_in_rest' => true,
//       'supports' => array('title', 'editor', 'custom-fields', 'author'),
//       'menu_icon' => 'dashicons-analytics',
//    );
//    //?counters
//    $labels_counters = array(
//       'name' => __('Counters', 'halim'),
//       'singular_name' => __('Counter', 'halim'),
//    );
//    $arg_counters = array(
//       'labels' => $labels_counters,
//       'public' => true,
//       // 'show_in_rest' => true,
//       'supports' => array('title',  'custom-fields'),
//       'menu_icon' => 'dashicons-analytics',
//    );
//    //?teams
//    $labels_teams = array(
//       'name' => __('Teams', 'halim'),
//       'singular_name' => __('Team', 'halim'),
//    );
//    $arg_teams = array(
//       'labels' => $labels_teams,
//       'public' => true,
//       // 'show_in_rest' => true,
//       'supports' => array('title', 'custom-fields', 'thumbnail'),
//       'menu_icon' => 'dashicons-analytics',
//    );
//    //?testimonials
//    $labels_testimonials = array(
//       'name' => __('Testimonials', 'halim'),
//       'singular_name' => __('Testimonial', 'halim'),
//    );
//    $arg_testimonials = array(
//       'labels' => $labels_testimonials,
//       'public' => true,
//       'supports' => array('title', 'custom-fields',  'thumbnail'),
//       'menu_icon' => 'dashicons-analytics',
//    );
//    //?portfolios
//    $labels_portfolios = array(
//       'name' => __('Portfolios', 'halim'),
//       'singular_name' => __('Portfolio', 'halim'),
//    );
//    $arg_portfolios = array(
//       'labels' => $labels_portfolios,
//       'public' => true,
//       // 'show_in_rest' => true,
//       'supports' => array('title', 'custom-fields', 'thumbnail', 'editor'),
//       'menu_icon' => 'dashicons-analytics',
//    );

//    //?gallery
//    $labels_gallery = array(
//       'name' => __('Gallerys', 'halim'),
//       'singular_name' => __('Gallery', 'halim'),
//    );
//    $arg_gallery = array(
//       'labels' => $labels_gallery,
//       'public' => true,
//       // 'show_in_rest' => true,
//       'supports' => array('title', 'custom-fields', 'thumbnail'),
//       'menu_icon' => 'dashicons-analytics',
//    );
//    register_post_type('sliders', $arg_sliders);
//    register_post_type('services', $arg_services);
//    register_post_type('counters', $arg_counters);
//    register_post_type('teams', $arg_teams);
//    register_post_type('testimonials', $arg_testimonials);
//    register_post_type('portfolios', $arg_portfolios);
//    register_post_type('gallery', $arg_gallery);

//    $label_portfolio_cat = array(
//       'name' => __('Categories', 'halim'),
//       'singular_name' => __('Category', 'halim'),
//    );

//    $arg_portfolio_cat = array(
//       'labels' => $label_portfolio_cat,
//       'hierarchical'      => true,
//       'show_admin_column' => true,
//    );

//    register_taxonomy('portfolio_cat', 'portfolios', $arg_portfolio_cat);
//    unset($label_portfolio_cat);
//    unset($arg_portfolio_cat);
// }
// add_action('init', 'halim_custom_post'); 
