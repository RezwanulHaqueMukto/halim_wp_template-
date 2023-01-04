<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <title>Halim | Onepage Multipurpose Website</title> -->

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <section class="header-top">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="header-left">

                  <?php
                  if (get_field('email', 'option')) {
                     $email = get_field('email', 'option');
                  ?>
                     <a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope"></i> <?php echo $email; ?></a>
                  <?php } ?>
                  <?php
                  if (get_field('phone', 'option')) {
                     $phone = get_field('phone', 'option');
                  ?>
                     <a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone"></i> <?php echo $phone; ?></a>
                  <?php
                  }
                  ?>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
               <div class="header-social">
                  <?php
                  $socials = get_field('header_social', 'option');
                  // print_r($socials);
                  foreach ($socials as $social) {
                  ?>
                     <a href=" <?php echo $social['link']; ?>"><i class="fa <?php echo  $social['icon']; ?>"></i></a>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Header Area Start -->
   <header class="header header-fixed">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="<?php echo get_site_url() ?>">halim</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
           
                     <?php
              
                     if (has_nav_menu('primary-menu')) {
                        wp_nav_menu(array(
                           'theme_location' => 'primary-menu',
                           'menu_class' => 'navbar-nav',
                           'container_class' => 'ml-auto',
                        ));
                     } else {
                        wp_nav_menu(array(
                           'menu_class' => 'navbar-nav',
                           'container_class' => 'ml-auto',
                        ));
                     }

                     ?>
                  </div>
               </nav>

            </div>
         </div>
      </div>
   </header>

   <!-- Header Area end -->