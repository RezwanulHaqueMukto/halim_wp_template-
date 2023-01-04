<?php
// Template Name:Gallery Page
get_header();
?>
<?php get_template_part('template-parts/breadcrumb') ?>

<section class="gallery-area pt-100 pb-100">
   <div class="container">
      <div class="row">
         <?php
         $args = array(
            'post_type' => 'gallery',
            'post_per_page' => 15,
         );
         $query = new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();

         ?>

               <div class="col-xl-4">
                  <div class="single-gallery">

                     <img src=" <?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php the_field('big_image'); ?>" class="gallery"><i class="fa fa-plus"></i> item name</a></h3>
                        </div>
                     </div>
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


<?php get_footer(); ?>