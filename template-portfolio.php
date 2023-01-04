<?php
// Template Name:Portfolio Page
get_header();
?>

<?php get_template_part('template-parts/breadcrumb') ?>

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="portfolio-menu mb-40 text-center">
               <?php
               $cats = get_terms('portfolio_cat');

               ?>

               <button class="active" data-filter="*">ALL</button>
               <?php
               // print_r($cats);
               foreach ($cats as $cats) {
               ?>
                  <button data-filter=".<?php echo $cats->slug; ?>" class=""> <?php echo $cats->name; ?></button>
               <?php    } ?>

            </div>
         </div>
      </div>

      <div class="row grid no-gutters">
         <?php
         $args = array(
            'post_type' => 'portfolios',
            'post_per_page' => 10
         );
         $query = new WP_Query($args);
         if (have_posts()) {

            while ($query->have_posts()) {
               $query->the_post();
         ?>
               <div class="col-md-4 grid-item 
               <?php
               $port_cat = get_the_terms(get_the_ID(), 'portfolio_cat');
               foreach ($port_cat as $cat) {
                  echo $cat->slug . ' ';
               }
               ?>
            ">

                  <div class="single-portfolio">
                     <?php
                     if (has_post_thumbnail()) {
                        the_post_thumbnail();
                     }
                     ?>

                     <div class="portfolio-hover">
                        <div class="portfolio-content">
                           <h3><a href="<?php the_permalink(); ?>" class=""><i class="fa fa-link"></i> <?php the_title(); ?> <span><?php the_field('designation_'); ?></span></a></h3>
                        </div>
                     </div>
                  </div>
               </div>
         <?php }
         }
         wp_reset_postdata()
         ?>
      </div>
   </div>
</section>
<!-- projectss Area End -->

<?php get_footer(); ?>