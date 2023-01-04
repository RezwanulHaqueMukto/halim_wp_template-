<?php
// Template Name:home page
get_header();

?>
<!-- Slider Area Start -->
<section class="slider-area" id="home">
   <div class="slider owl-carousel">
      <?php
      $args = array(
         'post_type' => 'sliders',
         'posts_per_page' => 4,


      );
      $query = new WP_Query($args);

      while ($query->have_posts()) {
         $query->the_post();
         //?   row code


      ?>
         <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url();  ?>')">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="slide-table">
                        <div class="slide-tablecell">

                           <h4><?php the_field('slider_subtile'); ?></h4>
                           <h2><?php the_title(); ?>
                              <p><?php the_content(); ?></p>
                              <?php
                              if (get_field('slider_btn_text')) {
                              ?>
                                 <a href="<?php esc_url(the_field('slider_btn_url')); ?>" class="box-btn " target="_blank"><?php the_field('slider_btn_text'); ?> <i class="fa fa-angle-double-right"></i></a>
                              <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <?php    } ?>
      <?php wp_reset_postdata(); ?>
   </div>
</section>
<!-- Slider Area Start -->
<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <?php
            //print_r(the_field('about_section_title', 'option'));
            if (class_exists('ACF')) {
               $about_title = get_field('about_section_title', 'option');

            ?>
               <?php
               if (class_exists('ACF')) {
               ?>
                  <h3><span><?php echo $about_title['sub_heading']; ?></span> <?php echo $about_title['heading']; ?></h3>
               <?php } ?>
         </div>
         <div class="col-md-6">
            <?php
               if (class_exists('ACF')) {
            ?>

               <p><?php echo $about_title['description_']; ?> </p>
            <?php } ?>
         </div>
      <?php
            }
      ?>
      </div>
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


                  <a href="<?php echo $about_content['button_url'] ?>" class="box-btn" target="blank"><?php echo $about_content['button_text']; ?> <i class="fa fa-angle-double-right"></i></a>
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
<!-- Choose Area End -->
<section class="choose">
   <div class="container">
      <div class="row pt-100 pb-100">
         <div class="col-md-6">
            <div class="faq">
               <div class="page-title">
                  <?php if (class_exists('ACF')) { ?>

                     <h4><?php the_field('faq_title', 'option'); ?></h4>
                  <?php } ?>
               </div>
               <div class="accordion" id="accordionExample">
                  <?php
                  if (class_exists('ACF')) {

                     $i = "0";
                     $faqs = get_field('faqs', 'options');

                     foreach ($faqs as $faqs) {
                        $i++;
                  ?>
                        <div class="card">
                           <div class="card-header" id="heading<?php echo $i;   ?>">
                              <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i;   ?>" aria-expanded="true" aria-controls="collapse<?php echo $i;   ?>">
                                    <?php echo  $faqs['title'];
                                    ?>
                                    <?php ?>
                                 </button>
                              </h5>
                           </div>

                           <div id="collapse<?php echo $i;   ?>" class="collapse <?php if ($i == 1) {
                                                                                    echo 'show';
                                                                                 } ?>" aria-labelledby="heading<?php echo $i;   ?>" data-parent="#accordionExample">
                              <div class="card-body">
                                 <?php echo $faqs['description_']; ?>
                              </div>
                           </div>
                        </div>
                  <?php
                     }
                  } ?>

               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="skills">
               <div class="page-title">
                  <?php if (class_exists('ACF')) { ?>
                     <h4><?php the_field('skills_title', 'option'); ?></h4>
                  <?php } ?>
               </div>
               <?php
               if (class_exists('ACF')) {

                  $skill = get_field('skills', 'option');
                  foreach ($skill as $skill) {


               ?>
                     <div class="single-skill">
                        <h4><?php echo $skill['title']; ?></h4>
                        <div class="progress-bar" role="progressbar" style="width:<?php echo $skill['number']; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skill['number']; ?>%</div>
                     </div>
               <?php
                  }
               }
               ?>

            </div>
         </div>
      </div>
   </div>
</section>
<!-- Choose Area End -->
<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <?php
            //print_r(the_field('about_section_title', 'option'));
            if (class_exists('ACF')) {
               $service_title = get_field('Service _section_title', 'option');

            ?>

               <h3><span><?php echo $service_title['sub_heading']; ?></span> <?php echo $service_title['heading']; ?></h3>

         </div>
         <div class="col-md-6">
            <p><?php echo $service_title['description_']; ?> </p>
         </div>
      <?php
            }
      ?>
      </div>

      <div class="row">
         <?php
         $args = array(
            'post_type' => 'services',
            'posts_per_page' => 6,
            // 'category_name' => 'test',
         );
         $query = new WP_Query($args);

         while ($query->have_posts()) {
            $query->the_post();
         ?>
            <div class="col-lg-4 col-md-6">
               <!-- Single Service -->
               <div class="single-service">
                  <?php
                  if (class_exists('ACF')) {
                  ?>
                     <i class="<?php the_field('services_') ?>"></i>
                  <?php } ?>

                  <?php
                  if (class_exists('ACF')) {
                  ?>
                     <h4><?php the_title(); ?> </h4>
                  <?php } ?>
                  <?php
                  if (class_exists('ACF')) {
                  ?>
                     <?php the_content(); ?>
                  <?php } ?>
               </div>
            </div>

         <?php
         }
         wp_reset_postdata();
         ?>
      </div>
   </div>
</section>
<!-- Services Area End -->

<!-- Counter Area End -->
<section class="counter-area">
   <div class="container-fluid">
      <div class="row">
         <?php
         $args = array(
            'post_type' => 'counters',
            'posts_per_page' => 6,

         );
         $query = new WP_Query($args);
         
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();


         ?>
               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php esc_attr(the_field('counter_icon'));  ?>"></i><span class="counter"><?php the_field('counter'); ?></span><?php the_title(); ?></span></h4>
                  </div>
               </div>

         <?php
            }
         }
         wp_reset_postdata()
         ?>
      </div>
   </div>
   </div>
</section>
<!-- Counter Area End -->
<!-- Team Area Start -->
<section class="team-area pb-100 pt-100" id="team">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <?php
            //print_r(the_field('about_section_title', 'option'));
            if (class_exists('ACF')) {
               $team_title = get_field('team_section_title', 'option');

            ?>

               <h3><span><?php echo $team_title['sub_heading']; ?></span> <?php echo $team_title['heading']; ?></h3>

         </div>
         <div class="col-md-6">
            <p><?php echo $team_title['description_']; ?> </p>
         </div>
      <?php
            }
      ?>
      </div>
      <div class="row">


         <?php
         $args = array(
            'posts_per_page' => 3,
            'post_type' => 'teams',
         );
         $query = new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();

         ?>
               <div class="col-md-4">
                  <div class="single-team">
                     <?php

                     if (has_post_thumbnail()) {

                        the_post_thumbnail();
                     ?>

                     <?php  } ?>
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_title(); ?> <span><?php the_field('team_member_job') ?></span></h4>
                           <ul>
                              <?php
                              if (get_field('facebook_link')) {
                              ?>
                                 <li><a href="<?php the_field('facebook_link') ?>" target="blank"><i class="fa fa-facebook"></i></a></li>
                              <?php } ?>
                              <?php

                              if (get_field('twitter_link')) {
                              ?>
                                 <li><a href="<?php the_field('twitter_link') ?>" target="blank"><i class="fa fa-twitter"></i></a></li>
                              <?php } ?>
                              <?php

                              if (get_field('linkedin_link')) {
                              ?>
                                 <li><a href="<?php the_field('linkedin_link') ?>" target="blank"><i class="fa fa-linkedin"></i></a></li>
                              <?php } ?>

                              <?php
                              if (get_field('google+_link')) {
                              ?>
                                 <li><a href="<?php the_field('google+_link') ?>" target="blank"><i class="fa fa-google-plus"></i></a></li>
                              <?php } ?>

                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

         <?php

            }
         }
         wp_reset_postdata()

         ?>

      </div>
   </div>
</section>
<!-- Team Area End -->

<!-- Testimonials Area Start -->
<section class="testimonial-area pb-100 pt-100" id="testimonials">
   <div class="container">
      <div class="row section-title white-section">
         <div class="col-md-6 text-right">
            <?php
            //print_r(the_field('about_section_title', 'option'));
            if (class_exists('ACF')) {
               $testimonial_title = get_field('testimonial_section_title', 'option');

            ?>

               <h3><span><?php echo $testimonial_title['sub_heading']; ?></span> <?php echo $testimonial_title['heading']; ?></h3>

         </div>
         <div class="col-md-6">
            <p><?php echo $testimonial_title['description_']; ?> </p>
         </div>
      <?php
            }
      ?>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="testimonials owl-carousel">
               <?php
               $args = array(
                  'posts_per_page' => 4,
                  'post_type' => 'testimonials',
               );


               $query = new WP_Query($args);
               if ($query->have_posts()) {
                  while ($query->have_posts()) {
                     $query->the_post();


               ?>
                     <div class="single-testimonial">
                        <div class="testi-img">
                           <?php
                           if (has_post_thumbnail()) {

                              the_post_thumbnail();
                           } ?>
                        </div>
                        <p>"<?php the_field('testimonial_description_'); ?> "</p>
                        <h4><?php the_title(); ?> <span><?php the_field('testimonial_subtitle_'); ?></span></h4>
                     </div>
               <?php
                  }
                  wp_reset_postdata();
               }
               ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Testimonilas Area End -->
<!-- Latest News Area Start -->
<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row section-title">
         <div class="col-md-6 text-right">
            <?php
            //print_r(the_field('about_section_title', 'option'));
            if (class_exists('ACF')) {
               $news_title = get_field('news_section_title', 'option');

            ?>

               <h3><span><?php echo $news_title['sub_heading']; ?></span> <?php echo $news_title['heading']; ?></h3>

         </div>
         <div class="col-md-6">
            <p><?php echo $news_title['description_']; ?> </p>
         </div>
      <?php
            }
      ?>
      </div>
      <div class="row">
         <?php
         $args = array(
            'posts_per_page' => 3,
            'post_type' => 'post'
         );

         $query =  new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();

         ?>
               <div class="col-md-4">
                  <div class="single-blog">
                     <div class="post-img" style="background-image: url( <?php the_post_thumbnail_url(); ?>) ;">
                     </div>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href="#">25 oct 2018</a></li>
                              <li><a href="#">admin</a></li>
                           </ul>
                        </div>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>

         <?php  }
            wp_reset_postdata();
         }
         ?>

      </div>
   </div>
</section>
<!-- Latest News Area End -->
<?php get_footer(); ?>