<?php
get_header();

?>

<?php get_template_part('template-parts/breadcrumb') ?>

<section class="blog-single pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-8">
            <h2><?php the_title(); ?></h2>
            <?php
            if (has_post_thumbnail()) {
               the_post_thumbnail();
            }
            ?>
            <?php the_content(); ?>
            <div class="comments">
       
               <?php
               if (comments_open()) {
                  comments_template();
               }

               ?>
            </div>
         </div>
         <div class="col-xl-4">
            <div class="single-sidebar">
               <?php
               if (is_active_sidebar('sidebar-1')) {
                  dynamic_sidebar('sidebar-1');
               }
               ?>
            </div>

         </div>
      </div>
</section>

<?php
get_footer();
?>