<?php
// Template Name:Services Page
get_header();
?>
<?php get_template_part('template-parts/breadcrumb') ?>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
   <div class="container">

      <div class="row">
         <?php
         $args = array(
            'post_type' => 'services',
            'posts_per_page' => 6,
            // 'category_name' => 'test',
         );
         $query = new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();
         ?>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php esc_attr(the_field('services_')); ?>"></i>
                     <h4><?php the_title(); ?> </h4>
                     <?php the_content(); ?>
                  </div>
               </div>

         <?php
            }
            wp_reset_postdata();
         }
         ?>
      </div>
   </div>
</section>
<!-- Services Area End -->
<!-- CTA Area Start -->

<!-- CTA Area End -->
<?php get_footer(); ?>