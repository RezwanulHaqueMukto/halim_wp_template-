<?php
// Template Name:About Page
get_header();
?>
<?php get_template_part('template-parts/breadcrumb') ?>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
   <div class="container">

      <div class="row">
         <div class="col-md-7">
            <div class="about">
               <?php
               if (class_exists('ACF')) {
                  $about_content = get_field('about_content_', 'option');

               ?>
                  <div class="page-title">
                     <h4><?php echo $about_content['title']; ?></h4>
                  </div>

                  <p> <?php echo $about_content['description_'] ?></p>

                  <a href="<?php echo esc_url($about_content['button_url']);   ?>" class="box-btn" target="blank"><?php echo $about_content['button_text']; ?> <i class="fa fa-angle-double-right"></i></a>
            </div>
         <?php
               }
         ?>

         </div>
         <div class="col-md-5">
            <?php
            if (class_exists('ACF')) {
               $about_feature = get_field('about_features_', 'option');

               foreach ($about_feature  as  $feature) {

            ?>
                  <div class="single_about">
                     <i class="fa fa-laptop"></i>
                     <h4><?php echo $feature['title_']; ?></h4>
                     <p> <?php echo $feature['icon']; ?> <?php echo $feature['description_']; ?> </p>
                  </div>
            <?php
               }
            }
            ?>
         </div>
      </div>
   </div>
</section>
<!-- About Area End -->
<?php get_footer(); ?>