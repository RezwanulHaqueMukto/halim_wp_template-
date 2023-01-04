<?php
// Template Name:Contact Page
get_header();
?>
<?php get_template_part('template-parts/breadcrumb') ?>

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="row text-center">
               <?php
               if (class_exists('ACF')) {
                  $contact = get_field('contact_link', 'option');

                  foreach ($contact as $contact) {


               ?>

                     <div class="col-md-4">
                        <div class="contact-address">

                           <i class="fa <?php echo esc_attr($contact['icon']); ?>"></i>
                           <h4><?php echo  $contact['contact_title'] ?> <span><?php echo $contact['contact_description_']; ?></span></h4>
                        </div>
                     </div>
                  <?php } ?>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <div class="row">
                        <?php
                        echo do_shortcode('[contact-form-7 id="531" title="Contact form 1"]');
                        ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="google-map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5785846.583418618!2d-90.75907970166762!3d44.9208869696666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d4caa3dc7ca0411%3A0x97dd48597a62c9b3!2sMichigan%2C+USA!5e0!3m2!1sen!2sbd!4v1540614431885"></iframe>
                  </div>

               </div>
            <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Contact Us Area End -->
<?php get_footer(); ?>