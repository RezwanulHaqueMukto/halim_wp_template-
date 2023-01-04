<?php get_header(); ?>

<section class="breadcumb-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="breadcumb">
               <h4><?php the_title(); ?></h4>
               <ul>
                  <li><a href="<?php echo esc_url(site_url());  ?>">Home</a></li>
                  <li><?php the_title(); ?></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="portfolio-single pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-8">
            <h2><?php the_title(); ?></h2>
            <?php if (has_post_thumbnail()) {
               the_post_thumbnail();
            } ?>
            <?php the_content(); ?>
            <div class="row">
               <div class="col-xl-12">
                  <h4>project gallery</h4>
               </div>

               <?php

               if (get_field('project_gallery')) {
                  $gallery = get_field('project_gallery');
                  // print_r($gallery);
                  foreach ($gallery as $gallery) {
               ?>


                     <div class="col-xl-4">
                        <div class="project-gallery">
                           <img src="<?php echo esc_url($gallery['url']); ?>" alt="<?php echo  $gallery['alt']; ?>">
                        </div>
                     </div>
               <?php  }
               }
               ?>


            </div>
            <br><br>
            <div class="row">
               <div class="col-xl-12">
                  <h4>project overview</h4>

                  <?php
                  if (the_field('project_video_')) {
                     the_field('project_video_');
                  }
                  ?>"
               </div>
            </div>
         </div>
         <div class="col-xl-4">
            <div class="portfolio-sidebar">
               <h4>Technology Used</h4>
               <ul>
                  <?php
                  if (get_field('project_tech')) {
                     $tech = get_field('project_tech');
                     // print_r($tech);
                     foreach ($tech as $tech) {
                  ?>
                        <li><i class="fa fa-arrow-right"></i> <?php echo $tech['tech_used']; ?></li>

                  <?php  }
                  } ?>
               </ul>
            </div>
            <div class="portfolio-sidebar">
               <h4>project features</h4>
               <ul>
                  <?php
                  if (get_field('project_feature')) {
                     $feature = get_field('project_feature');
                     // print_r($tech);
                     foreach ($feature as $feature) {
                  ?>
                        <li><i class="fa fa-arrow-right"></i> <?php echo $feature['feature_']; ?></li>

                  <?php  }
                  } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>